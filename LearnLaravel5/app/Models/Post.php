<?php

class Post extends Eloquent{

	protected $table = 'post';
	//public $timestamps = false;;//不使用，必須將 Migration 檔中的 $table->timestamps(); 此行移除
}