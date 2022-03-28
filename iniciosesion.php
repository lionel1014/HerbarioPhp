<html>
<head>
    <meta charset= "UTF-8">
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
    <!-- <br><br><br><br><u><b><center>INICIAR SESIÓN:</center></b></u> -->
    <!-- <form action= "sesion.php" method= "POST">
        <br><center><table width= "300" >          
                <br><tr>
                   <td>Ingrese nombre:</td>
                   <td><input type= "text" name= "nom"></td>
                </tr>
                <tr> 
                <td>Ingrese matrícula:</td>
                <td><input type= "number" name= "mat"></td>
            </tr>
            </table>
            <br><center><input type = "submit" name= "login" value= "Iniciar sesión"><br></center>
            <br><br>   
        </form>    
        <br><br><br><br><br><br><br><br>
        <br><br><br><br><table width="1350" border= "1"> -->
        <table  height="auto" border="0">
            <td width="175" bgcolor= "A0D9D3"><center><img src= "botones/inicioenc.PNG"></td>    
                <td width="100%" background= "img/fondo.jpg">
        <!-- nuevo form -->
        <div>
            <button class="bvolverDefault" >
                <a href="<?php echo $_SERVER["HTTP_REFERER"]?>">Volver</a>
            </button>
        </div>
        <div id="form">
        <div><h4><b><u>INICIAR SESIÓN:</u></b></h4></div>

        <form action= "sesion.php" method= "POST">
            <div class="mb-3 col-4">
                <label for="exampleInputEmail1" class="form-label">Nombre de usuario:</label>
                <input type="text" class="form-control" name="nom" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Si no recuerda comuniquese con su profesor...</div>
            </div>
            <div class="mb-3 col-4">
                <label for="exampleInputPassword1" class="form-label">Número de matrícula:</label>
                <input type="text" class="form-control" name="mat" id="exampleInputPassword1">
            </div>
            <button type="submit" name="login" class="btn btn-primary">Submit</button>
        </form>

        
        </div>
            <br><a href= "registro.php"><img src= "botones/registro.PNG"></a> <br><br>
            </td></center>
        </table>
                <td><br><center>Facultad de Ciencias Exactas y Naturales <br> Belgrano 300|SFVC</td></center>
        </table></center>
              
</body>
</html>