<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use Carbon\Carbon;

class PostsController extends Controller

{

    public function __construct() {

        // setting up a constructor function for auth middleware EXCEPT index and show methods

        $this->middleware('auth')->except(['index', 'show']);

    }


    public function index() {

        // all posts sorting latest

        $posts = Post::latest();

        // if we have request month and year -- use CARBON to convert number into month name

        if($month = request('month')) {

            $posts->whereMonth('created_at', Carbon::parse($month)->month);

        }

        if ($year = request('year')) {

            $posts->whereYear('created_at', $year);

        }

        $posts = $posts->get();

        // archives raw query

        $archives = Post::archives();

        // $posts = Post::orderBy('created_at', 'desc')->get();

    	return view('posts.index', compact('posts'));

    }

    public function show(Post $post) {

        // ROUTE MODEL BINDING for specific post 

        // make sure to keep the variable name identical to route id -- here its /posts/{post}

    	return view('posts.show', compact('post'));

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

    	// create a new post by user_id using the request data

    	Post::create([

            'title' => request('title'),

            'body' => request('body'),

            'user_id' => auth()->id()
            
            ]);

    	// redirect to home
    	
    	return redirect('/');
    	
    }
}
