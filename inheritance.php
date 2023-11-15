<?php

// import data/person.php
require_once "data/Manager.php";

// buat object new manager dan tambahakan value nama kemudian panggil function
$manager = new Manager();
$manager->nama = "Tanya";
$manager->sayHello("Dio");

// buat object new vicepresident dan tambahakan value nama kemudian panggil function
$vicePresident1 = new vicePresident();
$vicePresident1->nama = "Dio";
$visePresident1->alamat = "Curup";
$visePresident1->sayHello("Tanya");
