<?php

namespace app\models;


require_once 'app/models/GenericClass.php';

use app\models\GenericClass;

class Periode extends GenericClass
{
    private $db;


    protected $mois;
    protected $annee;
    protected $idBudget;
    protected $idDepartement;
    public function __construct($db, $id = null, $mois = null, $annee = null, $idBudget = null, $idDepartement = null)
    {
        $this->db = $db;
        parent::__construct($id);
        $this->setMois($mois);
        $this->setAnnee($annee);
        $this->setIdBudget($idBudget);
        $this->setIdDepartement($idDepartement);
    }
    public function soldeFin($mois, $annee)
    {
        $donnee = array();
        $donnee[0] = $mois;
        $donnee[1] = $annee;
        $sql = "SELECT SUM(R.categorie*B.prevision)AS prev,SUM(R.categorie*B.realisation),SUM(B.prevision-B.realisation) AS real  FROM Periode AS P JOIN Budget AS B on B.id = P.idBudget JOIN Rubrique AS R on B.idRubrique = R.id WHERE mois = ? AND annee = ?";
        $pstmt = $this->db->prepare($sql);
        $pstmt->execute($donnee);

        return $pstmt->fetchAll();
    }
    public function getMois()
    {
        return $this->mois;
    }
    public function getAnnee()
    {
        return $this->annee;
    }
    public function getIdBudget()
    {
        return $this->idBudget;
    }
    public function getIdDepartement()
    {
        return $this->idDepartement;
    }

    public function setIdDepartement($idDepartement)
    {
        $this->idDepartement = $idDepartement;
    }
    public function setMois($mois)
    {
        $this->mois = $mois;
    }
    public function setIdBudget($idBudget)
    {
        $this->idBudget = $idBudget;
    }
    public function setAnnee($annee)
    {
        $this->annee = $annee;
    }
}
