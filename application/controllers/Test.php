<?php
defined('BASEPATH') or exit('No direct script access allowed');

Class Test extends CI_Controller{

	public function index()
	{
		$this->load->model('test_model', 'objectname');
		$data['fname'] = $this->objectname->firstName();

		$this->load->view('test/index', $data);
	}

}
