<hr>
<h2>
      iv. Página web que permita insertar un dato ya sea nombre de usuario,
      apellido, números, lo que sea (cualquier tipo de cadena de texto),
      estos datos los inserte en un array y permita visualizar los valores
      insertados.
</h2>
<hr>
    <h1>Insertando Datos</h1>

    <form action="" method="post">
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
        <br>
        <br>
        <label for="apellido">Apellido</label><br>
        <input type="text" name="apellido" id="apellido" placeholder="Apellido" required>
        <br>
        <br>
        <label for="Edad">Edad</label><br>
        <input type="text" name="edad" id="Edad" placeholder="Edad" required>
        <br>
        <input type="submit" name="submit" value="Enviar">
    </form>

<?php


if (isset($_POST["submit"])) {

    $datos = array
    (
        "nombre"=>$_POST['nombre'],
        "apellido"=>$_POST['apellido'],
        "edad"=>$_POST['edad']
    );

    echo "</br>El nombre es..: " . $datos['nombre'] . "</br>";
    echo "El apellido es: " . $datos['apellido'] . "</br>";
    echo "La edad es....: " . $datos['edad'];

    echo "</br> </br>";
    echo "<pre>";
    echo "<strong>Imprimiendo el tipo de variables</strong>";
    echo "</br> </br>";
    var_dump($datos);
    echo "</pre>";
    
} 

?>