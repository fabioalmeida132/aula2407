<?php

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $op = $_POST['op'];

    if ($op == "somar"){
        include ("Somar.class.php");

        $soma1 = new Somar($n1,$n2);

        echo $soma1->calcular();
    }
    if ($op == "multiplicar"){
        include ("Multiplicar.class.php");

        $multiplicacao = new Multiplicar($n1,$n2);

        echo $multiplicacao->calcular();
    }
    if ($op == "subtrair"){
        include ("Subtrair.class.php");

        $subtracao = new Subtrair($n1,$n2);

        echo $subtracao->calcular();
    }

    if ($op == "dividir"){
        if ($n2<=0){
            echo "Não é possível dividir por 0";
        }else{
            include ("Dividir.class.php");

            $divisao = new Dividir($n1,$n2);

            echo $divisao->calcular();
        }
    }

