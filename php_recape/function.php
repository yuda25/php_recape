<?php

function sayName($name="Gaes")
{
    echo "Hello ".$name.PHP_EOL;
}
sayName();
sayName("Aries");

call_user_func('sayName', 'John Doe');

call_user_func_array('sayName', ['Jane Doe']);

// anonymous function (closure)
$soldier=function($name){echo $name.PHP_EOL;};

$soldier('Captain Price');

// $result=fn($x)=>$x*2; |HANYA UNTUK VERSI 7.4
// echo $result(19);     |
echo PHP_EOL;
function getLastName($name)
{
    $real_name=explode(" ", $name);

    $getLastIndex=count($real_name)-1;

    if($real_name[$getLastIndex]!="Doe")
    {
        echo "Youre not Doe family"."\t";
    }
    echo $real_name[$getLastIndex].PHP_EOL;
}
// echo getLastName("jane Doe");

getLastName("Jane doe yuda");
?>
