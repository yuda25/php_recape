<?php
// xor satu benar satu salah
// $x=30; $y=20;
// if($x==30 xor $y==20){
//  echo "Benar";
// }else{
//  echo "Salah";
// }
// _______________________________

var_dump(true && true);
var_dump(true || false);
var_dump(true || true);
var_dump(true xor false);
var_dump(true xor true);
var_dump(true != 'true');
var_dump(true !== 'true');
var_dump(true || (false && false));
var_dump(true || (false && true) || false or (1!='1'));

if(true)
{
    echo "He is Budi";
    echo PHP_EOL;
}else{
    echo "He is not Budi";
}

echo (false) ? "Budi father's" : "Not Budi father's";

for($x=0;$x<10;$x++)
{
    for($y=0;$y<10;$y++)
    {
        echo $x."x".$y."=".$x.$y."\t";
    }
}

foreach(range(1,10) as $num)
{
    echo $num.PHP_EOL;
}

while(true)
{
    $num=rand(1,10);
    if($num==5)
    {
        exit('lucky nine');
    }else{
        echo "you lose".PHP_EOL;
    }
}