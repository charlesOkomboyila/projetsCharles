<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Albums extends CI_Controller
{
	public function index()
	{
        $id = 0;
        $this->load->model('bdmodel');
        $list = $this->bdmodel->getAll();
        $this->load->view('liste_albums',['list'=>$list]);
        /*echo'<pre>';
        print_r(bdmodel::getAll());
        echo'</pre>';*/

	}
}
