<?php

class Car1{

    public   $color;
    public   $wheels = 4;
    public   $speed = 180.2;
    public   $brand;

    public function __construct($brand,$color,$wheels,$speed){
        if(isset($color))$this->color = $color;
        else $this->color = 'white';
        if(isset($brand))$this->brand= $brand;
        else $this->brand = 'NouName';
        if(isset($wheels))$this->wheels=$wheels;
        else $this->wheels = 4;
        if(isset($speed))$this ->speed= $speed;
        else $this ->speed = 120.5;
        echo  __METHOD__."<br>";
    }

    public  function getCarInfo(){
        return "<h3> Инфо об Авто</h3>
               Марка: {$this->brand}<br>
               Цвет: {$this->color}<br>
               Коло-во колес: {$this->wheels}<br>
               Скорость: {$this->speed}<br>";
    }

}

