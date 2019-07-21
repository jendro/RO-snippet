<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Framework;
use App\Model\Snippet;

class SnippetController extends Controller
{


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

}
