<?php
    session_start();
    include 'session.php';
    include 'includes/head.php';
    require 'src/classes/Elenco.php';

    $action = isset($_GET['action']) ? $_GET['action'] : '' ;
    $id = isset($_GET['id']) ? $_GET['id'] : '' ;

    $class = new Elenco();

    $membros = $class->selectMembers();

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
                        Está página deve ser utilizada para <strong>adicionar imagens para as publicidades dos
                            Patrocinadores e Parceiros.</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>

    <?php }?>

            <div class="row mb-5 mt-5">
                <div class="col-md-12 text-center">
                    <h1 class="page__title">Elenco e Comissão Técnica</h1>
                </div>
            </div>
        </div>

        <div class="container mb-5">
            <div class="row">
                <div class="col-md-12">

                    <?php if ($action == 'edit') {?>

                        <?php foreach ($bannerToEdit as $key => $data) {?>

                            <form class="" action="src/controllers/BannerController.php" method="post"
                                enctype="multipart/form-data">
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

                                <div class="mb-3 d-flex flex-column">
                                    <label for="exampleFormControlInput1" class="form-label">Imágem atual:</label>
                                    <img width="350" src="public/img/banners/<?php echo $data['banner_image']?>" alt="">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Endereço de Link:
                                        <small>(Opicional)</small></label>
                                    <input type="text" class="form-control" value="<?php echo $data['banner_link']?>" name="banner_link" id="exampleFormControlInput1" placeholder="Adicionar um link:">
                                </div>

                                <div class="mb-3 mt-5 text-center">
                                    <input type="hidden" name="id" value="<?php echo $data['id']?>">
                                    <button type="submit" class="btn btn-warning w-100" name="alter_banner">Enviar
                                        Publicidade</button>
                                </div>
                            </form>

                        <?php }?>

                    <?php }else{?>

                        <form class="" action="src/controllers/ElencoController.php" method="post"
                            enctype="multipart/form-data">
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
                                <label for="exampleFormControlInput1" class="form-label">Nome do Membro:</label>
                                <input type="text" class="form-control" name="player_name" id="exampleFormControlInput1" placeholder="Nome do Jogador ou Membro da Comissão Técnica:">
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Posição:</label>
                                <select class="form-control" name="player_type" id="exampleFormControlInput1">
                                    <option value="0" selected>Selecione a função desse membro no elenco:</option>
                                    <option value="1">Goleiro</option>
                                    <option value="2">Zagueiro</option>
                                    <option value="3">Lateral</option>
                                    <option value="4">Meio-Campista</option>
                                    <option value="5">Atacante</option>
                                    <option value="6">Técnico</option>
                                    <option value="7">Preparador Físico</option>
                                    <option value="8">Auxiliar de Preparador Físico</option>
                                    <option value="9">Preparador de Goleiro</option>
                                    <option value="10">Analista/Scout</option>
                                </select>
                            </div>

                            <div class="mb-3 mt-5 text-center">
                                <button type="submit" class="btn btn-warning w-100" name="add_member">Adicionar Membro</button>
                            </div>
                        </form>
                    
                    <?php }?>

                </div>
            </div>
        </div>

        <div class="container pb-5">
            <div class="row mb-5 mt-5">
                <div class="col-md-12 text-center">
                    <h1 class="page__title">Membros do Elenco</h1>
                </div>
            </div>
            <table class="table table-dark table-striped table-hover mb-5">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Imagem</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Posição</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody class="mb-5">

                    <?php foreach ($membros as $key => $membro) {
                        
                        $delete = SITE_URL.'Admin/src/controllers/BannerController.php?action=delete&id='.$membro['id'];
                        $edit = SITE_URL.'Admin/banner.php?action=edit&id='.$membro['id'];
                    ?>

                    <div class="modal fade" id="exampleModal<?php echo $membro['id']?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmação de ação</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Tem certeza que deseja apagar essa publicidade?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancelar</button>
                                    <a href="<?php echo $delete?>" class="btn btn-danger">Apagar</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <tr>
                        <td><?php echo $membro['id']?></td>
                        <td><img class="rounded" width="150" src="public/img/elenco/<?php echo $membro['player_image']?>" alt=""></td>
                        <td><?php echo $membro['player_name']?></td>
                        <td><?php echo $membro['player_position']?></td>
                        <td>
                            <a href="<?php echo $edit?>" class="btn btn-warning"><i class='bx bx-edit'></i></a>
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $banner['id']?>"
                                class="btn btn-danger"><i class='bx bx-trash'></i></a>
                        </td>
                    </tr>

                    <?php }?>
                </tbody>
            </table>
        </div>
    </section>

    <?php include 'includes/footer.php'?>