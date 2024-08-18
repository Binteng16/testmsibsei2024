<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * @property Proyek_model $Proyek_model
 * @property load $load
 * @property input $input
 */

class Proyek extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Proyek_model'); // Memuat model
		$this->load->helper('url');
		if (!$this->Proyek_model) {
			show_error('Model not loaded properly');
		} // Memuat helper URL
	}


	public function index()
	{
		// Fetch or define $Lokasi data
		$data['proyek'] = $this->Proyek_model->get_projects();

		// Pass the data to the view
		$data['view'] = 'Proyek/proyek_view';
		$this->load->view('dashboard', $data);
	}

	public function create()
	{
		// Load the create view
		$this->load->view('Proyek/proyek_create_view'); // Ensure the path matches exactly
	}

	public function store()
	{
		$postData = array(
			'namaProyek' => $this->input->post('name'),
			'client' => $this->input->post('client'),
			'tglMulai' => $this->input->post('startDate'),
			'tglSelesai' => $this->input->post('endDate'),
			'pimpinanProyek' => $this->input->post('projectLead'),
			'keterangan' => $this->input->post('description')
		);
		$this->Proyek_model->create_project($postData);
		redirect('proyek');
	}

	public function edit($id)
	{
		$data['proyek'] = $this->Proyek_model->get_project_by_id($id);

		if (empty($data['proyek'])) {
			show_404(); // Show 404 error if proyek not found
		}

		$this->load->view('Proyek/proyek_edit_view', $data);
	}


	public function update($id)
	{
		$putData = array(
			'namaProyek' => $this->input->post('name'),
			'client' => $this->input->post('client'),
			'tglMulai' => $this->input->post('startDate'),
			'tglSelesai' => $this->input->post('endDate'),
			'pimpinanProyek' => $this->input->post('projectLead'),
			'keterangan' => $this->input->post('description')
		);
		$this->Proyek_model->update_projects($id, $putData);
		redirect('proyek');
	}

	public function delete($id)
	{
		$this->Proyek_model->delete_project($id);
		redirect('proyek');
	}
}
