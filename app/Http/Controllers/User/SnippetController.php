<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use App\Model\Framework;
use App\Model\Snippet;

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
            'framework_r'=>Framework::orderBy('framework')->get()
        ]);
    }

    public function create(Request $request)
    {
        $data = Snippet::create($request->all());
        if($data){
            return redirect()->route('snippet.detail',[
                'contributor'=>$data->contributor_id,
                'snippet'=>$data->id
            ]);
        }else{
            return redirect()->back()->withInput($request->all());
        }
    }

    public function edit(Snippet $snippet)
    {
        if(!Auth::user()->authorization($snippet->contributor)){
            return redirect()->route('home');
        }else{
            return view('user.snippet.form-edit',[
                'snippet'=>$snippet,
                'framework_r'=>Framework::orderBy('framework')->get()
            ]);
        }
    }

    public function update(Request $request, Snippet $snippet)
    {
        if(!Auth::user()->authorization($snippet->contributor)){
            return redirect()->route('home');
        }else{
            $snippet->update($request->only('framework_id','title','description','code'));
            return redirect()->back();
        }
    }

    public function destroy(Snippet $snippet)
    {
        if(!Auth::user()->authorization($snippet->contributor)){
            return redirect()->route('home');
        }else{

            //TODO :: mungkin dipindah dimanaa gitu biar rapi, entahlah belum ada ide, apa event atau apa??
            //delete star
            foreach($snippet->stars as $star){
                $star->delete();
            }
            //delete komentar
            foreach($snippet->komentar as $komentar){
                $komentar->delete();
            }
            $snippet->delete();
            return redirect()->back();
        }
    }

}
