<?php

class Somar
{
    public $n1;
    public $n2;

    function Somar($n1,$n2)
    {
        $this->n1 = $n1;
        $this->n2 = $n2;
    }

    public function calcular()
    {
       $res = $this->n1 + $this->n2;
       return $res;
    }

}
