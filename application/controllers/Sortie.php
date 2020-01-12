<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sortie extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
		if(!$this->session->is_connected)
		{
			redirect("utilisateur/connexion");
		}
        $this->load->model('Sortie_model');
		$this->load->model('exercice_budgetaire_model');
		$this->load->model('categorie_sortie_model');

    }

    public function index()
    {
		$q = urldecode($this->input->get('q', TRUE));
		$start = intval($this->input->get('start'));

		if ($q <> '') {
			$config['base_url'] = base_url() . 'sortie/index.html?q=' . urlencode($q);
			$config['first_url'] = base_url() . 'sortie/index.html?q=' . urlencode($q);
		} else {
			$config['base_url'] = base_url() . 'sortie/index.html';
			$config['first_url'] = base_url() . 'sortie/index.html';
		}

		$config['per_page'] = 10;
		$config['page_query_string'] = TRUE;
		$config['total_rows'] = $this->Sortie_model->total_rows($q);
		$sortie = $this->Sortie_model->get_limit_data($config['per_page'], $start, $q);

		$this->load->library('pagination');
		$this->pagination->initialize($config);

		$data = array(
			'sortie_data' => $sortie,
			'q' => $q,
			'pagination' => $this->pagination->create_links(),
			'total_rows' => $config['total_rows'],
			'start' => $start,
		);
        $p = $this->load->view('sortie/sortie_list',$data,true);
		$this->load->view('mokapi_home', ['page'=>$p]);
    }

    public function read($id) 
    {
        $row = $this->Sortie_model->get_by_id($id);
        if ($row) {
            $data = array(
				'id' => $row->id,
				'nom_cat' => $row->nom_cat,
				'date_debut' => $row->date_debut,
				'date_fin' => $row->date_fin,
				'seuil' => $row->seuil,
	    	);
            $p = $this->load->view('sortie/sortie_read', $data, true);
			$this->load->view('mokapi_home', ['page'=>$p]);
        } else {
            $this->session->set_flashdata('message', 'Element non trouv&eacute;');
            redirect(site_url('sortie'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Cr&eacute;er',
            'action' => site_url('sortie/create_action'),
			'id' => set_value('id'),
			'id_categorie_sortie' => set_value('id_categorie_sortie'),
			'id_exercice_budgetaire' => set_value('id_exercice_budgetaire'),
			'seuil' => set_value('seuil'),
			"cat_sort" => $this->categorie_sortie_model->get_all(),
			"ex_budg" => $this->exercice_budgetaire_model->get_all()
		);
        $p = $this->load->view('sortie/sortie_form', $data, true);
		$this->load->view('mokapi_home', ['page'=>$p]);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_categorie_sortie' => $this->input->post('id_categorie_sortie',TRUE),
		'id_exercice_budgetaire' => $this->input->post('id_exercice_budgetaire',TRUE),
		'seuil' => $this->input->post('seuil',TRUE),
	    );

            $this->Sortie_model->insert($data);
            $this->session->set_flashdata('message', 'Element cr&eacute;&eacute; avec succ&egrave;s');
            redirect(site_url('sortie'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Sortie_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Modifier',
                'action' => site_url('sortie/update_action'),
				'id' => set_value('id', $row->id),
				'id_categorie_sortie' => set_value('id_categorie_sortie', $row->id_categorie_sortie),
				'id_exercice_budgetaire' => set_value('id_exercice_budgetaire', $row->id_exercice_budgetaire),
				'seuil' => set_value('seuil', $row->seuil),
				"cat_sort" => $this->categorie_sortie_model->get_all(),
				"ex_budg" => $this->exercice_budgetaire_model->get_all()
	    );
            $p = $this->load->view('sortie/sortie_form', $data, true);
			$this->load->view('mokapi_home', ['page'=>$p]);
        } else {
            $this->session->set_flashdata('message', 'Element non trouv&eacute;');
            redirect(site_url('sortie'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'id_categorie_sortie' => $this->input->post('id_categorie_sortie',TRUE),
		'id_exercice_budgetaire' => $this->input->post('id_exercice_budgetaire',TRUE),
		'seuil' => $this->input->post('seuil',TRUE),
	    );

            $this->Sortie_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Element modifi&eacute; avec succ&egrave;s');
            redirect(site_url('sortie'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Sortie_model->get_by_id($id);

        if ($row) {
            $this->Sortie_model->delete($id);
            $this->session->set_flashdata('message', 'Element &eacute;ffac&eacute; avec succ&egrave;s');
            redirect(site_url('sortie'));
        } else {
            $this->session->set_flashdata('message', 'Element non trouv&eacute;');
            redirect(site_url('sortie'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_categorie_sortie', 'id categorie sortie', 'trim|required');
	$this->form_validation->set_rules('id_exercice_budgetaire', 'id exercice budgetaire', 'trim|required');
	$this->form_validation->set_rules('seuil', 'seuil', 'trim|required|numeric');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}


