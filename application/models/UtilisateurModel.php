<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UtilisateurModel extends CI_Model
{
    public $table = 'utilisateur';

    public function creer_utilisateur($infos)
    {
        $this->db->insert($this->table, $infos);
    }

    public function check_authentification($data)
    {
        $this->db->where($data);
        $q = $this->db->get($this->table);
        $res = $q->result();
        return  $res;
    }

	private function mdp_compare($mdp)
	{
		$this->db->where('mdp',$mdp);
		$this->db->from('utilisateur');
		$r = $this->db->get()->result();
		if (count($r)>0){
			return true;
		}else{
			return false;
		}
    }

	public function change_mdp($ex_mdp, $mdp)
	{
		$check = $this->mdp_compare($ex_mdp);
		if ($check){
			$this->db->where('id', $this->session->id);
			$this->db->update('utilisateur', ['mdp'=>$mdp]);
		}
		return $check;
    }
}
