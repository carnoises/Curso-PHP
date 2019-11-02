
<h2>Ejercicios básicos</h2>
<hr>
<h2>
    iii.	Realiza un conversor de monedas. La cantidad en pesetas que
            se quiere convertir y la tasa de cambio deberán estar
            almacenada en variables. Este deberá de realizarlo una
            función, es decir, la función recibirá las variables
            necesarias para realizar el cambio.
</h2>
<hr>
    
<?php

    $monedaCantidad = 200;
    $tasaCambio = 53;
    $totalCambio;

    function CambioMonedas($cantidad, $tasaCambio)
    {
        return $cantidad * $tasaCambio;
    }

    $totalCambio = CambioMonedas(200, 53);

    echo "<h1><strong>Cambio de dollar a pesos</strong></h1></br>";
    echo "Cantidad de dollares: $monedaCantidad</br>";
    echo "Tasa del dia..............: $tasaCambio</br>";
    echo "Total del cambio es..: $totalCambio";

?>
