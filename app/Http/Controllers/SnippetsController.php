<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Snippet;
use Illuminate\Support\Facades\DB;

class SnippetsController extends Controller
{
    //
    public function index(){

        die("hello");
        $snippets = \App\Snippets::all();
        //return $snippets;
        return view('snippets.index', ['snippets' => $snippets]);
    }

    public function singlePost(){
        $snippets = \App\Snippets::all();
        return view('snippets.single');
    }

    public function create(){
        //$snippets = \App\Snippets::all();
        return view('snippets.create');
    }

    public function show($id){

        //connects to snippets/{id} 
        //return($slug);
        $snippet = Snippet::find($id);
        //dump($snippets);
     
    
        
       return view('snippets.show', compact('snippet'));

    }

    public function edit($id){
        $snippet = Snippet::findOrFail($id);

        return view('snippets.edit', compact('snippet'));
    }
}
