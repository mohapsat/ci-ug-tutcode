<?php

Class News_model extends CI_Model { //just like a controller extends the ci_model class

	public function __construct(){

		$this->load->database(); //loads the database library

	}

	public function get_news($slug = FALSE) {

		if ($slug == FALSE) {
			
			$query = $this->db->get('news');
			//produces sql: 
			return $query->result_array();
			//produces sql :
		}

		$query = $this->db->get_where('news',array('slug' => $slug));
			//produces sql:

		return $query->row_array();
			//produces sql:

	}


	public function set_news() {

		$this->load->helper('url');

		$slug = url_title($this->input->post('title'),'dash', TRUE);

		$data = array(
			
			'title' => $this->input->post('title')
			,'slug' => $slug
			,'text' => $this->input->post('text')

			);

		return $this->db->insert('news',$data);


		// $sql  = $this->db->get_compiled_insert('news',$data);
		// // echo $sql;
		// print_r($sql);


	}


}