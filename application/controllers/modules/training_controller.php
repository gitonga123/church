<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class Trainig_controller extends CI_Controller{
	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
		//$this->load->model('login_model');
		$this->load->library('session');
	}
	function index(){
		$this->load->view('modules/training_view');
	}
}