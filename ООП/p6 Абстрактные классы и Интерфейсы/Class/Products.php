<?php
namespace p6\P;

abstract class Products
{
     public $name;
     public $prise;

    abstract public function __construct($name, $prise,);
    abstract public function getProduct();


}