<html>   
<head>
<meta charset= "UTF-8">     
<table height="80" width="1330">
        <td width="170"><p><img src="img/logo.PNG"
    alt="logo" title="Bioestadística 2" width=100 height=100></td>
        <td><p><img src="img/portada.png"
    alt="portada" width=850 height=100></td>
        </table>
</head>    
<body style="background-color : F0FFF2">   
    <br><br><br><br><u><b>REGISTRO DE ALUMNOS:</b></u>
    <form action= "cuenta.php" method= "POST"><!--method="post" action="alum.php"-->            
        <br><table height="auto">
            <tr width= "500"> 
                <td>Ingrese nombre:</td>
                <td><input type= "text" name= "nombre"></td>
            </tr>
            <tr width= "200">
                <td>Ingrese apellido:</td>
                <td><input type= "text" name= "apellido"></td>
            </tr>
            <tr width= "200">
                <td>Elija su condición:</td>
                <td><input type="radio" name="cond" value="1">Regular
                    <input type="radio" name="cond" value="2">Libre</td>
            </tr>
            <tr width= "200">
                <td>Matrícula:</td>
                <td><input type= "number" name= "matricula"></td>
            </tr>
            </table> 
            <br><input type="submit" name= "Enviar" value="Aceptar"><br><br><br>
                <!--al enviar, volverá al index.html con la diferencia de que aparecerá 
                    un mensaje diciendo (espere a que su mensaje sea aceptado)-->
    </form>    
    <br><br><br><br><br><br><table width="1350" border= "1">
            <td><br>Facultad de Ciencias Exactas y Naturales <br> Belgrano 300|SFVC</td>
        </table>
              
</body>
</html>