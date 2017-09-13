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

    public function user() {

        return $this->belongsTo(User::class);
    }

    public function addComment($body) {

    	// $this->comments() -- collection of all comments associated with this post

    	// $this->comments()->create() -- creates a new comment

    	$this->comments()->create(compact('body'));

    }

    public static function archives() {

        return static::selectRaw('year(created_at) as saal, monthname(created_at) as mahina, count(*) published')

        ->groupBy('saal', 'mahina')

        // RAW SQL: 'order by created_at desc' doesnt work coz we have groupBy class

        ->orderByRaw('min(created_at) desc')

        ->get()

        ->toArray();

    }
}
