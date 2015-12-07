<?php  

Class Campign_model extends model{
    
    function get_place()
    {
        $query = $this->db->query("SELECT DISTINCT destination  FROM bd_kyc" );
        $return_array = $query->result_array();  
        return $return_array;
    }
    function get_details_by_dest_name($dest)
    {
        
        $query = $this->db->query("SELECT DISTINCT email,f_name,l_name  FROM bd_kyc where destination='$dest'");
        $return_array = $query->result_array();  
        return $return_array;
    }
    
    
}


?>