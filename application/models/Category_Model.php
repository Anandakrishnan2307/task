<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Category_Model extends CI_Model 
{  
    private $current_db;
	private $table ="category";
	
	

	function __construct(){            
	    parent::__construct();
	    $this->current_db = $this->load->database("task",true);
	}    
	function view_category()
	{
			$query="SELECT * from category";
			$result = json_decode(json_encode($this->current_db->query($query)->result()), true);
			return $result;
	}
	function save_category($data)
	{
		$result = "Failure";
		
		$array = array(
			"category_name" => $data['category_name'],
			"category_description" => $data['category_description'],
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
	function get_category($category_id)
	{
			$query="select * from category where category_id='".$category_id."'";
			$result = json_decode(json_encode($this->current_db->query($query)->result()), true);
			return $result;
	}
	function update_category($data)
	{
		$result="Failure";

		$params=array(
			"category_name" => $data['category_name'],
			"category_description" => $data['category_description'],
			"updated_by" => $_SESSION["user"],
			"updated_date" => date("Y-m-d h:m:s")
		);

		$this->current_db->set($params);
		$this->current_db->where("category_id", $data["category_id"]);
		if($this->current_db->update($this->table))
		{
			$result="Success";
		}
		return $result;
	}

	function delete_category($category_id)
	{		
		$result="Failure";	
		if($this->current_db->where("category_id", $category_id)->delete($this->table))
		{
			$result="Success";
		}
		return $result;
	}
}