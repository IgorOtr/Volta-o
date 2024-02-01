<?php
    session_start();
    include 'session.php';
    include 'includes/head.php';
    include 'src/classes/Notice.php';

    $action = isset($_GET['action']) ? $_GET['action'] : '';

    $id = isset($_GET['id']) ? $_GET['id'] : '';

    $class = new Notice();

    $notice = $class->getNoticeFromID($id);

    // echo '<pre>';
    // var_dump($notice);
    // echo '</pre>';

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

            <?php if ($action == 'edit') {
                
                foreach ($notice as $key => $notice_data) {
                    # code...
                
            ?>

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
                            value="<?php echo $notice_data['notice_title']?>">
                    </div>
                    <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Adicione uma Imagem:</label>
                        <input name="notice_image" type="file" class="form-control" id="inputGroupFile02">
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-md-12">
                        <textarea name="notice_content" id="summernote"
                            rows="10"><?php echo $notice_data['notice_content']?></textarea>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Escolha uma opção:</label>
                        <select class="form-select form-select-sm" aria-label="Small select example"
                            name="notice_category">
                            <option value="<?php echo $notice_data['notice_category']?>" selected>
                                <?php echo $notice_data['notice_category']?></option>
                            <option value="Destaque">Destaque</option>
                            <option value="Noticia Comum">Notícia Comum</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col">
                        <input type="hidden" name="notice_id" value="<?php echo $notice_data['id']?>">
                        <button type="submit" class="btn btn-warning w-100 mb-4" name="edit_notice"
                            style="color: #000000; font-weight: 600;">Alterar Notícia</button>
                    </div>
                </div>

            </form>

            <?php }}else{?>

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
                    <div class="col">
                        <label class="form-label" for="exampleFormControlTextarea1">Escreva um sub-título para essa notícia:</label>
                        <textarea name="notice_subtitle" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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

    <?php include 'includes/footer.php'?>