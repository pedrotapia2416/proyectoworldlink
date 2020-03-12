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
<a href="../index.html"><div id="logo_en"> </div></a>
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
                <img src="../slider/recursos/images_slider/img_2.jpg" data-thumb="../slider/recursos/images_slider/img_2.jpg" alt="" title="This is an example of a caption" />
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

// Do not edit this if you are not familiar with php
error_reporting (E_ALL ^ E_NOTICE);
$post = (!empty($_POST)) ? true : false;

$replyto= stripslashes ($_POST['centros']);
$subject = 'Consulta';

if($post)
	{
	function ValidateEmail($email)
	{

$regex = "([a-z0-9_\.\-]+)". # name

"@". # at

"([a-z0-9\.\-]+){2,255}". # domain & possibly subdomains

"\.". # period

"([a-z]+){2,10}"; # domain extension 

$eregi = eregi_replace($regex, '', $email);

return empty($eregi) ? true : false;
}

$name = stripslashes($_POST['nombre']);
$email = trim($_POST['email']);
$asunto = stripslashes ($_POST['asunto']);
$ciudad = stripslashes ($_POST['ciudad']);
$message = stripslashes($_POST['mensaje']);
$phone = stripslashes($_POST['telefono']);
$how_wlk = stripslashes($_POST['conocer']);
$cv = stripslashes($_FILES['txtFile']);
$answer = trim($_POST['answer']);
$verificationanswer="36"; // plz change edit your human answer
$from=$email;
$to=$replyto;
$error = '';
$headers= "From: $name <" . $email . "> \n";
$headers.= "Reply-to:" . $email . "\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers = "Content-Type: text/html; charset=utf-8\n".$headers;
/*$headers .= "Content-Type: multipart/mixed; boundary=\"".$headers;*/

// Checks Name Field

if(!$name || !$email || $email && !ValidateEmail($email) || $answer <> $verificationanswer || !$message || strlen($message) < 1 || !$how_wlk || !$asunto || !$ciudad || !$phone)
{
$error .= 'Por favor complete todos los campos correctamente.<br />';
}


if(!$error)
	{
$messages.="Nombre: $name <br>";
$messages.="Email: $email <br>";
$messages.="CV: $cv <br>";
$messages.="Ciudad: $ciudad <br>";
$messages.="Teléfono: $phone <br>";
$messages.="Asunto: $asunto <br>";
$messages.="Mensaje: $message <br>";
$messages.="Como nos conociste?: $how_wlk <br>";

             

	$mail = mail($to,$subject,$messages,$headers);	

if($mail)
	{
	echo 'Mensaje Enviado - En breve nos comunicaremos con Ud. <br>';
	echo "Usted será redireccionado en 7 segundos...";
		echo "<meta http-equiv=Refresh content=7;url=../contacto.html>";
if($autorespond == "yes")
{
	include("autoresponde.php");
}
	}

	}
	else
	{
	echo '<div class="error">'.$error.'</div>';
	echo "<a href=\"javascript:self.history.back();\">Volver</a>";
	}

}
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
<li><img src="../imagenes/news_15.png"  height="24px" alt="Facebook" /></li>

</ul>

  
</div><!--cierra div informacion-->

<div id="copyright">
<!--<ul class="menu_inferior_last">
<li><a href="home.html"><div class="logo_pie"></div></a></li>
</ul>--> 
<ul class="menu_inferior_last">WorldLink © 2013  -  All rights reserved. Córdoba, Argentina</ul>
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
