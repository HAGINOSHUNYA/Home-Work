<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', function () {
    return view('welcome');
});

//一覧ページ
Route::get('/index',[PageController::class,'index'])->name('page.index');

//新規登録ページ
Route::get('/create',[PageController::class,'create'])->name('page.create');

//登録機能POSTにする
Route::post('/store',[PageController::class,'store'])->name('page.store');

//登録完了ページ
Route::post('/show',[PageController::class,'show'])->name('page.show');

//編集ページ
Route::get('/edit/{book}',[PageController::class,'edit'])->name('page.edit');

//編集機能メソッドPUT(全体的な更新)かPATCH（部分的な更新）にする
Route::patch('/update/{book}',[PageController::class,'update'])->name('page.update');

//削除確認ページ
Route::get('/delete_k/{book}',[PageController::class,'delete_k'])->name('page.delete_k');

//flash文ページ
Route::get('/flash',[PageController::class,'flash'])->name('page.flash');

//削除機能
Route::delete('/delete/{book}',[PageController::class,'delete'])->name('page.delete');

//一覧ページ
Route::get('/sanple',[PageController::class,'sanple'])->name('page.sanple');

//一覧ページ
Route::get('/sample_create',[PageController::class,'sample_create'])->name('page.sample_create');