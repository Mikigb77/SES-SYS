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
    <br>
    <div style="display:inline-block; width:25%; vertical-align:top; overflow:hidden;">
        <img src="/media/images/SES Steel Embed System - Foto expo.jpg" alt="..." style="width:100%; border-radius:10%;">
        <font size="+2">
            <p style="text-align:justif;"><b>
                    SES el nuevo sistema integrado de forjado preindustrializado que permite cubrir grandes luces sin apuntalar siendo hasta un 50% más ligero que otras soluciones</b>
            </p>
        </font>
    </div>
    <div style="display:inline-block; width:45%; align-self:center; vertical-align:top; margin-right:2%; margin-left:2%;">
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
    <div style="display:inline-block; background-color:ghostwhite; width:25%; height:auto; border-radius:10%; padding:20px;align-self:flex-end;">
        <font size="+1">
            <p id="description-text"></p>
        </font>
    </div>

</div>
<? section_end($sectionID); ?>

<div class="MySection">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, ut reprehenderit quidem quaerat aut voluptatibus suscipit animi inventore sequi perspiciatis natus qui laborum quibusdam voluptatum nemo itaque nam rerum sit?</p>
    <p>Nemo consectetur adipisci quibusdam voluptatem assumenda velit ipsa earum quaerat tempora autem sit necessitatibus quo repellendus consequatur distinctio voluptates, enim asperiores, quia, deleniti saepe possimus. Minima quod repellendus enim voluptas.</p>
    <p>Animi impedit libero neque modi! Iure saepe quisquam recusandae consequuntur voluptates incidunt id possimus odio numquam praesentium qui facere sequi beatae nisi vitae tempore officiis quis perspiciatis, voluptas ipsa aspernatur?</p>
    <p>Blanditiis, autem. Rem accusamus facere dolor culpa et fuga veritatis explicabo animi consectetur, consequatur necessitatibus laudantium ducimus, dolorum ea ullam laborum vitae vero at a eius, doloribus molestiae. Libero, voluptas.</p>
</div>