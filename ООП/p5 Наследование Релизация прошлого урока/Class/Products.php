<?php


class Products
{
    public $name;
    public $prise;


    public function __construct($name, $prise,)
    {
        $this->name=$name;
        $this->prise =$prise;

    }

    /**
     * @return mixed|null
     */

    public function getProduct( )
    {
        return   "<hr><b>About Product:</b><br>
                 Name: {$this->name}<br>
                 Price:{$this->prise}";
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrise()
    {
        return $this->prise;
    }
}