<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * @property Lokasi_model $Lokasi_model
 * @property load $load
 * @property input $input
 */

class Lokasi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// Load the Lokasi_model
		$this->load->model('Lokasi_model');
	}

	public function index()
	{
		// Fetch or define $Lokasi data
		$data['Lokasi'] = $this->Lokasi_model->get_all_lokasi();

		// Pass the data to the view
		$data['view'] = 'Lokasi/lokasi_view';
		$this->load->view('dashboard', $data);
	}

	public function create()
	{
		// Load the create view
		$this->load->view('Lokasi/Lokasi_create_view'); // Ensure the path matches exactly
	}

	public function store()
	{
		$postData = array(
			'namaLokasi' => $this->input->post('name'),
			'negara' => $this->input->post('country'),
			'provinsi' => $this->input->post('province'),
			'kota' => $this->input->post('city'),
		);
		$this->Lokasi_model->create_Lokasi($postData);
		redirect('Lokasi');
	}

	public function edit($id)
	{
		$data['Lokasi'] = $this->Lokasi_model->get_Lokasi_by_id($id);

		if (empty($data['Lokasi'])) {
			show_404(); // Show 404 error if Lokasi not found
		}

		$this->load->view('Lokasi/Lokasi_edit_view', $data);
	}


	public function update($id)
	{
		$putData = array(
			'namaLokasi' => $this->input->post('name'),
			'negara' => $this->input->post('country'),
			'provinsi' => $this->input->post('province'),
			'kota' => $this->input->post('city'),
		);
		$this->Lokasi_model->update_Lokasis($id, $putData);
		redirect('Lokasi');
	}

	public function delete($id)
	{
		$this->Lokasi_model->delete_Lokasi($id);
		redirect('Lokasi');
	}
}
