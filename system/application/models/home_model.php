<?php

class Home_model extends model
{
	function loginValidate()
	{
		$query = $this->db->query("select id
									FROM bd_user								
									where username='".$this->input->post('username')."' and password='".dohash($this->input->post('password'), 'md5')."'");
		$return_array = $query->row_array();		
		if(sizeof($return_array) != 0)
		{		
			return $return_array;			
		}		
		else
		{			
			return 0;
		}		
	}
}
?>