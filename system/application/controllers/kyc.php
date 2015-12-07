<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kyc extends Controller {

	function Kyc()
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
		
		if(isset($_POST['create_kyc']))
		{
			$this->load->library('form_validation');			
			$config = array(
               array(
                     'field'   => 'f_name', 
                     'label'   => 'First Name', 
                     'rules'   => 'required'
                  ),
			   array(
                     'field'   => 'l_name', 
                     'label'   => 'Last Name', 
                     'rules'   => 'required'
                  ),
			   array(
                     'field'   => 'mobile', 
                     'label'   => 'Mobile No', 
                     'rules'   => 'required'
                  ),
			   array(
                     'field'   => 'email', 
                     'label'   => 'Email', 
                     'rules'   => 'required'
                  ),
			   array(
                     'field'   => 'place', 
                     'label'   => 'Place', 
                     'rules'   => 'required'
                  ),
			   array(
                     'field'   => 'city', 
                     'label'   => 'City', 
                     'rules'   => 'required'
                  ),
			   array(
                     'field'   => 'destination', 
                     'label'   => 'Destination', 
                     'rules'   => 'required'
                  ),
			   array(
                     'field'   => 'ticket_type', 
                     'label'   => 'Ticket Type', 
                     'rules'   => 'required'
                  )
				  
			);
			$this->form_validation->set_rules($config);
			if($this->form_validation->run() != false)
			{
				$kyc_info = array();	
				
				$kyc_info['f_name'] = $this->input->post('f_name');
				$kyc_info['m_name'] = $this->input->post('m_name');
				$kyc_info['l_name'] = $this->input->post('l_name');
				$kyc_info['mobile'] = $this->input->post('mobile');
				$kyc_info['email'] = $this->input->post('email');
				$kyc_info['place'] = $this->input->post('place');
				$kyc_info['city'] = $this->input->post('city');
				$kyc_info['destination'] = $this->input->post('destination');
				$kyc_info['ticket_type'] = $this->input->post('ticket_type');
							
				$result = $this->truck_model->create_kyc($kyc_info);	
				
				if($result>0)
				{				
					$this->success('<p class="success">Customer Details have been added</p>');
					redirect('index.php/kyc');
					exit;					
				}
			}
		}
		
		$show_data['show_hdmenu']=1;
		
		$show_data['kyc_array'] = $this->truck_model->get_kyc();
		$this->load->view('kyc_view',$show_data);		
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