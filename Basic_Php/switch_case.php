<?php

/**
 * contoh penggunaan SWITCH CASE.
 */

$nilaiAbsen = "C";
switch ($nilaiAbsen){
    case "A" :
        echo "Nilai Anda 90";
        break;
        case "B" :
        echo "Nilai Anda 85";
        break;
    case "C" :
    case "D" :
        echo "Nilai Anda Memburuk";
        break;
}