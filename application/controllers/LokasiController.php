<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property CI_Input $input
 */

class LokasiController extends CI_Controller
{

    public function index()
    {
        $response = call_spring_api('GET', 'http://localhost:8080/lokasi');
        $data['lokasi_list'] = $response;
        $this->load->view('lokasi_view', $data);
    }

    public function create()
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
                redirect('lokasi');
            }
        }

        $this->load->view('lokasi_create');
    }

    public function edit($id)
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
                redirect('lokasi');
            }
        } else {
            $response = call_spring_api('GET', "http://localhost:8080/lokasi/$id");
            $data['lokasi'] = $response;
            $this->load->view('lokasi_edit', $data);
        }
    }

    public function delete($id)
    {
        $response = call_spring_api('DELETE', "http://localhost:8080/lokasi/$id");
        redirect('lokasi');
    }
}
