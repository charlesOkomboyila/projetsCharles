<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class bdModel extends CI_Model
{
    public function getAllBd()
    {
        return array("bd1"=>array("nom"=>"Toto","Auteur"=>"Auteur de Toto","Prix"=>12),
        "bd2"=>array("nom"=>"Titi","Auteur"=>"Auteur de Titi","Prix"=>12.5),
        "bd3"=>array("nom"=>"Tata","Auteur"=>"Auteur de Tata","Prix"=>11)); 
    }
}

?>