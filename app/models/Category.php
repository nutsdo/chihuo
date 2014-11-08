<?php

class Category extends Eloquent {

	protected $table = 'Categories';

	public  function categories(){
		return $this->morphMany('Teepluss\Categorize\CategoryRelates\Relate', 'contentable');
	}
}
