<?php

/**
 * Disini kita akan membahas logika perbandinga,dalam bahasa pemgoraman lainnya logika perbandingan
 * hanya ==,!=,>=,<=. sedangkan di php ada cukup banyak yang berbeda dari bahasa pemograman lainnya
 * seperti contoh berikut.
 */

// == ( persamaan jika nilai 10 int dan string 10,tetapi tipe datanya berbeda)
// tetap hasilnya true,karena fungsi == bisa untuk menghasilkan value yang sama
// walaupun dengan tipe data yang berbeda;
if (10 == "10"){
    echo "Hasilnya Sama";
}else {
    echo "Hasilnya Beda";
}

echo "\n";

// != ( tidak persamaan,otomatis disini akan false,dikarenakan != hanya khusus digunakan untuk tipe
// data yang sama,seperti disini nilai int 10 dan nilai string 10,otomatis akan false );
if (10 != "10"){
    echo "Hasilnya Sama";
}else {
    echo "Hasilnya Beda";
}

echo "\n";


var_dump(10 === 10); // <= otomatis akan true dikarenakan nilai yang dimasukkan ialah tipe data yang sama
// sedangkan akan false kalau misalnya dimasukkan tipe data yang berbeda walaupun value nya sama
// seperti berikut di bawah ini contoh false;

var_dump(10 === "10"); // <- otomatis akan error dikarenakan tipe data yang berbeda;

// sedangkan kebalikannya !===
var_dump(10 !== "10"); // <- otomatis akan true,dikarenakan tipe data yang dimasukkan tidak sama

var_dump(10 > 10); // <- sama seperti bahasa pemograman lain,10 lebih besar dari 10 hasilnya false;
var_dump(9 < 10); // 9 lebih kecil dari 10 hasilnya true;
