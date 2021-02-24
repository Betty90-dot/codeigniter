<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

	public function examform()
	{
		$this->load->view('examform');
	}


	public function insertvalue()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("fname","firstname",array('required', 'max_length[25]'));
		$this->form_validation->set_rules("lname","lastname",array('required', 'max_length[25]'));
		$this->form_validation->set_rules("uname","username",array('required', 'max_length[10]'));
		$this->form_validation->set_rules("email","email",'trim|required|valid_email');
		$this->form_validation->set_rules("pass","password",'required');
		$this->form_validation->set_rules("mobile","mobile",array('required', 'max_length[10]'));
		if($this->form_validation->run())
		{
			$this->load->model('Mainmodel');
			$a=array("fname"=>$this->input->post("fname"),
				"lname"=>$this->input->post("lname"),
				"uname"=>$this->input->post("uname"),
				"password"=>$this->input->post("pass"),
				"mobile"=>$this->input->post("mobile"),
				"email"=>$this->input->post("email"));

			$this->Mainmodel->datainsert($a);
			redirect(base_url().'main/examform');
			//redirect('main/examform','refresh');


			
	}
}


public function viewtable()
{
	$this->load->model('Mainmodel');
	$data['n']=$this->Mainmodel->values();
	$this->load->view('viewtable',$data);
}

}
?>