<?php

// import data/person.php
require_once "data/person.php";

// buat object baru dari kelas person
$person1 = new Person("Tanya Dwi Agustin","Lebong");

// manipulasi properti nama person
$person1->nama = "Tanya";

// menampilkan hasil
echo "Nama = {$person1->nama}" . PHP_EOL;
echo "Alamat = {$person1->alamat}" . PHP_EOL;
echo "Negara = {$person1->negara}" . PHP_EOL;
