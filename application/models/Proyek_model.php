<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Proyek_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function get_projects()
	{
		$url = 'http://localhost:8080/Proyek'; // Ganti dengan URL API Anda
		$response = $this->curl_get($url);
		return json_decode($response, true);
	}

	public function get_project_by_id($id)
	{
		$url = 'http://localhost:8080/Proyek/' . $id; // Ganti dengan URL API Anda
		$response = $this->curl_get($url);
		return json_decode($response, true);
	}
	public function create_project($data)
	{
		$url = 'http://localhost:8080/Proyek'; // Ganti dengan URL API Anda
		$response = $this->curl_post($url, $data);// Tambahkan log untuk debugging
		return json_decode($response, true);
	}

	public function update_projects($id, $data)
	{
		$url = 'http://localhost:8080/Proyek/' . $id; // Ganti dengan URL API Anda
		$response = $this->curl_put($url, $data);
		log_message('debug', 'API Response: ' . $response); // Tambahkan log untuk debugging
		return json_decode($response, true);
	}

	public function delete_project($id)
	{
		$url = 'http://localhost:8080/Proyek/' . $id; // Ganti dengan URL API Anda
		$response = $this->curl_delete($url);
		log_message('debug', 'API Response: ' . $response); // Tambahkan log untuk debugging
		return json_decode($response, true);
	}

	private function curl_get($url)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$output = curl_exec($ch);
		if (curl_errno($ch)) {
			// Handle error
			echo 'Curl error: ' . curl_error($ch);
		}
		curl_close($ch);
		return $output;
	}

	private function curl_post($url, $data)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data)); // Mengirim data sebagai JSON
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); // Set header Content-Type
		$output = curl_exec($ch);
		curl_close($ch);
		return $output;
	}

	private function curl_put($url, $data)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT'); // Set method to PUT
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data)); // Mengirim data sebagai JSON
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); // Set header Content-Type
		$output = curl_exec($ch);
		if (curl_errno($ch)) {
			// Handle error
			echo 'Curl error: ' . curl_error($ch);
		}
		curl_close($ch);
		return $output;
	}

	private function curl_delete($url)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE'); // Set method to DELETE
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$output = curl_exec($ch);
		if (curl_errno($ch)) {
			// Handle error
			echo 'Curl error: ' . curl_error($ch);
		}
		curl_close($ch);
		return $output;
	}
}
