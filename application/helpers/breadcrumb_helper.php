<?php
if (!function_exists('breadcrumb')){
	function($txt){
		$data = explode("/", $txt);
		$bd = anchor(site_url(),"m-okapi");
		if (is_array($data)){
			$v = "m-okapi";
			foreach ($data as $value) {
				$v .= "/".$value;
				$bd .= " > ".anchor(site_url($v));
			}
		}
		return $bd;
	}
}
