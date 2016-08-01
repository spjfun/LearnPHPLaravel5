<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{


    //在終端機輸入 php artisan migrate, 會執行up()方法來建立資料表。
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema 類別可以操控資料表，使用 create() 方法建立，使用 drop() 方法移除。
        //create 的第一個參數是資料表的名稱 posts。第二個參數則是要建立的欄位內容。
        Schema::create('posts', function($table){
            //increments 是唯一值的遞增數字，就是主鍵
            $table->increments('id');
            $table->string('title');
            $table->string('content');
            //timestamps 是時間戳記，在 Laravel 中預設是開啟的，可以在 Model 中關閉。
            $table->timestamps();
        });
    }


    //在終端機輸入 php artisan migrate:rollback, 會執行down()來移除這個資料表
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
