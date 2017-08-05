<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{

    public function index() {

    	return view('posts.index');

    }

    public function show() {

    	return view('posts.show');

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

    	// $post = new Post;

    	// $post->title = request('title');

    	// $post->body = request('body');

    	//you can also perform following

    	Post::create(request(['title','body']));

    	//save it to the database

    	// $post->save();

    	//redirect to home
    	
    	return redirect('/');
    	
    }
}
