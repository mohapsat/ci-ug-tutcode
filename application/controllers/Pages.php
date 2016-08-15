<?php

class Pages extends CI_Controller {

	public function view ($page = 'home') {


		if (! file_exists(APPPATH.'views/pages_z/'.$page.'.php')) {

			show_404();
		}

		$data['title'] = ucfirst($page);

		$this->load->view('templates/header', $data);
		$this->load->view('pages_z/'.$page, $data);
		$this->load->view('/templates/footer', $data);
		
	}
}


