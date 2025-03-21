<?php
namespace app\models;


require_once 'app/models/GenericClass.php';
use app\models\GenericClass;
class Utilisateur extends GenericClass
{
    public function __construct($id = null, $nom = null)
    {
            parent::__construct($id, $nom);
    }
}
?>
