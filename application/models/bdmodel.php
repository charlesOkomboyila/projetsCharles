<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class bdModel extends CI_Model
{

    function by_id($id)
    {
        $query = $this->db->select("bd.titre as titre, bd.prix_public as prix, GROUP_CONCAT(a.nom SEPARATOR ' / ') as auteur, ref as couverture, bd.ref_fournisseur as ISBN, bd.resume as resume, hero.nom as hero, genre.nom as genre, fournisseur.nom as fournisseur, editeur.nom as editeur ")
        ->from("bd")
        ->where("bd.id=$id")
        ->join("auteur_bd","bd.id=auteur_bd.bd_id")
        ->join("auteur a", "auteur_bd.auteur_id=a.id")
        ->join("hero", "hero.id=bd.hero_id")
        ->join("genre","genre.id=bd.genre_id")
        ->join("fournisseur", "fournisseur.id=bd.fournisseur_id")
        ->join("editeur", "editeur.id=bd.editeur_id")
        ->get();

        return $query->result();
    }

    public function getAll()
    {
        $query = $this->db->select("bd.id as id, bd.titre as titre, bd.prix_public as prix, GROUP_CONCAT(a.nom SEPARATOR ' / ') as auteur, ref as couverture")
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