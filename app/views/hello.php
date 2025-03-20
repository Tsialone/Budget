<?php

use app\connection\UtilDb;
use app\models\Departement;

$con  = UtilDb::getCon();
$departement = new Departement(2 , "cc");
// $departement->save();
$all_dept = $departement->findAll();
print_r($all_dept); 
echo "hello ";