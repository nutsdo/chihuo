<?php namespace admin;
use \Config;
use \Sentry;
class CommonController extends \Controller {
	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected $permissions;
	protected $has_permissions;

}