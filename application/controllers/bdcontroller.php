<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class bdController extends CI_Controller
{
    public function index()
    {
        $this->load->model('bdModel');
        $data = $this->bdModel->getAllBd();
        $this->load->view('listebd',['data'=>$data]);
    }
}

?>