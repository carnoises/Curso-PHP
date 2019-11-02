
    <h2>Ejercicios básicos i</h2>

    <hr>
    <h2>
        i.	Escribe un programa que utilice las variables $x y $y.
         Asígnales los valores 144 y 999 respectivamente.
        A continuación, muestra por pantalla el valor de cada variable,
        la suma, la resta, la división y la multiplicación.
    </h2>
    <hr>
    
    <?php

        $x = 144;
        $y = 999;

        echo "<strong>Valor de las variables</strong></br>";
        echo "X = $x" . "</br>";
        echo "Y = $y" . "</br>";

        echo "</br><strong>Suma de las variables</strong></br>";
        echo "Suma: " .($x + $y) . "</br>";

        echo "</br><strong>Resta de las variables</strong></br>";
        echo "Resta: " .($x - $y) . "</br>";

        echo "</br><strong>Multiplicacion de las variables</strong></br>";
        echo "Multiplicacion: " .($x * $y) . "</br>";

        echo "</br><strong>División de las variables</strong></br>";
        echo "División: " .($x / $y) . "</br>";

    ?>
