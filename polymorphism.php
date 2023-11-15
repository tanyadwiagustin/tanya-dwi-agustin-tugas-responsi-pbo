<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Tanya Dwi Agustin");
var_dump($company);

$company->programmer = new BackendProgrammer("Tanya Dwi Agustin");
var_dump($company);

$company->programmer = new FrontendProgrammer("Tanya Dwi Agustin");
var_dump($company);

sayHelloProgrammer(new Programmer("Tanya Dwi Agustin"));
sayHelloProgrammer(new BackendProgrammer("Tanya Dwi Agustin"));
sayHelloProgrammer(new FrontendProgrammer("Tanya Dwi Agustin"));