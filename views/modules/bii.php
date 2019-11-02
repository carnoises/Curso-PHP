<hr>
<h2>
   ii.	Un script que muestre la url actual.
</h2>
<hr>

<?php

    $host = $_SERVER["HTTP_HOST"];
    $url = $_SERVER["REQUEST_URI"];
    echo "http://" . $host . $url;
?>

