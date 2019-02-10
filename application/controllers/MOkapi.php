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
		$this->load->model('utilisateurModel');
		$this->form_validation->set_rules('actuel', 'ancien mot de passe', 'required', ['required' => 'Ce champ est requis']);
		$this->form_validation->set_rules('new_mdp', 'nouveau mot de passe', 'required', ['required' => 'Ce champ est requis']);
		$this->form_validation->set_rules('confirmer', 'confirmer mot de passe', 'required|matches[new_mdp]',
			['required' => 'Ce champ est requis', 'matches' => 'Mot de passes discordent']);

		$ex_mdp = $this->input->post('actuel', TRUE);
		$mdp = $this->input->post('new_mdp', TRUE);

		if ($this->form_validation->run() == true) {
			if ($this->utilisateurModel->change_mdp($ex_mdp, $mdp)){
				$this->session->set_flashdata('success_mdp_change', 'Mot de passe changer avec succes');
			}else{
				$this->session->set_flashdata('error_mdp_change', 'Veuillez verifier votre ancien mot de passe');
			}
		} else {
			$this->session->set_flashdata('error_mdp_change', 'Action non autoris&eacute;e');
		}
		redirect('mokapi/mdp_change');
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
