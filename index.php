<?php
////////// Denne filen vil inneholde eksempler på veldig simpel syntaks i PHP. //////////
/// Ressurs: https://www.w3schools.com/php/default.asp

///// Printe ut ting til nettsiden
/// Ressurs: https://www.w3schools.com/php/php_echo_print.asp
// Echo string:
// \n er for new-line
echo "Hei hei, jeg heter Isak Brun.\n"; 
// OUTPUT: Hei hei, jeg heter Isak Brun.

// Echo Int & String Concatenation
/// Ressurs: https://www.w3schools.com/php/php_string_concatenate.asp
echo 123 . "\n"; 
//OUTPUT: 123

// Echo variabel verdi 
$num = "print meg!" . "\n";
echo $num;
// OUTPUT: 123


/////Variabel
/// Ressurs: https://www.w3schools.com/php/php_variables.asp
// Lage variabel
$kulVariabel = "Hellsike, denne variabelen var jo dritkul!";
$heiVg1Elever = "67";

///// If og else statements
/// Ressurs: https://www.w3schools.com/php/php_if_else.asp
if($heiVg1Elever == 67){
    echo "Hei elever på Vg1!\n";
} 
else {
    echo "Ha det... :(\n";
}

// Arrays
// Int array
$intArr = [1, 2, 4];

// String array
$strArr = ["Øyvind", "Bent", "Hilde", "Halfdann"]; //Kulleste lærerene

// Associative array
$assocArr = [
    "fornavn" => "Øyvind",
    "etternavn" => "Solberg",
    "alder" => 53,
    "favoritt_tall" => $intArr,
    "kurs_karakterer" => [
        "6" => ["Isak", "Viggo", "Konrad"],
        "5" => NULL,
        "4" => NULL,
        "3" => NULL,
        "2" => NULL,
        "1" => "Alle andre",
    ],
];

var_dump($assocArr['kurs_karakterer']['1']);

///// Loops
// Ressurs: https://www.w3schools.com/php/php_looping.asp
// For loops
for($i = 69; $i < 69; $i++){
    echo "Hei!";
}

// foreach
foreach($strArr as $name){
    echo $name . "\n";
}

