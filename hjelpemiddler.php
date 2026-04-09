<?php
////////// Denne filen vil inneholde eksempler på veldig simpel syntaks i PHP. //////////
/// Ressurs: https://www.w3schools.com/php/default.asp

///// Printe ut ting til nettsiden
/// Ressurs: https://www.w3schools.com/php/php_echo_print.asp
// Echo string:

echo "<p>Hello World!</p><br>";
// OUTPUT: Hello World!


// Echo Int & String Concatenation
/// Ressurs: https://www.w3schools.com/php/php_string_concatenate.asp
echo "Mitt gøye tall er: " . 123 . "<br>"; 
// OUTPUT: Mitt gøye taller: 123


//Variabel
/// Ressurs: https://www.w3schools.com/php/php_variables.asp
// Lage variabel
$sentance = "Hellsike, denne variabelen var jo dritkul!";
$number = 61;


// echo variabel
echo"<p>$sentance $number</p>";
// OUTPUT: Hellsike, denne variabelen var jo dritkul! 61




///// If og else statements
/// Ressurs: https://www.w3schools.com/php/php_if_else.asp
if($number === 61){
    echo "Jeg er 61!<br>";
} 
else {
    echo "Jeg er IKKE 61 :(<br>";
}

// Arrays
// Array med ints
$numbers = [21, 67, 61];

// Array med strings
$teachers = ["Øyvind", "Bent", "Hilde", "Halfdann"]; //Kulleste lærerene

// Array med ulike datatyper (string, int, array)
$mixed = ["jeg er string", 5, $teachers];

// Associative array
$users = [
    [
        "username" => "Isak",
        "password" => "some_pass",
        "age" => 17
    ],
    
    [
        "username" => "Kontard",
        "password" => "6767",
        "age" => 17
    ]
];


// print_r printer formatert informasjon om en variabel (type + verdi)
print_r($users[0]);
/* OUTPUT: Array
(
    [username] => Isak
    [password] => some_pass
    [age] => 17
)
*/

print_r($users[1]['username']);
// OUTPUT: Kontard

///// Loops
// Ressurs: https://www.w3schools.com/php/php_looping.asp
// For loops
for($i = 0; $i < 5; $i++){
    echo "i er: $i <br>";
}
// OUTPUT: i er i-verdi

// while loop
$int = 0;
while($int < 100){
    $int++;
}
echo $int;
// OUTPUT: 100


// foreach
foreach($users as $user){
    echo "Brukernavn: " . $user['username'] . "<br>";
}


