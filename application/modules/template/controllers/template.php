<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Template extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this -> load -> library('Doctrine');
	}

	public function index() {
		//load the model
	 #$this -> load -> model("m_user");
		//load function in model
		#$result=$this->m_user->getFacilityData();
		#print_r($result);

	}

	public function default_load($data) {
		$this -> load -> view('template', $data);
	}

}
