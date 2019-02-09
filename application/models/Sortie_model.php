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

    // datatables
    function json() {
        $this->datatables->select('id,id_categorie_sortie,id_exercice_budgetaire,seuil');
        $this->datatables->from('sortie');
        //add this line for join
        //$this->datatables->join('table2', 'sortie.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('sortie/read/$1'),'Read')." | ".anchor(site_url('sortie/update/$1'),'Update')." | ".anchor(site_url('sortie/delete/$1'),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'id');
        return $this->datatables->generate();
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
	$this->db->or_like('id_categorie_sortie', $q);
	$this->db->or_like('id_exercice_budgetaire', $q);
	$this->db->or_like('seuil', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
	$this->db->or_like('id_categorie_sortie', $q);
	$this->db->or_like('id_exercice_budgetaire', $q);
	$this->db->or_like('seuil', $q);
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

/* End of file Sortie_model.php */
/* Location: ./application/models/Sortie_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-02-08 23:05:24 */
/* http://harviacode.com */