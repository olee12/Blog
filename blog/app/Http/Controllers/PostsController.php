<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;


class PostsController extends Controller
{
    //
    public function index()
    {
    	return view('posts.index');
    }

    public function show()
    {
        return view('posts.show');
    }
    public function create()
    {
        //return "hello world";
        return view('posts.create');
    }

    public function store()
    {
        //dd(request(['title','body']));
        //dd(request('title'));
        //dd(request()->all());
        //Create a new post
       // $post = new Post;
        //$post->title = request('title');
        //$post->body = request('body');
        //$post->save();
        //Post::create(request()->all());
        Post::create(request(['title','body']));
        return redirect('/');
    }
}
