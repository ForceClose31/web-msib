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
        $this->load->view('proyek_create', $data);
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
                'locations' => $this->input->post('locations') 
            );

            $response = call_spring_api('POST', 'http://localhost:8080/proyek', $proyek_data);
            if ($response) {
                redirect('welcome');
            }
        }
    }

    public function edit($id)
    {
        $proyek = call_spring_api('GET', "http://localhost:8080/proyek/$id");
        $locations = call_spring_api('GET', 'http://localhost:8080/lokasi');
        $data = [
            'proyek' => $proyek,
            'locations' => $locations
        ];
        $this->load->view('proyek_edit', $data);
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
                'locations' => $this->input->post('locations') 
            );

            $response = call_spring_api('PUT', "http://localhost:8080/proyek/$id", $proyek_data);
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
