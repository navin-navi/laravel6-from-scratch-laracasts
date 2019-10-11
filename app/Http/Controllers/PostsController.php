<?php

namespace App\Http\Controllers;

use DB;
use App\Post;

class PostsController
{
    public function show($slug) {

        // DB is a global Class - without use DB;
        // $post = \DB::table('posts')->where('slug', $slug)->first();

        // Using use DB;
        // $post = DB::table('posts')->where('slug', $slug)->first();

        // Using use App\Post;
        $post = Post::where('slug', $slug)->firstOrFail();

        if (! $post) {
            abort(404, "Sorry, that post was not found!!");
        }

        return view('post', ['post' => $post]);
    }
}

// Created the file manually
