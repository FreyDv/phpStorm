<?php

require_once 'Car1/Car.php';
function debug($data){
    echo '<pre>' . print_r($data, ' ').'</pre>';
}
$c1 = new Wrfile("Renualt", "read",null,null);
$c2 = new Wrfile("BMW", "bleck",null,null);






echo $c1->getCarInfo();
echo $c2->getCarInfo();