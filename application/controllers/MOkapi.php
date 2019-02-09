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
		$this->load->view("mokapi_home", $data);
    }

	public function deconnexion()
	{
		$this->session->unset_userdata('is_connected');
		redirect();
	}
}
