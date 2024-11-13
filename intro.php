<?php

// Syntax Output
// echo, print
// print_r : Keutamaannya untuk Mencetak Item didalam Array
// var_dump: Keutamaannya untuk Melihat Isi dari Variable 
echo 'Hello, World!';
print 'Hi, Purwadhika';

// Syntax Variable & Data Types
// Variable Rules di PHP Sama Seperti di Javascript
$name = 'Defryan';
echo "Hello, My Name is $name";

// Syntax Operator 
$num1 = 10;
$num2 = 10;
echo $num1 * $num2;

// Join String Operator
$firstName = 'Muhammad';
$lastName = 'Defryan';
echo $firstName . ' ' . $lastName;

// Assignment Operator
$number = 100;
$number += 5;
echo $number;

// Comparison Operator
// >, <, >=, <=, ==, ===
var_dump(1 < 5);

// Logical Operator
// &&, ||, !
var_dump(10 < 10 && 10 > 10);

// >>>>> Looping
// Looping For
for($i = 1; $i <= 5; $i++){
    echo $i;
}

// Looping While
$start = 1;
while($start <= 5){
    echo 'Hello, World!';
    $start++;
};

// Looping Do While 
$i = 1;
do{
    echo 'Pwd';
    $i++;
}while($i <= 5);

// >>>>> Function
echo date("l, d-M-Y");

function greeting(){
    echo 'Welcome!';
};

function display($user, $time){
    return "Good $time, $user";
};

echo display('Defryan', 'Evening');

// >>>>> Array
$days = array('Senin', 'Selasa', 'Rabu');
$months = ['Januari', 'Februari', 'Maret'];

var_dump($days);
print_r($months);
echo $days[0];

// Add New Item
$months[] = 'April';
var_dump($months);

// Looping Array 
$nums = [1, 2, 3, 4, 5];
for($i=0; $i < count($nums); $i++){
    echo $nums[$i];
};

foreach($nums as $a ){ // Syntax `as $a` Sama Seperti `item` di forEach Javascript
    echo $a;
};
?>