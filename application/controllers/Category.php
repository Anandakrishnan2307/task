<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	private $data;
	function __construct() 
	{
		date_default_timezone_set("Asia/Kolkata");
		parent::__construct();
		$this->load->model('Category_Model','cm');
	}
	public function add_category()
	{
		$this->load->view('header');
		$this->load->view('add_category');
		$this->load->view('footer');
	}
	public function save_category()
	{
		$data=$this->input->post(NULL, TRUE);
		$result = $this->cm->save_category($data);
		if($result=="Success")
		{
			redirect("category");
		}
		else
		{
			redirect("category");
		}
	}
	public function edit_category($category_id)
	{
		$data['category'] = $this->cm->get_category($category_id);
		$this->load->view('header');
		$this->load->view('edit_category', $data);
		$this->load->view('footer');
	}
	public function delete_category($category_id)
	{
		$result = $this->cm->delete_category($category_id);
		if($result=="Success")
		{
			redirect("category");
		}
		else
		{
			redirect("category");
		}
	}
	public function update_category()
	{
		$data=$this->input->post(NULL, TRUE);
		$result = $this->cm->update_category($data);
		if($result=="Success")
		{
			redirect("category");
		}
		else
		{
			redirect("category");
		}
	}
	public function view_category()
	{
		$data["category"] = $this->cm->view_category();
		$this->load->view('header');
		$this->load->view('view_category', $data);
		$this->load->view('footer');
	}
}
