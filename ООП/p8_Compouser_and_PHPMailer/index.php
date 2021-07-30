<?php
// php composer-setup.php
// если в тойже папке лежит файл composer-setup.php
//
// если есть файл composer.json
// php composer.phar install
//
//  php composer.phar dump-autoload        Dumps the autoloader.
//  php composer.phar dumpautoload         Dumps the autoloader.
// пересоздаст автозагрузчик
// после любых изменений в файле composer.json
//
// php composer.phar require  - подключить библиотеку

use Interface\IGadget;

require_once __DIR__.'/vendor/autoload.php';

//function  autoloder($class){
//    $file = __DIR__.'/'.str_replace('\\','/',$class).'.php';
//
//    if(file_exists($file)){
//        echo "$file<br>";
//        require_once $file;
//    }
//    else echo "$file<br>";
//}
//spl_autoload_register('autoloder',true,true);

function oferCase(IGadget $gadget):string{
    return "<br>Offer you ". $gadget->getCase()."<br>";
}
function debug($data){
    echo'<pre>' . print_r($data,1).'</pre>';
}
$book = new classes\ProdactBook('Телепузики',600,99);
$netBook = new classes\ProdactNotebook('Dell E6540', 50000,'intel');

debug($book);
debug($netBook);

echo $book->getProduct();
echo $netBook->getProduct();
echo oferCase($netBook);

$mail = new PHPMailer\PHPMailer\PHPMailer();
debug($mail);