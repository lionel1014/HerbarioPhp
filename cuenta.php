<?php

include 'conexion.php';
$nom = $_POST ['nombre'];
$ape = $_POST ['apellido'];
$cond = $_POST ['cond'];
$mat = $_POST ['matricula'];

$req=(strlen($nom)*strlen($ape)*strlen($cond)*strlen($mat)) or die ("No se han llenado todos los campos <br><br> <a href='registro.php'>Volver</a>");

$checknick= mysqli_query($conect,"SELECT * FROM cuenta WHERE matricula='$mat'");
$checknick2= mysqli_query($conect,"SELECT * FROM usuario WHERE matricula='$mat'");
$check_nick=mysqli_num_rows($checknick);
$check_nick2=mysqli_num_rows($checknick2);

if($check_nick>0)
	{ 
		echo "Ya existe esta matrícula, por favor intente de nuevo <br>";
		echo '<a href="registro.php">Volver</a>';
    }
   
if($check_nick2>0)
	{ 
		echo "Ya existe esta matrícula, por favor intente de nuevo <br>";
		echo '<a href="registro.php">Volver</a>';
    }    

	else{
         $insertar= "INSERT INTO cuenta (nombre, apellido, condicion, matricula) VALUES ('$nom','$ape','$cond','$mat')";
         $query= mysqli_query ($conect,$insertar);
	

            if ($query) {
                        echo '<h2>Registro completo</h2>';
                        echo '<h5>Espera a que el responsable valide tu información. Regresa más tarde.</h5>';
                        echo '<a href="index.php">volver</a>';
                        }
            else{
                echo "error al enviar datos " . mysqli_error($conect);
                }
    mysqli_close($conect);
        }
?>