<?php
    /* $nome = $_POST["nomeVisitante"];

    $email = $_POST["emailVisitante"];

    echo "Bem-vindo $nome<br>";

    echo "Seu e-mail " . $email; */

    $trueOrFalse;

    $trueOrFalse = true;

    $numero = 5;

    if(!empty($_GET["nome"]))
    {
        $nome = $_GET["nome"];
    }

    if (isset($nome))
    {
        echo "Seu nome é $nome!";
    }
    else
    {
        echo "Não tem dados!";
    }

    $opcao = "nada";
    $x = 10;
    $y = 5;

    if ($x > $y)
    {
        echo "acontece";
    }

    if ($x < $y)
    {
        echo "acontece";
    }

    if ($x >= $y)
    {
        echo "acontece";
    }

    if ($x <= $y)
    {
        echo "acontece";
    }


    $z = 2;
    $w = "2";

    if ($z === $w && $z > $W && $z > $W)
    {
        echo "acontece";
    }

    if ($z > $W)
    {
        echo "acontece";
    }

    if ($x != $y)
    {
        echo "acontece";
    }

    if ($z === $w)
    {
        echo "acontece";
    }






    switch($opcao)
    {
        case "subtracao":
            echo $x - $y;
            break;
        case "adicao":
            echo $x + $y;
            break;
        case "multiplicacao":
            echo $x * $y;
            break;
        case "divisao":
            echo $x / $y;
            break;
        default:
            //echo "escolha uma opção válida";
    }








?>