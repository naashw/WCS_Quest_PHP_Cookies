<?php
class Person {
private $name = null;
private $firstName = null;
private $address = null;
private $birthYear = 0;
public function __construct(string $name, string $firstName, string $address, int $birthYear)
		{
$this->name = $name;
$this->firstName = $firstName;
$this->address = $address;
$this->birthYear = $birthYear;
		}
public function display() : Person
		{
echo join(PHP_EOL, [
"Name: $this->name",
"FirstName: $this->firstName",
"Address: $this->address",
"Age: {$this->getAge()}"
			]) . PHP_EOL;
return $this;
		}
public function getAge() : int { return date("Y") - $this->birthYear; }
public function setAddress($address) : Person
		{
$this->address = $address;
return $this;
		}
	}
$me = new Person("Doré", "Julien", "126 rue du pigeon", 1946);
var_dump($me);
$me
->setAddress("621 rue de la conserve")
->display();
