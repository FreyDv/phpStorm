<!DOCTYPE html><html><head><meta charset="utf-8"><style>body {background: #1C1818FF; /* Цвет фона */color: #FFCC00FF; /* Цвет текста */}</style></head><body></body></html>

<?php
$ar =[
    'name'=>'Daniil',
    'sName'=>'Frey',
    'phone'=>'+380992239852',
    'country'=> 'Ukraine',
    'city'=>'Kharkov',
    'age'=>'23',
    'status'=>'engineer',
        ];

echo "<pre>";
print_r($ar);
echo "</pre>";


foreach ($ar as $key=>$name){
    echo $key .": ".$name .'<br>';
}

$str1 ='Hi';
$str2 = 'I`m';
$str3 = 'Daniil';
$bool1= true;
?>



<?php if($bool1): ?>
    <table class = "table" barder = "1">
        <tr>
        <td><?php echo $str1 ?></td>
        <td><?php echo $str2 ?></td>
        <td><?php echo $str3 ?></td>
        </tr>
    </table>
    <?php endif; ?>




















