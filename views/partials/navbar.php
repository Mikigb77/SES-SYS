<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="/media/images/Logos/icon-ses.png" alt="SES System" style="width: 40px; margin:0%;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/Documentation/" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Información técnica
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/informacion-tecnica/">Índice</a></li>
                            <li><a class="dropdown-item" href="/informacion-tecnica/mixto/">Sistema Mixto</a></li>
                            <li><a class="dropdown-item" href="/informacion-tecnica/seco/">Sistema Seco</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/informacion-tecnica/detalles-constructivos/">Detalles Constructivos</a></li>
                            <li><a class="dropdown-item" href="/media/files/SES_SWH-SEF- DAU.pdf" target="_blanck">Homologación: DAU</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="/contacto/">Contacto</a>
                    </li>
                </ul>
                <form class="d-flex" role="search" hidden aria-hidden="true">
                    <input hidden id="searchInput" class="form-control me-2" type="search" placeholder="search" aria-label="Search" style="background-image:url(/media/images/lupa.png); background-size:35px; background-repeat:no-repeat; text-indent:20px;" onfocus="hideLupa();" onblur="showLupa();">
                    <button hidden class="btn btn-outline-light" type="submit">Search</button>
                </form>
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