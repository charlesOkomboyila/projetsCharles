<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailAlbum extends CI_Controller
{
	public function index($id)
	{
                $this->load->model("bdmodel");
                $this->bdmodel->initialise($id);
                $this->load->view('detail_album',['album'=>$this->bdmodel]);
	}
}
