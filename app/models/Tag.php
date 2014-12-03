<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Tag extends Eloquent {

	protected $table = 'tags';
	protected $primaryKey = 'tag_id';
	
	public function posts()
	{
		return $this->belongsToMany('Post','tag_item','tag_id','post_id');
	}
}
