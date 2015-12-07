<?php

Class Campign extends Controller{
    function campign()
    {
        parent::Controller();
        if($this->session->userdata('user_logged')!="yes:stramingapp_admin")
		{
			redirect(base_url().'index.php/home');
			exit;
		}
        $this->load->model('campign_model');
    }
    function index()
    {
        $show_data['success']='';
        $show_data['destinataions']=$this->campign_model->get_place();
        $this->load->view('campign_view',$show_data);
                
    }
    function send_notification()
    {
        if(isset($_POST['send_notification']))
        {
            
                        $this->load->library('form_validation');			
			$config = array(
                        array(
                             'field'   => 'destination', 
                             'label'   => 'Destination', 
                             'rules'   => 'required'
                              ),
                        array(
                             'field'   => 'msg', 
                             'label'   => 'Messege', 
                             'rules'   => 'required'
                              )
                      
                            );
                         $this->form_validation->set_rules($config);
			if($this->form_validation->run() != false)
                        {
                            echo "hi";die;
                            $destination=$this->input->post('destination');
                            $msg=$this->input->post('msg');
                            $data=$this->campign_model->get_details_by_dest_name($destination);
                            $send='';
                            if(isset($data))
                            {
                                foreach($data as $detail)
                                {
                                        $email=$detail['email'];
                                        $fname=$detail['f_name'];
                                        $mname=$detail['l_name'];
                                        $this->load->library('email');
                                        $this->email->to($email);
                                        $this->email->from('no-reply@hntta.com');
                                        $this->email->subject('Campign Notification');
                                        $message = "Dear $fname $mname ,<br/> $msg " ;
                                        $this->email->message($message);
                                        //echo $this->email->send();
                                        if ($this->email->send())
                                        {
                                            $send=1;
                                            
                                        }
                                       
                                }
                                if($send==1)
                                {
                                   $this->success('');
                                   redirect('index.php/campign');
                                   exit;
                                }
                            }
                        }
        }
    }
}