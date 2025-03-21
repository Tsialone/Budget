<?php
namespace app\models;


require_once 'app/models/GenericClass.php';
use app\models\GenericClass;
class Utilisateur extends GenericClass
{
    protected $nom;
    public function __construct($id = null, $nom = null)
    {
            parent::__construct($id);
            $this->setNom($nom);
    }
    public function getNom(){
        return $this->nom;
    }
    public function setNom($nom){  
        $this->nom = $nom;
    }
}
?>
