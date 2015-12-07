<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Controller {

	function Home()
	{
		parent::Controller();	
		$this->load->model('home_model');
		$this->load->helper('html');
		$this->load->helper('security');
		$this->load->helper('cookie');
	}
	
	function index()
	{
		if($this->session->userdata('user_logged')=="yes:stramingapp_admin")
		{
			redirect(base_url().'index.php/dashboard');
			exit;
		}
		else
		{			
			$show_data = array();
			$show_data['error']='';
			
			if(isset($_POST['adminlogin']))
			{
				$this->load->library('form_validation');
				$this->form_validation->set_rules('username','User Name','required');
				$this->form_validation->set_rules('password','Password','required');
				
				if($this->form_validation->run() != false)
				{
					$result = $this->home_model->loginValidate();	
					
					if($result==0)
					{
						$show_data['error'] = 'Invalid Username or Password';
					}
					else
					{
						$this->setLoginSession($result);						
						redirect(base_url().'index.php/dashboard');
					}
				}
				else
				{
					redirect(base_url().'index.php/home');
				}
			}
			$this->load->view('home_view',$show_data);
		}
	}
	function setLoginSession($result)
	{
		$userdata = array(
							'user_id'    => $result['id'],
							'user_logged' => 'yes:stramingapp_admin'
						);
		$this->session->set_userdata($userdata);		
	}
}

?>