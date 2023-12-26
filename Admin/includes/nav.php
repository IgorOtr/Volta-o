    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button data-mdb-collapse-init class="navbar-toggler" type="button"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation" id="showNavbar">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse navBarCollapsed" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2 mt-lg-0 logo" href="index.php">
                    <span>Gerencie </span>&nbsp;Voltaço
                </a>
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Notícias
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="noticias.php">Todas as Notícias</a></li>
                            <li><a class="dropdown-item" href="add-notice.php">Adicionar Nova</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="banner.php">Banner</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Jogos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="next_match.php">Próximos Jogos&nbsp;<i
                                        class='bx bx-right-arrow-alt'></i></a></li>
                            <li><a class="dropdown-item" href="last_match.php"><i class='bx bx-left-arrow-alt'></i>&nbsp;Jogos
                                    Anteriores</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <div class="d-flex align-items-center">
                <div class="dropstart">
                    <button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class='bx bx-user-circle'></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="logout.php"><i class='bx bx-log-out'></i>&nbsp;Sair</a></li>
                        <li><a class="dropdown-item" href="#"><i class='bx bx-cog'>
                                </i>&nbsp;Configurações&nbsp;&nbsp;<span class="badge text-bg-danger">Em
                                    Breve</span></a></li>
                    </ul>
                </div>
            </div>
            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->