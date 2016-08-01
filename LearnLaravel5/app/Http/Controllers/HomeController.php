<?php namespace App\Http\Controllers;

use View; //要記得use不然系統會報錯，找不到View

class HomeController extends Controller
{
    public function index(){

        //Post Model 取得全部文章，回傳值會是一個陣列
        $posts = Post::all();

        return View::make('home')
                ->with('title', 'My Blog')
                ->with('posts', $posts)
    }

    public function show($id){

		return View::make('home')
    		->with('title', '首頁')
    		->with('hello', '大家好~~' .$id);
    }
}
