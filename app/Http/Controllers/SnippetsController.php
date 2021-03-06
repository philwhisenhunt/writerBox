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
        // $snippets = \App\Snippets::all();
        echo "hi"; die();
        $snippet = new Snippet();
        $snippet->title = request('title');
        $snippet->full_entry = request('body-of-snippet');
        $snippet->save();

        return redirect('/create');
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

    public function destroy($id){
        $snippets = \App\Snippet::all()->where('id', $id);
        // return view('snippets.single', ['snippets' => $snippets]);
        // DB::table('users')->where('votes', '>', 100)->delete();
        DB::table('snippets')->where('id', '=', $id)->delete();
        return "It was done, $id is gone.";
        //needs to have a warning before deleting
    }

    public function store(){
        // $snippet = new Snippet;
        
        // Snippet::create([
        //     // 'id' => bigIncrements('id'), //but where does the id come from?
        //     //The table is set to autoincrement. 
        //     'title'=>request('title'),
        //     'full_entry'=>request('body-of-snippet'),

        // ]);

        // return back();
        return request('title')->save();
    }

    public function make(){
        
        return view('snippets.create');
    }
}
