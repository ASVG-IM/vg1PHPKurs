<?php
///kort datatyper
$name = "Isak"; // string
$karakter = 6; // integer
$numbers = [1, 2, 3]; // array
$user = ["username" => "isak"]; // associative array
$auth = new AuthService; // object
//AuthService klassen finnes ikke så ignorer hvis LSP klager

$user = ["name" => "Isak", "age" => 17];

echo $user["name"];
// OUTPUT: Isak