<?php

/**
 * Operator Logika ialah operator yang membandingkan value value dari nilai yang dimasukkan
 * sama seperti bahasa pemograman lainnya,ada && (and),||(or),dan ! (true jika hasilnya false,
 * atau hasil true jadi false,dan hasil false menjadi true ketika menggunakan !);
 * sama seperti contoh kode berikut :
 */

// && digunakan untuk ketika ada yang salah satu false,maka semua nya false
// seperti contoh dibawah ini,
$nilai_absen = 80;
$nilai_kehadiran = 85;
if ($nilai_absen >= 90 && $nilai_kehadiran >= 80){
    // jika nilai absen nya di atas 90 dan nilai kehadihadirannya nya di atas 80 maka hasilnya true
    echo "Selamat Anda Lulus";
}else {
    // jika ada salah satu saja datanya false,maka otomatis nilai yang lain akan menjadi false
    echo "Anda Gagal";
    // maka hasilnya adalah false "Anda Gagal"
}

echo "\n";

// di php kita juga bisa langsung menggunakan (and) atau (&&)
if ($nilai_absen >= 90 and $nilai_kehadiran >= 80){
    echo "Selamat Anda Lulus";
}else {
    echo "Anda Gagal";
}

echo "\n";


// sedangkan || atau or digunakan ketika salah satu hasilnya true,maka semua nya akan bersifat true
// seperti contoh di bawah ini :
if ($nilai_absen >= 90 || $nilai_kehadiran >= 80){
    echo "Selamat Anda Lulus";
    // otomatis disini hasilnya ialah "Selamat Anda Lulus" dikarenkana hasil dari nilai kehadiran true
    // atau di atas 80
}else {
    echo "Anda Gagal";
}

echo "\n";


// atau bisa juga menggunakan or langsung
if ($nilai_absen >= 90 or $nilai_kehadiran >= 80){
    echo "Selamat Anda Lulus";
    // otomatis disini hasilnya ialah "Selamat Anda Lulus" dikarenkana hasil dari nilai kehadiran true
    // atau di atas 80
}else {
    echo "Anda Gagal";
}

echo "\n";
var_dump(!false); // <- otomatis nilainya akan menjadi true karena menggunakan ! untuk membalik data;
var_dump(!true); // <- otomatis akan menjadi false;

// <- sedangkan nilai xor digunakan untuk mendapatkan nilai true,tetapi nilai true yang di mulai dari ganjil
// seperti contoh berikut :
var_dump(true xor false);
// otomatis akan true,dikarenakan true nya di letak di awal,atau di bilangan 1 (ganjil), dan seterusnya
// 1,3,5,7,9 ... dll.
var_dump(true xor true);
// sedangkan kita letak di bilangan genap (2,4,6,8,10 ...dll) maka output yang di hasilkan akan false;

// sebagai contoh lain :
var_dump(false xor false xor true);
// maka hasilnya true;
