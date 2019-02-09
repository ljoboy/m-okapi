<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Categorie_entree extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
		if(!$this->session->is_connected)
		{
			redirect("utilisateur/connexion");
		}
        $this->load->model('Categorie_entree_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'categorie_entree/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'categorie_entree/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'categorie_entree/index.html';
            $config['first_url'] = base_url() . 'categorie_entree/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Categorie_entree_model->total_rows($q);
        $categorie_entree = $this->Categorie_entree_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'categorie_entree_data' => $categorie_entree,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('categorie_entree/categorie_entree_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Categorie_entree_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'id_utilisateur' => $row->id_utilisateur,
		'nom' => $row->nom,
	    );
            $this->load->view('categorie_entree/categorie_entree_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('categorie_entree'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('categorie_entree/create_action'),
	    'id' => set_value('id'),
	    'id_utilisateur' => set_value('id_utilisateur'),
	    'nom' => set_value('nom'),
	);
        $this->load->view('categorie_entree/categorie_entree_form', $data);
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

            $this->Categorie_entree_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('categorie_entree'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Categorie_entree_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('categorie_entree/update_action'),
		'id' => set_value('id', $row->id),
		'id_utilisateur' => set_value('id_utilisateur', $row->id_utilisateur),
		'nom' => set_value('nom', $row->nom),
	    );
            $this->load->view('categorie_entree/categorie_entree_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('categorie_entree'));
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

            $this->Categorie_entree_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('categorie_entree'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Categorie_entree_model->get_by_id($id);

        if ($row) {
            $this->Categorie_entree_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('categorie_entree'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('categorie_entree'));
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

/* End of file Categorie_entree.php */
/* Location: ./application/controllers/Categorie_entree.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-02-09 07:35:29 */
/* http://harviacode.com */
