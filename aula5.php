<?php

    $palavras[0] = "Oi";
    $palavras[1] = "Oi2";
    $palavras[2] = "Oi3";
    $palavras[3] = "Oi4";
    $palavras[4] = "Oi5";
    $palavras[5] = "Oi6";
    $palavras[6] = "Oi7";
    $palavras[7] = "Oi8";
    $palavras[8] = "Oi9";
    $palavras[9] = "Oi10";
    $palavras[10] = "Oi11";
    $palavras[11] = "Oi12";
    $palavras[12] = "Oi13";

    /* echo $palavras[1]."<br>";
    echo $palavras[2]."<br>";
    echo $palavras[4]."<br>";
    echo $palavras[5]."<br>";
    echo $palavras[6]."<br>";
    echo $palavras[7]."<br>";
    echo $palavras[8]."<br>";
    echo $palavras[9]."<br>"; */

                            //$aux = $aux + 1;
    /* for ($aux = 1; $aux <= 12; $aux += 2)
    {
        echo $palavras[$aux] . "<br>";

        //echo "Olar";
    } */

    $numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20); 
 
    $c1 = array("Motorista1", "Passageiro1", "Passageiro1_2");
    $c2 = array("Motorista2", "Passageiro2", "Passageiro2_2");
    $c3 = array("Motorista3", "Passageiro3", "Passageiro3_2");
    $c4 = array("Motorista4", "Passageiro4", "Passageiro4_2");
    
    $carros = array($c1, $c2, $c3, $c4);


    
    
    /* echo "<table style= 'border: 1px solid black'>";
    for ($i = 0; $i <= 3; $i++)
    {
        echo "<tr style= 'border: 1px solid black'>";
        for($j = 0; $j <= 2; $j++)
        {
            echo "<th style= 'border: 1px solid black'>" . " WONKA " . $carros[$i][$j] . "</th>";
        }
        echo "</tr>";
    }
    echo "</table>"; */

   /*  echo "<table style= 'border: 1px solid black'>";
    for ($i = 1; $i <= 9; $i++)
    {
        echo "<tr style= 'border: 1px solid black'>";
        for($j = 1; $j <= 9; $j++)
        {
            echo "<th style= 'border: 1px solid black'>" . $i * $j . "</th>";
        }
        echo "</tr>";
    }
    echo "</table>"; */

    $num = array(-5, 0, -3, 15, 45, 4, 12, 2,0, 0, 32);

    $pares = 0;
    $impares = 0;
    $positivos = 0;
    $negativos = 0;

    foreach ($num as $n)
    {
        if (($n % 2) == 0 )
        {
            $pares++;
        }
        else
        {
            $impares++;
        }

        if ($n > 0)
        {
            $positivos++;
        }
        if($n < 0)
        {
            $negativos++;
        }
    }

    echo $pares . " Pares<br>";
    echo $impares . " Impares <br>";
    echo $positivos . " Positivos<br>";
    echo $negativos . " Negativos <br>";



    /* 
    foreach($numeros as $n)
    {
        echo $n * 10 . "<br>";
    }  */

    $trono = array ("Baratheon", "Stark", "Lannister", "Targaryen");

    $var = 0;

   /*  while($var <= 3)
    {
        echo "Salve: " . $trono[$var] . "<br>";
        $var++;
    } */

    do
    {
        echo "Salve: " . $trono[$var] . "<br>";
        $var++;
    }
    while(false);



    /* do
    {
        echo "Foi! <br>";
    } while (true);
 */

?>