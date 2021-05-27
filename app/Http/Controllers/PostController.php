<?php

namespace App\Http\Controllers; //viewで参照に必要

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() //インデックスで参照する
    {
        $posts = [
            'Title A',
            'Title B',
            'Title C',
        ];

        return view('index')
            ->with(['posts' => $posts]);
        // 変数postsをpostsとしてindexに送る記述
    }
}