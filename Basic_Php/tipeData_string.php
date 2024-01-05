<?php
    
    // ketika menggunakan petik 1 '' tidak bisa membuat enter ke bawah menggunakan \n
    // sedangkan menggunakan petik 2 "" baru bisa menggunakan enter ke bawah;
    // \t digunakan untuk menambahkan spasi Tab dari kata yang di berikan.


    // single qoute
    echo 'Name : ';
    echo 'Royhan';

    echo "\n";
    echo "Name : ";
    echo "\nRoyhan";

    // double qoute
    echo "\nNama\t Saya\t Royhan\n";

    
    /**
     * HEREDOC.
     * Heredoc adalah fitur untuk membuat string lebih panjang tanpa menggunakan \n,\t,"",dan '' .
     * jadi kita tinggal menuliskan text nya seperti biasa saja menggunakan spasi ataupun enter.
     * kita tinggal membuat fiturnya menggunakan <<< nama_variabel(data yang di isi)nama_variabel;
     * contohnya seperti berikut.
     */

    echo <<<ROYHAN
    perkenalkan nama saya royhan dan saya kuliah di universitas budi darma medan,saat ini saya 
    mempelajari basic basic dan fundamental dari bahasa pemograman php.
    ROYHAN;

    /**
     * NOWDOC.
     * NOWDOC sama seperti HEREDOC yang membedakan hanya lah pada penamaan variabel.
     * di NOWDOC harus di kasih petik '',sedangkan di HEREDOC tidak perlu dikasih ''.
     * hasil yang di munculkan juga tetap sama.
     */

     echo <<<'ROYHAN'
     perkenalkan nama saya royhan dan saya kuliah di universitas budi darma medan,saat ini saya 
     mempelajari basic basic dan fundamental dari bahasa pemograman php.
     ROYHAN;

?>