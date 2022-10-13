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
<div class="MySection">
    <font size="+3">
        <h1 style="text-align:center;"><strong>"Lo más complejo es alcanzar lo sencillo"</strong></h1>
    </font>
    <p style="text-align:center ;">By Joan Francesc Garcia Beltran</p>
    <br>
    <h3 style="text-align:center;">Descubre otra alternativa a los sistemas de forjado tradicionales</h3>
    <div style="float:left; width:25%; margin-top:-1.26%;">
        <img src="/media/images/SES Steel Embed System - Foto expo .jpg" alt="..." style="width:300px; border-radius:10%;">
        <font size="+2">
            <p style="text-align:center;">
                <b>
                    <button type="button" class="btn btn-outline-dark" style="text-align:center;" onmouseover="changeText(1);"><b>SENCILLEZ</b></button><br>
                    <button type="button" class="btn btn-outline-dark" style="text-align:center;" onmouseover="changeText(2);"><b>LIGEREZA</b></button><br>
                    <button type="button" class="btn btn-outline-dark" style="text-align:center;" onmouseover="changeText(3);"><b>RESISTENCIA</b></button><br>
                    <button type="button" class="btn btn-outline-dark" style="text-align:center;" onmouseover="changeText(4);"><b>CALIDAD</b></button><br>
                    <button type="button" class="btn btn-outline-dark" style="text-align:center;" onmouseover="changeText(5);"><b>SOSTENIBILIDAD</b></button><br>
                    <button type="button" class="btn btn-outline-dark" style="text-align:center;" onmouseover="changeText(6);"><b>RENTABILIDAD</b></button><br>
                    <button type="button" class="btn btn-outline-dark" style="text-align:center;" onmouseover="changeText(7);"><b>PRECISIÓN</b></button><br>
                </b>
            </p>
        </font>
    </div>
    <div style="margin-left:20px; margin-right:20px; display:inline-block; width:45%;">
        <video id="video-presentacio" controls style="border-radius:10%;" poster="/media/images/ses-steel.png" onended="load()" oncanplay="changeText(1);">
            <source src="/media/videos/SES_compressed.mp4" type="video/mp4">
        </video>
        <br><br>
        <div style="text-align:center;">
            <button type="button" class="btn btn-outline-dark" style="text-align:center;" onmouseover="changeText(1);"><b>SENCILLEZ</b></button>
            <button type="button" class="btn btn-outline-dark" style="text-align:center;" onmouseover="changeText(2);"><b>LIGEREZA</b></button>
            <button type="button" class="btn btn-outline-dark" style="text-align:center;" onmouseover="changeText(3);"><b>RESISTENCIA</b></button>
            <button type="button" class="btn btn-outline-dark" style="text-align:center;" onmouseover="changeText(4);"><b>CALIDAD</b></button>
            <button type="button" class="btn btn-outline-dark" style="text-align:center;" onmouseover="changeText(5);"><b>SOSTENIBILIDAD</b></button>
            <button type="button" class="btn btn-outline-dark" style="text-align:center;" onmouseover="changeText(6);"><b>RENTABILIDAD</b></button>
            <button type="button" class="btn btn-outline-dark" style="text-align:center;" onmouseover="changeText(7);"><b>PRECISIÓN</b></button>
        </div>
    </div>
    <div style="float:right; background-color:ghostwhite; width:25%; height:500px; border-radius:10%; padding:20px;">
        <font size="+1">
            <p id="description-text"></p>
        </font>
    </div>

</div>
<? section_end($sectionID); ?>
<script>
    function changeText(id) {
        let text = "";
        switch (id) {
            case 1:
                text = "<h4><strong>Sencillez</strong></h4><hr>";
                text += nl2br("Sistema integrado de forjado que combina inteligentemente el diseño de las piezas de madera OSB, chapa de acero galvanizada, poliestireno expandido EPS y hormigón.\n\nEl forjado presenta las variantes mixta - hormigonada - o seca, sustituyendo el hormigón por otra placa de madera, adaptándose a las necesidades del proyecto.");
                break;
            case 2:
                text = "<h4><strong>Ligereza</strong></h4><hr>";
                text += nl2br("El bajisimo peso propio del forjado resulta una opcion muy atractiva para la ejecucion de remontas en estructuras muy solicitadas.\n\nEl sistema es hasta un 33% mas ligero que la solucion equivalente en forjado colaborante y hasta un 50% mas ligero que el forjado reticular equivalente.");
                break;
            case 3:
                text = "<h4><strong>Resistencia</strong></h4><hr>";
                text += nl2br("El SES permite cubrir luces de hasta 7m con sobrecargas estaticas de 580kg/m^2 sin apuntalar, ideal para usos publicos, residenciales y aparcamiento.\n\nPara grandes luces de hasta 11,5m pueden alcanzarse sobrecargas de uso residencial con apuntalamiento en fase de montaje con cantos de forjado muy atractivos.");
                break;
            default:
                text = "<h4><strong>Sencillez</strong></h4><hr>";
                text += nl2br("Sistema integrado de forjado que combina inteligentemente el diseño de las piezas de madera OSB, chapa de acero galvanizada, poliestireno expandido EPS y hormigón.\n\nEl forjado presenta las variantes mixta - hormigonada - o seca, sustituyendo el hormigón por otra placa de madera, adaptándose a las necesidades del proyecto.");
                break;
        }
        let x = document.getElementById('description-text');
        x.innerHTML = text;
    }

    function nl2br(str, is_xhtml) {
        if (typeof str === 'undefined' || str === null) {
            return '';
        }
        var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br />' : '<br>';
        return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + breakTag + '$2');
    }
</script>