<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index()
    {
        //Non fluent
        //DB::select(['table'=> 'posts', 'where' => ['id'=>1]])

        //Fluent
        //DB::table('posts')->where('id',1)->get();
        // return view('posts/index');

        // $posts = DB::select('select * from posts');
        $id = 1;

        $posts = DB::table('posts')->where('id', $id)->get();
        //$posts = DB::table('posts')->where('created_at', '<' , now()->subDay())->get();
        //$posts = DB::table('posts')->whereBetween('id', [7,9])->get();
        //$posts = DB::table('posts')->orderBy('title', 'asc')->get();

        dd($posts);
    }
}
