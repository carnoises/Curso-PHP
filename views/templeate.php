<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso PHP ITLA</title>
    <link rel="stylesheet" href="style/estilos.css">
 
</head>
<body>
    <header>
        <h1>PHP Básico | Infotep 2019-T-4</h1>
    </header>

   <?php
   
    require "modules/navegacion.php";

   ?>
   
   <section>
        <?php  
            $enlace = "";

            if (isset($_GET["action"])) {

                $enlace = $_GET["action"];
            }
            
            if (
                $enlace == "basicos" ||
                $enlace == "predefinidas" ||
                $enlace == "i" ||
                $enlace == "ii" ||
                $enlace == "iii" ||
                $enlace == "iv" ||
                $enlace == "bi" ||
                $enlace == "bii" ||
                $enlace == "biii" ||
                $enlace == "biv"
            ) {

            $enlace = "views/modules/".$enlace.".php";
            }
            else if($enlace == "index"){
                $enlace = "views/modules/inicio.php";
            }
            else{
                $enlace = "views/modules/inicio.php";
            }
        

        include $enlace;
        ?>

    </section>

    <footer>
        <p>
            Creado por Carlos Tejada
        </p>
    </footer>
</body>
</html>