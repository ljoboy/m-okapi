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

		if ($this->form_validation->run() === TRUE) {
			$ex_mdp = $this->input->post('actuel', TRUE);
			$mdp = $this->input->post('new_mdp', TRUE);
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

	public function about()
	{
		$data['concepteurs'] = [
			['nom' => 'Lijerbul LJOBOY', 'github' => 'ljoboy', 'passion' => 'Web Developper, Software engineer, passionate of <b>JavaScript and NodeJs</b>, UI/UX Developper, Writing (song, books, ...)'],
			['nom'=>'fideleplk','github' => 'fidele9', 'passion' => 'Web Developper, Software engineer, passionate of <b>Php</b>' ],
			['nom'=>'allegra','github'=>'allegra344','passion'=>'Web Developper, Graphics and Artistic drawing and Music'],
			['nom'=>'Japhet Majende', 'github'=>'taphej', 'passion'=>'Classic music, Singer, Technology and Coding'],
			['nom'=>'Justelle', 'github'=>'', 'passion'=>'Mode & Esthetics'],
			['nom'=>'Josy', 'github'=>'','passion'=>'Music, Choisis aussi l\'autre qui reste'],
			['nom'=>'Savalove47', 'github'=>'savalone47', 'passion'=>'Hacking, pentest, Web Developpement'],
			['nom'=>'Lorraine', 'github'=>'', 'passion'=>''],
			['nom'=>'Patrice_Snart', 'github'=>'', 'passion'=>''],
			['nom'=>'Francisca', 'github'=>'', 'passion'=>''],
		];
		$p =$this->load->view('utilisateur/about',$data,true);
		$this->load->view('mokapi_home', ['page'=>$p]);
	}
}
