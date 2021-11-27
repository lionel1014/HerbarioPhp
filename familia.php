<?php

include 'conexion.php';
$fam = $_POST ['familia'];
$rei = $_POST ['reino'];
$esp = $_POST ['especie'];
$gen = $_POST ['genero'];
$clase = $_POST ['clase'];
$orden = $_POST ['orden'];
$div = $_POST ['division'];
$nom = $_POST ['nombre_vulgar'];
$desc = $_POST ['descripcion'];
$fruto = $_POST ['fruto'];
// $foto_f = $_POST ['foto_fruto'];
// $foto = $_POST ['foto'];
if ($_POST['addFamilia']) {
    $fam = $_POST['addFamilia'];
    $insertar= "INSERT INTO `ingreso` (familia, reino, especie, genero, clase, orden, division, nombre_vulgar, descripcion, fruto) VALUES ('$fam','$rei','$esp','$gen','$clase','$orden','$div','$nom','$desc','$fruto')";
    $insertar2= "INSERT INTO `familia` (`nombre`) VALUES ('$fam')";
    $query= @mysqli_query ($conect,$insertar);
    if ($query) {
        echo '<h2>Ingreso completo</h2>';
        echo '<a href="ingresarespecie.php">volver</a>';
    }
    else{
        echo "error al enviar datos " . mysqli_error($conect);
    }
    $query2= @mysqli_query ($conect,$insertar2);
    if ($query2) {
        echo '<h2>Ingreso completo de la nueva familia</h2>';
        echo '<a href="ingresarespecie.php">volver</a>';
        
    }
    else{
        echo "error al enviar datos " . mysqli_error($conect);
    }
    mysqli_close($conect);
    header('location:ingresarespecie.php?exito=2');
    
}else {


    // $req=(strlen($fam)*strlen($rei)*strlen($esp)*strlen($gen)*strlen($clase)*strlen($orden)*strlen($div)*strlen($nom)*strlen($desc)*strlen($fruto)*strlen($foto_f)*strlen($foto));
    $req=(strlen($fam)*strlen($rei)*strlen($esp)*strlen($gen)*strlen($clase)*strlen($orden)*strlen($div)*strlen($nom)*strlen($desc)*strlen($fruto));
    var_dump($fam);
            $insertar= "INSERT INTO `ingreso` (familia, reino, especie, genero, clase, orden, division, nombre_vulgar, descripcion, fruto) VALUES ('$fam','$rei','$esp','$gen','$clase','$orden','$div','$nom','$desc','$fruto')";
            // $insertar= "INSERT INTO `ingreso` (familia, reino, especie, genero, clase, orden, division, nombre_vulgar, descripcion, fruto, foto_fruto, foto) VALUES ('$fam','$rei','$esp','$gen','$clase','$orden','$div','$nom','$desc','$fruto','$foto_f','$foto')";
            //!peticion SQL hacia familia
            // $insertar2= "INSERT INTO `familia` (`id`, `nombre`) VALUES ('', '$fam')";
            // $query2= @mysqli_query ($conect,$insertar2);
            // if ($query2) {
            //     echo'Familia subida';
            // }else {
            //     echo'Familia no subida';
            // }
            $query= @mysqli_query ($conect,$insertar);        

            if ($query) {
                echo '<h2>Ingreso completo de la nueva familia</h2>';
                echo '<a href="ingresarespecie.php">volver</a>';
            }
            else{
                echo "error al enviar datos " . mysqli_error($conect);
                echo '<a href="ingresarespecie.php">volver</a>';
            }
            header('location:ingresarespecie.php?exito=1');
        mysqli_close($conect);
}
?>