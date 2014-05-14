<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class User extends MY_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {
		$data['hide_menu'] = '';
		$data['hide_sidemenu'] = '';
		$data['content_view'] = 'user/login';
		$data['title'] = 'webADT | Login';
		$this -> load -> module('template');
		$this -> template -> default_load($data);
	}

	public function test() {
		//load model user
		$this -> load -> model("m_user");
		//access function getusers in user model
		//$users = $this -> m_user -> getAll();
		//display user array
		//print_r($users);
		$access=$this-> m_user->getFacilityData() ;
		print_r($access);
		//echo json_encode($access);
	}

}
