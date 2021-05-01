<?php
class Email extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('stu_login')){
			redirect(base_url());
		}
		$this->load->model('Email_model','secure_student');
	}
	public function index(){
		$data['student']=$this->secure_student->get_students();
		$data['main_content']="login/student/email/index";
		$this->load->view('login/student/layouts/main',$data);
	}
  public function registermail($desc){

    $nodemailer="nodemailer";
    $service="gmail";
    $user="shreyareddy.lakkadi99@gmail.com";
    $pass="manjula98480";
    $to= "aishwarya.kasturi12@gmail.com";
    $from= "shreyareddy.lakkadi99@gmail.com";
    $subject= "Sending Email using Node.js";
    $text= "That was easy!";


    echo "<script>
        var nodemailer = require(".$nodemailer.");
        
    var transporter = nodemailer.createTransport({
      service: ". $service.",
      auth: {
        user: ".$user.",
        pass: ".$pass."
      }
    });

    var mailOptions = {
      from: ".$from.",
      to: ".$to.",
      subject: ".$subject.",
      text: ".$text."
    };

    transporter.sendMail(mailOptions, function(error, info){
      if (error) {
        console.log(error);
      } else {
        console.log("."Email sent: " ."+ info.response);
      }
    });
    </script>"; 
  }
}