<?php
$sectionID = 0;

function section_end(&$sectionID)
{
    ++$sectionID;
    for ($i = 0; $i < 5; ++$i) {
        if ($i == 3) {
            $ID = (string)$sectionID;
            echo "<br id='$ID'>";
        } else
            echo "<br>";
    }
}
?>

<div class="container" style="padding: 0%;">
    <video id="ini-video" autoplay muted onended="window.location.hash = '1';" style="width:100%;">
        <source src="../media/videos/Ses.webm" type="video/webm">
    </video>
</div>

<?php
section_end($sectionID);
?>

<div class="container MySection" style="height: fit-content;">
    <font size="+3">
        <h1 style="text-align:center;"><strong><i><?php echo gettext("\"Lo más complejo es alcanzar lo sencillo\""); ?></i></strong></h1>
    </font>
    <p style="text-align:center ;"><i><?php echo gettext("By Joan Francesc García Beltrán"); ?></i></p>
    <br>
    <h3 style="text-align:center;"><?php echo gettext("Descubre otra alternativa a los sistemas de forjado tradicionales"); ?></h3>
    <br>
    <div class="row">
        <div class="col-md-3">
            <a href="/informacion-tecnica/">
                <img src="/media/images/SES Steel Embed System - Foto expo.jpg" alt="..." style="width:100%; border-radius:10%;">
            </a>
            <font size=+1>
                <p style="text-align:center;"><strong><br>
                        <?php echo gettext("SES el nuevo sistema integrado de forjado preindustrializado que permite cubrir grandes luces sin apuntalar siendo hasta un 50% más ligero que otras soluciones"); ?></strong>
                </p>
            </font>
        </div>
        <div class="col-md-6">
            <video id="video-presentacio" controls style="border-radius:10%;" poster="/media/images/ses-steel.png" onended="load()" oncanplay="<?php
                                                                                                                                                $inEN = $_GET['lang'] ?? false;
                                                                                                                                                if ($inEN == "en_US")
                                                                                                                                                    $inEN = true;
                                                                                                                                                else
                                                                                                                                                    $inEN = false;
                                                                                                                                                echo ($inEN) ? "changeTextEN(1);" : "changeText(1);" ?> setVideoVolume('video-presentacio', 0.5);">
                <source src="/media/videos/SES-Presentacion.mp4" type="video/mp4">
                <source src="/media/videos/SES-Presentacion_compressed.mp4" type="video/mp4">
                <source src="/media/videos/SES_compressed.mp4" type="video/mp4">
            </video>
            <br><br>
            <div style="text-align:center; display:inline-block;">
                <button type="button" class="btn btn-outline-dark" style="text-align:center;margin-bottom:0.5%;" onmouseover="<?php echo ($inEN) ? 'changeTextEN(1);' : 'changeText(1);' ?>"><b><?php echo gettext("SENCILLEZ"); ?></b></button>
                <button type="button" class="btn btn-outline-dark" style="text-align:center;margin-bottom:0.5%;" onmouseover="<?php echo ($inEN) ? 'changeTextEN(2);' : 'changeText(2);' ?>"><b><?php echo gettext("LIGEREZA"); ?></b></button>
                <button type="button" class="btn btn-outline-dark" style="text-align:center;margin-bottom:0.5%;" onmouseover="<?php echo ($inEN) ? 'changeTextEN(3);' : 'changeText(3);' ?>"><b><?php echo gettext("RESISTENCIA"); ?></b></button>
                <button type="button" class="btn btn-outline-dark" style="text-align:center;margin-bottom:0.5%;" onmouseover="<?php echo ($inEN) ? 'changeTextEN(4);' : 'changeText(4);' ?>"><b><?php echo gettext("CALIDAD"); ?></b></button>
                <button type="button" class="btn btn-outline-dark" style="text-align:center;margin-bottom:0.5%;" onmouseover="<?php echo ($inEN) ? 'changeTextEN(5);' : 'changeText(5);' ?>"><b><?php echo gettext("SOSTENIBILIDAD"); ?></b></button>
                <button type="button" class="btn btn-outline-dark" style="text-align:center;margin-bottom:0.5%;" onmouseover="<?php echo ($inEN) ? 'changeTextEN(6);' : 'changeText(6);' ?>"><b><?php echo gettext("RENTABILIDAD"); ?></b></button>
                <button type="button" class="btn btn-outline-dark" style="text-align:center;margin-bottom:0.5%;" onmouseover="<?php echo ($inEN) ? 'changeTextEN(7);' : 'changeText(7);' ?>"><b><?php echo gettext("PRECISIÓN"); ?></b></button>

            </div>
        </div>
        <div class="col-md-3">
            <div style="background-color:ghostwhite; height:auto; border-radius:10%; padding:20px;">
                <font size="">
                    <p id="description-text" style="text-align:justify;"></p>
                </font>
            </div>
            <div>
                <a href="/media/files/SES_SWH-SEF- DAU.pdf" target="_blank">
                    <img src="/media/images/Logos/segell_DAU_h.png" alt="DAU" width="50%" style="float:right; margin:0%;">
                </a>
            </div>
        </div>
    </div>
</div>

<?php section_end($sectionID); ?>
<div class="container MySection">
    <div class="row">
        <div class="col-md-3">
            <div style="background-color:ghostwhite; height:auto; border-radius:10%; padding:20px; text-align:justify;">
                <h4><strong><?php echo gettext('Nuestro objetivo'); ?></strong></h4>
                <hr>
                <p>
                    <?php echo gettext('El sistema SES para forjados integra las funciones estructurales de resistencia al fuego y de apariencia limpia y pulida desde su puesta en obra. Este forjado está diseñado para obtener el máximo rendimiento de sus componentes. Reduce al mínimo el peso propio del forjado, así como el tiempo y equipo necesarios para su puesta en obra.
                    De geometría inteligente, reduce a la mínima expresión el material empleado para maximizar su rendimiento bajo la forma de un forjado plano o inclinado de muy fácil instalación.'); ?>

                </p>
            </div>

        </div>
        <div class="col-md-6">
            <div>
                <!--- <img src="/media/images/Logos/Marca SteelEmbedSystem.jpg" alt="" style="width: 100%;">--->
                <font size="+3">
                    <h1 style="text-align:center;"><strong><i><?php echo gettext('Steel Embed System'); ?></i></strong></h1>
                    <hr>
                </font>
            </div>
            <div>
                <br>
                <img src="/media/images/RooftopPresentation/JFG_SWH-SEF-presentacio retallada.jpg" alt="" style="width:100%;border-radius:10%;">
            </div>
            <div class="row">
                <div class="col-md-12" style="text-align: center;">
                    <br>
                    <h5><?php echo gettext('Componentes'); ?></h5>
                    <hr>
                </div>
                <div class="col-md-4">

                    <div class="hover">
                        <img class="MyImage" src="/media/images/RooftopPresentation/Chapa.jpg" alt="" style=" width:100%; border-radius: 10%;">
                        <div class="middle">
                            <div class="text">
                                <?php echo gettext('Chapas metálicas galvanizadas'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="hover">
                        <img class="MyImage" src="/media/images/RooftopPresentation/CasetonEPS.jpg" alt="" style="width:100%; border-radius: 10%;">
                        <div class="middle">
                            <div class="text">
                                <?php echo gettext('Casetones de EPS (Poliestireno expandido)'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="hover">
                        <img class="MyImage" src="/media/images/RooftopPresentation/tableroMaderaTexture.jpg" alt="" style=" width:100%; border-radius: 10%;">
                        <div class="middle">
                            <div class="text">
                                <?php echo gettext('Tableros de madera OSB/3'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div style="background-color:ghostwhite; height:auto; border-radius:10%; padding:20px; text-align:justify;">
                <h4><strong><?php echo gettext('En qué consiste'); ?></strong></h4>
                <hr>
                <p>
                    <?php echo gettext('Pensado para forjados y cubiertas ligeras. Hemos diseñado un elemento resistente a los esfuerzos de flexión y cortante formado por varias chapas metálicas perfiladas en frío. Éstas, tienen forma de bandeja y se ensamblan entre ellas para formar placas de diferentes anchos. El conjunto se aligera con casetones de EPS, y se termina por su cara inferior con un tablero de madera OSB que confiere rigidez al conjunto. Si el sistema es SES-MIXTO la capa superior se termina con hormigón y si es SES-SECO con otro tablero de madera OSB igual que el inferior.'); ?>

                </p>
            </div>
        </div>
    </div>
</div>

<?php section_end($sectionID); ?>
<div class="MySection container">
    <font size="+3">
        <h1 style="text-align:center;"><strong><?php echo gettext('¿Porqué elegir el sistema SES?'); ?></strong></h1>
        <br>
    </font>
    <div class="row">
        <br>
        <h3 style="text-align: center;"><?php echo gettext('Las imágenes y opiniones de expertos profesionales en la ejecución de obra es nuestra mejor carta de presentación.'); ?></h3>
        <h3 style="text-align: center;"><strong><?php echo gettext('¡COMPRUÉBELO!'); ?></strong></h3>
    </div>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <?php
            $directoryI = __DIR__ . '/../../media/images/carrousel1/'; // Replace with the actual directoryI$directoryI path
            $filesI = scandir($directoryI);
            $filesI = array_diff($filesI, array('.', '..')); // Exclude current and parent directoryI$directoryI
            $directoryV = __DIR__ . '/../../media/videos/carrousel1/';
            $filesV = scandir($directoryV);
            $filesV = array_diff($filesV, array('.', '..'));
            $carrouselImages = array();
            $carrouselVideo = array();
            foreach ($filesI as $value) {
                $carrouselImages[] =  '/media/images/carrousel1/' . $value;
            }
            if (!$filesV)
                foreach ($filesV as $value) {
                    $carrouselVideo[] = '/media/videos/carrousel1/' . $value;
                }
            ?>

            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <?php
                    for ($key = 0; $key < sizeof($carrouselImages) + sizeof($carrouselVideo); ++$key) :
                        if ($key == 0) { ?>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button><?php } else { ?>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $key; ?>" aria-label="Slide <?php echo ($key + 1); ?>"></button><?php } ?>

                    <?php endfor; ?>
                </div>
                <div class="carousel-inner">
                    <style>
                        .carousel-video {
                            max-width: 100%;
                            height: auto;
                            max-height: 300px;
                            /* Adjust the height as desired */
                        }

                        .carousel-control-prev,
                        .carousel-control-next {
                            z-index: 1;
                        }
                    </style>
                    <?php foreach ($carrouselVideo as $key => $value) : ?>
                        <div style="text-align: center;" class="carousel-item <?php if ($key == 0) echo 'active'; ?>">
                            <video id="<?php $val = explode('/', $carrouselVideo[0]);
                                        $val = $val[sizeof($val) - 1];
                                        echo $val; ?>" class="carrousel-video" src="<?php echo $value; ?>" oncanplay="setVideoVolume('<?php echo $val ?>', 0.5);" controls style="width: 50%;"></video>
                        </div>
                    <?php endforeach; ?>
                    <?php foreach ($carrouselImages as $key => $value) : ?>
                        <div class="carousel-item <?php if ($key == 0 && sizeof($carrouselVideo) == 0) echo 'active'; ?>">
                            <img src="<?php echo $value; ?>" class="d-block w-100" alt="..." style="border-radius: 10%;">
                        </div>
                    <?php endforeach; ?>
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

<?php
section_end($sectionID);
?>
<div class="container MySection">
    <div class="row">
        <font size="+3">
            <h1 style="text-align:center;"><strong><?php echo gettext('La mejor inversión, la mejor satisfacción personal<br> ¡Sé pionero con nosotros y<br>avancémonos al futuro!'); ?></strong></h1>
            <br>
        </font>
        <h2 style="text-align: center;">
            <strong>
                <?php echo gettext('¿Qué ofrecemos?'); ?>
            </strong>
        </h2>
    </div>
    <?php echo '<br>'; ?>
    <div class="row">
        <div class=" col-md-4">
            <img src="/media/images/Abans.JPG" alt="<?php echo gettext('Antes'); ?>" style="width:100%; border-radius:10%;">
        </div>
        <div class="col-md-8">
            <h4><b><?php echo gettext('DISEÑO:'); ?></b></h4>
            <font size="+1">
                <p>
                    * <?php echo gettext('Con nuestra experiencia estudiaremos la mejor opción entre nuestros sistemas.'); ?>
                    <br>
                    * <?php echo gettext('Ofrecemos las soluciones alternativas más ecológicas, más avanzadas, simples y económicas, optimizando el tiempo de ejecución en obra mejorando la productividad.'); ?>
                    <br>
                    * <?php echo gettext('Diseñamos el mejor forjado para integrarlo y dar respuesta a las necesidades de su proyecto.'); ?>
                    <br>
                    * <?php echo gettext('Además nuestra consultoria tecnica de estructuras, con más de 30 años de experiencia, le ofrece el asesoramiento que sea requerido.'); ?>
                    <br>
                </p>
            </font>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <h4><b><?php echo gettext('ANÁLISIS:'); ?></b></h4>
            <font size="+1">
                <p>
                    * <?php echo gettext('Nuestro equipo técnico desde la consultoría JFG Consultors, analiza detalladamente cada una de las propuestas para optimizar tanto el dimensionado de nuestros forjados como, si se desea, el de la totalidad de la estructura.'); ?>
                    <br>
                    * <?php echo gettext('Se verifican exhaustivamente nuestros productos para garantizar un estricto control de calidad.'); ?>
                    <br>
                </p>
            </font>
        </div>
        <div class="col-md-4">
            <img src="/media/images/Durante.JPG" alt="<?php echo gettext('Durante'); ?>" style="width:100%; border-radius:10%;">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img src="/media/images/Despues.jpg" alt="<?php echo gettext('Despues'); ?>" style="width:100%; border-radius:10%;">
        </div>
        <div class="col-md-8">
            <h4><b><?php echo gettext('PUESTA EN OBRA:'); ?></b></h4>
            <font size="+1">
                <p>
                    * <?php echo gettext('Además, le ofrecemos nuestra supervisión y colaboración con la Dirección de Obra para ofrecer el servicio más completo.'); ?>
                    <br>
                    * <?php echo gettext('Soporte y asesoramiento técnico personalizado para cualquier tipologia de edificación: rehabilitaciones, remontas y obra nueva.'); ?>
                    <br>
                </p>
            </font>
        </div>
    </div>
</div>

<?php section_end($sectionID); ?>
<div class="MySection container">
    <div class="row">
        <div class="col-xs-12">
            <div class="col-md-5" style="float:right;margin-left:2%;">
                <img src="/media/images/Dad/dad_vang.jpg" style="float:right; border-radius:10%; margin-bottom:5%; width:100%">
                <p style="text-align:right;"><b><?php echo gettext('Miembro de la Asociación de Consultores de Estructuras'); ?></b></p>

                <a href="https://aceweb.cat/es/noticias/ses-steel-embed-system-forjado-preindustrializado/" target="_blank" style="text-decoration: none; color:black;">
                    <p style="text-align:right;"><b><?php echo gettext('Presentación del sistema SES en la<br>Asociación de Consultores de Estructuras'); ?></b></p>
                    <img src="/media/images/Logos/logo-ace.jpg" alt="ACE" width="200" style="float:right; margin-left:2%;">
                </a>
                <br>
            </div>
            <font size=+1>
                <h2 style="text-align:justify;"><i><b>"<?php echo gettext('Un consultor de estructuras debe tener siempre una respuesta ante las posibles necesidades que genere el proyecto'); ?>"</b></i></h2>

                <p style="text-align:center;">
                    <i><?php echo gettext('By Joan Francesc García Beltrán'); ?></i>
                </p>
                <br>
                <p style="text-align:justify;">
                    <?php echo gettext('Arquitecto colegiado y miembro de la Asociación de Consultores de Estructuras, fundador de la consultoria de estructuras'); ?> <a href="https://www.jfgconsultors.com/" target="_blank"><img src="/media/images/Logos/Logo_JFG_No_background.svg" alt="JFG Consultors"></a>, <?php echo gettext('fundada en 2007, ofrece'); ?> <strong><?php echo gettext('SES'); ?></strong> <?php echo gettext('el nuevo sistema de forjado preindustrializado inteligente capaz de adaptarse a los requerimentos más duros de la construcción, pensado expresamente para forjados y cubiertas ligeras.'); ?>
                </p>
            </font>
        </div>
    </div>
</div>