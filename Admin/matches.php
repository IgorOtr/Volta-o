<?php
    session_start();
    include 'session.php';

    $act = isset($_GET['act']) ? $_GET['act'] : '';
    include 'includes/head.php';
?>

<body>

    <?php include 'includes/nav.php'?>

    <?php if ($act === 'next') {?>

    <section class="main_section mt-5">
        <div class="container">

            <?php 
                if (isset($_SESSION['notice_added'])) { 

                    echo $_SESSION['notice_added'];
                    unset($_SESSION['notice_added']);
                }else{
            ?>
            <div class="row">
                <div class="col">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Está página deve ser utilizada para <strong>anunciar os próximos jogos</strong> do Time.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>

            <?php }?>

            <div class="row mb-5 mt-5">
                <div class="col-md-12 text-center">
                    <h1 class="page__title">Próximos Jogos</h1>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="p-3" style="border: 2px solid #ffc800; border-radius: 8px;"
                        action="src/controllers/MatchController.php" method="post" enctype="multipart/form-data">

                        <div class="row mb-5">
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Equipe adversária:</label>
                                <input name="adversary_name" type="text" class="form-control"
                                    placeholder="Nome da Equipe:" required>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Escudo:</label>
                                <input name="adversary_img" type="file" class="form-control" id="inputGroupFile02"
                                    required>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Data da partida:</label>
                                <input name="match_date" type="datetime-local" class="form-control"
                                    id="inputGroupFile02" required>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col">
                                <label for="exampleFormControlInput1" class="form-label">Local da Partida:</label>
                                <input name="match_local" type="text" class="form-control" id="inputGroupFile02"
                                    placeholder="Ex.: Estádio Raulino de Oliveira, Volta Redonda - RJ" required>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col">
                                <label for="exampleFormControlInput1" class="form-label">Mandante da Partida:</label>
                                <select class="form-select" aria-label="Default select example" name="match_boss">
                                    <option selected>Selecione uma Opção</option>
                                    <option value="Voltaco">Volta Redonda</option>
                                    <option value="Adversary">Equipe Adversária</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col">
                                <button type="submit" class="btn btn-warning w-100 mb-4" name="add_next_match"
                                    style="color: #000000; font-weight: 600;">Anunciar Próximo Jogo</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php } elseif($act === 'last') {?>

    <section class="main_section mt-5">
        <div class="container">

            <?php 
        if (isset($_SESSION['notice_added'])) { 

            echo $_SESSION['notice_added'];
            unset($_SESSION['notice_added']);
        }else{
    ?>
            <div class="row">
                <div class="col">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Está página deve ser utilizada para <strong>informar o placar dos jogos anteriores</strong> do
                        Time.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>

            <?php }?>

            <div class="row mb-5 mt-5">
                <div class="col-md-12 text-center">
                    <h1 class="page__title">Jogos Anteriores</h1>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="p-3" style="border: 2px solid #ffc800; border-radius: 8px;"
                        action="src/controllers/MatchController.php" method="post" enctype="multipart/form-data">

                        <div class="row mb-5">
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Equipe Adversária:</label>
                                <input name="adversary_name" type="text" class="form-control"
                                    placeholder="Nome da Equipe:" required>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Escudo:</label>
                                <input name="adversary_img" type="file" class="form-control" id="inputGroupFile02"
                                    required>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Data da partida:</label>
                                <input name="match_date" type="datetime-local" class="form-control"
                                    id="inputGroupFile02" required>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col">
                                <label for="exampleFormControlInput1" class="form-label">Local da Partida:</label>
                                <input name="match_local" type="text" class="form-control" id="inputGroupFile02"
                                    placeholder="Ex.: Estádio Raulino de Oliveira, Volta Redonda - RJ" required>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <h3 class="text-center pb-4" style="color: #ffc800; font-weight: 800;">Placar</h3>
                            <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Volta Redonda:</label>
                                <input name="score_vr" type="number" class="form-control" id="inputGroupFile02"
                                    placeholder="Informe a quantidade de gols marcados:" required>
                            </div>
                            <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Equipe Adverária:</label>
                                <input name="score_adversary" type="number" class="form-control" id="inputGroupFile02"
                                    placeholder="Informe a quantidade de gols marcados:" required>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col">
                                <button type="submit" class="btn btn-warning w-100 mb-4" name="add_last_match"
                                    style="color: #000000; font-weight: 600;">Informar Jogo Anterior</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php }?>

    <?php include 'includes/footer.php'?>