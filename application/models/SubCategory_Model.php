<?php defined('BASEPATH') OR exit('No direct script access allowed');

class SubCategory_Model extends CI_Model 
{  

    private $current_db;
	private $table ="sub_category";

	function __construct(){            
	    parent::__construct();
	    $this->current_db = $this->load->database("task",true);
	}
	function get_category()
	{
		$query="SELECT category_id, category_name from category";
		$result = json_decode(json_encode($this->current_db->query($query)->result()), true);
		return $result;
	}
	function view_sub_category()
	{
			$query="SELECT sub_category_id, category_name, sub_category_name, sub_category_description from sub_category, category where sub_category.category_id=category.category_id";
			$result = json_decode(json_encode($this->current_db->query($query)->result()), true);
			return $result;
	}
	function save_sub_category($data)
	{
		$result = "Failure";
		
		$array = array(
			"category_id"	=> $data['category_id'],
			"sub_category_name" => $data['sub_category_name'],
			"sub_category_description" => $data['sub_category_description'],
			"created_by" => $_SESSION["user"],
			"created_date" => date("Y-m-d h:m:s"),
			"updated_by" => $_SESSION["user"],
			"updated_date" => date("Y-m-d h:m:s")
		);
		if($this->current_db->insert($this->table, $array))
		{
			$result="Success";
		}

		return $result;

	}
	function get_sub_category($sub_category_id)
	{
			$query="select * from sub_category where sub_category_id='".$sub_category_id."'";
			$result = json_decode(json_encode($this->current_db->query($query)->result()), true);
			return $result;
	}
	function update_sub_category($data)
	{
		$result="Failure";

		$params=array(
			"category_id"	=> $data['category_id'],
			"sub_category_name" => $data['sub_category_name'],
			"sub_category_description" => $data['sub_category_description'],
			"updated_by" => $_SESSION["user"],
			"updated_date" => date("Y-m-d h:m:s")
		);

		$this->current_db->set($params);
		$this->current_db->where("sub_category_id", $data["sub_category_id"]);
		if($this->current_db->update($this->table))
		{
			$result="Success";
		}
		return $result;
	}

	function delete_sub_category($sub_category_id)
	{		
		$result="Failure";	
		if($this->current_db->where("sub_category_id", $sub_category_id)->delete($this->table))
		{
			$result="Success";
		}
		return $result;
	}
}