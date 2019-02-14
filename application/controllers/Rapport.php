<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Rapport extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->is_connected)
		{
			redirect("utilisateur/connexion");
		}
		$this->load->model('categorie_sortie_model');
		$this->load->model('sortie_model');
		$this->load->model('entree_model');
		$this->load->model('action_budgetaire_model');
	}

	public function index()
	{
		$this->bilan();
	}

	public function bilan()
	{
		$data['categories'] = $this->categorie_sortie_model->get_all();
		foreach ($data['categories'] as $category) {
			$data['cat_seuil'][] = $this->sortie_model->sortie_sum($category->id);
		}
		$data['sum_cat'] = 0;
		for ($i=0;$i<count($data['cat_seuil']);$i++){
			$data['sum_cat'] += $data['cat_seuil'][$i]['seuil'];
		}
		$data['sum_entree'] = $this->entree_model->select_sum();
		$p = $this->load->view('rapport/bilan',$data,true);
		$this->load->view('mokapi_home',['page'=>$p]);
	}

	public function depenses()
	{

		$data['sorties'] = $this->action_budgetaire_model->select_sum();
		$script = '';
		foreach ($data['sorties'] as $sortie){
			$script .= '<script>
							$(function () {
								$(\'.min-chart#'.$sortie->nom.'\').easyPieChart({
									barColor: "#4caf50",
									onStep: function (from, to, percent) {
										$(this.el).find(\'.percent\').text(Math.round(percent));
									}
								});
							});
					</script>';
		}
		$data['scripts'] = $script;
		$p = $this->load->view('rapport/depenses',$data,true);
		$this->load->view('mokapi_home',['page'=>$p]);
	}

	public function stats()
	{
		$data = [];
		$p = $this->load->view('rapport/stats',$data,true);
		$this->load->view('mokapi_home',['page'=>$p]);
	}
}
