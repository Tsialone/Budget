<?php
namespace app\models;


require_once 'app/models/GenericClass.php';
use app\models\GenericClass;
class Rubrique extends GenericClass
{
    protected $categorie;
    protected $nom;

    public function __construct($id = null, $nom = null , $categorie = null)
    {
            parent::__construct($id);
            $this->setCategorie($categorie);
            $this->setNom($nom);
    }
    public function setCategorie ($categorie){
        $this->categorie = $categorie;
    }
    public function getCategorie (){
        return $this->categorie;
    }
    public function getNom (){
        return $this->nom;
    }
    public function setNom($nom){
        $this->nom = $nom;
    } 
}
?>
