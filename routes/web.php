<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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

Route::get('/',
    function () {
//    \Illuminate\Support\Facades\DB::listen(function ($query){
//logger($query->sql,$query->bindings);
//    });
    return view('posts',[

        'posts'=> Post::latest('published_at'):wq:q->get()
    ]);
})->where('post','[A-z_\-]+');

Route::get('posts/{post:slug}', function (Post $post) {
    //ddd($slug);
    return view('post',[
        'post'=>$post
    ]);
});


Route::get('categories/{category:slug}', function (Category $category) {
    //ddd($slug);
    return view('posts',[
        'posts'=> $category->posts
    ]);
});

Route::get('authors/{author}', function (User $author) {
    //dd($author);
    return view('posts',[
        'posts'=> $author->posts
    ]);
});



Route::get('test/{post}', function ($slug) {
    //ddd($slug);
    return view('test');
});
