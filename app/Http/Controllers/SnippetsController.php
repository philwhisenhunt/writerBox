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

    public function show(){

        $snippets = Snippet::all();
        //dump($snippets[0]);
       // $snippets = [1,2,3,4,5];
       // return $snippets;
        // $snippet = DB::findOrFail($id);
        // return $snippet;
       
        /*
       $theData = DB::table('users')->get();
       $stats = cache()->get('stats');
       dump($stats);
       */
    
        
       return view('snippets.post', ['snippets' => $snippets]);

    }
}
