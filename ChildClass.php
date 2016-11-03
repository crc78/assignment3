<?php 

  require "ParentClass.php";
  
  class ChildClass extends ParentClass {
    public $name;
    public $album;
    public $genre;

    public function __construct($name, $album){
      $this->name = $name;
      $this->album = $album;
    }

    public function setGenre($newGenre){
      $this->genre = $newGenre;
    }

    public function getGenre(){
      return $this->genre;
    }

    public function printGenre(){
      return "Their genre is " . $this->getGenre();
    }

    public function printName(){
      return $this->getName();
    }

    public function __unset($property){
      unset($this->$property);
    }
  }
