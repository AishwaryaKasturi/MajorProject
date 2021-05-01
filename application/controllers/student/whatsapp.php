<?php

class WhatsApp extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('stu_login')){
			redirect(base_url());
		}
		$this->load->model('whatsapp_model','secure_student');
	}
	public function index(){
		$data['student']=$this->secure_student->get_students();
		$data['main_content']="login/student/whatsapp/index";
		$this->load->view('login/student/layouts/main',$data);
	}
	public function add_whatsapp($student_mobile){
		//$data=['message'=>$this->input->post('message'),'name'=>$this->input->post('name')];
		$var= "https://api.whatsapp.com/send?text=YourShareTextHere&phone=91".$student_mobile;
		
		echo '<script>window.location.replace("'.$var.'", "mywindow","status=0,toolbar=0")</script>';
	}
	
}