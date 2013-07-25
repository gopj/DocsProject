<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends My_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){

		echo "hola";

		//$this->load->view('index/index', $data);
	}

}