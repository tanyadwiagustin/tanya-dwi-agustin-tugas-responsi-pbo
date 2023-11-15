<?php

// import data/person.php
require "data/person.php";

// buat object baru dari kelas person
$person1 = new Person("Tanya Dwi Agustin","Lebong");

// panggil function
$person1->sayHello("Tanya Dwi Agustin");
