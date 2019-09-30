<?php 


class Employee {

private $names;
private $departments;
private $designations;
private $shifts;


function __construct($name,$department,$designation,$shift)
{
    $this->names = $name;
    $this->departments = $department;
    $this->designations = $designation;
    $this->shifts = $shift;
}

function addName(){
    return $this->names;
}

function addDepartment(){
return $this->departments;
}

function addDesignation(){
    return $this->designations;
    }

function addShifts(){
        return $this->shifts;
        }    


// function addEmployee(){

// }



}


?>