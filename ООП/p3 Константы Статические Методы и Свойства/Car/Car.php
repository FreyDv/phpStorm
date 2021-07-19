<?php

class Car{

 public static int $numberOfCars=0;
 private static array $arrCars;
 public string $nameOfCar;

 public function __construct(string $nameOfCar= 'undefenid')
 {
     $this->nameOfCar = $nameOfCar;
     self::$arrCars[self::$numberOfCars] = $this->nameOfCar;
     self::$numberOfCars++;
 }
 public static function getnumberOfCars()
 {
     echo self::$numberOfCars;
 }
 public static function showOllCars()
 {
     echo "<br>";
     echo "<hr>";
     echo "На данный момент в гараже находятся " . self::$numberOfCars;
     for ($i = 0; $i < self::$numberOfCars; $i++) {
         echo "<br>";
         echo $i+1 . " - " . self::$arrCars[$i];
     }
     echo "<hr>";
 }
}

