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
    <p style="text-align:right ;">- Joan Francesc Garcia Beltran -</p>
    <div style="float:left; width:25%;">
        <img src="/media/images/SES Steel Embed System - Foto expo .jpg" alt="..." style="display:inline-block; width:300px; border-radius:10%;">
        <font size="+2">
            <p style="text-align:center;">
                <b>
                    <button type="button" class="btn btn-dark" style="text-align:center;" onclick="changeText(1);">SENCILLEZ</button><br>
                    <button type="button" class="btn btn-dark" style="text-align:center;" onclick="changeText(2);">LIGEREZA</button><br>
                    <button type="button" class="btn btn-dark" style="text-align:center;" onclick="changeText(3);">RESISTENCIA</button><br>
                    <button type="button" class="btn btn-dark" style="text-align:center;" onclick="changeText(4);">CALIDAD</button><br>
                    <button type="button" class="btn btn-dark" style="text-align:center;" onclick="changeText(5);">SOSTENIBILIDAD</button><br>
                    <button type="button" class="btn btn-dark" style="text-align:center;" onclick="changeText(6);">RENTABILIDAD</button><br>
                    <button type="button" class="btn btn-dark" style="text-align:center;" onclick="changeText(7);">PRECISIÓN</button><br>
                </b>
            </p>
        </font>
    </div>
    <div style="margin:10px; display:inline-block;">
        <video id="video-presentacio" controls style="width:100%; border-radius:10%; display:inline-block;" poster="/media/images/ses-steel.png" onended="load()">
            <source src="/media/videos/SES_compressed.mp4" type="video/mp4">
        </video>
    </div>
    <div style="float:right; background-color:ghostwhite; width:25%; height:500px; border-radius:10%; padding: 20px;">
        <p id="description-text"></p>
    </div>

</div>
<? section_end($sectionID); ?>
<script>
    function changeText(id) {
        let text = "";
        switch (id) {
            case 1:
                text = "<h4><strong>Sencillez</strong></h4><hr>";
                text += "<p>Sistema integrado de forjado que combina inteligentemente el diseño de las piezas de madera OSB, chapa de acero galvanizada, poliestireno expandido EPS y hormigón. El forjado presenta las variantes mixta - hormigonada - o seca, sustituyendo el hormigón por otra placa de madera, adaptándose a las necesidades del proyecto. </p>";
                break;

            default:
                text = "";
                break;
        }
        let x = document.getElementById('description-text').innerHTML = text;
    }
</script>