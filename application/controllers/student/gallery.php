<?php

class Gallery extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('stu_login')){
			redirect(base_url());
		}
		$this->load->model('gallery_model','secure_student');
	}
	public function index(){
		$data['student']=$this->secure_student->get_students();
		$data['main_content']="login/student/gallery/index";
		$this->load->view('login/student/layouts/main',$data);
	}
}
?>