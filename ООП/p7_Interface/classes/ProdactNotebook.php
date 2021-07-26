<?php
namespace classes;

use interface\IGadget;

class ProdactNotebook extends Products implements IGadget
{
    private $cpu;

    public function __construct($name, $prise,$cpu=null)
    {
        $this->setCpu($cpu);
        $this->setName($name);
        $this->setPrise($prise);
    }
    public function setCpu($cpu): void
    {
        $this->cpu = $cpu;
    }
    public function setName($name): void
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function setPrise($prise): void
    {
        $this->prise = $prise;
    }
    public function getProduct() : string
    {
        return   "<hr><b>About Product:</b><br>
                 Name: \t $this->name<br>
                 Price: \t $this->prise"."<br>
                 cpu:     $this->cpu";
    }
    public function getCase():string
    {
        return "Case for ".$this->getName();
    }
}