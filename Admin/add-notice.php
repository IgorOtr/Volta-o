<?php
    session_start();
    include 'session.php';
    include 'includes/head.php';
    include 'src/classes/Notice.php';

    $action = isset($_GET['action']) ? $_GET['action'] : '';

    $id = isset($_GET['id']) ? $_GET['id'] : '';

    $class = new Notice();

    $notice = $class->getNoticeFromID($id);

    echo '<pre>';
    var_dump($notice);
    echo '</pre>';

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
                        Está página deve ser utilizada para <strong>escrever as notícias</strong> referente ao Time.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>

            <?php }?>

            <?php if ($action == 'edit') {?>

            <div class="row mb-5">
                <div class="col-md-12 text-center">
                    <h1 class="page__title">Altere essa notícia</h1>
                </div>
            </div>

            <form action="src/controllers/NoticeController.php" method="post" enctype="multipart/form-data">

                <div class="row mb-5">
                    <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Escreva um título para essa
                            Notícia:</label>
                        <input name="notice_title" type="text" class="form-control" placeholder="Título da Notícia:"
                            required>
                    </div>
                    <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Adicione uma Imagem:</label>
                        <input name="notice_image" type="file" class="form-control" id="inputGroupFile02" required>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-md-12">
                        <textarea name="notice_content" id="summernote" rows="10" required></textarea>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Escolha uma opção:</label>
                        <select class="form-select form-select-sm" aria-label="Small select example"
                            name="notice_category">
                            <option selected>Selecione uma Opção</option>
                            <option value="destaque">Destaque</option>
                            <option value="comum">Notícia Comum</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col">
                        <button type="submit" class="btn btn-warning w-100 mb-4" name="add_notice"
                            style="color: #000000; font-weight: 600;">Publicar Notícia</button>
                    </div>
                </div>

            </form>
            <?php }else{?>

            <div class="row mb-5">
                <div class="col-md-12 text-center">
                    <h1 class="page__title">Nova Notícia</h1>
                </div>
            </div>


            <form action="src/controllers/NoticeController.php" method="post" enctype="multipart/form-data">

                <div class="row mb-5">
                    <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Escreva um título para essa
                            Notícia:</label>
                        <input name="notice_title" type="text" class="form-control" placeholder="Título da Notícia:"
                            required>
                    </div>
                    <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Adicione uma Imagem:</label>
                        <input name="notice_image" type="file" class="form-control" id="inputGroupFile02" required>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-md-12">
                        <textarea name="notice_content" id="summernote" rows="10" required></textarea>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Escolha uma opção:</label>
                        <select class="form-select form-select-sm" aria-label="Small select example"
                            name="notice_category">
                            <option selected>Selecione uma Opção</option>
                            <option value="destaque">Destaque</option>
                            <option value="comum">Notícia Comum</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col">
                        <button type="submit" class="btn btn-warning w-100 mb-4" name="add_notice"
                            style="color: #000000; font-weight: 600;">Publicar Notícia</button>
                    </div>
                </div>

            </form>

            <?php }?>





        </div>
    </section>

    <script>
    $('#summernote').summernote({
        placeholder: 'Escreva sua notícia aqui:',
        tabsize: 2,
        height: 300,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
    </script>

</body>

</html>