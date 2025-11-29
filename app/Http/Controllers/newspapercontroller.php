<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\NewPaper;

class newspapercontroller extends Controller
{
    public function index()
    {
        $posts = newPaper::all();
        return view('newspaper.index', compact('posts'));
    }
}
