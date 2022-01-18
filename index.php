<?php

class Person {

    private $name;
    private $surname;
    private $dateOfBirth;

    public function __construct($name, $surname) {
        
        $this-> setName($name);
        $this-> setSurname($surname);
    }
    
    // set get name
    public function getName() {

        return $this-> name;
    }

    public function setName($name) {

        $this-> name = $name;
    }

    // set get surname
    public function getSurname() {

        return $this-> surname;
    }

    public function setSurname($surname) {

        $this-> surname = $surname;
    }

    // set get date of birth
    public function getDateOfBirth() {

        return $this-> dateOfBirth;
    }

    public function setDateOfBirth($dateOfBirth) {

        $this-> dateOfBirth = $dateOfBirth;
    }

    
    public function printFullPerson() {

        return $this-> getName() . " "
            . $this-> getSurname() . ": " 
            . $this-> getDateOfBirth();
    }

    public function __toString() {
        
        return $this-> printFullPerson();
    }
}

class Employee extends Person {

    private $salary;
    private $dateOfHiring;

    public function __construct($name, $surname, $salary) {
        
        parent::__construct($name, $surname);
        $this-> setSalary($salary);
    }

    // set get salary
    public function getSalary()
    {

        return $this->salary;
    }

    public function setSalary($salary)
    {
        if ($salary >= 0)
            $this-> salary = $salary;
        else
            $this-> salary = 200;
    }

    // set get date of hiring
    public function getDateOfHiring()
    {

        return $this-> dateOfHiring;
    }

    public function setDateOfHiring($dateOfHiring)
    {

        $this-> dateOfHiring = $dateOfHiring;
    }


    public function printFullEmployee() {

        return 
            parent::getName() . " " 
            . parent::getSurname() . ": " 
            . $this-> getSalary() . " (" 
            . $this-> getDateOfHiring() . ")";
    }

    public function __toString() {
        
        return $this -> printFullEmployee();
    }
}

$p1 = new Person("Marco","Rossi");
$p2 = new Person("Fabio","Verdi");

$p1 -> setDateOfBirth("1996");
$p2 -> setDateOfBirth("1998");

$e1 = new Employee("Giovanni", "Ferri", 1000);
$e2 = new Employee("Martina", "Bianchi", -20);

$e1 -> setDateOfHiring("2015");
$e2 -> setDateOfHiring("2018");

echo $p1 . "<br>" 
    . $p2 ."<br>";

echo "<br>";

echo $e1 . "<br>"
    . $e2 . "<br>";
?>