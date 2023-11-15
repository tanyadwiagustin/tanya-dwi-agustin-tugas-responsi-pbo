<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$person1 = new Person("Tanya Dwi Agustin", "Lebong");

// tambahkan value nama di object
$person1->nama = "Tanya Dwi Agustin";

// panggil function sayHelloNull dengan parameter
$person1->sayHelloNull("Dio Sinebha");

// buat object dari kelas person
$person2 = new Person("Dio Sinebha", "Curup");

// tambahkan value nama di object
$person2->nama = "Dio";

// panggil function sayHelloNull dengan parameter null
$person2->sayHelloNull(null);
