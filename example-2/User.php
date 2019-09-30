<?php

class User {

 

 function __construct($name,$age)
 {
     $this->name = $name;
     $this->age = $age;
 }

 function getName(){
     return $this->name;
     
 }
 function getAge(){
    return $this->age;
    
}

function isAdult(){

    return $this->age >= 18?"An Adult":"Not Adult";

}

function makeAdult (){

return $this->age+10;

}

}
