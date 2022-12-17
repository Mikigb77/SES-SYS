<?
$sectionID = 0;
function section_end(&$sectionID)
{
    ++$sectionID;
    for ($i = 0; $i < 5; ++$i) {
        if ($i == 3) {
            $ID = (string) $sectionID;
            echo "<br id='$ID'>";
        } else
            echo "<br>";
    }
}
?>
<div class="container">
    <video id="ini-video" autoplay muted onended="window.location.hash = '1';">
        <source src="../media/videos/Ses.webm" type="video/webm">
        Video Unsuported!!!
    </video>
</div>
<?
section_end($sectionID);
?>
<div class="container MySection">
    <font size="+3">
        <h1 style="text-align:center;"><strong><i>"Lo más complejo es alcanzar lo sencillo"</i></strong></h1>
    </font>
    <p style="text-align:center ;"><i>By Joan Francesc García Beltrán</i></p>
    <br>
    <h3 style="text-align:center;">Descubre otra alternativa a los sistemas de forjado tradicionales</h3>
    <br>
    <div class="row">
        <div class="col-md-3">
            <img src="/media/images/SES Steel Embed System - Foto expo.jpg" alt="..." style="width:100%; border-radius:10%;">
            <font size=+1>
                <p style="text-align:center;"><strong><br>
                        SES el nuevo sistema integrado de forjado preindustrializado que permite cubrir grandes luces sin apuntalar siendo hasta un 50% más ligero que otras soluciones</strong>
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
                    <p id="description-text" style="text-align:justify;"></p>
                </font>

            </div>
            <a href="/media/files/SES_SWH-SEF- DAU.pdf" target="_blank">
                <img src="/media/images/Logos/segell_DAU_h.png" alt="DAU" width="50%" style="float:right; margin:0%;">
            </a>
        </div>
    </div>

</div>
<? section_end($sectionID); ?>
<div class="MySection container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/media/images/Rooftop/sostre img1.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/media/images/Rooftop/sostre img2.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/media/images/Rooftop/sostre img3.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/media/images/Rooftop/sostre img4.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/media/images/Rooftop/sostre img5.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/media/images/Rooftop/sostre img6.jpeg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>

<? section_end($sectionID); ?>

<div class="MySection container">
    <div class="row">
        <div class="col-xs-12">
            <div class="col-md-5" style="float:right;margin-left:2%;">
                <img src="/media/images/Dad/dad_vang.jpg" style="float:right; border-radius:10%; margin-bottom:5%; width:100%">
                <p style="text-align:right;"><b>Miembro de la Asociación de Consultores de Estructuras</b></p>

                <a href="https://aceweb.cat/es/noticias/ses-steel-embed-system-forjado-preindustrializado/" style="color:black;">
                    <img src="/media/images/Logos/logo-ace.jpg" alt="ACE" width="200" style="float:right; margin-left:2%;">
                    <p style="text-align:right;">Presentación del sistema SES en ACE</p>
                </a>
                <br>
            </div>
            <font size=+1>
                <h2 style="text-align:justify;"><i><b>"Un consultor de estructuras debe tener siempre una respuesta ante las posibles necesidades que genere el proyecto"</b></i></h2>

                <p style="text-align:center;">
                    <i>By Joan Francesc García Beltrán</i>
                </p>
                <br>
                <p style="text-align:justify;">
                    Arquitecto colegiado y miembro de la Asociación de Consultores de Estructuras, fundador de la consultoria de estructuras <a href="https://www.jfgconsultors.com/"><b>JFG Consultors</b></a>, fundada en 2007, ofrece <strong>SES</strong> el nuevo sistema de forjado preindustrializado inteligente capaz de adaptarse a los requerimentos más duros de la construcción,
                    pensado expresamente para forjados resistentes, cubiertas ligeras y muros.
                </p>
            </font>
        </div>
    </div>
</div>