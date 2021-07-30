<?php
namespace _1_APP;
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

use _3_CLASSSES\EmptyClas;

$dir_to_autoload = dirname(__DIR__) . '/_0_COMPOSER/vendor/autoload.php';
echo $dir_to_autoload;
require_once $dir_to_autoload;

$c = new  EmptyClas();
$c->hi();


