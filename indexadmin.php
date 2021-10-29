<?php

session_start();
if ($_SESSION['tipo']!= 1)
{
    header ('location:iniciosesion.php');
}

?>  


<html>
<head>   
<title>indexadmin</title> 
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

</style> 
        <table height="80" width="1330">
                <td width="170"><p><img src="img/logo.PNG"
                    alt="logo" title="Bioestadística 2" width=100 height=100></td>
                <td><p><img src="img/portada.png"
                    alt="portada" width=850 height=100></td>
                </table>
</head>    
<body style= bgcolor:"F0FFF2">
        <table  height="auto" border="0">
            <tr>    
                    <td width="175" bgcolor= "A0D9D3">
                <img src= "botones/inicioenc.PNG"><br><br>
                <a href="glosario.php"><img src= "botones/glosario.PNG"></a><br><br>
             
                   <!-- start nav -->
                   <div id="header">
                <!-- start menu -->
                <ul class="nav">
                <li><img src= "botones/alumnos.PNG"></a>
                <ul>
                <li><a href="alumnosreg.php"><img src="botones/regulares.PNG"></a></li>
                <li><a href="alumnoslib.php"><img src="botones/libres.PNG"></a></li>
                <li><a href="alumnosnue.php"><img src="botones/nuevos.PNG"></a></li>
                </ul>
                </td>


            <td background= "img/fondo.jpg">
            <b>    
                <blockquote><font face="KUNSTLER" size="4" color="#000000"><br><ul>La asignatura <u>Diversidad Vegetal II</u>, está ubicada en el segundo año del Plan 
                de Estudios en el segundo cuatrimestre, ya que necesita de conocimientos previos; 
                específicamente referidos a Botánica General (Exomorfología) o Botánica Vegetal.
                <p>Estos conocimientos, serán las herraminetas básicas para poder interpretar la gran 
                        diversidad de Plantas Vasculares, a través de otras ciencias prácticas como lo son la 
                        Taxonomía y Sistemática Vegetal.</ul> </font></blockquote></p> 
          </b>

                    <marquee direction="LEFT">  <br />      <img height="250" border="1" width="400" alt="" src="img/1.jpg" />  <img height="250" border="1" width="400" alt="" src="img/2.jpg" />  <img height="250" border="1" width="400" alt="" src="img/3.jpg"/>  <img height="250" border="1" width="400" alt="" src="img/4.jpg"/> 
                    </marquee>
                    <a href="cerrarsesion.php"><img src= "botones/cerrarsesion.PNG"></a><br><br><br><br>
            </td>
            </tr>
        </table>      
        <table width="1359" border= "0">
            <td><br> Facultad de Ciencias Exactas y Naturales <br> Belgrano 300|SFVC</td>
        </table>
              
</body>
</html>