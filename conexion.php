<?php

$host= "localhost";
$user= "root";
$clave= "";
$bd= "herbario";
$conect= mysqli_connect ($host,$user,$clave, $bd);
if(!$conect)
{
 echo "No se ha podido establecer conexion";
}
else
{
//echo "Conexion exitosa";
}
?>