<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Action_budgetaire extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
		if(!$this->session->is_connected)
		{
			redirect("utilisateur/connexion");
		}
        $this->load->model('Action_budgetaire_model');
		$this->load->model('sortie_model');
    }

    public function index()
    {
		$q = urldecode($this->input->get('q', TRUE));
		$start = intval($this->input->get('start'));

		if ($q <> '') {
			$config['base_url'] = base_url() . 'action_budgetaire/index.html?q=' . urlencode($q);
			$config['first_url'] = base_url() . 'action_budgetaire/index.html?q=' . urlencode($q);
		} else {
			$config['base_url'] = base_url() . 'action_budgetaire/index.html';
			$config['first_url'] = base_url() . 'action_budgetaire/index.html';
		}

		$config['per_page'] = 10;
		$config['page_query_string'] = TRUE;
		$config['total_rows'] = $this->Action_budgetaire_model->total_rows($q);
		$action_budgetaire = $this->Action_budgetaire_model->get_limit_data($config['per_page'], $start, $q);

		$this->load->library('pagination');
		$this->pagination->initialize($config);

		$data = array(
			'action_budgetaire_data' => $action_budgetaire,
			'q' => $q,
			'pagination' => $this->pagination->create_links(),
			'total_rows' => $config['total_rows'],
			'start' => $start,
		);
        $data['page'] = $this->load->view('action_budgetaire/action_budgetaire_list', $data, true);
        $this->load->view('mokapi_home',$data);
    }

    public function read($id) 
    {
        $row = $this->Action_budgetaire_model->get_by_id($id);
        if ($row) {
            $data = array(
				'id' => $row->id,
				'id_sortie' => $row->id_sortie,
				'montant_utilise' => $row->montant_utilise,
				'motif' => $row->motif,
				'date_creation' => $row->date_creation,
				"sortie" => $this->sortie_model->get_by_id($row->id_sortie)
	    	);
            $page = $this->load->view('action_budgetaire/action_budgetaire_read', $data, true);
            $this->load->view('mokapi_home',['page'=>$page]);
        } else {
            $this->session->set_flashdata('message', 'Element non trouv&eacute;');
            redirect(site_url('action_budgetaire'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Cr&eacute;er',
            'action' => site_url('action_budgetaire/create_action'),
			'id' => set_value('id'),
			'id_sortie' => set_value('id_sortie'),
			'montant_utilise' => set_value('montant_utilise'),
			'motif' => set_value('motif'),
			'date_creation' => set_value('date_creation'),
			'sorties' => $this->sortie_model->get_all()
		);
        $page = $this->load->view('action_budgetaire/action_budgetaire_form', $data, true);
        $this->load->view('mokapi_home',['page'=>$page]);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_sortie' => $this->input->post('id_sortie',TRUE),
		'montant_utilise' => $this->input->post('montant_utilise',TRUE),
		'motif' => $this->input->post('motif',TRUE),
		'date_creation' => date('Y/m/d H:i:s'),
	    );

            $this->Action_budgetaire_model->insert($data);
            $this->session->set_flashdata('message', 'Element cr&eacute;&eacute; avec succ&egrave;s');
            redirect(site_url('action_budgetaire'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Action_budgetaire_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Modifier',
                'action' => site_url('action_budgetaire/update_action'),
				'id' => set_value('id', $row->id),
				'id_sortie' => set_value('id_sortie', $row->id_sortie),
				'montant_utilise' => set_value('montant_utilise', $row->montant_utilise),
				'motif' => set_value('motif', $row->motif),
				'date_creation' => set_value('date_creation', $row->date_creation),
				'sorties' => $this->sortie_model->get_all()
	    	);
            $page = $this->load->view('action_budgetaire/action_budgetaire_form', $data, true);
            $this->load->view('mokapi_home',['page'=>$page]);
        } else {
            $this->session->set_flashdata('message', 'Element non trouv&eacute;');
            redirect(site_url('action_budgetaire'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'id_sortie' => $this->input->post('id_sortie',TRUE),
		'montant_utilise' => $this->input->post('montant_utilise',TRUE),
		'motif' => $this->input->post('motif',TRUE),
		'date_creation' => $this->input->post('date_creation',TRUE),
	    );

            $this->Action_budgetaire_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Element modifi&eacute; avec succ&egrave;s');
            redirect(site_url('action_budgetaire'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Action_budgetaire_model->get_by_id($id);

        if ($row) {
            $this->Action_budgetaire_model->delete($id);
            $this->session->set_flashdata('message', 'Element &eacute;ffac&eacute; avec succ&egrave;s');
            redirect(site_url('action_budgetaire'));
        } else {
            $this->session->set_flashdata('message', 'Element non trouv&eacute;');
            redirect(site_url('action_budgetaire'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_sortie', 'id sortie', 'trim|required');
	$this->form_validation->set_rules('montant_utilise', 'montant utilise', 'trim|required|numeric');
	$this->form_validation->set_rules('motif', 'motif', 'trim|required');
	$this->form_validation->set_rules('date_creation', 'date creation', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
