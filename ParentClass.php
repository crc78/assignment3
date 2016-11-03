<?php

  class ParentClass {
    private $n;
    private $a;

    public function __construct($n, $a){
      $this->name = $n;
      $this->album = $a;
    }

    public function getName(){
      return $this->name;
    }

    public function getAlbum(){
      return $this->album;
    }

    public function setName($nam){
      $this->name = $nam;
    }

    public function __toString(){
      $theBand = "<h1>" . $this->getName() . "</h1>";
      $recc = "I recommend their album titled " . $this->getAlbum();

      return $theBand . $recc . "<br>";
    }
  }
