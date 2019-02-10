<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Entree extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
		if(!$this->session->is_connected)
		{
			redirect("utilisateur/connexion");
		}
        $this->load->model('Entree_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'entree/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'entree/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'entree/index.html';
            $config['first_url'] = base_url() . 'entree/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Entree_model->total_rows($q);
        $entree = $this->Entree_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'entree_data' => $entree,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $page = $this->load->view('entree/entree_list', $data, true);
        $this->load->view('mokapi_home', ['page'=>$page]);
    }

    public function read($id) 
    {
        $row = $this->Entree_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'id_categorie_entree' => $row->id_categorie_entree,
		'nom' => $row->nom,
		'montant' => $row->montant,
		'date_entree' => $row->date_entree,
	    );
            $p = $this->load->view('entree/entree_read', $data, true);
            $this->load->view('mokapi_home', ['page'=>$p]);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('entree'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('entree/create_action'),
	    'id' => set_value('id'),
	    'id_categorie_entree' => set_value('id_categorie_entree'),
	    'nom' => set_value('nom'),
	    'montant' => set_value('montant'),
	    'date_entree' => set_value('date_entree'),
	);
        $this->load->view('entree/entree_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_categorie_entree' => $this->input->post('id_categorie_entree',TRUE),
		'nom' => $this->input->post('nom',TRUE),
		'montant' => $this->input->post('montant',TRUE),
		'date_entree' => $this->input->post('date_entree',TRUE),
	    );

            $this->Entree_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('entree'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Entree_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('entree/update_action'),
		'id' => set_value('id', $row->id),
		'id_categorie_entree' => set_value('id_categorie_entree', $row->id_categorie_entree),
		'nom' => set_value('nom', $row->nom),
		'montant' => set_value('montant', $row->montant),
		'date_entree' => set_value('date_entree', $row->date_entree),
	    );
            $p = $this->load->view('entree/entree_form', $data, true);
            $this->load->view('mokapi_home', ['page'=>$p]);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('entree'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'id_categorie_entree' => $this->input->post('id_categorie_entree',TRUE),
		'nom' => $this->input->post('nom',TRUE),
		'montant' => $this->input->post('montant',TRUE),
		'date_entree' => $this->input->post('date_entree',TRUE),
	    );

            $this->Entree_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('entree'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Entree_model->get_by_id($id);

        if ($row) {
            $this->Entree_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('entree'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('entree'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_categorie_entree', 'id categorie entree', 'trim|required');
	$this->form_validation->set_rules('nom', 'nom', 'trim|required');
	$this->form_validation->set_rules('montant', 'montant', 'trim|required|numeric');
	$this->form_validation->set_rules('date_entree', 'date entree', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
