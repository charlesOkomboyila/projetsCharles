<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class bdModel extends CI_Model
{
    

    public static function getAll()
    {
        $CI = get_instance();
        $query = $CI->db->select("bd.titre as titre, bd.prix_public as prix, GROUP_CONCAT(a.nom SEPARATOR ' / ') as auteur, ref as couverture")
        ->from("bd")
        ->join("auteur_bd","bd.id=auteur_bd.bd_id")
        ->join("auteur a", "auteur_bd.auteur_id=a.id")
        ->order_by("titre")
        ->group_by("titre")
        ->get();

        $result = $query->result();
        return $result;
    }
}

?>