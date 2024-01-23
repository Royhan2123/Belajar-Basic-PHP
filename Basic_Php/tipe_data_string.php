<?php

$lastName = "Lubis";

echo "Royhan" ." " . $lastName . PHP_EOL; // <- fungsi dot atau (.) digunakan untuk menambahkan value,sama seperti
// "Royhan $lastName",tidak bisa menggunakan +.karena plus hanya di gunakan untuk operator aritmatika.
echo "Royhan {$lastName}s" . "\n";


/**
 * KONVERSI TIPE DATA,
 * dalam php sangat mudah untuk mengkonversi tipe data dari int -> string,atau dari string -> int.
 * cuman memerlukan (TIPE_DATA)(VALUE) <- seperti berikut.
 * seperti contoh di bawah ini :
 */

$intToString = (string)100;
var_dump($intToString); // <- otomatis hasil yang akan di keluarkan ialah berupa string dalam var dump.

$stringToInt = (int)"100";
var_dump($stringToInt); // <- otomatis hasil yang akan di keluarkan ialah berupa int dalam var dump.

$stringToFloat = (float)"100.11";
var_dump($stringToFloat);

/**
 * TIPE DATA FLOATING
 */

echo "Floating Point ";
var_dump(1.234);
echo "Floating Point dengan E notation Plus (1.2 x 1000 : )";
var_dump(1.2e3);
echo "Floating Point dengan E notation Minus (7 x 0.001 : )";
var_dump(7e-3);

/**
 * INTEGER OVERFLOW
 */

echo "Integer Overflow 32 BIT";
var_dump(2147625112);

echo "Integer Overflow 64 BIT";
var_dump(21476251121234567890); // <- otomatis akan berubah menjadi float,dikarenakan melewati
// batas tipe data INTEGER.