<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Shalakabula Payasos</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="pagina">
<div id="header">
    <div id="menu">
        <ul>
            <li><a href="http://www.shalakabula-payasos.es/">Página Principal</a></li>
            <li><a href="quienes_somos.html">¿Quiénes somos?</a></li>
            <li><a href="que_ofrecemos.html">¿Qué ofrecemos?</a></li>
            <li><a href="fotos.html">Fotos</a></li>
            <li class="current_page_item"><a href="contacto.php">Contacto</a></li>
        </ul>
    </div>
</div>
<div id="logo">
</div>
<hr />
<div id="page">
    <div id="content">
        <div class="post">
<?php
if (!$_POST['nombre'])
{
?>
            <h1 class="title">Contacto</h1>
            <div class="entry">
                <p>Puedes contactar con nosotros <b>sin ningún compromiso</b> de dos maneras: teléfono o correo electrónico.</p>
                <p>Nuestro teléfono móvil es 680105323.</p>
                <p>Si lo deseas, puedes escribirnos un correo electrónico a la dirección <a href="mailto:info@shalakabula-payasos.es">info@shalakabula-payasos.es</a>.</p>
                <p>Para tu comodidad, puedes rellenar el siguiente formulario, pulsando después 'Enviar'. Nos llegará tu petición e intentaremos contestar lo antes posible.</p>
                <form action="contacto.php" method="post">
                <span class="oneField">
                    <label for="nombre" class="preField">Nombre</label>
                    <input type="text" id="nombre" name="nombre" value="" size="50"><br>
                </span>
                <span class="oneField">
                    <label for="telefono" class="preField">Teléfono de contacto</label>
                    <input type="text" id="telefono" name="telefono" value="" size="50"><br>
                </span>
                <span class="oneField">
                    <label for="correo" class="preField">Correo electrónico de contacto</label>
                    <input type="text" id="correo" name="correo" value="" size="50"><br>
                </span>
                <span class="oneField">
                    <label for="horario" class="preField">En caso de que te llamemos al teléfono, ¿en qué horario podríamos hacerlo?</label>
                    <input type="text" id="horario" name="horario" value="" size="50"><br>
                </span>
                <span class="oneField">
                    <label for="mensaje" class="preField">Mensaje</label>
                    <textarea id="mensaje" name="mensaje" cols="100" rows="10"></textarea><br>
                </span>
                <br>
                <center><input type="submit" id="aceptar" value="Enviar"></center>
                </form>
            </div>
<?php
} // !$_POST['nombre']
else
{
    $mensaje = '<html>';
    $mensaje .= '<head><meta http-equiv="content-type" content="text/html; charset=utf-8" /></head><body>';
    $mensaje .= "Hola,<br/><br/>";
    $mensaje .= "\"" . $_POST['nombre'] . "\" ha pedido información en nuestra página web sobre nuestros servicios. Nos ha dado los siguientes datos:<br/><br/>";
    $mensaje .= "- Teléfono de contacto: " . $_POST['telefono'] . "<br/>";
    $mensaje .= "- Correo electrónico de contacto: " . $_POST['correo'] . "<br/>";
    $mensaje .= "- En caso de contactar en el teléfono, horario en el que podemos llamar: " . $_POST['horario'] . "<br/><br/>";
    $mensaje .= "- Mensaje:<br/>" . $_POST['mensaje'] . "<br/><br/>";
    $mensaje .= "Este mensaje fue enviado el día " . date('j \d\e F \d\e Y \a\ \l\a\s H:i:s');
    $mensaje .= "</body></html>";

    $cabecera  = 'MIME-Version: 1.0' . "\r\n";
    $cabecera .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    mail('info@shalakabula-payasos.es', 'Solicitud de informacion - Mensaje autogenerado', $mensaje, $cabecera, '-fwebmaster@shalakabula-payasos.es');
?>
            <h1 class="title">Mensaje enviado correctamente</h1>
            <div class="entry">
                <p>Muchas gracias por tu tiempo.</p>
                <p>El mensaje ha sido enviado correctamente. Intentaremos contestar lo antes posible.</p>
            </div>
<?php
}
?>
        </div>
    </div>
    <div style="clear: both;">&nbsp;</div>
</div>
<div id="footer"></div>
</div>
</body>
</html>
