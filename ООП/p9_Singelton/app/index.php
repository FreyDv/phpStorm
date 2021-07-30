<?php
namespace app;
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

require_once dirname(__DIR__).'//vendor/autoload.php';


echo dirname(__DIR__).'/vendor/autoload.php';
echo "<br>hi from index";
