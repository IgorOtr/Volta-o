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
                    <h1>Elenco Profissional</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="p-5 sec_history">

        <?php include 'includes/banner_quick.php'?>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(-990px, 0px, 0px); transition: all 0.25s ease 0s; width: 2376px;">

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                        <img src="assets/img/1.png.jpg" alt="">
                                            <h5>Flávio Horta</h5>
                                            <p>Presidente</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="assets/img/2.png.jpg" alt="">
                                            <h5>Flávio Horta Junior</h5>
                                            <p>Vice-Presidente</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="assets/img/3.png.jpg" alt="">
                                            <h5>Alex Bôsco</h5>
                                            <p>Diretor Administratiivo</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="assets/img/11.png.jpg" alt="">
                                            <h5>Sabrina Maciel</h5>
                                            <p>Diretora Financeira</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="assets/img/4.png.jpg" alt="">
                                            <h5>Reinaldo C Nogueira</h5>
                                            <p>Diretor Médico</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="assets/img/21.png.jpg" alt="">
                                            <h5>Victor Mesquita</h5>
                                            <p>Diretor Social</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 style="margin-top: 0px; margin-bottom: 0px;" class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseOne">
                                    Conselho Deliberativo
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <strong>
                                        1 – Sabrina Maria da Silva Maciel
                                        <br>
                                        2 – Ernani da Cunha Ferreira
                                        <br>
                                        3 – Claudio Germano Borges de Oliveira
                                        <br>
                                        4 – Geraldo Braz da Cunha (GERALDINHO)
                                        <br>
                                        5 – Clecio Inocencio de Souza
                                        <br>
                                        6 – Daniel Duque Ramos Capobiango
                                        <br>
                                        7 – Leonardo do Nascimento Leal
                                        <br>
                                        8 – Ebio Ferreira Narduche
                                        <br>
                                        9 – Geison Braz da Cunha
                                        <br>
                                        10 – Willian Queiroz Lemos
                                        <br>
                                        11 – Gustavo de Carvalho Horta Jardim
                                        <br>
                                        12 – Pedro Mendes de Oliveira
                                        <br>
                                        13 – Daniel Felipe Bitencourt Pinto
                                        <br>
                                        14 – Maycon Cesar Inácio Abrantes
                                        <br>
                                        15 – Raoni Soares de Azevedo
                                        <br>
                                        16 – Claudio Luis Toledo Fonseca
                                        <br>
                                        17 – Angelo José Alves
                                        <br>
                                        18 – Leandro Augusto do Carmo
                                        <br>
                                        19 – André Luís Queiroz de Oliveira
                                        <br>
                                        20 – Camila Manso Brito de Oliveira
                                    </strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 style="margin-top: 0px; margin-bottom: 0px;" class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseTwo">
                                    Conselho Fiscal
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <strong>
                                        1 – Vinicius Z. Bosco de Souza
                                        <br>
                                        2 – Reinaldo Luis da Silva
                                        <br>
                                        3 – Gesnaldo Batista Cunha
                                    </strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 style="margin-top: 0px; margin-bottom: 0px;" class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseThree">
                                    Conselho Beneméritos
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <strong>
                                        1 – Afrânio Conceição Leal
                                        <br>
                                        2 – Alex Sandro Bôsco de Souza
                                        <br>
                                        3 – Antônio Francisco Neto
                                        <br>
                                        4 – Cláudio Fernando de Azevedo
                                        <br>
                                        5 – Edilson do Carmo Silva
                                        <br>
                                        6 – Edson Correa Pereira
                                        <br>
                                        7 – Elias Rangel de Barros
                                        <br>
                                        8 – Flávio Coutiero Horta Jardom
                                        <br>
                                        9 – Gelver Gilliard Correa da Cunha
                                        <br>
                                        10 – Hamilton Perriard da Silva
                                        <br>
                                        11 – Ítalo Granato
                                        <br>
                                        12 – Jesus de Paula
                                        <br>
                                        13 – José Floriano Ferreira
                                        <br>
                                        14 – Joselito Magalhães
                                        <br>
                                        15 – Luciano de Souza Nogueira
                                        <br>
                                        16 – Luiz Carlos Rodrigues
                                        <br>
                                        17 – Luiz Gonzaga de Barros Silva
                                        <br>
                                        18 – Marco Antônio Francisco
                                        <br>
                                        19 – Maurício Monteiro da Silva
                                        <br>
                                        20 – Murilo Pragana Patriota
                                        <br>
                                        21 – Reinaldo Couri Nogueira
                                        <br>
                                        22 – Rogério Loureiro
                                        <br>
                                        23 – Ronaldo Loureiro
                                        <br>
                                        24 – Wilson Honório de Oliveira
                                        <br>
                                        25 – Wilton Arbex
                                    </strong>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 style="margin-top: 0px; margin-bottom: 0px;" class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseFour">
                                    Presidência de Honra
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <strong>
                                        1 – Antônio Francisco Neto
                                        <br>
                                        2 – Rogério Loureiro
                                    </strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'?>