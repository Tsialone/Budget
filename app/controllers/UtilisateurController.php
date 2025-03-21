<?php


namespace app\controllers;

use app\models\DepartementUtilisateur;
use app\models\Rubrique;
use app\models\UsersModel;

// use app\models\ProductModel;
use Flight;

class UtilisateurController
{
    public function __construct() {}

    public function previsionBudgetair()
    {
        $test_temp =   new DepartementUtilisateur();
        $all_temp = $test_temp->findAll();
        $data = ['annee' => 2024,  'idDepartement' => 1, 'all_temp' => $all_temp];
        Flight::render("prevision-budgetaire", $data);
    }

    //     public function alert ($message)
    //     {
    //         echo "<script> alert(". $message .")  </script>";
    //     }

    //     public function erreur ($redirection , $erreur)
    //     {   
    //         $data = ['erreur' => $erreur];
    //         Flight::render("login" , $data);
    //     }

    //     public function formEnfant() {
    //         session_start();
    //         $data = ['page' => "formulaire-enfant"];
    //         Flight::render('template', $data);
    //     }

    //     public function loginFormulaire()
    //     {   
    //         Flight::render('user-login');
    //     }


    //     public function singinFormulaire()
    //     {
    //         Flight::render('singin');
    //     }


    //     public function insertDepense () {


    //         Flight::redirect('../../user-insert-depense-formulaire');
    //     }

    //     public function loginverify()
    //     {
    //         if (session_status() === PHP_SESSION_NONE) {
    //             session_start();
    //         }
    //         if (isset($_SESSION['user'])) {
    //             unset($_SESSION['user']);
    //         }
    //         $email = $_POST['email'];
    //         $password = $_POST['pass'];
    //         $users = Flight::usersModel()->getUser($email, $password);
    //         $data = ["erreur"  => "utilisateur non trouver" ];

    //         if ($users) {
    //             $_SESSION['user'] = $users;
    //             $data = ["page" => "user-home"];
    //             Flight::render('user-template', $data);
    //             exit;
    //         }
    //         Flight::render('user-login', $data);
    //     }
    //     public function home()
    //     {
    //         session_start();
    //         $data = ["page" => "user-home"];
    //         Flight::render('user-template', $data);
    //     }


    //    public  function deconnection ()
    //    {
    //     Flight::usersModel()->deconnection();
    //     Flight::render('user-login');
    //    }

    //     public function singinverify()
    //     {
    //         $email = $_POST['email'];
    //         $name = $_POST['name'];
    //         $password = $_POST['pass'];
    //         $exist = Flight::usersModel()->getIfExistedUser($email, $password);
    //         $data = ["erreur"  => 1];
    //         if (!$exist) {
    //             Flight::usersModel()->insertUser($name, $email, $password);
    //             Flight::render('login');
    //             exit;
    //         }
    //         Flight::render('singin', $data);
    //     }


}
