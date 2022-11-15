<?
$sectionID = 0;
function section_end(&$sectionID)
{
    ++$sectionID;
    $ID = (string) $sectionID;
    for ($i = 0; $i < 15; ++$i) {
        if ($i == 12)
            echo "<br id='$ID'>";
        else
            echo "<br>";
    }
}
?>
<video id="ini-video" autoplay muted onended="window.location.hash = '1';">
    <source src="../media/videos/Ses.webm" type="video/webm">
    Video Unsuported!!!
</video>
<?
section_end($sectionID);
?>
<div class="container MySection">
    <font size="+3">
        <h1 style="text-align:center;"><strong>"Lo más complejo es alcanzar lo sencillo"</strong></h1>
    </font>
    <p style="text-align:center ;">By Joan Francesc Garcia Beltran</p>
    <br>
    <h3 style="text-align:center;">Descubre otra alternativa a los sistemas de forjado tradicionales</h3>
    <br>
    <div class="row">
        <div class="col-md-3">
            <img src="/media/images/SES Steel Embed System - Foto expo.jpg" alt="..." style="width:100%; border-radius:10%;">
            <font size="+2">
                <p style="text-align:justif;"><b><br>
                        SES el nuevo sistema integrado de forjado preindustrializado que permite cubrir grandes luces sin apuntalar siendo hasta un 50% más ligero que otras soluciones</b>
                </p>
            </font>
        </div>
        <div class="col-md-6">
            <video id="video-presentacio" controls style="border-radius:10%;" poster="/media/images/ses-steel.png" onended="load()" oncanplay="changeText(1);">
                <source src="/media/videos/SES_compressed.mp4" type="video/mp4">
            </video>
            <br><br>
            <div style="text-align:center; display:inline-block;">
                <button type="button" class="btn btn-outline-dark" style="text-align:center;margin-bottom:0.5%;" onmouseover="changeText(1);"><b>SENCILLEZ</b></button>
                <button type="button" class="btn btn-outline-dark" style="text-align:center;margin-bottom:0.5%;" onmouseover="changeText(2);"><b>LIGEREZA</b></button>
                <button type="button" class="btn btn-outline-dark" style="text-align:center;margin-bottom:0.5%;" onmouseover="changeText(3);"><b>RESISTENCIA</b></button>
                <button type="button" class="btn btn-outline-dark" style="text-align:center;margin-bottom:0.5%;" onmouseover="changeText(4);"><b>CALIDAD</b></button>
                <button type="button" class="btn btn-outline-dark" style="text-align:center;margin-bottom:0.5%;" onmouseover="changeText(5);"><b>SOSTENIBILIDAD</b></button>
                <button type="button" class="btn btn-outline-dark" style="text-align:center;margin-bottom:0.5%;" onmouseover="changeText(6);"><b>RENTABILIDAD</b></button>
                <button type="button" class="btn btn-outline-dark" style="text-align:center;margin-bottom:0.5%;" onmouseover="changeText(7);"><b>PRECISIÓN</b></button>
            </div>
        </div>
        <div class="col-md-3">
            <div style="background-color:ghostwhite; height:auto; border-radius:10%; padding:20px;">
                <font size="+1">
                    <p id="description-text"></p>
                </font>

            </div>
            <img src="/media/images/segell_DAU_h.png" alt="DAU" width="50%" style="float:right; margin:0%;">
        </div>
    </div>

</div>
<? section_end($sectionID); ?>

<div class="MySection container">
    <div class="row">
        <div>
            <img src="/media/images/dad_vang.jpg" width="500" style="float:right ;">
        </div>
        <div>
            <font size=+1>
                <h3>"Un consultor de estructuras debe tener siempre una respuesta ante las posibles necesidades que genere el proyecto"</h3>
            </font>
        </div>
    </div>
</div>