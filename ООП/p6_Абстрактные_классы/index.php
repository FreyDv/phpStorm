<?php
spl_autoload_register('autoloder',true,true);
function  autoloder($class){
    $file = __DIR__.'/'.str_replace('\\','/',$class).'.php';

    if(file_exists($file)){
        echo "$file<br>";
        require_once $file;
    }
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