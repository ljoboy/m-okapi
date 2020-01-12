<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Entree_model extends CI_Model
{

    public $table = 'entree';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

	public function select_sum()
	{
		$this->db->select_sum('montant');
		return $this->db->get($this->table)->result_array()[0];
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
		$this->db->select([
			"categorie_entree.nom as nom_cat",
			"entree.id",
			"entree.nom",
			"entree.montant",
			"entree.date_entree",
			"categorie_entree.id as id_cat"
		]);
		$this->db->from($this->table);
		$this->db->join('categorie_entree',"entree.id_categorie_entree = categorie_entree.id");
        $this->db->where($this->table.".".$this->id, $id);
        return $this->db->get()->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id', $q);
		$this->db->or_like('id_categorie_entree', $q);
		$this->db->or_like('nom', $q);
		$this->db->or_like('montant', $q);
		$this->db->or_like('date_entree', $q);
		$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
		$this->db->select([
			"categorie_entree.nom as nom_cat",
			"entree.id",
			"entree.nom",
			"entree.montant",
			"entree.date_entree",
			"categorie_entree.id as id_cat"
		]);
		$this->db->from($this->table);
		$this->db->join('categorie_entree',"entree.id_categorie_entree = categorie_entree.id");
        $this->db->order_by($this->table.".".$this->id, $this->order);
        $this->db->like('entree.id', $q);
		$this->db->or_like('entree.id_categorie_entree', $q);
		$this->db->or_like('entree.nom', $q);
		$this->db->or_like('entree.montant', $q);
		$this->db->or_like('entree.date_entree', $q);
		$this->db->limit($limit, $start);
        return $this->db->get()->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}