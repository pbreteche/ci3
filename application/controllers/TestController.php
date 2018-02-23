<?php

class TestController extends CI_Controller
{
	public function whoAreWe($title = null)
	{
		$data['title'] = $title ?? 'Qui somme nous ?';

		$this->load->view('templates/header', $data);
		$this->load->view('staticPages/whoAreWe', $data);
		$this->load->view('templates/footer');
	}

	public function testDb()
	{
		$this->load->database();

		$query = $this->db->query('SELECT p.id, p.name, p.size, p.weight, p.gender, p.category FROM pokemon p LIMIT 30');

		$result = '';
		require_once __DIR__ . '/../models/Pokemon.php';
		foreach($query->result(Pokemon::class) as $poke) {
			$result .= $poke->getName() . ' ';
		}

		$this->load->view('templates/header');
		$this->load->view('staticPages/whoAreWe', ['title' => $result]);
		$this->load->view('templates/footer');
	}

	public function testModel()
	{
		$this->load->model('pokemon_model');
		$pokemons = $this->pokemon_model->getList();

		$this->load->view('templates/header');
		$this->load->view('pokemons/index', ['pokemons' => $pokemons]);
		$this->load->view('templates/footer');
	}
}
