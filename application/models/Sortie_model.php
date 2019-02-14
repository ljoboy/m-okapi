<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Sortie_model extends CI_Model
{

	public $table = 'sortie';
	public $id = 'id';
	public $order = 'DESC';

	function __construct()
	{
		parent::__construct();
	}

	public function sortie_sum($id)
	{
		$this->db->select_sum("seuil");
		$this->db->where("id_categorie_sortie",$id);
		return $this->db->get($this->table)->result_array()[0];
	}

	// get all
	function get_all()
	{
		$this->db->select([
			"categorie_sortie.id as id_cat",
			"categorie_sortie.nom as nom_cat",
			"exercice_budgetaire.id as id_ex",
			$this->table.".*"
		]);
		$this->db->from($this->table);
		$this->db->join('exercice_budgetaire', "id_exercice_budgetaire = exercice_budgetaire.id");
		$this->db->join('categorie_sortie', "id_categorie_sortie = categorie_sortie.id");
		$this->db->order_by($this->id, $this->order);
		return $this->db->get()->result();
	}

	// get data by id
	function get_by_id($id)
	{
		$this->db->select([
			"categorie_sortie.id as id_cat",
			"categorie_sortie.nom as nom_cat",
			"exercice_budgetaire.id as id_ex",
			"exercice_budgetaire.date_debut",
			"exercice_budgetaire.date_fin",
			$this->table.".*"
		]);
		$this->db->from($this->table);
		$this->db->join('exercice_budgetaire', "id_exercice_budgetaire = exercice_budgetaire.id");
		$this->db->join('categorie_sortie', "id_categorie_sortie = categorie_sortie.id");
		$this->db->where($this->table.".".$this->id, $id);
		return $this->db->get()->row();
	}

	// get total rows
	function total_rows($q = NULL) {
		$this->db->like('id', $q);
		$this->db->or_like('id_categorie_sortie', $q);
		$this->db->or_like('id_exercice_budgetaire', $q);
		$this->db->or_like('seuil', $q);
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	// get data with limit and search
	function get_limit_data($limit, $start = 0, $q = NULL) {
		$this->db->select([
			"categorie_sortie.id as id_cat",
			"categorie_sortie.nom as nom_cat",
			"exercice_budgetaire.id as id_ex",
			$this->table.".*"
		]);
		$this->db->from($this->table);
		$this->db->join('exercice_budgetaire', "id_exercice_budgetaire = exercice_budgetaire.id");
		$this->db->join('categorie_sortie', "id_categorie_sortie = categorie_sortie.id");
		$this->db->order_by($this->id, $this->order);
		$this->db->like('sortie.id', $q);
		$this->db->or_like('id_categorie_sortie', $q);
		$this->db->or_like('id_exercice_budgetaire', $q);
		$this->db->or_like('seuil', $q);
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
