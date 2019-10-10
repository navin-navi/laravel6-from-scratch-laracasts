<?php

namespace App\Http\Controllers;

class PostsController
{
    public function show($posts) {
        $slug = "my-first-post";
        $post = \DB::table('posts')->where('slug', "firstPost")->first();

        dd($post);

        if (! array_key_exists($post, $posts)) {
            abort(404, "Sorry, that post was not found!!");
        }

        return view('post', ['post' => $posts[$post] ?? "Nothing here yet!!"]);
    }
}

// Created the file manually
