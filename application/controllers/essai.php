<?php

class Essai extends CI_Controller 
{
	public function coucou()
		{   echo ("Je dis Coucou");	}
	public function aurevoir()
        { echo ("Je dis Au revoir"); 	}
    public function index ()    
    {
        $data ['coucou'] = 'coucou';
        $data ['byebye'] ='au revoir';
        $this->load->view("essai_view.php", $data);

    }
}

?>
