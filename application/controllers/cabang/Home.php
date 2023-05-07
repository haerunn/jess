<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index($nama_cabang='dsddd')
	{
		echo "<pre>";
		print_r($nama_cabang);
		echo "</pre>";
		exit;
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/cabang/Home.php */