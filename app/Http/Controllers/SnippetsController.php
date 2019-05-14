<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Snippet;
use Illuminate\Support\Facades\DB;

class SnippetsController extends Controller
{
    //
    public function index(){

      
        $snippets = \App\Snippet::all();
        //return $snippets;
        return view('snippets.index', ['snippets' => $snippets]);
    }

    public function singlePost($id){
        // $snippets = \App\Snippet::all();
        $snippets = \App\Snippet::all()->where('id', $id);
        // return $snippets;
         return view('snippets.single', ['snippets' => $snippets]);
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
