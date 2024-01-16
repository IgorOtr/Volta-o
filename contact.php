<?php
    require 'Admin/src/db/connect.php';
    include 'includes/head.php';
?>

<body>
    <?php include 'includes/nav.php'?>

    <section class="p-5 section_title_pages mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Contato</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="p-3 sec_history">

        <?php include 'includes/banner_quick.php'?>

        <div class="container mb-5 mt-5">
            <div class="row">
                <div class="col-md-8">
                    <!--Section: Contact v.2-->
                    <section class="mb-4">
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-9 mb-md-0 mb-5">
                                <form id="contact-form" name="contact-form" action="Admin/src/mail.php" method="POST">

                                    <!--Grid row-->
                                    <div class="row">

                                        <!--Grid column-->
                                        <div class="col-md-6">
                                            <div class="md-form mb-3">
                                                <label for="name" class="">Com quem deseja falar?</label>
                                                <select class="form-select form-control"
                                                    aria-label="Default select example">
                                                    <option selected>Selecione</option>
                                                    <option value="1">Administação</option>
                                                    <option value="2">Acessoria de Imprenssa</option>
                                                    <option value="3">Categoria de Base</option>
                                                    <option value="4">Comercial (Patocícios/Parcerias)</option>
                                                    <option value="5">Outros</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--Grid column-->

                                        <!--Grid column-->
                                        <div class="col-md-6">
                                            <div class="md-form mb-3">
                                                <label for="email" class="">Nome:</label>
                                                <input type="text" id="email" name="email" class="form-control"
                                                    placeholder="Digite seu nome completo:">
                                            </div>
                                        </div>
                                        <!--Grid column-->

                                    </div>
                                    <!--Grid row-->

                                    <!--Grid row-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form mb-3">
                                                <label for="email" class="">Email:</label>
                                                <input type="email" id="email" name="email" class="form-control"
                                                    placeholder="Digite seu melhor e-mail:">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form mb-3">
                                                <label for="email" class="">Telefone:</label>
                                                <input type="text" id="email" name="email" class="form-control"
                                                    placeholder="Digite o seu telefone com DDD:">
                                            </div>
                                        </div>
                                    </div>
                                    <!--Grid row-->

                                    <!--Grid row-->
                                    <div class="row">

                                        <!--Grid column-->
                                        <div class="col-md-12">

                                            <div class="md-form mb-3">
                                                <label for="message">Your message</label>
                                                <textarea type="text" id="message" name="message" rows="2"
                                                    class="form-control md-textarea"></textarea>
                                            </div>

                                        </div>
                                    </div>
                                    <!--Grid row-->

                                    <div class="text-center text-md-left">
                                        <button type="submit" class="btn btn-warning w-100">Enviar Mensagem</button>
                                    </div>

                                </form>

                            </div>

                    </section>
                    <!--Section: Contact v.2-->
                </div>
                <div class="col-md-4">
                    <h3 class="d-flex align-items-center" style="color: #000000b3; font-size: 25px;"><i
                            style="color: #ffc800; font-size: 42px; margin-right: 10px;" class='bx bx-phone'></i> (24)
                        3337-7740</h3>
                    <h3 class="d-flex align-items-center mt-4" style="color: #000000b3; font-size: 25px;"><i
                            style="color: #ffc800; font-size: 42px; margin-right: 10px;" class='bx bxs-time-five'></i>
                        Horário de Atendimento</h3>
                    <p style="margin-left: 52px;">
                        Sede Administrativa:<br>
                        Segunda à Sexta-feira: 9h às 16h
                    </p>

                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 style="margin-bottom: 0px; margin-top: 0px;" class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseOne">
                                    CT Oscar Cardoso
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
                                <div class="accordion-body d-flex flex-column">
                                    <strong class="mb-3">Horário de Atendimento</strong>
                                    <p>
                                        Segunda à sexta-feira, das 9h às 18h 
                                    </p>
                                    <strong>Localização</strong>
                                    <p>
                                        Av. Min. Salgado Filho – Aero Clube, Volta Redonda – RJ, 27283-130
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 style="margin-bottom: 0px; margin-top: 0px;" class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseTwo">
                                    Acessoria de Imprenssa
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                <div class="accordion-body d-flex flex-column">
                                    <strong class="mb-3">Horário de Atendimento</strong>
                                    <p>
                                    Segunda à sexta-feira, das 9h às 16h 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 style="margin-bottom: 0px; margin-top: 0px;" class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseThree">
                                    Categoria de Base
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                <div class="accordion-body d-flex flex-column">
                                    <strong class="mb-3">Horário de Atendimento</strong>
                                    <p>
                                    Segunda à sexta-feira, das 9h às 16h 
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 style="margin-bottom: 0px; margin-top: 0px;" class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseFour">
                                    Comercial
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                                <div class="accordion-body d-flex flex-column">
                                    <strong class="mb-3">Horário de Atendimento</strong>
                                    <p>
                                    Segunda à sexta-feira, das 9h às 16h 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'?>