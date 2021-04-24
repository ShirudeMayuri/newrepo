<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Header extends CI_Controller
 {
	public function __construct()
	 {
		parent::__construct();
		$this->load->model('admin/Category_model');
		$this->load->model('welcome_model');
	 }

	 public function index()
	{
		$data['res_slider']= $this->welcome_model->select_slider();
		$data['res_testimonial']= $this->welcome_model->select_testimonial();
		$data['res_editorpick']= $this->welcome_model->select_editorpick();
		$data['res_about_footer']= $this->welcome_model->select_about_footer();
		$data['res_category']= $this->Category_model->select_data();
				//print_r($data['res_category']);die;	
			
			
        $this->load->view('header',$data);
        $this->load->view('index',$data);
		$this->load->view('footer');	
		
	}
	
	
		 
 }