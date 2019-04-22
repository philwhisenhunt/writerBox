<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

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

    public function post(){
        //the post data is received and assigned to a variable and posted to the database
       // $theData = sql query here ;
       //return a single post
       return view('snippets.post');

    }
}
