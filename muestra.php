<html>
<head>
    <link rel="stylesheet" href="libr\bootstrap\css\bootstrap.css">
    <link rel="stylesheet" href="css/estilosNick.css">
</head>
        <center><table height="80" width="1330">
        <td width="170"><center><p><img src="img/logo.PNG"
            alt="logo" title="Bioestadística 2" width=100 height=100></td>
        <td><center><p><img src="img/portada.png"
            alt="portada" width=850 height=100></td>
        </table></center>
        <body bgcolor= "F0FFF2">
                <table height="350" width="1350" border="0">
                    <td height="350" width="175" bgcolor= "A0D9D3"><center>
                        <a href="indexusuario.php"><img src= "botones/inicio.PNG"></a><br><br>
                        <img src= "botones/glosarioenc.PNG"><br><br>
                        <a href="ingresarespecie.php"><img src= "botones/ingresarespecie.PNG"></a></td>      
                        <td background= "img/fondo.jpg">
                            <nav class="volver">
                                <button class="bvolver" >
                                    <a href="<?php echo $_SERVER["HTTP_REFERER"]?>">Volver</a>
                                </button>
                            </nav>
                        <br><b><center><h2>Listado:<h2></center></b>
                        <table class="table table-light table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Familia</th>
                                    <th scope="col">Reino</th>
                                    <th scope="col">Especie</th>
                                    <th scope="col">Género</th>
                                    <th scope="col">Clase</th>
                                    <th scope="col">Orden</th>
                                    <th scope="col">División</th>
                                    <th scope="col">Nombre vulgar</th>
                                    <th scope="col">Descripción</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                             include 'conexion.php';

                             if($_POST ['fam']){

                                $fam = $_POST ['fam'];
                                //  echo $fam;
                                $sql= 'SELECT * FROM `ingreso` WHERE `familia` LIKE "'.$fam.'"';
                                //  echo $sql;
                                $result= mysqli_query($conect,$sql);
                                if ($result) {
                                
                                
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
                                        ?>
                                        <tr>
                                            <td><?php echo $row['familia']; ?></td>
                                            <td><?php echo $row['reino']; ?></td>
                                            <td><?php echo $row['especie']; ?></td>
                                            <td><?php echo $row['genero']; ?></td>
                                            <td><?php echo $row['clase']; ?></td>
                                            <td><?php echo $row['orden']; ?></td>
                                            <td><?php echo $row['division']; ?></td>
                                            <td><?php echo $row['nombre_vulgar']; ?></td>
                                            <td><?php echo $row['descripcion']; ?></td>
                                        </tr>
                                        <?php
                                    }
                                }
                            }else{
                                header('location:glosario.php');
                            }
                            // mysql_free_result($result);
                            ?>
                            </tbody>
                        </table>
                        </center> 
                           


                          <br><br> <center><a href="cerrarsesion.php"><img src= "botones/cerrarsesion.PNG"></a></center>
                    </td></center>
                </table>  
                <table width="1350">
                    
                <td><center> Facultad de Ciencias Exactas y Naturales <br> Belgrano 300|SFVC</td>
                </table></center>
      
</body>
</html>