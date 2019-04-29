<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Snippet;
use Illuminate\Support\Facades\DB;

class SnippetsController extends Controller
{
    //
    public function index(){

        $snippets = \App\Snippets::all();
        //return $snippets;
        return view('snippets.index', ['snippets' => $snippets]);
    }

    public function singlePost(){
        $snippets = \App\Snippets::all();
        return view('snippets.single');
    }

    public function create(){
        $snippets = \App\Snippets::all();
        return view('snippets.create');
    }

    public function show($id){

        //connects to snippets/{id} 
        $snippets = Snippet::find($id);
        dump($snippets);
     
    
        
       return view('snippets.show', compact('snippets'));

    }
}
