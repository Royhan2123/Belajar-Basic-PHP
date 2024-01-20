<?php
    /**
     * Var adalah sebuah variabel mutable yang data isinya bisa di ubah sesuai dengan tipe data
     * yang di masukkan.lalu bagaimana ketika kita ingin membuat sebuah variabel yang immutable
     * tidak bisa di ubah ??
     * contohnya seperti berikut : 
     */

     // VARIABEL MUTABLE (BISA DI UBAH)
    $name = "Royhan";
    $name = "Rayhan";
    echo $name;

    echo "\n";

    // VARIABEL IMMUTABLE
    /**
     * Disini saya membuat sebuah tipe data define untuk membuat sebuah variabel CONST yang bersifat immutable,
     * yang dimana tipe data tersebut meminta (KEY,VALUE) ,ertama kita isikan nama variabel nya,
     * gunakan UPPER_CASE untuk membuat best practice variabelnya.lalu kita masukkan data dari variabelnya.
     * lalu ketika kita ingin memanggil variabel tersebut.
     * tinggal kita masukkan saja nama variabel nya ke dalam echo tanpa menggunakan $NAMA_VARIABEL.
     * seperti berikut : 
     */

    define("NAME","Nama Saya Royhan\n");
    define("UNIVERSITAS","Universitas Budi Darma");

    echo NAME;
    echo UNIVERSITAS;
