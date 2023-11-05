<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 use App\Models\Post;


class PostController extends Controller
{
    public function index() {
         // productsテーブルからすべてのデータを取得し、変数$postsに代入する
         $posts = DB::table('posts')->get();
 
        // 変数$nameをindex.blade.phpファイルに渡す
        return view('posts.index', compact('posts'));   
    } 

    
}
