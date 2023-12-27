<?php
    session_start();
    include 'session.php';
    include 'includes/head.php';
?>

<body>

    <?php include 'includes/nav.php'?>

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
                        Está página deve ser utilizada para <strong>adicionar imagens para as publicidades dos Patrocinadores e Parceiros.</strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>

            <?php }?>

            <div class="row mb-5 mt-5">
                <div class="col-md-12 text-center">
                    <h1 class="page__title">Publicidades</h1>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">


                    <form class="" action="src/controllers/BannerController.php" method="post" enctype="multipart/form-data">
                        <div class="file-input mb-3">
                            <input type="file" name="file-input" id="file-input" class="file-input__input" />
                            <label class="file-input__label" for="file-input">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="upload"
                                    class="svg-inline--fa fa-upload fa-w-16" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M296 384h-80c-13.3 0-24-10.7-24-24V192h-87.7c-17.8 0-26.7-21.5-14.1-34.1L242.3 5.7c7.5-7.5 19.8-7.5 27.3 0l152.2 152.2c12.6 12.6 3.7 34.1-14.1 34.1H320v168c0 13.3-10.7 24-24 24zm216-8v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h136v8c0 30.9 25.1 56 56 56h80c30.9 0 56-25.1 56-56v-8h136c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                    </path>
                                </svg>
                                <span>Importar Imagem</span></label>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Endereço de Link: <small>(Opicional)</small></label>
                            <input type="text" class="form-control" name="banner_link" id="exampleFormControlInput1"
                                placeholder="Adicionar um link:">
                        </div>

                        <div class="mb-3 mt-5 text-center">
                            <button type="submit" class="btn btn-warning w-100" name="add_banner">Enviar Publicidade</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'?>