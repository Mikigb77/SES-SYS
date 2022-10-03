<?
require_once(__DIR__ . "/../layout/header.php");
?>
<video autoplay muted>
    <source src="../media/videos/Ses.webm" type="video/webm">
    Video Unsuported!!!
</video>
<?
for ($i = 0; $i < 10; ++$i)
    echo "<br>";
?>
<div class="MySection" id="presentation">
    <div style="display:inline-block ; padding: 20px;">
        <font size="+3">
            <img style="width: 50%; height:50%; border-radius: 10%; float:right; margin-left:10px;" src="/media/images/dad_vang.jpg">
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