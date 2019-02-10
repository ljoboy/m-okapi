<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MOkapi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->is_connected)
		{
			redirect("utilisateur/connexion");
		}
	}

	public function index()
    {
		$data['page'] = $this->load->view('utilisateur/accueil', [], true);
		$data['titre'] = "Accueil";
		$this->load->view("mokapi_home", $data);
    }

	public function mdp_change_action()
	{
		
    }

	public function mdp_change()
	{
		$p = $this->load->view('utilisateur/mdp_change',[],true);
		$this->load->view('mokapi_home',['page'=>$p]);
    }

	public function params()
	{
		$p = $this->load->view('utilisateur/params',[],true);
		$this->load->view('mokapi_home',['page'=>$p]);
    }



	public function deconnexion()
	{
		$this->session->unset_userdata('is_connected');
		redirect();
	}
}
