<?php


$ar1 = array('Vasiliy','Kiril','Evgeniy','Fiolet');
$ar2 = array('Vasiliy','Kiril','Evgeniy','Dinis');
$ar3 = array('Kiril','Evgeniy','Dinis','Gena');
//выводит елементы первого масива которых нет в других
$r1 = array_diff($ar1,$ar2);
$r2 = array_diff($ar2,$ar3);
//выводит схожие елементы
$r3 = array_intersect($ar2,$ar3);

//arrat_key_exists('ключ', масив) - проверяет наличее ключа в масиве
$r4 = array('first'=>1,'second'=>4);
if(array_key_exists('first',$r4)){
    echo "Masiv hes element 'first";
}
else echo 'No';

// array_keys - Возвроашает ключи масива
$r5 = array_keys($ar1);
// array_values - возврашает значения масива
$r6 = array_values($ar1);

//array_merge Сливает элементы одного или большего количества массивов таким образом, что значения одного массива присоединяются к концу предыдущего.
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$r7 = array_merge($array1, $array2);
//array_rand Достает рандомный ключ из масива
$r8= array_rand($ar2);

//array_reverse переворачивает масив если 2 параметер фолс переворот со сменной индексов, тру - без сменны индексов
$r9=array_reverse($ar2,true);


$citi = 'Kharkov';
$country = 'Ukraina';
$name = 'Daniil';

//групируют переменные в масиы
$r10 = compact('citi','country','name');

//Достоют из масива елементы и создают елементы
$ar4 = [
    'mCiti'=>'Kharkov',
    'mCountry'=>'Ukraina',
    'mName'=>'Daniil',
];
extract($ar4);

echo '<p>'.$mCiti.'</p>';
echo '<p>'.$mCountry.'</p>';
echo '<p>'.$mName.'</p>';

$ar5 = array(8,6,7,4,9,3,10,5,1,2);
$ar6 = array(8,6,7,4,9,3,10,5,1,2);
// Сортировка по значениям
//сортировки с сохранением ключей
// в прямом порядке от 1 -9 и от а до я
asort($ar1);
// обратный порядок от 0-1 и от Я к А
arsort($ar1);
//Сортировка с потерей ключей
//прямой порядок
sort($ar5);
//обратный порядок
rsort($ar5);
//прямая сортировка по ключам
ksort($ar6);
//Обратная сортировка по ключам
krsort($ar6);

//array_combine( array $keys, array $values) : array
//Создаёт массив (array), используя значения массива keys в качестве ключей и значения массива values в качестве соответствующих значений.
$ar7 = [
    'name',
    'sName',
    'phone',
    'country',
    'city',
    'age',
    'status',
];
$ar8 = [
    'Daniil',
    'Frey',
    '+380992239852',
    'Ukraine',
    'Kharkov',
    '23',
    'engineer',
];
$r11 = array_combine($ar7,$ar8);

//array_search( mixed $needle, array $haystack, bool $strict = false) : int|string|false
//array_search — Осуществляет поиск данного значения в массиве и возвращаетключ первого найденного элемента в случае удачи
$r12=array_search('Daniil',$r11);

//array_shift( array &$array) : mixed
//array_shift() извлекает первое значение массива array и возвращает его, сокращая размер array на один элемент.
//Все числовые ключи будут изменены таким образом, что нумерация массива начнётся с нуля, в то время как строковые ключи останутся прежними.
$r13=array_shift($array2);
//array_count_values() возвращает массив, ключами которого являются значения массива array,
// а значениями - количество повторений значений array.
$r14=array_count_values($array2);
$ar9 = array(8,8,6,6,7,7,4,4,9,9,3,3,10,10,5,5,1,1,2,2);

//array_unique — Убирает повторяющиеся значения из массива
$r15=array_unique($ar9);

//array_unshift — Добавляет один или несколько элементов в начало массива
array_unshift($r15,-1,0);

//array_flip — Меняет местами ключи с их значениями в массиве
$r16=array_flip($r11);

//array_pop — Извлекает последний элемент массива
array_pop($r15);

//array_push — Добавляет один или несколько элементов в конец массива
array_push($r15,99);

$r17 = is_array($r15);



echo "<pre>";
print_r($r17);
echo "</pre>";






















?>