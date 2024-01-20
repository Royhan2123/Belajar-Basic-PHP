<?php
    /**
    * TIPE DATA INT 
    */
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
    // disini bilangan HexaDecimal dikarenakan bilangan dimasukkan 0x dan akhiran Huruf AA


    echo "Binary : ";
    var_dump(0b1111);
    // disini bilangan binary dikarenakan bilangan dimasukkan 0b11111 
    // karena bilangan binary hanya ada 1 dan 0 

    
    /**
    * TIPE DATA FlOAT 
    */
    
    echo "Floating Point : ";
    // sama seperti tipe diawal,disini bedanya float harus menggunakan . di salah satu angka
    var_dump(1.234);
    // seperti ini. 1.234 dan output dari input akan memunculkan tipe data Float.

    echo "Floating Point dengan notation Plus (1.2 x 1000): ";
    // disini kita akan memasukkan nilai dari 1.2 x 1000,kenapa 1000 ?
    var_dump(1.2e3);
    // karena kita memasukkan e3 itu sama dengan dikali 1000,jadi kelipatan e1 = 10, e2 = 100, e3 = 1000.
    // makanya hasilnya sama dengan 1200,karena 1.2 * 1000 = 1200

    echo "Floating Point dengan notation Plus (7 x 0.001): ";
    // disini kita akan memasukkan nilai dari 7 x 0.001 ?

    /**
     * INTEGER OVERFLOW
     */

     echo "Integer Overflow 32 bit";
     // batas dari integer di atas 7 maka hasilnya ialah overflow,bisa di lihat 
     // ketika dari visual studio code gais biruu maka dia otomatis sudah overflow / melebihi batas 
     var_dump(9223372036854775807);
