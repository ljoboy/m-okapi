<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Categorie_sortie extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
		if(!$this->session->is_connected)
		{
			redirect("utilisateur/connexion");
		}
        $this->load->model('Categorie_sortie_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $page = $this->load->view('categorie_sortie/categorie_sortie_list',[],true);
        $this->load->view('mokapi_home',['page'=>$page]);
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Categorie_sortie_model->json();
    }

    public function read($id) 
    {
        $row = $this->Categorie_sortie_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'id_utilisateur' => $row->id_utilisateur,
		'nom' => $row->nom,
	    );
            $page = $this->load->view('categorie_sortie/categorie_sortie_read', $data, true);
            $this->load->view('mokapi_home', ['page'=>$page]);
        } else {
            $this->session->set_flashdata('message', 'Element non trouv&eacute;');
            redirect(site_url('categorie_sortie'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('categorie_sortie/create_action'),
	    'id' => set_value('id'),
	    'id_utilisateur' => set_value('id_utilisateur'),
	    'nom' => set_value('nom'),
	);
        $p = $this->load->view('categorie_sortie/categorie_sortie_form', $data, true);
        $this->load->view('mokapi_home',['page'=>$p]);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_utilisateur' => $this->input->post('id_utilisateur',TRUE),
		'nom' => $this->input->post('nom',TRUE),
	    );

            $this->Categorie_sortie_model->insert($data);
            $this->session->set_flashdata('message', 'Element cr&eacute;&eacute; avec succ&egrave;s');
            redirect(site_url('categorie_sortie'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Categorie_sortie_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('categorie_sortie/update_action'),
		'id' => set_value('id', $row->id),
		'id_utilisateur' => set_value('id_utilisateur', $row->id_utilisateur),
		'nom' => set_value('nom', $row->nom),
	    );
            $this->load->view('categorie_sortie/categorie_sortie_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Element non trouv&eacute;');
            redirect(site_url('categorie_sortie'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'id_utilisateur' => $this->input->post('id_utilisateur',TRUE),
		'nom' => $this->input->post('nom',TRUE),
	    );

            $this->Categorie_sortie_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Element modifi&eacute; avec succ&egrave;s');
            redirect(site_url('categorie_sortie'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Categorie_sortie_model->get_by_id($id);

        if ($row) {
            $this->Categorie_sortie_model->delete($id);
            $this->session->set_flashdata('message', 'Element &eacute;ffac&eacute; avec succ&egrave;s');
            redirect(site_url('categorie_sortie'));
        } else {
            $this->session->set_flashdata('message', 'Element non trouv&eacute;');
            redirect(site_url('categorie_sortie'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_utilisateur', 'id utilisateur', 'trim|required');
	$this->form_validation->set_rules('nom', 'nom', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
