<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
        public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
    {
         {
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);  
    }
    }
    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
     //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }
    
    public function create()
    {
        return view('posts.create');
    }
}
