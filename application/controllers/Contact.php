<?php

class Contact extends CI_Controller
{
	public function whoAreWe()
	{
		$data['title'] = 'Qui somme nous ?';

		$this->load->view('staticPages/whoAreWe', $data);
	}
}
