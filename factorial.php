<?php
// Variable que recibe el valor introducido por el usuario
$num = $_POST['numero'];

//Variables que nos ayudarán a guardar los valores para los cálculos
$i=$num;
$factorial=1;

    // Mostramos en pantalla el número capturado por el usuario
    echo "Número capturado: " . $num . "<br>";

    // Ciclo para calcular el factorial
      do{
        echo $factorial ." x ". $i. " = ";
        $factorial=$factorial * $i;
        $i--;
        echo $factorial. "<br>";
        echo "  ";
     }while($i>=1);

    // Mostramos el resultado final del cálculo
    echo "<br>Factorial de $num  = $factorial"; 

?>