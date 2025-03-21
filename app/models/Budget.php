<?php

namespace app\models;


require_once 'app/models/GenericClass.php';

use app\models\GenericClass;

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
}
