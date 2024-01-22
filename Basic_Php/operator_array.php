<?php
/**
 * Operator Array
 * Jadi Operator Array kurang lebih hampir seperti Operator Perbandingan,
 * tetapi ada bedanya
 * seperti contoh berikut :
 */

 $first = [
   "First Name" => "Royhan",
 ];

 $last = [
     "Last Name" => "Han",
 ];

 $name = [
     "name" => "Royhan",
 ];

$names = [
    "name" => "Royhan",
];

$a = [
    0 => "1",
    1 => "2",
    2 => "3",
    3 => "4",
];

$b = [
    0 => "1",
    1 => "2",
    2 => "3",
    3 => "4",
];

$c = [
    0 => "0",
    1 => "2",
    2 => "3",
    3 => "4",
];
// UNION
var_dump($first + $last); // <- (+) digunakan untuk menggabungkan array

// EQUALITY
var_dump($first == $last);
// digunakan untuk mengecek value & key yang sama,maka hasilnya ialah true
// jiak tidak sama key dan valuenya,maka otomatis akan menghasilkan false
var_dump($name == $names); // <- otomatis akan menjadi true,karena value key nya sama.

// IDENTITY
var_dump($a === $b); // sama seperti EQUALITY tetapi dia memeriksa urutan yang sama juga
// contoh nya array $a = [0,1,2,3], dan array $b = [0,1,2,3]. peletakan posisinya sama
// dan key maupun value nya harus sama.
// kalau posisi nya berbeda seperti $a = [0,1,2,3] dan $b = [0,1,3,2]. otomatis akan false
var_dump($a === $c); // disini otomatis akan error,karena nilai dan key value nya tidak sama
// peletakan tempatnya dan hasil yang di berikan juga berbeda.

// INEQUALITY
var_dump($first != $last); // <- otomatis hasilnya akan true,dikarenakan key dan value nya berbeda.
// atau bisa juga menggunakan :
var_dump($first <> $last); // <- hasilnya tetap sama ialah true,karena key dan value nya berbeda.

// NONIDENTITY
var_dump($c !== $a); // <- otomatis akan true,karena key dan value maupun urutannya tidak sesuai.


