<?
function section_end()
{
    for ($i = 0; $i < 15; ++$i)
        echo "<br>";
}
?>
<video autoplay muted onended="window.location.hash = 'presentation1';">
    <source src="../media/videos/Ses.webm" type="video/webm">
    Video Unsuported!!!
</video>
<?
section_end();
?>
<div class="MySection" id="presentation1">
    <font size="+3">
        <h1 style="text-align:center;"><strong>"Lo más complejo es alcanzar lo sencillo"</strong></h1>
    </font>
    <p style="text-align:right ;">- Joan Francesc Garcia Beltran -</p>
    <div style="float:left;">
        <img src="/media/images/SES Steel Embed System - Foto expo .jpg" alt="..." style="display:inline-block; width:300px; border-radius:10%;">
        <font size="+2">
            <p style="text-align:center;">
                <b>
                    SENCILLEZ<br>
                    LIGEREZA<br>
                    RESISTENCIA<br>
                    CALIDAD<br>
                    SOSTENIBILIDAD<br>
                    RENTABILIDAD<br>
                    PRECISIÓN<br>
                </b>
            </p>
        </font>
    </div>
    <br>
    <video controls style="width:50%; border-radius:0%; display:inline-block" poster="/media/images/ses-steel.png">
        <source src="/media/videos/SES_compressed.mp4" type="video/mp4">
    </video>

    <div style="float:right;">
        <p>hola</p>
    </div>

</div>
<? section_end(); ?>