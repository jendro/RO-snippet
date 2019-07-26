<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use App\Model\Framework;
use App\Model\Snippet;
use App\Model\Tag;
use App\Model\SnippetTag;

class SnippetController extends Controller
{

    private $contributor;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add(Request $request)
    {
        return view('user.snippet.form',[
            'title'=>'Add Snippet',
            'framework_r'=>Framework::orderBy('framework')->get()
        ]);
    }

    public function create(Request $request)
    {
        $snippet = Snippet::create($request->all());
        if($snippet){
            $tags = array_filter(explode(",",$request->tag));
            foreach($tags as $tag){
                $data_tag = Tag::firstOrCreate(['tag'=>$tag]);
                $snippet->tags()->create(['tag_id'=>$data_tag->id]);
            }
            return redirect()->route('snippet.detail',[
                'contributor'=>$snippet->contributor_id,
                'snippet'=>$snippet->id
            ]);

        }else{
            return redirect()->back()->withInput($request->all());
        }
    }

    public function edit(Snippet $snippet)
    {
        if($this->authorize('update', $snippet)){
            return view('user.snippet.form-edit',[
                'title'=>'Edit Snippet: '.$snippet->title,
                'snippet'=>$snippet,
                'framework_r'=>Framework::orderBy('framework')->get()
            ]);
        }else{
            return redirect()->route('home');
        }
    }

    public function update(Request $request, Snippet $snippet)
    {
        if($this->authorize('update', $snippet)){
            $snippet->update(
                $request->only(
                    'framework_id',
                    'title',
                    'description',
                    'code'
                )
            );
            $tags = array_filter(explode(",",$request->tag)); //new tag
            $snippetTag = $snippet->tags(); //old tag
            $currentTag = [];  //list tag exist
            foreach($tags as $tag){
                $dataTag = Tag::firstOrCreate(['tag'=>trim($tag)]);
                $snippet->tags()->firstOrCreate(['tag_id'=>$dataTag->id]);
                $currentTag[] = $dataTag->id; //add tag exist
            }
            $notExists = $snippet->tags()->whereNotIn('tag_id',$currentTag)->get(); //check old tag not exist
            $notExists->each->delete(); //deleting all not exist tag
            return redirect()->route('snippet.detail',[
                'contributor'=>$snippet->contributor_id,
                'snippet'=>$snippet->id
            ]);
        }else{
            return redirect()->route('home');
        }
    }

    public function destroy(Snippet $snippet)
    {
        if($this->authorize('destroy', $snippet)){
            $snippet->stars->each->delete();//delete star
            $snippet->komentar->each->delete();//delete komentar
            $snippet->tags->each->delete();//delete tag
            $snippet->delete();
            return redirect()->back();
        }else{
            return redirect()->route('home');
        }
    }

}