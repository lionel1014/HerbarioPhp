<?php
include 'conexion.php';
session_start();
if ($_SESSION['tipo']!= 1)
{
    header ('location:iniciosesion.php');
}

?>


<html>
<head>
<title>Alumnos Nuevos</title> 
<style type="text/css">
*{
    padding:0px;
    margin:0px;
}
ul, ol{
    list-style:none;
}
.nav li a {
    background-color:#5EC652;
    color:#fff;
    text-decoration:none;
    padding:0px 15px;
    display:block;
}
.nav li a:hover {
    background-color:#032E10;
}
.nav li ul{
    display:none;
    position:absolute;
    min-width:140px;
}
.nav li:hover > ul{
    display:block;
}
.nav li ul li {
    position:relative;
}
.table{
    padding: 10px;
}
.nickTabla{
    background-color : #fff;

}
.alumnosT{
    margin-top : -13%;
    margin-bottom : 1rem;
    
}

</style>     
<center><table height="80" width="1330">
        <td width="170"><center><p><img src="img/logo.PNG"
            alt="logo" title="Bioestadística 2" width=100 height=100></td>
        <td><center><p><img src="img/portada.png"
            alt="portada" width=850 height=100></td>
        </table></center>
        </head>    
        <body bgcolor= "F0FFF2">
                <table  height="auto" border="0">
                    <td width="175" bgcolor= "A0D9D3"><center>
                            <a href="indexadmin.php"><img src= "botones/inicio.PNG"></a><br><br>
                            <a href="glosario.php"><img src= "botones/glosario.PNG"></a><br><br>
                           <!-- start nav -->
                   <div id="header">
                <!-- start menu -->
                <ul class="nav">
                <li><img src= "botones/alumnos.PNG"></a>
                <ul>
                <li><a href="alumnosreg.php"><img src="botones/regulares.PNG"></a></li>
                <li><a href="alumnoslib.php"><img src="botones/libres.PNG"></a></li>
                <li><img src="botones/nuevos.PNG"></a></li>
                </ul>
                 </td>   
                        <td background= "img/fondo.jpg">
                        <br><u><b><center><h2>Ingresar nuevos A.:<h2></center></b>

                             <form action=usuario.php method= "POST">               
        <br><center>
            <table height="auto">
        <tr width= "500"> 
            <td><center>ID:</center> </td>
            <td><input name= "id" value= ""></td>
                              </tr>
            <tr width= "200"> 
                <td><center>Nombre:</center> </td>
                <td><input type= "text" name= "nombre" value= ""></td>
            </tr>
            <tr width= "200">
                <td><center>Apellido:</center> </td>
                <td><input type= "text" name= "apellido" value= ""></td>
            </tr>
            <tr width= "200">
                <td><center>Condición:</center></td>
                <td><input name= "condicion" value="">
                    </td>
            </tr>
            <tr width= "200">
                <td><center>Matrícula:</center></td>
                <td><input type= "number" name= "matricula" value= ""></td>
            </tr>
            </table> 
            <br><center><input type="radio" name="accion" value="1">Ingresar<br>
            <input type="radio" name="accion" value="2">Eliminar<br><br>
            <input type="submit" name= "Aceptar" value= Aceptar><br><br>
            </form>         
                <td class="table" background= "img/fondo.jpg" width="100%">
                    <u><h2 class="alumnosT">Alumnos nuevos:</h2></u>
                    <table class ="nickTabla" border="2" width="90%" height="auto">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Matrícula</th>
                        </tr>
                        <?php
                        
                            $sql= "SELECT * from cuenta ORDER BY id DESC";
                            $result= mysqli_query($conect,$sql);
                            while($mostrar=mysqli_fetch_array($result)){
                            ?><tr>
                                <td><?php echo $mostrar['id'];?></td>
                                <td><?php echo $mostrar['nombre'];?></td>
                                <td><?php echo $mostrar['apellido'];?></td>
                                <td><?php echo $mostrar['matricula'];?></td>
                            </tr>
                            <?php
                            }
                        ?>
                    </table>
                </td>
            </td>   
            </table>
                 <br><center><a href="cerrarsesion.php"><img src= "botones/cerrarsesion.PNG"></a></center><br>
        </address>
                <table width="1359">
                    
                    <td><br><center> Facultad de Ciencias Exactas y Naturales <br> Belgrano 300|SFVC</td>
                </table></center>
      
</body>
</html>