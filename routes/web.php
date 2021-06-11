<?php

use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class,'index'])->where('post','[A-z_\-]+');

Route::get('posts/{post:slug}',[PostController::class,'show']);


Route::get('categories/{category:slug}', function (Category $category) {
    //ddd($slug);
    return view('posts',[
        'posts'=> $category->posts,
        'currentCategory'=> $category,
        'categories'=> Category::all()
    ]);
});

Route::get('authors/{author}', function (User $author) {
    //dd($author);
    return view('posts',[
        'posts'=> $author->posts,
        'categories'=> Category::all()
    ]);
});

////test

Route::get('test/', function () {
    //ddd($slug);
    return view('test');
});
Route::get('phpinfo/', function () {
    //ddd($slug);
    return view('phpinfo');
});
