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

    public static function getAll()
    {
        $CI = get_instance();
        $query = $CI->db->select("bd.titre as titre, bd.prix_public as prix, a.nom as auteur, ref as couverture")
        ->from("bd")
        ->join("auteur_bd","bd.id=auteur_bd.bd_id")
        ->join("auteur a", "auteur_bd.auteur_id=a.id")
        ->get();

        $result = $query->result();
        return $result;
    }
}

?>