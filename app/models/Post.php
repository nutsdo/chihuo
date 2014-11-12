<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Post extends Eloquent {

	protected $table = 'posts';
	
	public function tag(){
		return $this->belongsToMany('Tag', 'tag_item','post_id','tag_id');
	}
	
}
