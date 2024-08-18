<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * @property CI_Input $input
 */
class Proyek extends CI_Controller
{
    public function create()
    {
        $locations = call_spring_api('GET', 'http://localhost:8080/lokasi');
        $data['locations'] = $locations;

        $title = ['title' => "Create Data Project"];

		$this->load->view('templates/header', $title); 
        $this->load->view('proyek_create', $data);
		$this->load->view('templates/footer');
    }

    public function store()
    {
        if ($this->input->post()) {
            $proyek_data = array(
                'namaProyek' => $this->input->post('nama_proyek'),
                'client' => $this->input->post('client'),
                'tglMulai' => $this->input->post('tgl_mulai'),
                'tglSelesai' => $this->input->post('tgl_selesai'),
                'pimpinanProyek' => $this->input->post('pimpinan_proyek'),
                'keterangan' => $this->input->post('keterangan'),
            );

            $lokasiIds = $this->input->post('locations');
            if (!is_array($lokasiIds)) {
                $lokasiIds = [];
            }

            $formatted_lokasiIds = array_map(function ($id) {
                return ['id' => intval($id)];
            }, $lokasiIds);

            $json_data = json_encode([
                'proyek' => $proyek_data,
                'lokasiIds' => $formatted_lokasiIds
            ]);

            log_message('debug', 'JSON Data: ' . $json_data);

            $headers = array(
                'Content-Type: application/json',
                'Accept: application/json'
            );

            $response = call_spring_api('POST', 'http://localhost:8080/proyek', $json_data);
            if ($response) {
                redirect('welcome');
            }
        }
    }

    public function edit($id)
    {
        $proyek = call_spring_api('GET', "http://localhost:8080/proyek/$id");
        $locations = call_spring_api('GET', 'http://localhost:8080/lokasi');

        if (!isset($proyek['locations'])) {
            $proyek['locations'] = [];
        }

        $data = [
            'proyek' => $proyek,
            'locations' => $locations
        ];

        $title = ['title' => "Edit Data Project"];

        $this->load->view('templates/header', $title); 
        $this->load->view('proyek_edit', $data);
		$this->load->view('templates/footer');
    }


    public function update($id)
    {
        if ($this->input->post()) {
            $proyek_data = array(
                'namaProyek' => $this->input->post('nama_proyek'),
                'client' => $this->input->post('client'),
                'tglMulai' => $this->input->post('tgl_mulai'),
                'tglSelesai' => $this->input->post('tgl_selesai'),
                'pimpinanProyek' => $this->input->post('pimpinan_proyek'),
                'keterangan' => $this->input->post('keterangan'),
            );

            $lokasiIds = $this->input->post('locations');
            if (!is_array($lokasiIds)) {
                $lokasiIds = [];
            }

            $formatted_lokasiIds = array_map(function ($id) {
                return ['id' => intval($id)];
            }, $lokasiIds);

            $json_data = json_encode([
                'proyek' => $proyek_data,
                'lokasiIds' => $formatted_lokasiIds
            ]);

            $headers = array(
                'Content-Type: application/json',
                'Accept: application/json'
            );

            $response = call_spring_api('PUT', "http://localhost:8080/proyek/$id", $json_data);
            if ($response) {
                redirect('welcome');
            }
        }
    }

    public function delete($id)
    {
        $response = call_spring_api('DELETE', "http://localhost:8080/proyek/$id");
        redirect('welcome');
    }
}
