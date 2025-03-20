<?php

namespace app\models;
use Flight;
use PDO;
class Utilisateur
{
    private $db;
    public function __construct($db)
    {
        $this->db = $db;
    }
   

    public function getAdmin($email, $password)
    {
        $stmt = $this->db->prepare("SELECT * FROM t_user WHERE email = :email AND password = :password AND admin=1");
        $stmt->execute(['email' => $email, 'password' => $password]);
        return $stmt->fetch();
    }

    public function insertAdmin($name, $email, $password)
    {
        $stmt = $this->db->prepare("INSERT INTO t_users (email , name , password , admin) VALUES (:email , :name , :password , 1)");
        $stmt->execute(['name' => $name, 'email' => $email, 'password' => $password]);
    }
}