<?php
    //Funções

    //Declaracao basica
    function Apresentacao()
    {
        
        echo "<script>
                alert('Olar Mundo!');
              </script>";
    }

    //Declaração com parâmetros
    function MeApresento($nome)
    {
        echo "Olar Mundo, sou $nome!<br>";
    }

    function calculo($operacao, $num1, $num2)
    {
        if ($operacao == "sub")
        {
            echo "O resultado da subtração é: " . ($num1 - $num2);
            
            echo "<br>";
            return ($num1 - $num2);
        }
        else if ($operacao == "som")
        {
            echo "O resultado da soma é: " . ($num1 + $num2);
            
            echo "<br>";
            return ($num1 + $num2);
        }
        else if ($operacao == "mul")
        {
            echo "O resultado da multiplicação é: " . ($num1 * $num2);
            
            echo "<br>";
            return ($num1 * $num2);
        }
        else if ($operacao == "div")
        {
            echo "O resultado da divisão é: " . ($num1 / $num2);
            echo "<br>";
            return ($num1 / $num2);
        }
    }

    function voto($tempoDeEleicao, $idade)
    {
        if ($tempoDeEleicao && $idade >= 16 && $idade < 18)
        {
            echo "Pode votar";
            return true;
        }

        else if($tempoDeEleicao && $idade >= 18 && $idade < 70)
        {
            echo "Deve votar";
            return true;
        }

        else if($tempoDeEleicao && $idade >= 70)
        {
            echo "Pode votar";
            return true;
        }

        else
        {
            echo "Não pode votar!";
            return false;
        }

    }

    MeApresento("Vitor");

    calculo("som", 10, 25);
    calculo("sub", 10, 25);
    calculo("mul", 10, 25);
    calculo("div", 10, 25);

    $resultado = calculo("mul", 2, 5);

    echo
    "<script>
        alert('$resultado');
     </script>";


?>
