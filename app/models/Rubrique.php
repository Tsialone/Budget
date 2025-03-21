<?php
namespace app\models;


require_once 'app/models/GenericClass.php';
use app\models\GenericClass;
class Rubrique extends GenericClass
{
    protected $categorie;

    public function __construct($id = null, $nom = null , $categorie = null)
    {
            parent::__construct($id, $nom);
            $this->setCategorie($categorie);
    }
    public function setCategorie ($categorie){
        $this->categorie = $categorie;
    }
    public function getCategorie (){
        return $this->categorie;
    }
}
?>
