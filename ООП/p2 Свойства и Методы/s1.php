<?php

require_once 'WrFile/Wrfile.php';
function debug($data){
    echo '<pre>' . print_r($data, ' ').'</pre>';
}
$f1 = new Wrfile("Hi","Bro.txt");







