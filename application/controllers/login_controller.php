<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class Login_controller extends CI_Controller{
	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('login_model');
		$this->load->library('session');
	}
	function index(){
		$this->load->view('login_view');
	}

	function process_login(){
		$user=$this->input->post('username');
		$pass=sha1($this->input->post('password'));

		$checklogin=$this->login_model->login($user,$pass);

		if($checklogin){
			foreach ($checklogin as $row);
				$this->session->set_userdata('ID_CARD_NUMBER', $row->ID_CARD_NUMBER);
				$this->session->set_userdata('ROLE', $row->ROLE);
				$this->session->set_userdata('FIRST_NAME', $row->FIRST_NAME);

				if($this->session->userdata('ROLE')=="treasurer"){

					//$this->session->set_flashdata('success_msg', 'Login successful');
					redirect(base_url('modules/treasury_controller/index'));
				}elseif($this->session->userdata('ROLE')=="pastor"){


					//$this->session->set_flashdata('success_msg', 'Login successful');
					redirect(base_url('modules/pastor_controller/index'));
				}elseif($this->session->userdata('ROLE')=="clerk"){


					//$this->session->set_flashdata('success_msg', 'Login successful');
					redirect(base_url('modules/clerk_controller/index'));
				}elseif($this->session->userdata('ROLE')=="personal"){


					//$this->session->set_flashdata('success_msg', 'Login successful');
					redirect(base_url('modules/personal_controller/index'));
				}elseif($this->session->userdata('ROLE')=="social"){


					//$this->session->set_flashdata('success_msg', 'Login successful');
					redirect(base_url('modules/social_controller/index'));
				}elseif($this->session->userdata('ROLE')=="training"){


					//$this->session->set_flashdata('success_msg', 'Login successful');
					redirect(base_url('modules/training_controller/index'));
				}



			}else{
				//echo "Wrong Login Details";
				//$this->session->set_flashdata('error_msg', 'Fail to add records');
				$data['collince']= "Wrong Login Details";
				$this->load->view('login_view',$data);
			}
		}
		public function logout(){
			$this->session->sess_destroy();
			redirect (base_url('login_controller/logout'));
		}
	}
