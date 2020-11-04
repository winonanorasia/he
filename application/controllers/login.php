<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model("saw_model");
		$this->load->helper('url');
	}
	public function index(){
		if($this->saw_model->log_in()){
			header('location:'.base_url('index.php/admin/home'));	
		}
		else{
			$username=$this->input->post("nama");
			$pass = $this->input->post("password");
			$check = $this->saw_model->check_login($username,$pass);
			if($check!=FALSE){
				foreach ($check as $data) {
                        $session_data = array(
                            'user_id'   => $data->id_admin,
                            'user_username' => $data->username,
                            'user_password' => $data->password,

                        );
                        //set session userdata
                        $this->session->set_userdata($session_data);
                        header('location:'.base_url('index.php/admin/home'));	
                }
			}
			else{
				$this->load->view('login');
			}
		}
		
	}
	public function logout(){
		$this->session->sess_destroy();
		header('location:'.base_url('index.php/login'));	
	}



}
?>