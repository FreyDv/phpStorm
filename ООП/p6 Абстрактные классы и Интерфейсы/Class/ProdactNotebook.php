<?php


class ProdactNotebook extends Products
{

    private $cpu;

    public function __construct($name, $prise,$cpu=null)
    {
        $this->cpu = $cpu;
        parent::__construct($name, $prise);

    }
    public function getProduct()
    {
        $out= parent::getProduct();
        return $out."<br>cpu:     {$this->cpu}";
    }


}