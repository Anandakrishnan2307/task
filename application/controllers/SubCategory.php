<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SubCategory extends CI_Controller {
	
	private $data;
	function __construct() 
	{
		date_default_timezone_set("Asia/Kolkata");
		parent::__construct();
		$this->load->model('SubCategory_Model','cm');
	}
	public function add_sub_category()
	{
		$data["category"] = $this->cm->get_category();		
		$this->load->view('header');
		$this->load->view('add_sub_category',$data);
		$this->load->view('footer');
	}
	public function save_sub_category()
	{
		$data=$this->input->post(NULL, TRUE);
		$result = $this->cm->save_sub_category($data);
		if($result=="Success")
		{
			redirect("sub_category");
		}
		else
		{
			redirect("sub_category");
		}
	}
	public function edit_sub_category($sub_category_id)
	{
		$data["category"] = $this->cm->get_category();		
		$data['sub_category'] = $this->cm->get_sub_category($sub_category_id);
		$this->load->view('header');
		$this->load->view('edit_sub_category', $data);
		$this->load->view('footer');
	}
	public function delete_sub_category($sub_category_id)
	{
		$result = $this->cm->delete_sub_category($sub_category_id);
		if($result=="Success")
		{
			redirect("sub_category");
		}
		else
		{
			redirect("sub_category");
		}
	}
	public function update_sub_category()
	{
		$data=$this->input->post(NULL, TRUE);
		$result = $this->cm->update_sub_category($data);
		if($result=="Success")
		{
			redirect("sub_category");
		}
		else
		{
			redirect("sub_category");
		}
	}
	public function view_sub_category()
	{
		$data["sub_category"] = $this->cm->view_sub_category();
		$this->load->view('header');
		$this->load->view('view_sub_category', $data);
		$this->load->view('footer');
	}
}
