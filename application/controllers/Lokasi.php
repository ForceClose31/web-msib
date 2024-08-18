<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property CI_Input $input
 */

class Lokasi extends CI_Controller
{
    public function create()
    {

        $title = ['title' => "Create Data Location"];

        $this->load->view('templates/header', $title);
        $this->load->view('lokasi_create');
        $this->load->view('templates/footer');
    }

    public function store()
    {
        if ($this->input->post()) {
            $lokasi_data = array(
                'namaLokasi' => $this->input->post('nama_lokasi'),
                'negara' => $this->input->post('negara'),
                'provinsi' => $this->input->post('provinsi'),
                'kota' => $this->input->post('kota'),
            );

            $response = call_spring_api('POST', 'http://localhost:8080/lokasi', $lokasi_data);
            if ($response) {
                redirect('welcome');
            }
        }
    }

    public function edit($id)
    {
        $lokasi = call_spring_api('GET', "http://localhost:8080/lokasi/$id");
        $data['lokasi'] = $lokasi;
        $title = ['title' => "Edit Data Location"];

        $this->load->view('templates/header', $title);
        $this->load->view('lokasi_edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        if ($this->input->post()) {
            $lokasi_data = array(
                'namaLokasi' => $this->input->post('nama_lokasi'),
                'negara' => $this->input->post('negara'),
                'provinsi' => $this->input->post('provinsi'),
                'kota' => $this->input->post('kota'),
            );

            $response = call_spring_api('PUT', "http://localhost:8080/lokasi/$id", $lokasi_data);
            if ($response) {
                redirect('welcome');
            }
        }
    }
    
    public function delete($id)
    {
        $response = call_spring_api('DELETE', "http://localhost:8080/lokasi/$id");
        redirect('welcome');
    }
}
