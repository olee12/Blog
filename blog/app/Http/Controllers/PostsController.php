<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\User;


class PostsController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function index()
    {
        $posts = Post::orderBy('created_at','dest')->get();
        //$posts = Post::latest()->get();

    	return view('posts.index',compact('posts'));
    }

    public function show(Post $post)
    {
       // $post = Post::find($id);
        return view('posts.show',compact('post'));
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

        $this->validate(request(),[
            'title' => 'required',
            'body' =>'required'

        ]);
      //  echo auth()->id();+

        auth()->user()->publish(new Post(request(['title','body'])));


        return redirect('/');
    }
}
