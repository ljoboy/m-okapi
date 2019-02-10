<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Rapport extends CI_Controller
{
	public function __construct()
	{
		if(!$this->session->is_connected)
		{
			redirect("utilisateur/connexion");
		}
	}

	public function bilan()
	{
		
	}

	public function depenses()
	{
		
	}

	public function stats()
	{
		
	}
}
