<!DOCTYPE html><html><head><meta charset="utf-8"><style>body {background: #1C1818FF; /* Цвет фона */color: #FFCC00FF; /* Цвет текста */}</style></head><body></body></html>
<?php
error_reporting(0);
function sum  (&$a=0,$b=0) {
    return $a+=$b;

}
$x=100;
$y=10;

$xf =[1,2,3];
$mas= [
        'name' => 'Daniil',
    'sname'=>'Frey',
    'age'=>23,
];
function cc ($ar){
    $i =0;
    $res=0;
    do{
        if($ar[$i]!=null){
            $res++;
            $i++;
            continue;
        }
        else break;
    }while($res<100);
    return $res;
};
cc($xf);

function mu_array_keys($arr){
    $data =[];
    if( is_array($arr)){
        foreach ($arr as $k=>$v){
            $data[] = $k;
        }
    }else return 0;
    return $data;
}
echo "<pre>";
print_r(mu_array_keys($mas));
echo "<br>";

echo "<br>";
echo "</pre>";









?>