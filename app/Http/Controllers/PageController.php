<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// やりとりするモデルを宣言する
use App\Models\Book;

class PageController extends Controller
{

    public function index(Request $request){
        $keyword = $request->input('keyword');

        $query = Book::query();

        if(!empty($keyword)) {//空の時にTRUEを返す
            $query->where('name', 'LIKE', "%{$keyword}%")//部分一致
                ->orWhere('address', 'LIKE', "%{$keyword}%")
                ->orWhere('age', 'LIKE', "%{$keyword}%");
        }

        $books = $query->get();

        return view('page.index', compact('books', 'keyword'));


                //$books = Book::all();//テーブルの情報をすべて習得
                //return view('page.index',compact('books')); //一覧ページの表示　変数の内容をページに渡す

    }

    public function create(){
        return view('page.create'); //登録ページの表示
    }
    
    public function store(){
        return redirect()->route('page.show');//->with('flash_message', '登録完了');
        
       // return view('page.store'); //登録機能
    }

    public function show(Request $request){//登録完了のページ表示
        $request->validate([
            'name'=>'required|string',
            'address'=>'required',
            'age'=>'required|numeric',
        ]);
        $Book = new Book();//モデルインスタンス化
        $Book->name = $request->input('name');//nameカラムにインプット
        $Book->address = $request->input('address');//
        $Book->age = $request->input('age');//
        $Book->save();//DBにセーブ
        $name = $request->name;//リクエストにあるnameの値を$nameに代入
        $address = $request->address;//
        $age = $request->age;//
        return view('page.show',compact('name','address','age')); //代入した値をページに渡す
    }

    public function edit(Book $book){//編集ページの表示
        return view('page.edit',compact('book')); 
    }

    public function update(Request $request,Book $book){//更新機能
        $book->name = $request->input('name');
        $book->address = $request->input('address');
        $book->age = $request->input('age');
        $book->save();
        return redirect()->route('page.flash', $book)->with('flash_message', '更新完了');
    }

    public function delete_k(Book $book){//削除内容の確認
        return view('page.delete_k',compact('book')); 
    }
    
    public function delete(Book $book){
       
        $book->delete();
 
        return redirect()->route('page.flash')->with('flash_message', '投稿を削除しました。');
    }

    public function flash(Book $book){
        $book->delete();
        return view('page.flash')->with('flash_message', '投稿を削除しました。');
    }

    
    public function sanple(Request $request){
        $keyword = $request->input('keyword');

        $query = Book::query();

        if(!empty($keyword)) {//空の時にTRUEを返す
            $query->where('name', 'LIKE', "%{$keyword}%")//部分一致
                ->orWhere('address', 'LIKE', "%{$keyword}%")
                ->orWhere('age', 'LIKE', "%{$keyword}%");
        }

        $books = $query->get();

        return view('page.sanple', compact('books', 'keyword'));


                //$books = Book::all();//テーブルの情報をすべて習得
                //return view('page.index',compact('books')); //一覧ページの表示　変数の内容をページに渡す

    }
    public function sample_create(){
        return view('page.sample_create'); //登録ページの表示
    }
}
