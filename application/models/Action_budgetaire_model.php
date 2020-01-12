<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Action_budgetaire_model extends CI_Model
{

	public $table = 'action_budgetaire';
	public $id = 'id';
	public $order = 'DESC';

	function __construct()
	{
		parent::__construct();
	}

	public function select_sum()
	{
		$this->db->select([
			'categorie_sortie.nom',
			'sortie.seuil'
		]);
		$this->db->from($this->table);
		$this->db->join('sortie', "sortie.id = action_budgetaire.id_sortie");
		$this->db->join('categorie_sortie', "sortie.id_categorie_sortie = categorie_sortie.id");
		$this->db->select_sum('montant_utilise');
		return $this->db->get()->result();
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
		$this->db->where($this->id, $id);
		return $this->db->get($this->table)->row();
	}

	// get total rows
	function total_rows($q = NULL) {
		$this->db->like('id', $q);
		$this->db->or_like('id_sortie', $q);
		$this->db->or_like('montant_utilise', $q);
		$this->db->or_like('motif', $q);
		$this->db->or_like('date_creation', $q);
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	// get data with limit and search
	function get_limit_data($limit, $start = 0, $q = NULL) {
		$this->db->order_by($this->id, $this->order);
		$this->db->like('id', $q);
		$this->db->or_like('id_sortie', $q);
		$this->db->or_like('montant_utilise', $q);
		$this->db->or_like('motif', $q);
		$this->db->or_like('date_creation', $q);
		$this->db->limit($limit, $start);
		return $this->db->get($this->table)->result();
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