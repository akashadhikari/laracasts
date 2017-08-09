<?php

namespace App;

class Post extends Model
{
	// For MassAssignmentException

    // protected $fillable = ['title', 'body']

    // protected $guarded doesn't allow the fields to get posted

    public function comments() {

    	return $this->hasMany(Comment::class);

    }

    public function addComment($body) {

    	$this->comments()->create(compact('body'));

    }
}
