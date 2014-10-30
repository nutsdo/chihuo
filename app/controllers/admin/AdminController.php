<?php namespace admin;
use \View;
use \Input;
use \Auth;
use \Redirect;
use \Validator;
use \Hash;
use \Session;
use \DB;
use \Sentry;
use \Config;
class AdminController extends \Controller{
	protected $layout = "layouts.main";
	/**
	 * Constructor
	 */
	
// 	protected $group;
// 	public function __construct($group)
// 	{
// 		// Establish Filters
// 		$this->beforeFilter('adminAuth');
// 	}
	
	public function getIndex(){
		return View::make('admin.index');
	}

}