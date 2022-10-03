<?
require_once(__DIR__ . "/../layout/header.php");
function section_end()
{
    for ($i = 0; $i < 15; ++$i)
        echo "<br>";
}
?>
<video autoplay muted>
    <source src="../media/videos/Ses.webm" type="video/webm">
    Video Unsuported!!!
</video>
<?
section_end();
?>
<div class="MySection" id="presentation1">
    <div style="display:inline-block ; padding: 20px;">
        <font size="+3">
            <img style=" position:relative; animation-name:messy; animation-duration:2s; width: 50%; height:50%; border-radius: 10%; float:right;" src="/media/images/dad_vang.jpg">
            <p><strong>
                    <h1>"Lo complicado es alcanzar lo sencillo"</h1>
                </strong>
            </p>
            <p>“Un consultor de estructuras debe siempre tener una respuesta ante las posibles necesidades que genere el proyecto”</p>
        </font>
        <p style="text-align:right ;"><i>- Joan Francesc Garcia Beltrán -</i></p>
        <img style="width:10% ; margin-top:30px;" src="/media/images/ses-steel.png">

    </div>
</div>

<? section_end(); ?>

<div class="MySection" id="Expo-reb">
    <div style="position:relative;">
        <img src="/media/images/SES Steel Embed System - Foto expo .jpg" style="position:relative; border-radius:10%; width:30%; height:30%; float:left; animation-name:messy2; animation-duration:3s; animation-fill-mode:forwards;">
        <font size="+3">
            <p>
            <h1>Conoce nuestra consultoria</h1>
            </p>
        </font>
        <font size="+2">
            <p>Creado en 2007, JFG Consultors es un despacho especializado en el diseño, cálculo y ejecución de estructuras para edificios. Su equipo multidisciplinar trabaja para arquitectos y promotores en obra nueva, rehabilitación y en trabajos singulares, entre ellos la rehabilitación del Pabellón de la Mercè en el Hospital de Sant Pau o el nuevo tanatorio en Sancho de Ávila. También ha desarrollado proyectos internacionales en Francia, Rusia, Georgia o la República del Congo.</p>
        </font>
    </div>
</div>