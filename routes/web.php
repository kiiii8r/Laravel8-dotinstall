<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
//記述することで紐付けの際の省略ができる

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

Route::get('/', [PostController::class, 'index'])
    //PostControllerとindexの紐付け
    ->name('posts.index');
//ルーティングに名前を指定することで、web.phpでのみurl変更を行えば、全てに影響させることができ、変更に強いコードになる。

Route::get('/posts/{id}', [PostController::class, 'show'])
    ->name('posts.show');