<?php

$data_type_scalar=[
    "Magang TOP",
    168,
    12.6,
    true,
    false
];
foreach($data_type_scalar as $key){
    if(is_scalar($key)){
        echo gettype($key). " Scalar Type". PHP_EOL;
    }
}
// Ternary
echo isset($data_type_scalar) ? "Ditemukan" : "Tidak Ditemukan";
// if logic
if(isset($data_type_scalar)){
    echo "Ditemukan";
}else{
    echo "Tidak Ditemukan";
}

echo PHP_EOL;

$empty_data=[
    "",
    "0",
    0,
    0.0,
    [],
    false,
    NULL
];
foreach($empty_data as $key){
    if(empty($key)){
        echo gettype($key)." is emty" .PHP_EOL;
    }
}

echo PHP_EOL;
// constant
define("VERSION","v-1.0");

const AUTHOR="venom";

$nama="hello";

$nama="word";

echo VERSION;

echo AUTHOR;

echo PHP_OS;

echo PHP_EOL;

defined("AuTHOR") or exit("not fount"); //jika salah not fount

?>  