<?php
include 'conexion.php';
session_start();
if ($_SESSION['tipo']!= 2)
{
    header ('location:iniciosesion.php');
}

?>


<html>
<head>      
<center><table height="80" width="1330">
        <td width="170"><center><p><img src="img/logo.PNG"
            alt="logo" title="Bioestadística 2" width=100 height=100></td>
        <td><center><p><img src="img/portada.png"
            alt="portada" width=850 height=100></td>
        </table></center>
        </head>    
        <body bgcolor= "F0FFF2">
                <table height="350" width="1350" border="0">
                    <td height="350" width="175" bgcolor= "A0D9D3"><center>
                        <a href= "indexusuario.php"><img src= "botones/inicio.PNG"></a><br><br>
                            <a href="glosario.php"><img src= "botones/glosario.PNG"></a><br><br>
                            <img src= "botones/ingresarespecieenc.PNG"></td>      
                        <td background= "img/fondo.jpg">
                    <u><b><center><h2>Ingrese especie:<h2></center></b>
                        
                        
                        <form action= "familia.php" method= "POST">           
        <center><table height="auto">   
        <tr width= "200">
                <td><center>Seleccione la familia:</center></td>
                <?php
                              $sql= "SELECT * from familia";
                              $result= mysqli_query($conect,$sql);
                              while($mostrar=mysqli_fetch_array($result)){
                             ?>  
                <td><option value="<?php $mostrar ['nombre'];?>"><?php echo $mostrar ['nombre'];?></option>
                <!--<input type= "radio" name="familia" value= "mochi"> <?php echo $mostrar ['nombre'];?> 
                --><?php }?></td><br>
             </tr> 

             <tr>
             <td>Si la opcion que busca no se encuentra en el listado, ingreselo a continuacion: </td><td><input type= "text" name= "familia"></td>
            </tr>

            <tr width= "200">
                <td><center>Reino:</center> </td>
                <td><input type= "text" name= "reino" required></td>
            </tr>
            <tr width= "200">
                <td><center>Especie:</center></td>
                <td><input type= "text" name= "especie"></td>
            </tr>
            <tr width= "200">
                <td><center>Género:</center></td>
                <td><input type= "text" name= "genero"></td>
            </tr>
            <tr width= "200">
                <td><center>Clase:</center></td>
                <td><input type= "text" name= "clase"></td>
            </tr>
            <tr width= "200">
                <td><center>Orden:</center></td>
                <td><input type= "text" name= "orden"></td>
            </tr>
            <tr width= "200">
                <td><center>División:</center></td>
                <td><input type= "text" name= "division"></td>
            </tr>
            <tr width= "200">
                <td><center>Nombre vulgar:</center></td>
                <td><input type= "text" name= "nombre_vulgar"></td>
            </tr>
            <tr width= "200">
                <td><center>Descripción:</center></td>
                <td><input type= "text" name= "descripcion"></td>
            </tr>
            <tr width= "200">
                <td><center>Fruto:</center></td>
                <td><input type= "text" name= "fruto"></td>
            </tr>
            <tr width= "200">
                <td><center>Foto del fruto:</center></td>
                <td><input type= "file" name= "foto_fruto"></td>
            </tr>
            <tr width= "200">
                <td><center>Foto:</center></td>
                <td><input type= "file" name= "foto"></td>
            </tr>
            </table> 
            <center><input type="submit" name= "Enviar" value="Aceptar"><br>
            </form>

            <br><center><a href="cerrarsesion.php"><img src= "botones/cerrarsesion.PNG"></a></center>
                    </td></center>
                </table>  
            
        </address>
                <table width="1359">
                    
                    <td><center> Facultad de Ciencias Exactas y Naturales <br> Belgrano 300|SFVC</td>
                </table></center>
      
</body>
</html>