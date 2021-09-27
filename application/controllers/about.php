<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class about extends CI_Controller {

	public function index()
	{
		$data = array (
			'isi'   => 'v_about'
		);
		$this->load->view('konten/c_wrap', $data,false);
	}
}