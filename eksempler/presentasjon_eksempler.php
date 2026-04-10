<?php
// register.php
require __DIR__ . '/database.php'; 
print_r($conn); //$conn hentet fra database.php
// henter $conn variabelet som da har database tilkoblingen

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

//stmts som trenger parametre
$stmt = $conn->prepare('SELECT * FROM users WHERE id = ?;'); // forbereder statement
$stmt->bind_param("i", $userId); // plasserer ? verdier. $userId er integer derfor "i"
$stmt->execute(); // kjører stmt, returnerer true eller false
$result = $stmt->get_result(); // $result har nå stmt resultatet
$data = $result->fetch_assoc(); // henter mysqli_result som et associative array

//stmts uten parametre
$query = $conn->query('SELECT * FROM users;'); // $query har mysqli resultatet
$qData = $query->fetch_all(MYSQLI_ASSOC); // henter mysqli_result som et associative array

//insert statement
$insert = $conn->prepare('INSERT INTO users (username, password) VALUES (?, ?);'); // forbereder statement
$insert->bind_param("ss", $username, $password); // både $username og $password er strings derfor "ss"
if(!$stmt->execute()){ // if løkker kjører koden inni seg, så vi kan kjøre execute og se om den failer på en kompakt måte
    return false;
}
else{
    return true;
}