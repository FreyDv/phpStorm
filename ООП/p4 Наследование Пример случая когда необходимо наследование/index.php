<?php
require_once('Class/Products.php');


function debug($data){
    echo'<pre>' . print_r($data,1).'</pre>';
}
$book = new Products1('Три Мушкитера',600);
$netBook = new Products1('Dell E6540', 50000);

debug($book);
debug($netBook);

echo $book->getProduct('book');
echo $netBook->getProduct('notebook');


echo "hi";