<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * @property load $load
 * @property Lokasi_model $Lokasi_model
 * @property Proyek_model $Proyek_model
 */

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// Load the necessary models
		$this->load->model('Lokasi_model');
		$this->load->model('Proyek_model'); // Load Proyek model if needed
	}

	public function dashboard()
	{
		// Get data
		$data['proyek'] = $this->Proyek_model->get_projects();
		$data['lokasi'] = $this->Lokasi_model->get_all_lokasi();

		// Load view with data
		$this->load->view('dashboard', $data);
	}
}
