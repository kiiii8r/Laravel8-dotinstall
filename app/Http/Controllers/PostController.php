<?php

namespace App\Http\Controllers; //viewで参照に必要

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $posts = [
        'Title A',
        'Title B',
        'Title C',
    ];

    public function index() //インデックスで参照する
    {
        return view('index')
            ->with(['posts' => $this->posts]);
        // 変数postsをpostsとしてindexに送る記述
    }

    public function show($id)
    {
        return view('posts.show')
            ->with(['post' => $this->posts[$id]]);
    }
}