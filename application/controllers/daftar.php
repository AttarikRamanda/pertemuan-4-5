<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class daftar extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data = array (
            'title' => 'beranda',
			'isi'   => 'v_daftar'
		);
		$this->load->view('konten/c_wrap', $data,false);
	}
    public function cetak()
    {
        $this->form_validation->set_rules('nama','Nama Matakuliah','required|min_length[3]', [
            'required' => 'nama matakuliah harus diisi',
            'min_lenght' => 'nama terlalu pendek']);

        if ($this->form_validation->run() != true) {
            
                $data = array (
                    'title' => 'beranda',
                    'isi'   => 'v_daftar'
                );
                $this->load->view('konten/c_wrap', $data,false);
            

        } else {
            $dataa = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks')
            ];
            
                $data = array (
                    'title' => 'beranda',
                    'isi'   => 'v_daftar'
                );
                $this->load->view('konten/c_wrap', $data, $dataa,false);
            
        }
        
    }
}
