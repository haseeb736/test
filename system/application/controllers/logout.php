<?php 
class Logout extends Controller{
	function Logout()
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
		$this->session->sess_destroy();
		redirect(base_url().'index.php/home');
	}
}
?>