<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailAlbum extends CI_Controller
{
	public function index($id)
	{
        echo "Id de la BD : $id<br>";
        $this->load->model("bdmodel");
        
        $this->load->view('detail_album',['album'=>$this->bdmodel->by_id($id)[0]]);
	}
}
