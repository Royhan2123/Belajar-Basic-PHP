<?php

/**
 * DISINI KITA AKAN MENGECEK DATA YANG NULL,TETAPI KITA BUAT TIPE DATANYA SENDIRI
 * WALAUPUN TIDAK ADA.
 * SEPERTI CONTOH KODE BERIKUT :
 */


$data = [];
$action = $data["Action"] ?? "noting"; // <- ?? digunakan untuk mendapatkan nilai default
// jika nilai yang didapatkan null.
// jadi otomatis hasil di atas ialah noting,karena array action di $data tidak ada.

echo $action;
