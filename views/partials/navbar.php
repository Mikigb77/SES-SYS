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
                        <a class="nav-link dropdown-toggle" href="/Documentation" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Información técnica
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/informacion-tecnica/mixto">Sistema Mixto</a></li>
                            <li><a class="dropdown-item" href="#">Sistema Seco</a></li>
                            <li><a class="dropdown-item" href="#">Sistema Ligero</a></li>
                            <li><a class="dropdown-item" href="#">Sistema Activo</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Detalles Constructivos</a></li>
                            <li><a class="dropdown-item" href="#">Homologación: DAU</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input id="searchInput" class="form-control me-2" type="search" placeholder="search" aria-label="Search" style="background-image:url(/media/images/lupa.png); background-size:35px; background-repeat:no-repeat; text-indent:20px;" onfocus="hideLupa();" onblur="showLupa();">
                    <button class="btn btn-outline-light" type="submit">Search</button>
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