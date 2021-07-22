<?php



require_once('Class/ProdactBook.php');
require_once('Class/ProdactNotebook.php');

function debug($data){
    echo'<pre>' . print_r($data,1).'</pre>';
}
$book = new \p6\PB\ProdactBook('Телепузики',600,99);
$netBook = new \p6\PN\ProdactNotebook('Dell E6540', 50000,'intel');

debug($book);
debug($netBook);

echo $book->getProduct();
echo $netBook->getProduct();