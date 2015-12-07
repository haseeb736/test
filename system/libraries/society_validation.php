<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Society
 *
 * An social net work 

// ------------------------------------------------------------------------

/**
 * Form Validation Class
 *
 * @package		Society
 * @subpackage	Libraries
 * @category	Validation
 * @author		Muhammad Nadukkandiyil 
 */
class CI_Society_validation {

	var $_error_array			= array();
	var $_field_data			= array();
	var $_field_data1			= array();

	function validate($array_to_validate)
	{	
		foreach($array_to_validate as $input_array)
		{
			$rule_count = 0;
			$validation_rule = explode("|", $input_array['rules']);
			$validation_message = explode("|", $input_array['message']);			
			
			while($rule_count<sizeof($validation_rule))
			{
				$match = array('/(matches)\[([a-zA-Z-_]*)\]/ix','/(greater\_than)\[([\d]*)\]/ix');
				
				$i=0;
				
				while($i<sizeof($match))
				{
					preg_match($match[$i], $validation_rule[$rule_count], $output_rule);
					$i++;					
				}
			
				if(sizeof($output_rule)>0)
				{				
					if(!isset($this->_error_array[$input_array['field_id']]))
					{					
						switch($output_rule[1])
						{
							case 'matches': $this->check_match($_POST[$input_array['field_id']],$validation_message[$rule_count],$input_array['field_id'],$output_rule[2]);
							break;
							case 'greater_than': $this->greaterthan($_POST[$input_array['field_id']],$validation_message[$rule_count],$input_array['field_id'],$output_rule[2]);
							break;
						}
					}
				}
				
				else
				{			
					if(!isset($this->_error_array[$input_array['field_id']]))
					{									
						switch($validation_rule[$rule_count])
						{
							case 'required': $this->check_required($_POST[$input_array['field_id']],$validation_message[$rule_count],$input_array['field_id']);
							break;
							
							case 'email' : $this->valid_email($_POST[$input_array['field_id']],$validation_message[$rule_count],$input_array['field_id']);
							break;					
							
							case 'number' : $this->valid_number($_POST[$input_array['field_id']],$validation_message[$rule_count],$input_array['field_id']);
							break;
							
							case 'alpha' : $this->valid_alpha($_POST[$input_array['field_id']],$validation_message[$rule_count],$input_array['field_id']);
							break;
							
						}				
					}
				}
				$rule_count++;
				
			}
		}
		return($this->_error_array);		
	}
	
	protected function check_required($str,$msg,$key)
	{
		if ( ! is_array($str))
		{		
			if(trim($str) == '')
			{
				$this->_error_array[$key] =  $msg;
			}
		}
		else
		{
			return ( ! empty($str));
		}
	}
	
	protected function valid_email($str,$msg,$key)
	{
		if(! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str))
		{
			$this->_error_array[$key] =  $msg;
		}
	}
	
	protected function valid_number($str,$msg,$key)
	{
		if(! preg_match( '/^[0-9]+$/', $str))
		{
			$this->_error_array[$key] =  $msg;
		}
	}
	
	protected function valid_alpha($str,$msg,$key)
	{
		if(! preg_match( '/^[a-zA-Z]+$/', $str))
		{
			$this->_error_array[$key] =  $msg;
		}
	}
	
	protected function check_match($str,$msg,$key,$field)
	{
		if ( ! isset($_POST[$field]))
		{
			$this->_error_array[$key] =  '';			
		}
		else
		{
			$field = $_POST[$field];
			if($str !== $field)
			{
				$this->_error_array[$key] =  $msg;
			}
		}
	}
	
	protected function greaterthan($str,$msg,$key,$value)
	{
		if($str<=$value)
		{
			$this->_error_array[$key] =  $msg;
		}
	}
	
}