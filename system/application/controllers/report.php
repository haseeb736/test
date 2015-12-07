<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends Controller {

	function Report()
	{
		parent::Controller();
		if($this->session->userdata('user_logged')!="yes:stramingapp_admin")
		{
			redirect(base_url().'index.php/home');
			exit;
		}
		$this->load->model('truck_model');
	}
	
	function index()
	{	
		$show_data = array();	
		$show_data['error']='';
		$show_data['success']=$this->session->userdata('success');
		$this->clearmessage();	
		
		$show_data['show_hdmenu']=1;
		
		$this->load->view('report_view',$show_data);		
	}
	
	private function success($message)
	{
		$userdata = array(
							'success'    => $message
						);
		$this->session->set_userdata($userdata);		
	}
	
	private function clearmessage()
	{
		$userdata = array(
							'success'    => ''
						);
		$this->session->set_userdata($userdata);
	}	
	
}

?>