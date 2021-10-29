<?php
include 'conexion.php';
$famn = $_POST ['familian'];
$rei = $_POST ['reino'];
$esp = $_POST ['especie'];
$gen = $_POST ['genero'];
$clase = $_POST ['clase'];
$orden = $_POST ['orden'];
$div = $_POST ['division'];
$nom = $_POST ['nombre_vulgar'];
$desc = $_POST ['descripcion'];
$fruto = $_POST ['fruto'];
$foto_f = $_POST ['foto_fruto'];
$foto = $_POST ['foto'];

$req=(strlen($famn)*strlen($rei)*strlen($esp)*strlen($gen)*strlen($clase)*strlen($orden)*strlen($div)*strlen($nom)*strlen($desc)*strlen($fruto)*strlen($foto_f)*strlen($foto));

        $insertar= "INSERT INTO ingreso (familia, reino, especie, genero, clase, orden, division, nombre_vulgar, descripcion, fruto, foto_fruto, foto) VALUES ('$famn','$rei','$esp','$gen','$clase','$orden','$div','$nom','$desc','$fruto','$foto_f','$foto')";
         $query= mysqli_query ($conect,$insertar);        
        $insertar= "INSERT INTO familia (nombre) VALUES ('$famn')";
         $query= mysqli_query ($conect,$insertar); 

            if ($query) {
                        echo '<h2>Ingreso completo</h2>';
                        echo '<a href="indexusuario.php">volver</a>';
                        }
            else{
                echo "error al enviar datos " . mysqli_error($conect);
                }
    mysqli_close($conect);
?>