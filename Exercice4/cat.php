<?php

class Cat{

  private $firstname;
  private $age;
  private $color;
  private $sex;
  private $race;


  public function getFirstname(){
    return $this->firstname;
  }
  public function getAge(){
    return $this->age;
  }
  public function getColor(){
    return $this->color;
  }
  public function getSex(){
    return $this->sex;
  }
  public function getRace(){
    return $this->race;
  }

  public function setFirstname(string $firstname){
    $this->firstname = $firstname;
    return $this;
  }
  public function setAge(int $age){
    $this->age = $age;
    return $this;
  }
  public function setColor(string $color){
    $this->color = $color;
    return $this;
  }
  public function setSex(string $sex){
    $this->sex = $sex;
    return $this;
  }
  public function setRace(string $race){
    $this->race = $race;
    return $this;
  }

  public function getInfo(){
    
  }

  public static function fromArray(array $definition){
    $cat = new Cat();
    $cat->setFirstname($definition['firstname'] ?? '');
    $cat->setAge((int)$definition['age'] ?? '');
    $cat->setColor($definition['color'] ?? '');
    $cat->setSex($definition['sex'] ?? '');
    $cat->setRace($definition['race'] ?? '');

    return Cat();

  }
}



 ?>
the constructor to instantiate
the class.
Add a getInfo() method to return all of the properties as an array.
In a new file, instantiate the class so that you can display 3 different cats and display the
result using the previously created getInfo() method. -->

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Exercice 4 </title>
   </head>
   <body>
     <h1>Exercice 4 - A cat that has class ...</h1>
   </body>
 </html>
