<?php


use App\Article;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Default render the view
Route::get('/', function () {
    return view('welcome');
});

// Give the plain json content as an array or a html or anything without a view component
Route::get('/welcome', function () {
    return ['foo', 'road'];
});


// Render the view component with data from the request
// Example request be like "http://intro-to-laravel.test/test?name=navin-navi&script=%3Cscript%3Ealert(XSS)%3C/script%3E"
Route::get('test', function () {
    return view('test', [
        'name' => request('name'),
        'script' => request("script")
    ]);
});

// Blade Templating Tutorial
Route::get('simplework', function () {
    return view('simpleWorkHome');
});

Route::get('simplework/home', function () {
    return view('simpleWorkHome');
});

Route::get('simplework/about', function () {
    return view('simpleWorkAbout',[
        'articles' => Article::take(3)->latest()->get()
    ]);
});

Route::get('simplework/articles/{id}', 'ArticlesController@show');

// Router with wildcard

// Route::get('posts/{post}', function ($post) {
//     $posts = [
//         'my-first-post' => "Hello, this is my first blog post!",
//         'my-second-post' => 'Now I am getting hang of this blogging thing!'
//     ];

//     if (! array_key_exists($post, $posts)) {
//         abort(404, "Sorry, that post was not found!!");
//     }

//     return view('post', ['post' => $posts[$post] ?? "Nothing here yet!!"]);
// });

// Router with Controller

// Router Manually Created
Route::get('posts/{post}', 'PostsController@show');

// Router Generated Automatically with php artisan
// Route::get('posts/{post}', 'GeneratorPostsController@show');
