<?php


class Products1
{
    public $name;
    public $prise;

    public $cpu;
    public $numPages;

    public function __construct($name, $prise,$cpu=null,$numPages=null)
    {
        $this->name=$name;
        $this->prise =$prise;
        $this->cpu=$cpu;
        $this->numPages=$numPages;
    }

    /**
     * @return mixed|null
     */
    public function getCpu(): mixed
    {
        return $this->cpu;
    }
    public function getProduct($type = 'notebook')
    {
        $out  = "<hr><b>About Product:</b><br>
                 Name: {$this->name}<br>
                 Price:{$this->prise}";
        if($type=='notebook'){
            $out .= "<br>CPU {$this->cpu}";
        }
        else $out .= "<br>Pages {$this->numPages}";

        return $out;
    }
}