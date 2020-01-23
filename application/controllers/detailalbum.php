<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailAlbum extends CI_Controller
{
   
    

	
	public function index()
	{
        $this->load->model("bdmodel");
        $album = bdmodel::getAlbum(1);
        
        $this->load->view('detail_album',['album'=>$album[0]]);
        /*echo'<pre>';
        print_r(bdmodel::getAll());
        echo'</pre>';*/

	}
}
