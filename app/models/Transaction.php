<?php
namespace app\models;


require_once 'app/models/GenericClass.php';
use app\models\GenericClass;
class Transaction extends GenericClass
{
    protected $idUtilisateur ;
    protected $idBudget;
    public function __construct($id = null, $idUtilisateur  = null , $idBudget = null)
    {
            parent::__construct($id);
            $this->setIdUtilisateur($idUtilisateur);
            $this->setIdBudget($idBudget);
    }
    public function getIdUtilisateur(){
        return $this->idUtilisateur;
    }
    public function setIdUtilisateur($idUtilisateur){
        $this->idUtilisateur = $idUtilisateur;
    }
    public function getIdBudget(){
        return $this->idBudget;
    }
    public function setIdBudget($idBudget){
        $this->idBudget = $idBudget;
    }
}
?>
