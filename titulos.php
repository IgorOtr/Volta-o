<?php
    require 'Admin/src/db/connect.php';
    include 'includes/head.php';
?>

<body>
    <?php include 'includes/nav.php'?>

    <section class="p-5 section_title_pages">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Principais Títulos</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="p-3">

    <?php include 'includes/banner_quick.php'?>
    
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseOne">
                                    Nacionais
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <strong>2016 – Campeonato Brasileiro – Série D</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseTwo">
                                    Estaduais
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <strong>
                                        1987 – Campeonato Carioca – 2.ª divisão<br><br>
                                        1990 – Campeonato Carioca – 2.ª divisão<br><br>
                                        1994 – Copa Rio<br><br>
                                        1995 – Copa Rio<br><br>
                                        1999 – Copa Rio<br><br>
                                        2004 – Campeonato Carioca – 2.ª divisão<br><br>
                                        2007 – Copa Rio<br><br>
                                        2022 – Copa Rio<br><br>
                                        2022 – Campeonato Carioca – 2.ª divisão
                                    </strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseThree">
                                    Torneios e Taças
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <strong>
                                        1994 – Torneio do Interior da Copa Rio<br><br>
                                        1995 – Torneio do Interior da Copa Rio<br><br>
                                        2005 – Taça Guanabara<br><br>
                                        2016 – Taça Rio<br><br>
                                        2020 – Taça Independência<br><br>
                                        2022 – Taça Santos Dumont
                                    </strong>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseFour">
                                    Amistosos
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <strong>
                                        1979 – Troféu José Lemos<br><br>
                                        2005 – Copa Finta Internacional
                                    </strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <?php include 'includes/footer.php'?>