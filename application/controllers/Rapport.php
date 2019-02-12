<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Rapport extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->is_connected)
		{
			redirect("utilisateur/connexion");
		}
	}

	public function bilan()
	{
		$data = [];
		$p = $this->load->view('rapport/bilan',$data,true);
		$this->load->view('mokapi_home',['page'=>$p]);
	}

	public function depenses()
	{
		$data = [];
		$p = $this->load->view('rapport/depenses',$data,true);
		$this->load->view('mokapi_home',['page'=>$p]);
	}

	public function stats()
	{
		$data = [];
		$p = $this->load->view('rapport/stats',$data,true);
		$this->load->view('mokapi_home',['page'=>$p]);
	}
}
