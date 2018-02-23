<?php

class Pokemon_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getList()
	{
		$query = $this->db->get('pokemon', 30);

		return $query->result();
	}

	public function get($id)
	{
		$query = $this->db->get_where('pokemon', ['id' => $id]);
		return $query->result()[0] ?? null;
	}
}
