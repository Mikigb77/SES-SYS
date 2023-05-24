<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo retainGET("/"); ?>">
                <img src="/media/images/Logos/icon-ses.png" alt="SES System" style="width: 40px; margin:0%;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo retainGET("/"); ?>"><?php echo gettext("Inicio"); ?></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?php echo retainGET('/Documentation/'); ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo gettext("Información técnica"); ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo retainGET("/informacion-tecnica/"); ?>"><?php echo gettext("Índice"); ?></a></li>
                            <li><a class="dropdown-item" href="<?php echo retainGET("/informacion-tecnica/mixto/"); ?>"><?php echo gettext("Sistema Mixto"); ?></a></li>
                            <li><a class="dropdown-item" href="<?php echo retainGET("/informacion-tecnica/seco/"); ?>"><?php echo gettext("Sistema Seco"); ?></a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?php echo retainGET("/informacion-tecnica/detalles-constructivos/"); ?>"><?php echo gettext("Detalles Constructivos"); ?></a></li>
                            <li><a class="dropdown-item" href="<?php echo retainGET("/media/files/SES_SWH-SEF- DAU.pdf"); ?>" target="_blanck"><?php echo gettext("Homologación: DAU"); ?></a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="<?php echo retainGET("/noticias/"); ?>"><?php echo gettext("Notícias y Eventos"); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="<?php echo retainGET("/contacto/"); ?>"><?php echo gettext("Contacto"); ?></a>
                    </li>
                </ul>
                <form class="d-flex" role="search" hidden aria-hidden="true">
                    <input hidden id="searchInput" class="form-control me-2" type="search" placeholder="<?php echo gettext("search"); ?>" aria-label="<?php echo gettext("Search"); ?>" style="background-image:url(/media/images/lupa.png); background-size:35px; background-repeat:no-repeat; text-indent:20px;" onfocus="hideLupa();" onblur="showLupa();">
                    <button hidden class="btn btn-outline-light" type="submit"><?php echo gettext("Search"); ?></button>
                </form>
                <div class="navbar-text">
                    <a href="<?php echo changeLang('es_ES'); ?>"><?php echo gettext("ES"); ?></a>
                    <a href="<?php echo changeLang('en_US'); ?>"><?php echo gettext("EN"); ?></a>
                </div>
            </div>
        </div>
    </nav>
</header>
<script>
    function hideLupa() {
        document.getElementById("searchInput").removeAttribute("style");
    }

    function showLupa() {
        let x = document.getElementById('searchInput');
        if (!x.innerText);
        x.setAttribute("style", "background-image:url(/media/images/lupa.png); background-size:35px; background-repeat:no-repeat; text-indent:20px;");
    }
</script>