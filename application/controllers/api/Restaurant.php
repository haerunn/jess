<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurant extends CI_Controller {

	public function index()
	{
		echo 'restaurant api';
	}

	public function getListAll()
	{
		$restaurants = [
	        ['name' => 'Restaurant 1', 'location' => 'New York', 'rating' => 4.5],
	        ['name' => 'Restaurant 2', 'location' => 'San Francisco', 'rating' => 4.8],
	        ['name' => 'Restaurant 3', 'location' => 'Los Angeles', 'rating' => 4.2],
	        ['name' => 'Restaurant 4', 'location' => 'Chicago', 'rating' => 4.1],
	        ['name' => 'Restaurant 5', 'location' => 'Miami', 'rating' => 4.6],
	    ];

	    // return the data as JSON
	    header('Content-Type: application/json');
	    echo json_encode($restaurants);
	}

	public function getDetails($resto)
	{
		echo $resto;
	}
}

/* End of file Restaurant.php */
/* Location: ./application/controllers/api/Restaurant.php */