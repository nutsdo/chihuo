<?php

class Category extends Eloquent {

	protected $table = 'categories';

	public  function categories(){
		return $this->morphMany('Teepluss\Categorize\CategoryRelates\Relate', 'contentable');
	}
}
