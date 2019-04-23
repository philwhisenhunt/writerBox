<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
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

    public function post(){
        //the post data is received and assigned to a variable and posted to the database
       // $theData = sql query here ;
       $theData = DB::table('users')->get();
       $stats = cache()->get('stats');
       dump($stats);
      // dump($theData);
       //return a single post
       //dd($theData[0]->name);
        
       return view('snippets.post', ['theData'=>$theData]);

    }
}
