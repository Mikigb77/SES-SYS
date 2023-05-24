<?php
for ($i = 0; $i < 5; ++$i)
    echo '<br>';
?>

<article></article>

<footer class="MyFooter container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div>
                <img src="/media/images/Logos/SES_tarjeta Firma.png" alt="" style="width:100%;">
            </div>
            <br>
            <p style="text-align: center;">
                <?php echo gettext('Diseño de producto y control de calidad:'); ?><br>
                <?php echo gettext('Joan Francesc Garcia Beltrán'); ?><br>
                <a href="https://www.jfgconsultors.com/" target="_blank"><img src="/media/images/Logos/Logo_JFG_No_background.svg" alt="JFG Consultors"></a>
            </p>
        </div>
        <div class="col-md-3">
            <div style="text-align: center;">
                <p>
                    <?php echo gettext('Contacto:'); ?><br>
                </p>
                <p>
                    <?php echo gettext('C/ Sant Antoni Maria Claret, 24, 3ªplanta'); ?><br>
                    <?php echo gettext('08037 Barcelona'); ?><br>
                    <?php echo gettext('Teléfono 93.011.54.64'); ?>
                </p>
                <p>
                    <a href="mailto: info@ses.systems"><?php echo gettext('info@ses.systems'); ?></a>
                </p>
            </div>
        </div>
        <div class="col-md-3" style="text-align: center;">
            <p>
                <?php echo gettext('Distribuidor en España:'); ?><br><br>
                <a href="https://planicer.com/es/" target="_blank">
                    <img class="FooterImg" src="/media/images/Logos/logo-planicer-construccions-metalliques.png" alt="" style="width:60%">
                </a>
            </p>
        </div>
        <div class="col-md-3">
            <div>
                <style>
                    .FooterImg {
                        width: 10%;
                        margin-left: 5%;
                    }
                </style>
                <div>
                    <a href="https://es.linkedin.com/posts/jfgconsultors_disponible-en-youtube-ses-steel-embed-activity-6950129179287826432-hiw8" target="_blank" style="text-decoration: none;">
                        <img class="FooterImg" src="/media/images/Logos/Linkedin.png" alt="">
                    </a>
                    <a href="https://www.youtube.com/@SteelEmbedSystem" target="_balank" style="text-decoration: none;">
                        <img class="FooterImg" src="/media/images/Logos/youtube-icon-logo-symbol.jpg" alt="" style="border-radius:100%;">
                    </a>
                </div>
            </div>
            <br>
            <div>
                <a href="<?php echo retainGET('/politica-de-privacidad/'); ?>"><?php echo gettext('Todos los derechos reservados'); ?></a>
            </div>

        </div>
    </div>
</footer>