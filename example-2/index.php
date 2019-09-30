<?php

require "User.php";
require "Employee.php";

$user = new User("Masum", 38);

echo "<p>".$user->getName()."</p>";
echo "<p>".$user->getAge()."</p>";

echo "<p>".$user->isAdult()."</p>";


$member = new User("Eva",29);

echo "<p>".$member->getName()."</p>";
echo "<p>".$member->getAge()."</p>";

echo "<p>".$member->isAdult()."</p>";
echo "<p>".$member->makeAdult()."</p>";


$employee = new Employee("Riba","Web Department", "Web Devleoper", "9-5");

echo "New Employee has joined. Hello ". $employee->addName().", Department ".$employee->addDepartment()." . Her Designation is ". $employee->addDesignation()." . She will work from ".$employee->addShifts()."."; 



?>