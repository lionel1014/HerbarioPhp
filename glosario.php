<?php
include 'conexion.php';

?>

<html>
    
        <head>      
            <link rel="stylesheet" href="css/estilosNick.css">
            <link rel="stylesheet" href="libr\bootstrap\css\bootstrap.css">
        </head>
        <body bgcolor= "F0FFF2">
        <center><table height="80" width="1330">
        <td width="170"><center><p><img src="img/logo.PNG"
            alt="logo" title="Bioestadística 2" width=100 height=100></td>
        <td><center><p><img src="img/portada.png"
            alt="portada" width=850 height=100></td>
        </table></center>
                <table height="350" width="1350" border="1">
                    <td height="350" width="175" bgcolor= "A0D9D3"><center>
                        <a href="indexusuario.php"><img src= "botones/inicio.PNG"></a><br><br>
                        <img src= "botones/glosarioenc.PNG"><br><br>
                        <a href="ingresarespecie.php"><img src= "botones/ingresarespecie.PNG"></a></td>      
                        <td background= "img/fondo.jpg">
                        <br><b><center><h2>Familias:<h2></center></b>
                        <form action= "muestra.php" method="POST">
                            <div>
                                <nav class="volver">
                                    <button id="bvolver" >
                                        <a href="<?php echo $_SERVER["HTTP_REFERER"]?>">Volver</a>
                                    </button>
                                </nav>
                                <nav class="botones" style="margin=0 auto">
                             <?php
                              $sql= "SELECT * FROM `familia` ORDER BY `familia`.`nombre` ASC";
                              $result= mysqli_query($conect,$sql);
                            //   var_dump($result);
                              while($mostrar=mysqli_fetch_array($result)){
                                // var_dump($mostrar);
                                ?>
                               <button name="fam" class="bfamilias" value="<?php echo $mostrar['nombre']?>" type="submit"><?php echo $mostrar['nombre'] ?></button>
                            
                            <?php
                            }
                            @mysqli_close($sql);
                            ?>
                            </nav>
                            </div>
                            </center> 
                         
                             
                        </form>

                          <br><br> <center><a href="cerrarsesion.php"><img src= "botones/cerrarsesion.PNG"></a></center>
                    </td></center>
                </table>  
            
        </address>
                <table width="1350">
                    
                    <td><center> Facultad de Ciencias Exactas y Naturales <br> Belgrano 300|SFVC</td>
                </table></center>
      
</body>
</html>