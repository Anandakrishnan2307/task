<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model 
{  

    private $current_db;

	function __construct(){            
	    parent::__construct();
	}    

	function check_login($posted)
	{
		if($posted['username']=='admin'&&$posted['password']=='admin')
		{
			return "Success";
		}
		else
		{
			return "Failure";
		}
	}
}