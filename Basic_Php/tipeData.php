<?php
    echo "Decimal : ";
    // var dump untuk mengecek angka tersebut yang di input termasuk jenis tipe data apa
    var_dump(1234);
    // disini otomatis masuk tipe data integer karena angka biasa

    echo "Octal : ";
    var_dump(0123);
    // sama seperti yang di atas disini otomatis output dari angka tersebut tidak 0123
    // tetapi 83,dikarenakan ada angka 0, bilangan 0ctal di mulai dari angka 0

    echo "Hexadecimal : ";
    var_dump(0x1AA);
    // disini bilangan HexaDecimal dikarenakan bilangan dimasukkan 0x 


    echo "Binary : ";
    var_dump(0b1111);
    // disini bilangan binary dikarenakan bilangan dimasukkan 0b11111 
    // karena bilangan binary hanya ada 1 dan 0 

?>