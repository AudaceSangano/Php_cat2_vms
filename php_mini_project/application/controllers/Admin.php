<?php
class Admin extends CI_Controller
{
	public function __construct()
	{
		//call CodeIgniter's default Constructor
		parent::__construct();

		//load database libray manually
		$this->load->database();

		//load Model
		$this->load->model('Vms');
	}

	public function dashboard()
	{
		$this->load->view('dashboard');
	}

	public function index()
	{

		if($this->input->post('login'))
		{
			$u=$this->input->post('uname');
			$p=$this->input->post('pass');

			$que=$this->db->query("select * from tbladmin where UserName ='".$u."' and Password='$p'");
			$row = $que->num_rows();
			if($row)
			{
				$result['data']=$this->Vms->toDayVistors();
				$result['dataa']=$this->Vms->yesterdayVistors();
				$result['dataaa']=$this->Vms->lastSevenDayVistors();
				$result['dataaaa']=$this->Vms->totalVistors();
				$this->load->view('dashboard',$result);
			}
			else
			{
				$data['error']="<h3 style='color:red'>Invalid login details</h3>";
			}
		}
		$this->load->view('login',@$data);
	}

}
