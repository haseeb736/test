<?php

class Truck_model extends Model
{		
	function get_kyc()
	{
		$query = $this->db->query("SELECT *
										FROM bd_kyc LIMIT 10"
								);
		$return_array = $query->result_array();		
		return $return_array;
	}
	function create_kyc($data)
	{
		$this->db->insert('bd_kyc', $data);
		$return_value = $this->db->insert_id();
		return 	$return_value;
	}
	
	
	
	function get_truckdetails($data)
	{
		$condition= 'id='.$data['id'];
		$query = $this->db->query("SELECT *
										FROM bd_truck
										WHERE ".$condition
								);
		$return_array = $query->row_array();		
		return $return_array;
	}	
	function update_vehicle($data,$truck_id)
	{
		$this->db->where('id', $truck_id);
		$this->db->update('bd_truck', $data);
		$result=$this->db->affected_rows();		
		return $result;
	}
	
	
	
	function create_event($data)
	{
		$this->db->insert('sa_event', $data);
		$return_value = $this->db->insert_id();
		return 	$return_value;
	}
	function get_allsubcategories($category_id)
	{
		$query = $this->db->query("SELECT id, subcategory_name
										FROM sa_event_subcategory
										WHERE category_id=".$category_id
								);
		$return_array = $query->result_array();		
		return $return_array;
	}	
	
}

?>