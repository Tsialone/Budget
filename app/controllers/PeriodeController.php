<?php


namespace app\controllers;

use app\models\Periode;
use app\models\Rubrique;
use app\models\UsersModel;

// use app\models\ProductModel;
use Flight;

class BudgetController
{
    public function __construct() {}

    public function soldeFin($annee)
    {
        $period = new Periode(Flight::db());
        $soldeFin = array();
        for ($i = 0; $i < 12; $i++) {
            $soldeFin[$i] =  $period->soldeFin($i + 1, $annee);
        }
        return $soldeFin;
    }
}
