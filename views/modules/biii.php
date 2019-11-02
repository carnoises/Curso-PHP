<hr>
<h2>
     iii. Un script que muestre la IP del cliente, la IP del servidor
     y el nombre del fichero que se está ejecutando.
</h2>
<hr>

<?php

     $ip_servidor = gethostbyname('localhost');
     //$var = $_SERVER['HTTP_CLIENT_IP'];

     $var = getenv('HTTP_X_FORWARDED_FOR');

     //  //obtner ip del cliente
     $ip_cliente= gethostbyname($var);


     echo "<b>Ip servidor:</b> " . $ip_servidor;

     echo "<br><b>Ip Cliente..:</b> " . $ip_cliente;

?>