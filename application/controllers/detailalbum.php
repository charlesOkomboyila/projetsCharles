<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailAlbum extends CI_Controller
{
	public function index($id)
	{
                $this->load->model("bdmodel");
                $data['album'] = $this->bdmodel->by_id($id);
                $this->load->view('detail_album',['album'=>$data['album'][0]]);
	}
}
