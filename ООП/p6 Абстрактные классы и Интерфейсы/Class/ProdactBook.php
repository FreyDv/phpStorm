<?php


class ProdactBook extends Products
{
    private $pages;

    public function __construct($name, $prise,$pages=null)
    {
        $this->pages=$pages;
        parent::__construct($name, $prise);

    }
    public function getProduct()
    {
        $out= parent::getProduct();
        return $out. "<br>";
    }

    /**
     * @return mixed
     */
    public function getPages()
    {
        return $this->pages;
    }
}