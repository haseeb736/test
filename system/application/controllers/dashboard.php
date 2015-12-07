<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends Controller {

	function Dashboard()
	{
		parent::Controller();	
		if($this->session->userdata('user_logged')!="yes:stramingapp_admin")
		{
			redirect(base_url().'index.php/home');
			exit;
		}
	}
	
	function index()
	{
		$show_data = array();
		$show_data['name']='Admin';
		$show_data['propic']=$this->session->userdata('profile_pic');
		$this->load->view('dashboard_view',$show_data);		
	}
	
}

?>