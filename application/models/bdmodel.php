<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class bdModel extends CI_Model
{
    var $titre;
    var $auteur;
    var $prix;
    var $hero;
    var $genre;
    var $editeur;
    var $fournisseur;
 

    function __construct($id=FALSE)
    {
        parent::__construct();
        $query = $this ->db->select("bd.titre as titre, bd.prix_public as prix, GROUP_CONCAT(a.nom SEPARATOR ' / ') as auteur, ref as couverture, bd.ref_fournisseur as ISBN, bd.resume as resume, hero.nom as hero, genre.nom as genre, fournisseur.nom as fournisseur, editeur.nom as editeur ")
        ->from("bd")
        ->where("bd.id=$id")
        ->join("auteur_bd","bd.id=auteur_bd.bd_id")
        ->join("auteur a", "auteur_bd.auteur_id=a.id")
        ->join("hero", "hero.id=bd.hero_id")
        ->join("genre","genre.id=bd.genre_id")
        ->join("fournisseur", "fournisseur.id=bd.fournisseur_id")
        ->join("editeur", "editeur.id=bd.editeur_id")

        ->get();

        $result = $query->result();
        $this->titre = $result[0]->titre  ;
        $this->auteur = $result[0]->auteur;
        $this->prix = $result[0]->prix;
        $this->hero = $result[0]->hero  ;
        $this->genre = $result[0]->genre  ;
        $this->editeur = $result[0]->editeur  ;
        $this->fournisseur = $result[0]->fournisseur  ;

    }

    public static function getAll()
    {
        $CI = get_instance();
        $query = $CI->db->select("bd.id as id, bd.titre as titre, bd.prix_public as prix, GROUP_CONCAT(a.nom SEPARATOR ' / ') as auteur, ref as couverture")
        ->from("bd")
        ->join("auteur_bd","bd.id=auteur_bd.bd_id")
        ->join("auteur a", "auteur_bd.auteur_id=a.id")
        ->order_by("titre")
        ->group_by("titre")
        ->get();

        $result = $query->result();
        return $result;
    }

    public static function getAlbum($id)
    {
        $CI = get_instance();
        $query = $CI->db->select("bd.titre as titre, bd.prix_public as prix, GROUP_CONCAT(a.nom SEPARATOR ' / ') as auteur, ref as couverture, bd.ref_fournisseur as ISBN, bd.resume as resume, hero.nom as hero, genre.nom as genre, fournisseur.nom as fournisseur, editeur.nom as editeur ")
        ->from("bd")
        ->where("bd.id=$id")
        ->join("auteur_bd","bd.id=auteur_bd.bd_id")
        ->join("auteur a", "auteur_bd.auteur_id=a.id")
        ->join("hero", "hero.id=bd.hero_id")
        ->join("genre","genre.id=bd.genre_id")
        ->join("fournisseur", "fournisseur.id=bd.fournisseur_id")
        ->join("editeur", "editeur.id=bd.editeur_id")

        ->get();

        $result = $query->result();
        return $result;
    }
}

?>