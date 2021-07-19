<?php

class obg {
    public string $path= '';
    public string $name= '';
    public string $all= '';

    public function makeAll(){
        $this->all=$this->path.'/'.$this->name;
    }

    public function __construct($path,$name)
    {
        $this->path=$path;
        $this->name=$name;
        $this->makeAll();
    }

}

class Wrfile
{
    public obg $x;
    private static int $path_static= 1;
    private static int $name_static= 1;
    //mkdir — Создаёт директорию
    //is_dir — Определяет, является ли имя файла директорией
    //file — Читает содержимое файла и помещает его в массив
    //file_exists — Проверяет существование указанного файла или каталога
    //file_get_contents — Читает содержимое файла в строку

    private static function newPath($p,obg $x): obg
    {

        self::$name_static++;
        if(self::$name_static>100){
            self::$path_static++;
        }
        switch ($p){
            case 1 :{
                $x->path= __DIR__ ."/".self::$path_static;
                break;
            }
            case 2 :{
                $x->name= self::$name_static;
                break;
            }
            case 3 :{
                $x->path= __DIR__ ."/".self::$path_static;
                $x->name= self::$name_static;
                break;
            }
        }
        $x->makeAll();
        return $x;
    }

    public function wrOrCreate(string $str=' '){
        file_put_contents($this->x->all,$str,FILE_APPEND);
    }
    public function readContent (){
        echo "<br>";
        echo "Содержимое файла: ";
        echo "<br>";
        echo "Пиздец";
        echo  file_get_contents($this->x->all);

    }
    public function __construct($pathToFile=null,$nameFile=null){
        $y=0;
        echo "1: $pathToFile $nameFile";
        echo "<br>";

        $dir = 'C:/OpenServer/domains/phpStorm/ООП/p2/';
        $this->x= new obg($dir.$pathToFile,$nameFile);
        echo $this->x->path;
        echo "<br>";
        echo  $this->x->path;
        echo "<br>";
        echo $this->x->name;
        echo "<br>";
        echo $this->x->all;
        echo "<br>";
        if(!is_null($this->x->path)){
            if (!file_exists($this->x->path))
                echo "Указаный путь не найден!";
            echo "<br>";
            mkdir($this->x->path,777,);
            echo "Путь $pathToFile создан для файла: ";
        } else {
            $y=1;
//            $this->x= self::newPath(1,$this->x);
            echo "<br>";
            echo "Путь не задан пользователем и был сгенерирован автоматически новый: {$this->x->path}  для файла: ";
        }
        if(!isset($this->x->name)){
            $y += 2;
        }
        $this->x= self::newPath($y,$this->x);
        if(file_exists("{$this->x->path}.'/'.{$this->x->name}"))    echo $this->x->name;

        $this->wrOrCreate(' 5');
        $this->readContent();
    }




}

