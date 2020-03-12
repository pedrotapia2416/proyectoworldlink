<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Worldlink | Contacto</title>

<link rel="shortcut icon" type="image/ico" href="../imagenes/favicon.ico"><!----- icono navegador---->

<link rel="stylesheet" href="../css/estilos.css" type="text/css" />
<link rel="stylesheet" href="../css/servicios.css" type="text/css" />
<link rel="stylesheet" href="../menu_assets/menu.css" type="text/css" />

<link rel="stylesheet" href="../slider/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../slider/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../slider/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../slider/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../slider/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../slider/recursos/style.css" type="text/css" media="screen" />


</head>

<body>
<center>

<div class="main"> <!-- ABRE DIV CONTENEDORA -->

<!-------------------------------------------------------->

<div id="cabecera" class="header"> <!-- ABRE DIV CABECERA -->
<a href="../index.html"><div id="logo"> </div></a>
</div> <!-- CIERRA DIV CABECERA -->

<!----------------------------------------------------->

<div id='cssmenu'> <!-- abre div NAVEGACION-->
<ul>
  <li class='has-sub btn_home'><a href='home.html'><span>Home</span></a></li>
   <li class='has-sub btn_institucional '><a href='institucional.html'><span>Institutional</span></a>
    <!--  <ul>
         <li><a href='#'><span>Quienes Somos</span></a></li>
         <li><a href='#'><span>Objetivos</span></a></li>
         <li><a href='#'><span>Metodología</span></a></li>
         <li><a href='#'><span>Trabaja en WorldLink</span></a></li>
      </ul>-->
   </li>
   <li class='has-sub btn_cursos'><a href='cursos.html'><span>Courses &nbsp;</span></a>
     <!-- <ul>
         <li><a href='cursos.html'><span>Cursos regulares</span></a></li>
         <li><a href='distancia.html'><span>Cursos a distancia</span></a></li>
         <li><a href='examenes.html'><span>Exámenes</span></a></li>
         </ul>-->
   </li>
   <li class='has-sub btn_servicios'><a href='servicios.html'><span>Services</span></a></li>
   <li class='has-sub btn_viajes'><a href='viajes.html'><span>Trips &nbsp; </span></a></li>
   <li class='has-sub btn_centros'><a href='centros.html'><span>Branches &nbsp;</span></a>
  <!-- <ul>
         <li><a href='#'><span>Alta Córdoba</span></a></li>
         <li><a href='#'><span>Barrio Jardín</span></a></li>
         <li><a href='#'><span>General Paz</span></a></li>
         <li><a href='#'><span>Parque Capital</span></a></li>
      </ul>-->
   </li>
   <li class='has-sub btn_contacto'><a href='contacto.html'><span>Contact</span></a></li>
   <li class="esp"><a href='#'><span><img src="../imagenes/espaniol.png"  alt="español" /> </span></a></li>
   <li class="ing"><a href='#'><span><img src="../imagenes/ingles.png"  alt="español" /> </span></a></li>
</ul>
</div><!--</div> CIERRA NAVEGACION -->

 
  <!--------------------------------------------------------->
 
<div id="sliders"><!-- ABRE DIV slider -->
<div id="wrapper">
<div id="curva"> </div>
        

        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="../slider/recursos/images_slider/img_1.jpg" data-thumb="../slider/recursos/images_slider/img_1.jpg" alt="" />
                <img src="../slider/recursos/images_slider/img_2.jpg" data-thumb="slider/recursos/images_slider/img_2.jpg" alt="" title="This is an example of a caption" />
                <img src="../slider/recursos/images_slider/img_3.jpg" data-thumb="../slider/recursos/images_slider/img_3.jpg" alt="" data-transition="slideInLeft" />
                <img src="../slider/recursos/images_slider/img_4.jpg" data-thumb="../slider/recursos/images_slider/img_4.jpg" alt="" title="#htmlcaption" />
            </div>              
        </div>

    </div>
   <script type="text/javascript" src="../slider/recursos/scripts_slider/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="../slider/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</div> <!-- cierra DIV slider -->

<div class="msj_form"><!------------------------aviso mensaje enviado------------>
<?php
ini_set('sendmail_from','webmaster@wlk-edu.com');
function form_mail($sPara, $sAsunto, $sTexto, $sDe)
{
$bHayFicheros = 0;
$sCabeceraTexto = "";
$sAdjuntos = "";
 
if ($sDe)$sCabeceras = "From:".$sDe."\n";
else $sCabeceras = "";
$sCabeceras .= "MIME-version: 1.0\n";
foreach ($_POST as $sNombre => $sValor)
$sTexto = $sTexto."<br />".$sNombre." : ".$sValor;
 $destino = stripslashes ($_POST['centros']);
foreach ($_FILES as $vAdjunto)
{
if ($bHayFicheros == 0)
{
$bHayFicheros = 1;
$sCabeceras .= "Content-type: multipart/mixed;";
$sCabeceras .= "boundary=\"--_Separador-de-mensajes_--\"\n";
 
$sCabeceraTexto = "----_Separador-de-mensajes_--\n";
$sCabeceraTexto .= "Content-type: text/html;charset=iso-8859-1\r\n";
$sCabeceraTexto .= "Content-transfer-encoding: 7BIT\n";
 
$sTexto = $sCabeceraTexto.$sTexto;
}
if ($vAdjunto["size"] > 0)
{
$sAdjuntos .= "\n\n----_Separador-de-mensajes_--\n";
$sAdjuntos .= "Content-type: ".$vAdjunto["type"].";name=\"".$vAdjunto["name"]."\"\n";;
$sAdjuntos .= "Content-Transfer-Encoding: BASE64\n";
$sAdjuntos .= "Content-disposition: attachment;filename=\"".$vAdjunto["name"]."\"\n\n";
 
$oFichero = fopen($vAdjunto["tmp_name"], 'r');
$sContenido = fread($oFichero, filesize($vAdjunto["tmp_name"]));
$sAdjuntos .= chunk_split(base64_encode($sContenido));
fclose($oFichero);
}
}
 
if ($bHayFicheros)
$sTexto .= $sAdjuntos."\n\n----_Separador-de-mensajes_----\n";
return(mail($sPara, utf8_decode($sAsunto), utf8_decode($sTexto), $sCabeceras));
}
 
//cambiar aqui el email
if (form_mail($_POST[centros], $_POST[asunto],
"Los datos introducidos en el formulario son:\n\n", $_POST[email]))
echo "Message Successfully Sent - We will contact you soon. <br> You will be redirected in 7 seconds.";
echo "<meta http-equiv=Refresh content=7;url=../en/contacto.html>";
?>
</div>

<!-- -------------footer------------------------------------>

<div id="pie" class= "footer links"> <!--abre FOOTER-->

<div id="infopie"> <!--abre div informacion-->

<ul class="menu_inferior_last">
<li><a href="home.html"><div class="logo_pie"></div></a></li>
</ul>


<ul id="primera"class="menu_inferior">
<a href="institucional.html"><strong>Institutional</strong></a>
<li><a href="institucional.html">About Us</a></li>
<li><a href="institucional.html">Objetives</a></li>
<li><a href="institucional.html">Methodology</a></li>
<li><a href="institucional.html">Academic Staff</a></li>
<!--<li><a href="*">¿Porqué elegirnos?</a></li>-->
<li><a href="institucional.html">Work at WORLDLINK</a></li>
</ul>
 
<ul id="segunda" class="menu_inferior">
<a href="cursos.html"><strong>Courses</strong></a>
<li><a href="cursos.html">Kids</a></li>
<li><a href="cursos.html">Teens</a></li>
<li><a href="cursos.html">Adults</a></li>
<li><a href="cursos.html">Special Courses</a></li>
<!--<li><a href="cursos.html">Regular Courses</a></li>-->
<li><a href="cursos.html">Distance Courses</a></li>
<li><a href="examenes.html">Exams</a></li>
</ul>
     
<ul id="segunda" class="menu_inferior">
<a href="servicios.html"><strong>Servicios</strong></a>
<li><a href="servicios.html">H.I</a></li>
<li><a href="servicios.html">Language Lab</a></li>
<li><a href="servicios.html">Coaching Sessions</a></li>
<li><a href="internacionales.html">International Exams</a></li>
<li><a href="viajes.html">Trips and Exchange Programs</a></li>
<li><a href="servicios.html">Translations</a></li>
</ul>

<ul id="segunda" class="menu_inferior">
<a href="viajes.html"><strong>Viajes</strong></a>
<li><a href="viajes.html">Miami</a></li>
<li><a href="viajes.html">Orlando</a></li>
<li><a href="viajes.html">Washington</a></li>
<li><a href="viajes.html">New York</a></li>
<li><a href="galeria.html">Galería</a></li>
</ul>

<ul id="tercera"class="menu_inferior">
<a href="centros.html"><strong>Branches</strong></a>
<li><a href="centros.html">Alta Córdoba</a></li>
<li><a href="centros.html">Barrio Jardín</a></li>
<li><a href="centros.html">General Paz</a></li>
<li><a href="centros.html">Parque Capital</a></li>
</ul>
 
<ul id="segunda" class="menu_inferior">
<a href="contacto.html"><strong>Contact Us</strong></a>
</ul>
   
  <ul id="cuarta"class="menu_inferior">
<strong>Follow Us</strong>
<li><a href="http://www.facebook.com/WORLDLINKcba" target="_blank"><img src="../imagenes/facebook2.png" width="24" height="24" alt="Facebook" /> </a><a href="http://www.youtube.com/user/WORLDLINKCba" target="_blank"><img src="../imagenes/youtube2.png" width="24" height="24" alt="Youtube" /></a></li>

<!-- ------icono newsletter-------->
<li><img src="../imagenes/news_15.png"  height="24px" alt="Facebook" /> </li>

</ul>

  
</div><!--cierra div informacion-->

<div id="copyright">
<!--<ul class="menu_inferior_last">
<li><a href="home.html"><div class="logo_pie"></div></a></li>
</ul>--> 
<ul class="menu_inferior_last">WorldLink 2013 © - All rights reserved. Córdoba, Argentina</ul>
<ul class="menu_copy">
<li><a href="http://www.qbitdm.com.ar" target="_blank"><div class="logo_qbit"></div></a></li>
</ul>
</div><!-- CIERRA DIV copyright-->


</div> <!--CIERRA footer-->

<!-------------------------------------------------->

</div> <!-- CIERRA DIV CONTENEDORA -->

</center>
<a href="#"><img src="../imagenes/top.png" title="Ir arriba" style="position: fixed; bottom: 10px; right: 2%;"/></a>
</body>

</html>