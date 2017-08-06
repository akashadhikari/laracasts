<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{

    public function index() {

        //all posts

        $posts = Post::all();

    	return view('posts.index')->withPosts($posts);

    }

    public function show($id) {

        //specific post with post $id

        $post = Post::find($id);

    	return view('posts.show')->withPost($post);

    }

    public function create() {

    	return view('posts.create');
    	
    }

    public function store() {

        // validating through server

        $this->validate(request(), [

            'title' => 'required',

            'body' => 'required'

            ]);

    	//create a new post using the request data

    	Post::create(request(['title','body']));

    	//redirect to home
    	
    	return redirect('/');
    	
    }
}
