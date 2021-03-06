<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use App\Model\Snippet;
use App\Model\SnippetKomentar;

class SnippetKomentarController extends Controller
{

    private $contributor;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Request $request)
    {
         $this->validate($request, [
            'komentar' => 'required',
        ]);
        $data = SnippetKomentar::create($request->all());
        if($data){
            return redirect()->route('snippet.detail',[
                'contributor'=>$data->snippet->contributor_id,
                'snippet'=>$data->snippet->id
            ]);
        }else{
            return redirect()->back()->withInput($request->all());
        }
    }

    public function destroy(Snippet $snippet, SnippetKomentar $komentar)
    {
        if($this->authorize('destroy', $komentar)){
            $komentar->delete();
            return redirect()->back();
        }else{
            return redirect()->route('home');
        }
    }

}
