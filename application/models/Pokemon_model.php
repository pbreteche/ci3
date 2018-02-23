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

		$pokemon = $query->result()[0] ?? null;

		if ($pokemon) {
			$this->db->select('*');
			$this->db->from('skill s');
			$this->db->join('has_skill hs', 's.id = hs.skill_id');
			$this->db->where('hs.pokemon_id', $pokemon->id);
			$query = $this->db->get();
			$pokemon->skills = [];
			foreach ($query->result() as $skill) {
				$pokemon->skills[] = $skill;
			}
		}
		return $pokemon;
	}
}
