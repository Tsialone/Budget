<?php 
namespace app\models;
abstract class BaseObject {
    protected $id;
    protected $nom;

    public function __construct($id = null, $nom = null) {
        $this->id = $id;
        $this->nom = $nom;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    abstract public function findAll();
    abstract public function save();
    abstract public function getById($id);
    abstract public function update();
    abstract public function delete();
    abstract public function findAllPaginated($index, $count);
}