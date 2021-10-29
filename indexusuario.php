<?php

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
                        <img src= "botones/inicioenc.PNG"><br><br>
                            <a href="glosario.php"><img src= "botones/glosario.PNG"></a><br><br>
                            <a href= "ingresarespecie.php"><img src= "botones/ingresarespecie.PNG"></a><br>
                            </center></td>      
                        <td background= "img/fondo.jpg">
                           <b>
                                
                            <blockquote><font face="KUNSTLER" size="4" color="#000000"><br><ul>La asignatura <u>Diversidad Vegetal II</u>, está ubicada en el segundo año del Plan 
                                de Estudios en el segundo cuatrimestre, ya que necesita de conocimientos previos; 
                                específicamente referidos a Botánica General (Exomorfología) o Botánica Vegetal.
                                <p>Estos conocimientos, serán las herraminetas básicas para poder interpretar la gran 
                                        diversidad de Plantas Vasculares, a través de otras ciencias prácticas como lo son la 
                                        Taxonomía y Sistemática Vegetal.</ul> </font></blockquote></p> 
                          </b>
        
                                    <marquee direction="LEFT">     <img height="250" border="1" width="400" alt="" src="img/1.jpg" />  <img height="250" border="1" width="400" alt="" src="img/2.jpg" />  <img height="250" border="1" width="400" alt="" src="img/3.jpg"/>  <img height="250" border="1" width="400" alt="" src="img/4.jpg"/> 
                                    </marquee><br>
                                    <center><a href="cerrarsesion.php"><img src= "botones/cerrarsesion.PNG"></a><br>
                   
                    <br></td></center>
                </table>  
            
        </address>
                <table width="1359">
                    
                    <td><center> Facultad de Ciencias Exactas y Naturales <br> Belgrano 300|SFVC</td>
                </table></center>
      
</body>
</html>