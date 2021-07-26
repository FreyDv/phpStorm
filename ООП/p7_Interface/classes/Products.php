<?php
namespace classes;

abstract class Products
{
     public string $name;
     public string $prise;

    abstract public function __construct($name, $prise);
    abstract public function getProduct():string;
    abstract public function  getName():string;


}