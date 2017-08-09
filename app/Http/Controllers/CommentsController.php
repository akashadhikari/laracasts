<?php

namespace App\Http\Controllers;

use App\Post;

use App\Comment;

use Illuminate\Http\Request;

class CommentsController extends Controller

{
    public function store(Post $post) {

    	$post->addComment(request('body'));

    	return back();

    }
}
