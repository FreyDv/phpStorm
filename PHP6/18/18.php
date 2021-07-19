</html><head><meta charset="utf-8"><style>
        body {background: #1C1818FF; /* Цвет фона */color: #FFCC00FF; /* Цвет текста */}
    iframe { width:100%; height:1000px;}
    </style>
    <title>18 Урок</title></head><body></body></html>
//<?php

//explode — Разбивает строку с помощью разделителя
$str = 'Daniil Frey Volodimirovich';
$ar = explode(' ',$str);
echo $ar[0];

//implode — Объединяет элементы массива в строку
//join — Псевдоним implode()
$str2 =implode('_',$ar);
echo '<br>';
echo $str2;

//trim — Удаляет пробелы (или другие символы) из начала и конца строки
//ltrim - слева
//rtrim - справа
//  " " (ASCII 32(0x20)), обычный пробел.
//◦ "\t" (ASCII 9(0x09)), символ табуляции.
//◦ "\n" (ASCII 10(0x0A)), символ перевода строки.
//◦ "\r" (ASCII 13(0x0D)), символ возврата каретки.
//◦ "\0" (ASCII 0(0x00)), NUL-байт.
//◦ "\v" (ASCII 11(0x0B)), вертикальная табуляция.

$str3= "\n\t\v Hello  \n";
$str3 .= "\nWord\n";
echo '<br>';
echo $str3;
$str4 =  trim($str3);

echo '<br>';
echo $str4;
$str4 = "pasword";
$str7=md5($str4);
echo '<br>';
echo $str7;
$str5 = "Frey040198";
$str6 = md5($str5);
echo '<br>';
echo $str6;

//nl2br — Вставляет HTML-код разрыва строки перед каждым переводом строки
$strr = "Hello\n Word\n.";
$strr1 = nl2br($strr);
echo $strr;
echo '<br>';
echo $strr1;

//str_replace — Заменяет все вхождения строки поиска на строку замены
//str_replace( array|string $search, array|string $replace, string|array $subject, int &$count = null) : string|array
//Эта функция возвращает строку или массив, в котором всевхождения search в subject заменены на replace.
echo '<br>'; // str_replace search-строка и replace-строка
echo str_replace("Frey","Nikolsky",$str);
echo '<br>';
echo $str;
$s = "[i]Daniil[/i] Voladimirovich [b]Frey[/b]";
echo '<br>';
echo $s;
echo '<br>';//// str_replace search-масив и replace-масив
echo str_replace(["[b]","[/b]","[i]","[/i]"],["<b>","</b>","<i>","</i>"],$s);

//strip_tags — Удаляет теги HTML и PHP из строки
//strip_tags( string $string, array|string|null $allowed_tags = null) : string
//Функция пытается возвратить строку, из которойудалены все NULL-байты, HTML- и PHP-теги из заданной строки (string).
// Для удаления тегов используется тот же механизм, что и в функции fgetss().
$s= '<i>Hi</i><b>tobi Pizda</b> <script> x =10;while(x!=0){x--;alert("XSS")}</script>';
echo strip_tags($s,['<i>','<b>']);

//strlen — Возвращает длину строки
//strlen( string $string) : int
//Функция strlen() возвратит количество байт, а не число символовв строке
//Функция strlen() возвращает null при использованиина массивах,
// а также выводит ошибку уровня E_WARNING.
$s="Hi";
echo '<br>';
echo 'strlen()— Возвращает длину строки:';
echo 'strlen("Hi")— Возвращает длину строки:'.strlen($s);
$s="<b><i>Привет</i></b>";
echo "<br>strlen(<b><i>Привет</i></b>)— Возвращает длину строки:".strlen($s);
echo "<br>".mb_strlen($s,'utf-8');

//strpos — Возвращает позицию первого вхождения подстроки
//strpos( string $haystack, string $needle, int $offset = 0) : int|false
//Ищет позицию первого вхождения подстроки needle в строку haystack
$s = "Hi world i love you!";
echo "<br>strpos($s): ".strpos($s,"l");// если то что ишем входит
// в строку несколько раз после нахождения первого вхождения можно к результату добавить 1 и найти следуюший
echo "<br>strpos($s): ".strpos($s,"l",strpos($s,"l")+1);

//strtoupper — Преобразует строку в верхний регистр
//strtoupper( string $string) : string
echo "<br>".strtoupper($s);

//strtolower — Преобразует строку в нижний регистр
//strtolower( string $string) : string
echo "<br>".strtolower($s);

//substr — Возвращает подстроку
//substr( string $string, int $offset, int|null $length = null) : string
//Возвращает подстроку строки string, начинающейсяс offset символа по счету и длиной length символов
echo "<br>". substr($s,3,5);

//htmlspecialchars — Преобразует специальные символы в HTML-сущности
//htmlspecialchars( string $string, int $flags = ENT_COMPAT, string|null $encoding = null, bool $double_encode = true) : string
//htmlspecialchars();
$s ='<h1>&<i>Hi</i> My name is <b>Vasiliy\n</b></h1><iframe  src="https://timeweb.com/ru/community/articles/nastrojka-otladki-php-koda-pri-pomoshchi-xdebug" ></iframe>';
$sa =  htmlspecialchars($s);

//htmlspecialchars_decode — Преобразует специальные HTML-сущности обратно в соответствующие символы
//htmlspecialchars_decode( string $string, int $flags = ENT_COMPAT) : string
$s = htmlspecialchars_decode($sa);
//htmlentities — Преобразует все возможные символы в соответствующие HTML-сущности
//htmlentities( string $string, int $flags = ENT_COMPAT, string|null $encoding = null, bool $double_encode = true) : string

echo "<pre><br>";
print_r($s);
echo "</pre>";

//192.168.3.75,192.168.233.1,192.168.142.1,127.0.0.1