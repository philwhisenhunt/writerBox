<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class SnippetsController extends Controller
{
    //
    public function index(){

        $snippets = \App\Snippets::all();
        return $snippets;
        return view('snippets.index', ['snippets' => $projects]);
    }
}
