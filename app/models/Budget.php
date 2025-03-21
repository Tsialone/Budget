<?php

namespace app\models;


require_once 'app/models/GenericClass.php';

use app\models\GenericClass;
use Flight;

class Budget extends GenericClass
{
    protected $idRubrique;
    protected $prevision;
    protected $realisation;
    protected $ecart;
    protected $validation;

    public function __construct($id = null, $idRubrique = null, $prevision = null, $realisation  = null, $ecart = null, $validation = null)
    {
        parent::__construct($id);
        $this->setIdRubrique($idRubrique);
        $this->setPrevision($prevision);
        $this->setRealisation($realisation);
        $this->setEcart($ecart);
        $this->setValidation($validation);
    }
    public function getIdRubrique()
    {
        return $this->idRubrique;
    }
    public function setIdRubrique($idRubrique)
    {
        $this->idRubrique = $idRubrique;
    }
    public function getPrevision()
    {
        return $this->prevision;
    }
    public function setPrevision($prevision)
    {
        $this->prevision = $prevision;
    }
    public function getRealisation()
    {
        return $this->realisation;
    }
    public function setRealisation($realisation)
    {
        $this->realisation = $realisation;
    }
    public function getEcart()
    {
        return $this->ecart;
    }
    public function setEcart($ecart)
    {
        $this->ecart = $ecart;
    }
    public function getValidation()
    {
        return $this->validation;
    }
    public function setValidation($validation)
    {
        $this->validation = $validation;
    }

    public function getBudgetInitial($mois, $annee)
    {

        $mois--;
        if ($mois < 1) {
            $mois = 12;
            $annee--;
        }

        $listePeriode = (new Periode(Flight::db()))->findAll();
        $budgetInitial = new Budget(null, 0, 0, 0, 0, true);
        foreach ($listePeriode as $periode) {
            if ($periode->getMois() == $mois && $periode->getAnnee() == $annee) {
                $budget = new Budget();
                $budget = $budget->getById($periode->getIdBudget());
                if ($budget->getIdRubrique() == 6 && $budget->getValidation()) {
                    $budgetInitial = $budget;
                    break;
                }
                if ($budget->getValidation()) {
                    $budgetInitial = $budget;
                }
            }
        }
        return $budgetInitial;
    }

    public function demandeValidation($idUtilisateur)
    {
        $his_id = $this->getId();
        $temp_transaction = new Transaction();
        $all_transaction = $temp_transaction->findAll();
        if (is_null($his_id)) {
            $his_id = count($this->findAll()) + 1;
            $this->setId($his_id);
            $this->save();
            // var_dump("ato");
            $transaction = new Transaction(count($all_transaction) + 1, $idUtilisateur, $his_id);
            $transaction->save();
        } else {
            if (!$this->haveTransaction()) {
                $transaction = new Transaction(count($all_transaction) + 1, $idUtilisateur, $his_id);
                $transaction->save();
            }
            $this->update();
        }
    }
    public function haveTransaction()
    {
        $temp_transaction = new Transaction();
        $all_transaction = $temp_transaction->findAll();

        foreach ($all_transaction as $transaction) {
            if ($transaction->getIdBudget() == $this->getId()) {
                return true;
            }
        }
        return false;
    }
}
