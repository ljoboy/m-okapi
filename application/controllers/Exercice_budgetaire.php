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


    }

    public function index()
    {
		$q = urldecode($this->input->get('q', TRUE));
		$start = intval($this->input->get('start'));

		if ($q <> '') {
			$config['base_url'] = base_url() . 'exercice_budgetaire/index.html?q=' . urlencode($q);
			$config['first_url'] = base_url() . 'exercice_budgetaire/index.html?q=' . urlencode($q);
		} else {
			$config['base_url'] = base_url() . 'exercice_budgetaire/index.html';
			$config['first_url'] = base_url() . 'exercice_budgetaire/index.html';
		}

		$config['per_page'] = 10;
		$config['page_query_string'] = TRUE;
		$config['total_rows'] = $this->Exercice_budgetaire_model->total_rows($q);
		$exercice_budgetaire = $this->Exercice_budgetaire_model->get_limit_data($config['per_page'], $start, $q);

		$this->load->library('pagination');
		$this->pagination->initialize($config);

		$data = array(
			'exercice_budgetaire_data' => $exercice_budgetaire,
			'q' => $q,
			'pagination' => $this->pagination->create_links(),
			'total_rows' => $config['total_rows'],
			'start' => $start,
		);
        $p = $this->load->view('exercice_budgetaire/exercice_budgetaire_list', $data,true);
        $this->load->view('mokapi_home', ['page'=>$p]);
    }

    public function read($id) 
    {
        $row = $this->Exercice_budgetaire_model->get_by_id($id);
        if ($row) {
            $data = array(
				'id' => $row->id,
				'id_utilisateur' => $this->session->id,
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
            'button' => 'Cr&eacute;er',
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
			$this->session->set_flashdata('date_error', 'Le produit et le commerce');
            $this->create();
        } else {
            $data = array(
				'id_utilisateur' => $this->input->post('id_utilisateur',TRUE),
				'date_debut' => $this->input->post('date_debut_submit',TRUE),
				'date_fin' => $this->input->post('date_fin_submit',TRUE),
				'budget_initial' => $this->input->post('budget_initial',TRUE),
				'date_creation' => date('Y-m-d H:i:s'),
	    	);
            if (strtotime($data['date_debut']) > strtotime($data['date_fin'])){
				$this->session->set_flashdata('date_error', 'La date de debut doit etre inferieur a la date');
				$this->create();
			}else{
				$this->Exercice_budgetaire_model->insert($data);
				$this->session->set_flashdata('message', 'Element cr&eacute;&eacute; avec succ&egrave;s');
				redirect(site_url('exercice_budgetaire'));
			}
        }
    }
    
    public function update($id) 
    {
        $row = $this->Exercice_budgetaire_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Modifier',
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
				'id_utilisateur' => $this->session->id,
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
