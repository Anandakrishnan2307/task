<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	private $data1;
	function __construct() 
	{
		date_default_timezone_set("Asia/Kolkata");
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Login_Model','lm');
	}
	public function index()
	{
		$this->load->view('login');
	}
	public function check_login()
	{
		$posted=$this->input->post(NULL, TRUE);
		$data["status"] = $this->lm->check_login($posted);
		$data["error"] = "Invalid User";
		if($data["status"]=="Success")
		{
			echo "testing";
			$data["error"] = "";
			$this->session->set_userdata('user', $posted['username']);
			$this->load->view('header');
			$this->load->view('home');
			$this->load->view('footer');
		}
		else
		{
			$this->load->view('login',$data);
		}
	}
}
