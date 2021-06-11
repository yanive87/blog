<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
 public function index()
 {

     //return Post::latest()->filter(request(['search']))->paginate();
     return view('posts',[

         'posts'=>Post::latest()->filter(request(['search']))->paginate(6),
         'categories'=> Category::all()
         //'posts'=> Category::latest('name')->get()
     ]);
 }
public function show(Post $post)
{
    return view('post',[
        'post'=>$post
    ]);
}

}
