<?php
namespace p6\PB;
use p6\P\Products;

class ProdactBook extends Products
{
    private $pages;

    public function __construct($name, $prise, $pages = null)
    {
        $this->setName($name);
        $this->setPrise($prise);
        $this->setPages($pages);
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setPrise($prise): void
    {
        $this->prise = $prise;
    }

    public function setPages(mixed $pages): void
    {
        $this->pages = $pages;
    }

    public function getProduct()
    {
        return "<hr><b>About Product:</b><br>
                 Name: \t  {$this->name}<br>
                 Price: \t {$this->prise}<br>
                 Pages:    {$this->pages}<br>";
    }
}