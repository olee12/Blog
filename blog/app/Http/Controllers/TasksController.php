<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    
    public function olee()
    {
    	//return "hello world";
    	return view('posts.index');
    }
}
