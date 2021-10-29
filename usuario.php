<?php

include 'conexion.php';
$id= $_POST ['id'];
$nom = $_POST ['nombre'];
$ape = $_POST ['apellido'];
$cond = $_POST ['condicion'];
$mat = $_POST ['matricula'];
$acc = $_POST ['accion'];

$checknick= mysqli_query($conect,"SELECT * FROM cuenta WHERE id='$id'");
$check_nick=mysqli_num_rows($checknick);

if ($acc != 2)
{
         $insertar= "INSERT INTO usuario (nombre, apellido, condicion, matricula, tipo) VALUES ('$nom','$ape','$cond','$mat','2')";
         $query= mysqli_query ($conect,$insertar);
         $checknick= mysqli_query($conect,"DELETE FROM cuenta WHERE id='$id'");
            if ($query) {
                        echo '<h2>Operación completada</h2>';
                        
                        echo '<a href="alumnosnue.php">Seguir navegando</a>';
                        }
            else{
                echo "error al enviar datos " . mysqli_error($conect);
                }
    mysqli_close($conect);
  }
 
 
  else
 {
     if ($acc!= 1)
     {	
            $sql = "DELETE FROM cuenta WHERE id=$id";
            $result= mysqli_query($conect,$sql);
            echo 'Accion completada';
            echo '<a href="alumnosnue.php">Volver</a><br>';
    }
} 
?>
