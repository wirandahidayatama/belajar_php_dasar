<?php

$name ="randa";
$name = null;

$age = null;

echo "Name :";
echo $name;
echo "\n";

echo "Age :";
echo $age;
echo "\n";

echo "is Name Null :";
// echo is_null($name);
var_dump(is_null($name));
echo "\n";

$contoh = "randa";
unset($contoh);

//artinya jika ada variable dan ada isi nya 
$contoh = "hidayatama";
var_dump(isset($contoh));

$contoh1 = null;
var_dump(isset($contoh1));



