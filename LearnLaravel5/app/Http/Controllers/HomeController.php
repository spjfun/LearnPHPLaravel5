<?php namespace App\Http\Controllers;

use View; //要記得use不然系統會報錯，找不到View

class HomeController extends Controller
{
    public function index(){

    	return View::make('home')
    		->with('title', '首頁')
    		->with('hello', '大家好~~');
    }

    public function show($id){

		return View::make('home')
    		->with('title', '首頁')
    		->with('hello', '大家好~~' .$id);
    }
}
