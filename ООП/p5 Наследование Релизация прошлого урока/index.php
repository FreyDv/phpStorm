<?php


require_once('Class/Products.php');
require_once('Class/ProdactBook.php');
require_once('Class/ProdactNotebook.php');

function debug($data){
    echo'<pre>' . print_r($data,1).'</pre>';
}
$book = new ProdactBook('Три Мушкитера',600);
$netBook = new ProdactNotebook('Dell E6540', 50000);

debug($book);
debug($netBook);

echo $book->getProduct('book');
echo $netBook->getProduct('notebook');