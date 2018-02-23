<?php

class Pokemon_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('pokemon');
	}

	public function getList()
	{
		$query = $this->db->get('pokemon', 30);

		return $query->result(get_class($this->pokemon));
	}
}
