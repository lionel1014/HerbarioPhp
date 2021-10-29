<?php
session_start();
include'conexion.php';

if(isset($_POST['login']))
{
	$nom=$_POST['nom'];
    $mat=$_POST['mat'];
	$sql= mysqli_query($conect,"SELECT * FROM usuario WHERE nombre='$nom' AND matricula='$mat'");
	
	if(mysqli_num_rows($sql)>0)
	{
		$row=mysqli_fetch_array($sql);
		$_SESSION["nombre"]=$row['nombre'];
		$_SESSION["matricula"]=$row['matricula'];
		$_SESSION["tipo"]=$row['tipo'];
		 //header ("location: indexusuario.php");
      if(isset($_SESSION["nombre"]))
	   {//if ($_SESSION["tipo"]==1)
		 switch($_SESSION["tipo"])		  
	     {
			case 1:
			header ('location: indexadmin.php');
			break;
			case 2:
            header ('location: indexusuario.php');
			break;
			default:

			//header ("location: indexadmin.php");
		 }	   
	  //else
		// {
		//	header ("location: indexusuario.php"); 
		 //}		
		//echo '<h2>Iniciando sesion para: </h2>' . $_SESSION ['nick'] . '<p>';
	   }
    }
	else
	{
        echo '<script>alert("Usuario o Contrasena Incorrectos.");</script>';
        echo '<a href="iniciosesion.php">Volver</a>';
	}
}
?>