<?php

// import data/person.php
require "data/person.php";

// buat object baru dari kelas person
$person = new Person("Tanya Dwi Agustin","Lebong");

// manipulasi properti nama, alamat, negara
$person1->nama = "Tanya Dwi Agustin";

// menampilkan hasil
echo "nama = {$person->nama}";