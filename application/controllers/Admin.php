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

		//load session library
		$this->load->library('session');
	}

	public function profile(){
		$ses=$this->session->userdata('msg');
		if($ses!=""){
			$result['data']=$this->Vms->profile();
			if($this->input->post('submit')) {
				$f = $this->input->post('adminname');
				$m = $this->input->post('mobilenumber');
				$a = $this->input->post('email');
				$this->Vms->updatte($f,$m,$a);
				$result['msg']="Admin profile updated";
				redirect('Admin/profile');
			}
			$this->load->view('admin-profile',$result);
		}else {
			redirect('Admin/index');
		}
	}

	public function vistor(){
		$ses=$this->session->userdata('msg');
		if($ses!=""){
			$result['data']=$this->Vms->manageVistor();
			$this->load->view('manageVistor',$result);
		}else {
			redirect('Admin/index');
		}
	}

	public function details(){
		$ses=$this->session->userdata('msg');
		if($ses!=""){
			$id=$this->input->get('id');
			$result['data'] = $this->Vms->details($id);
			if ($this->input->post('submit')) {
				$f = $this->input->post('remark');
				$this->Vms->upd($id,$f);
				redirect('Admin/vistor');
			}
			$this->load->view('visitor-detail',$result);
		}else {
			redirect('Admin/index');
		}
	}

	public function logout(){
		$this->session->unset_userdata('msg');
		redirect('Admin/index');
	}

	function updatePass(){
		$ses=$this->session->userdata('msg');
		if($ses!=""){
			$result['pass']=$this->Vms->sel1();
			if($this->input->post('submit')) {
				$f = $this->input->post('newpassword');
				$c = $this->input->post('currentpassword');
				$o = $this->input->post('old');
				if($o == $c){
					$this->Vms->pwd($f);
				}

				redirect('Admin/updatePass');
			}
			$this->load->view('change-password',$result);
		}else {
			redirect('Admin/index');
		}
	}

	public function dashboard()
	{

		$ses=$this->session->userdata('msg');
		if($ses!=""){
			$result['data']=$this->Vms->toDayVistors();
			$result['dataa']=$this->Vms->yesterdayVistors();
			$result['dataaa']=$this->Vms->lastSevenDayVistors();
			$result['dataaaa']=$this->Vms->totalVistors();
			$result['datain']=$this->Vms->in();
			$this->load->view('dashboard',$result);
		}else{
			redirect('Admin/index');
		}
	}

	public function visitorsForm(){
		$ses=$this->session->userdata('msg');
		if($ses!=""){
			if($this->input->post('submit'))
			{
				$f=$this->input->post('fullname');
				$e=$this->input->post('email');
				$m=$this->input->post('mobilenumber');
				$a=$this->input->post('address');
				$w=$this->input->post('whomtomeet');
				$d=$this->input->post('department');
				$r=$this->input->post('reasontomeet');

				$this->Vms->saverecords($f,$e,$m,$a,$w,$d,$r);
				$data['message']="<h3 style='color:green'>Records Saved Successfully</h3>";
			}

			$this->load->view('vistorsForm',@$data);
		}else{
			redirect('Admin/index');
		}

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
				$this->session->set_flashdata('msg', $u );
				redirect('Admin/dashboard');
			}
			else
			{
				$data['error']="<h3 style='color:red'>Invalid login details</h3>";
			}
		}
		$this->load->view('login',@$data);
	}


	public function between()
	{
		$ses=$this->session->userdata('msg');
		if($ses!=""){
			if ($this->input->post('submit')) {
				$f = $this->input->post('fromdate');
				$t = $this->input->post('todate');
				$result['data'] = $this->Vms->sbt($f, $t);
			}
			$this->load->view('betweenForm',@$result);
		}else{
			redirect('Admin/index');
		}
	}

}
