<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$projects = call_spring_api('GET', 'http://localhost:8080/proyek');
		$locations = call_spring_api('GET', 'http://localhost:8080/lokasi');

		$data = [
			'projects' => $projects,
			'locations' => $locations
		];

		$this->load->view('home', $data);
	}
}
