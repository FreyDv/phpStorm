<?php
namespace classes;

class ProdactBook extends Products
{
    private int $pages;

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

    public function setPages(?int $pages): void
    {
        if(is_int($pages)){
        $this->pages = $pages;
        }

    }
    public function getPages() : int
    {
        return $this->pages;
    }

    public function getProduct() :string
    {

        return "<hr><b>About Product:</b><br>
                 Name: \t  " . $this->name . "<br>
                 Price: \t " . $this->prise . "<br>
                 Pages:  \t" . $this->getPages()         . '<br>';

    }


}