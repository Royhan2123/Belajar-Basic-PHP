<?php
    /**
     * Variabel dalam php menggunakan S dolar $NAMA_VARIABEL;
     */
    $name = "Royhan";
    $age = 19;

    echo "Nama saya adalah $name \nUmur saya adalah $age\n";

    // mengambil data dari variabel.
    // harus menggunaan S dolar $$ 
    // disini kita mengambil var $name terus menambahkan Royhan lagi dengan variabel baru
    // contohnya seperti : 

    // disini kita membuat nama variabel names dengan isi Royhan
    $names = "Royhan";
    // lalu kita ambil variabel tersebut dan kita isi lagi data nya "di panggil roy";
    $$names = "di panggil roy";
    // lalu kita echo Royhan
    echo "Royhan : ";
    // dan kita panggil variabel Royhan;
    echo $Royhan;
    // kenapa disini kita memanggil variabel $Royhan yang tidak kita buat?
    // disini otomatis variabel nya bisa kita buat sendiri menggunakan variabel $names tersebut.
    // jadi variabel names nya mengganti nama variabel nya menjadi $royhan;
    
?>