<?php
$array = [0, 1, 2, 3, 4, 5];

var_dump($array); // <- var dump digunakan untuk melihat debuging lebih rinci
// contohnya disini saya mengasih var dump tersebut ke dalam tipe data $array.
// otomatis akan menghasilkan nilai int berupa 0,1,2,3,4,5
echo "\n";

echo $array[2]; // sedangkan echo,hanya menampilkan datanya saja tanpa memberi tau
// identitas tipe data yang di gunakan.


echo "\n";
echo "\n";

$names = ["Royhan", "Reyhan", "Rizki"];

var_dump($names);
echo "\n";

$names[1] = "Rayhan"; // <- cara untuk mengubah data dalam array
var_dump($names); // otomatis ketika di panggil langsung nama reyhan akan terganti menjadi Rayhan

echo "\n";

$names[] = "Rizki"; // <- cara untuk menambahkan data ke dalam array $names
var_dump($names); // otomatis ketika di panggil langsung menambahkan data nama dari $names;

echo "\n";

var_dump(count($names)); // <- cara untuk menghitung semua data array yang ada di dalamnya
// menggunakan count lalu masukkan variabel array nya
// langsung saja menggunakan var dump.
echo "\n";

unset($names[2]); // <- unset digunakan untuk menghapus data array,di nomor array 2 yaitu nomor 3
var_dump($names); // otomatis ketiak di panggil nama rizki akan terhapus

echo "\n";

echo $names; // <- otomatis akan error dikarenakan echo hanya bisa mengasih nilai tunggal
// tidak bisa mengasih nilai terstruktur seperti array,
//jadi otomatis akan memberikan input tipe datanya saja yaitu array
echo "\n";
echo $names[0]; // <- baru tidak error,cuman bisa menampilkan satu data saja.

/**
 * Kecuali kita bisa membuat nya menggunakan yang namanya Foreach
 */
echo "\n";

foreach ($names as $name) {
    echo $name . " ";
}
// foreach digunakan untuk menghitung semua bilangan data yang ada.
// baru kita gunakan echo untuk menampilkan data nya yang sudah di insialisasi.
// fungsi . untuk menambahkan data,jadi kita menambahkan data dari var $name " " biar ada spasi.

/**
 * Array dan Map bisa dijadikan sama,dikarenakan di php itu tidadk ada bedanya.
 * beda dengan bahasa pemgoraman lain seperti dart,yang membedakan tipe data Map yang berisikan
 * value dan key nya.
 * contoh Map yang di gunakan dalam array PHP.
 */

    $mahasiswa = [
      "id" => 010216,
        "name" => "Royhan",
        "Fakultas" => "Universitas Budi Darma",
    ];

    var_dump($mahasiswa);
    // kalau kita ingin memanggil key nya,tinggal kita samakan saja key dari map nya
var_dump($mahasiswa["name"]); // <- otomatis akan terpanggil 010216;

/**
 * ARRAY DI DALAM ARRAY
 */

$Royhan = [
    "id" => 010216,
    "name" => "Royhan",
    "Fakultas" => "Universitas Budi Darma",
    "addres" => [ // <- ini salah satu contoh penggunaan array di dalam array
        "city" => "Jakarta",
        "country" => "Indonesia",
    ]
];

var_dump($Royhan["addres"]);