<?php

//echo $user  = isset($_GET['user']) ? $_GET['user'] : 'nouname'; так нуцжно было до 7 версии php
echo $user  = $_GET['user'] ??$_GET['user2']  ?? 'nouname';

//spaceship
echo "spaceship";
echo "</br>";
echo "Number";

echo "</br>";
echo 1<=>1;
echo "</br>";
echo 1<=>2;
echo "</br>";
echo 1<=>0;
echo "</br>";
echo "</br>";
echo "ABC:";
echo "</br>";
echo "b"<=>"b";
echo "</br>";
echo "a"<=>"b";
echo "</br>";
echo "b"<=>"c";
echo "</br>";

echo "<br>";
echo "define:";
define('DB',[
    'HOST' => 'localhost',
    'USER' => 'admin',
    'PASWORD' => 'admin',
]);
echo "<pre>";
print_r(DB);




