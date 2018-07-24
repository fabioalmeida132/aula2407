<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 24/07/2018
 * Time: 19:34
 */

class Subtrair
{
    public $n1;
    public $n2;

    function Subtrair($n1,$n2)
    {
        $this->n1 = $n1;
        $this->n2 = $n2;
    }

    public function calcular()
    {
        $res = $this->n1 - $this->n2;
        return $res;
    }
}