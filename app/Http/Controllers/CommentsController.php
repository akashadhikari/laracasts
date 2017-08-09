<?php

namespace App\Http\Controllers;

use App\Post;

use App\Comment;

use Illuminate\Http\Request;

class CommentsController extends Controller

{
    public function store(Post $post) {

    	$this->validate(request(), [

    		'body' => 'required|min:2'
    		
    		]);

    	// addComment is defined in the Post model

    	$post->addComment(request('body'));

    	return back();

    }
}
