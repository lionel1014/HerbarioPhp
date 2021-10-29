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
                        <a href="indexusuario.php"><img src= "botones/inicio.PNG"></a><br><br>
                        <img src= "botones/glosarioenc.PNG"><br><br>
                        <a href="ingresarespecie.php"><img src= "botones/ingresarespecie.PNG"></a></td>      
                        <td background= "img/fondo.jpg">
                        <br><b><center><h2>Listado:<h2></center></b>
                        
                            <?php
                             include 'conexion.php';

                             if($_POST ['fam']){

                                $fam = $_POST ['fam'];
                                //  echo $fam;
                                $sql= 'SELECT * FROM `ingreso` WHERE `familia` LIKE "'.$fam.'"';
                                //  echo $sql;
                                $result= mysqli_query($conect,$sql);
                                if ($result) {
                                    # code...
                                
                                // if ($result) {
                                //     var_dump($result);
                                //     echo "funciona el sql<br>";
                                // }
                                // $mostrar=mysqli_fetch_array($result);
                                // if ($mostrar) {
                                //     echo "funciona el mysqli_fetch_array<br>";
                                //     var_dump($mostrar);
                                // }
                                $cant=mysqli_num_rows($result);
                                // echo $cant;
                                $row= mysqli_fetch_array($result);
                                // var_dump($row);
                                for($i=1; $i <= $cant; $i++){
                                    $familia = $row['familia'];
                                ?>
                                <br><center>
                                    <table height="auto">
                                        <form action="">
                                        <tr width= "200"> 
                                    <td><center>Familia:</center> </td>
                                    <td><input type="text" name="fam" value= "<?php echo $row['familia'];?>"></td>
                                                    </tr>
                                
                                                    <tr width= "200"> 
                                    <td><center>Reino:</center> </td>
                                    <td><input name= "reino" value= "<?php echo $row['reino'];?>"></td>
                                                    </tr>
                                                    <tr width= "200"> 
                                    <td><center>Especie:</center> </td>
                                    <td><input name= "especie" value= "<?php echo $row['especie'];?>"></td>
                                                    </tr>
                                                    <tr width= "200"> 
                                    <td><center>Género:</center> </td>
                                    <td><input name= "genero" value= "<?php echo $row['genero'];?>"></td>
                                                    </tr>
                                                    <tr width= "200"> 
                                    <td><center>Clase:</center> </td>
                                    <td><input name= "clase" value= "<?php echo $row['clase'];?>"></td>
                                                    </tr>
                                                    <tr width= "200"> 
                                    <td><center>Orden:</center> </td>
                                    <td><input name= "orden" value= "<?php echo $row['orden'];?>"></td>
                                                    </tr>
                                                    <tr width= "200"> 
                                    <td><center>División:</center> </td>
                                    <td><input name= "division" value= "<?php echo $row['division'];?>"></td>
                                                    </tr>
                                                    <tr width= "200"> 
                                    <td><center>Nombre Vulgar:</center> </td>
                                    <td><input name= "nombre_vulgar" value= "<?php echo $row['nombre_vulgar'];?>"></td>
                                                    </tr>
                                                    <tr width= "200"> 
                                    <td><center>Descripción:</center> </td>
                                    <td><input name= "descripcion" value= "<?php echo $row['descripcion'];?>"></td>
                                                    </tr>
                                                    <tr width= "200"> 
                                    <td><center>Fruto:</center> </td>
                                    <td><input name= "fruto" value= "<?php echo $row['fruto'];?>"></td>
                                                    </tr>
                                    </form>
                                    </table> <?php
                                    }
                                }
                            }else{
                                header('location:glosario.php');
                            }
                            // mysql_free_result($result);
                            ?></center> 
                           


                          <br><br> <center><a href="cerrarsesion.php"><img src= "botones/cerrarsesion.PNG"></a></center>
                    </td></center>
                </table>  
                <table width="1350">
                    
                <td><center> Facultad de Ciencias Exactas y Naturales <br> Belgrano 300|SFVC</td>
                </table></center>
      
</body>
</html>