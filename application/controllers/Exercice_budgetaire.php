<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Exercice_budgetaire extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
		if(!$this->session->is_connected)
		{
			redirect("utilisateur/connexion");
		}
        $this->load->model('Exercice_budgetaire_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $p = $this->load->view('exercice_budgetaire/exercice_budgetaire_list', [],true);
        $this->load->view('mokapi_home', ['page'=>$p]);
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Exercice_budgetaire_model->json();
    }

    public function read($id) 
    {
        $row = $this->Exercice_budgetaire_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'id_utilisateur' => $row->id_utilisateur,
		'date_debut' => $row->date_debut,
		'date_fin' => $row->date_fin,
		'budget_initial' => $row->budget_initial,
		'date_creation' => $row->date_creation,
	    );
            $p = $this->load->view('exercice_budgetaire/exercice_budgetaire_read', $data, true);
			$this->load->view('mokapi_home', ['page'=>$p]);
        } else {
            $this->session->set_flashdata('message', 'Element non trouv&eacute;');
            redirect(site_url('exercice_budgetaire'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('exercice_budgetaire/create_action'),
	    'id' => set_value('id'),
	    'id_utilisateur' => set_value('id_utilisateur'),
	    'date_debut' => set_value('date_debut'),
	    'date_fin' => set_value('date_fin'),
	    'budget_initial' => set_value('budget_initial'),
	    'date_creation' => set_value('date_creation'),
	);
        $p = $this->load->view('exercice_budgetaire/exercice_budgetaire_form', $data, true);
		$this->load->view('mokapi_home', ['page'=>$p]);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_utilisateur' => $this->input->post('id_utilisateur',TRUE),
		'date_debut' => $this->input->post('date_debut',TRUE),
		'date_fin' => $this->input->post('date_fin',TRUE),
		'budget_initial' => $this->input->post('budget_initial',TRUE),
		'date_creation' => $this->input->post('date_creation',TRUE),
	    );

            $this->Exercice_budgetaire_model->insert($data);
            $this->session->set_flashdata('message', 'Element cr&eacute;&eacute; avec succ&egrave;s');
            redirect(site_url('exercice_budgetaire'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Exercice_budgetaire_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('exercice_budgetaire/update_action'),
		'id' => set_value('id', $row->id),
		'id_utilisateur' => set_value('id_utilisateur', $row->id_utilisateur),
		'date_debut' => set_value('date_debut', $row->date_debut),
		'date_fin' => set_value('date_fin', $row->date_fin),
		'budget_initial' => set_value('budget_initial', $row->budget_initial),
		'date_creation' => set_value('date_creation', $row->date_creation),
	    );
            $p = $this->load->view('exercice_budgetaire/exercice_budgetaire_form', $data, true);
			$this->load->view('mokapi_home', ['page'=>$p]);
        } else {
            $this->session->set_flashdata('message', 'Element non trouv&eacute;');
            redirect(site_url('exercice_budgetaire'));
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
		'date_debut' => $this->input->post('date_debut',TRUE),
		'date_fin' => $this->input->post('date_fin',TRUE),
		'budget_initial' => $this->input->post('budget_initial',TRUE),
		'date_creation' => $this->input->post('date_creation',TRUE),
	    );

            $this->Exercice_budgetaire_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Element modifi&eacute; avec succ&egrave;s');
            redirect(site_url('exercice_budgetaire'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Exercice_budgetaire_model->get_by_id($id);

        if ($row) {
            $this->Exercice_budgetaire_model->delete($id);
            $this->session->set_flashdata('message', 'Element &eacute;ffac&eacute; avec succ&egrave;s');
            redirect(site_url('exercice_budgetaire'));
        } else {
            $this->session->set_flashdata('message', 'Element non trouv&eacute;');
            redirect(site_url('exercice_budgetaire'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_utilisateur', 'id utilisateur', 'trim|required');
	$this->form_validation->set_rules('date_debut', 'date debut', 'trim|required');
	$this->form_validation->set_rules('date_fin', 'date fin', 'trim|required');
	$this->form_validation->set_rules('budget_initial', 'budget initial', 'trim|required|numeric');
	$this->form_validation->set_rules('date_creation', 'date creation', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
