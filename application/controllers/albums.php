<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Albums extends CI_Controller
{
    public function liste()
    {
        echo 'Liste des Bandes dessinées';
    }

	
	public function index()
	{
        $this->load->view('liste_albums');
	}
}
