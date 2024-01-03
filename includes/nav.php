<div class="container-fluid p-4 black_nav"></div>

<div class="container-fluid top_nav_bar">
    <div class="row">
        <div class="col-md-5 d-flex align-items-center justify-content-end vr__text__align">
            <h1 class="vr__text">VOLTA REDONDA</h1>
        </div>
        <div class="col-md-2 text-center">
            <img src="assets/img/logo.png" width="80" class="logo" alt="" />
        </div>
        <div class="col-md-5 d-flex align-items-center vr__text__align">
            <h1>FUTEBOL CLUBE</h1>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav" style="width: 100%; display: flex; justify-content: space-evenly;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo SITE_URL?>">HOME</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        FUTEBOL
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo $elenco = ($page == 'index') ? '#elenco' : SITE_URL ?>">Elenco Proficional</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="#">Comissão Técnica</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        O CLUBE
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo SITE_URL.'historia.php'?>">Nossa História</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="<?php echo SITE_URL.'hino.php'?>">Hino</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="<?php echo SITE_URL.'titulos.php'?>">Principais Títulos</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="<?php echo SITE_URL.'presidentes.php'?>">Presidentes</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="#">Diretoria e Conselho</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">TRANSPARÊNCIA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="https://www.eusouvoltaco.com.br/" target="_blank" >SEJA SÓCIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="https://www.youtube.com/@voltacotv76" target="_blank" >VOLTAÇO TV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">CONTATOS</a>
                </li>
            </ul>
        </div>
    </div>
</nav>