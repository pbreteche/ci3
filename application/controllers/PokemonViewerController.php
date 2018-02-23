<?php

class PokemonViewerController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->model('pokemon_model');
		$pokemons = $this->pokemon_model->getList();

		$this->load->view('templates/header', ['title' => 'Le super site des Pokemons !']);
		$this->load->view('pokemons/index', ['pokemons' => $pokemons]);
		$this->load->view('templates/footer');
	}
	public function detail($id)
	{
		$this->load->model('pokemon_model');
		$pokemon = $this->pokemon_model->get($id);

		if (!$pokemon) {
			show_404('Ce pokemon n\'est pas celui que vous cherchez');
		}

		$this->load->view('templates/header', ['title' => $pokemon->name]);
		$this->load->view('pokemons/detail', ['pokemon' => $pokemon]);
		$this->load->view('templates/footer');
	}
}
