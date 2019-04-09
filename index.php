<?php
    $alunos[] = "Arnaldinho";
    $alunos[] = "Letícia pistola";
    $alunos[] = "Mais importante que sua tia";
    $alunos[] = "Nat meu drive não funfa";
    $alunos[] = "Betina eu tenho 1 milhao";

    $numeros[1] = 1;
    $numeros[2] = 15;
    $numeros[3] = 30;
    $numeros[4] = 45;

    $numeros2["primeiro"] = 1;
    $numeros2["segundo"] = 15;
    $numeros2["terceiro"] = 30;
    $numeros2["quarto"] = 45;

    $paes = ["De leite", "frances", "Pão de Ló do Arnaldinho"];

    $professor["nome"] = "Vitor";
    $professor["idade"] = 22;
    $professor["faculdade"] = "Jogos Digitais";



    //echo var_dump($professor);

    for ($i = 0; $i < count($alunos); $i++)
    {
       // echo $alunos[$i] . "<br>";
    }

    $tabuleiro = array(
        1=>array("a", "b", "c"),
        2=>array("d", "f", "g"),
        3=>array("h", "i", "j"),
    );
    $matrix[0][0] = "ALOW";
    $matrix[1][0] = "WALO";
    $matrix[0][1] = "AWOL";
    $matrix[1][1] = "OLAW";
    //echo var_dump($tabuleiro) . "<br>";
    //echo var_dump($matrix);

    $carros[7]["Motorista"] = "Jason";
    $carros[7]["Passageiro1"] = "Bonder";
    $carros[7]["Passageiro2"] = "Júnior";
    $carros[7]["Passageiro3"] = "";

    $carros[1002]["Motorista"] = "Ashe";
    $carros[1002]["Passageiro1"] = "Katty";
    $carros[1002]["Passageiro2"] = "";
    $carros[1002]["Passageiro3"] = "";

    $carros[300]["Motorista"] = "Zeca";
    $carros[300]["Passageiro1"] = "Hérculano";
    $carros[300]["Passageiro2"] = "Krateus";
    $carros[300]["Passageiro3"] = "Ariovaldo";

    /* echo $carros[7]["Motorista"] . "<br>";
    echo $carros[1002]["Motorista"] . "<br>";
    echo $carros[300]["Motorista"] . "<br>"; */

    
?>