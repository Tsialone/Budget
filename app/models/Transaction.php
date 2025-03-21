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

    public function validateTransaction (){
        $temp_budget = new Budget();
        $his_budget = $temp_budget->getById($this->getIdBudget());
        $his_budget->setValidation(1);
        $his_budget->update();
        $this->delete();
    }

    public function denyTransaction (){
        $temp_budget = new Budget();
        $his_budget = $temp_budget->getById($this->getIdBudget());
        $his_budget->update();
        $this->delete();
        $his_budget->delete();
    }
}
?>
