<?php
    session_start();
    include 'session.php';
    include 'includes/head.php';
    require 'src/classes/Comment.php';

    $action = isset($_GET['action']) ? $_GET['action'] : '' ;
    $id = isset($_GET['id']) ? $_GET['id'] : '' ;

    $class = new Comment();

    $pending = $class->GetPending();
    $allComments = $class->GetAllComments();

    // echo '<pre>';
    // var_dump($allComments);
    // echo '</pre>';

    // die();
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
                        Está página deve ser utilizada para <strong>gerenciar os comentários das publicações.</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>

            <?php }?>

            <div class="row mb-5 mt-5">
                <div class="col-md-12 text-center">
                    <h1 class="page__title">Gerenciador de Comentários</h1>
                </div>
            </div>

        </div>

        <section>
            <div class="container my-5 py-5 text-dark">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-12 col-lg-10 col-xl-8">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h4 class="mb-0" style="color: #ffc800;">Comentários Pendentes</h4>
                        </div>

                        <?php 
                            if (empty($pending)) {
                                echo "<h3 style='color: #ffffff;'>Não há comentários à serem analisados =(</h3>";
                            }else{

                                foreach ($pending as $key => $pend) {
                            
                                    $date = explode('-', $pend['created_at']);
        
                                    $created_at = substr($date[2],0,2).'/'.$date[1].'/'.$date[0];
                        ?>

                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex flex-start">
                                    <img class="rounded-circle shadow-1-strong me-3"
                                        src="public/img/User_Icon.png" alt="avatar"
                                        width="40" height="40" />
                                    <div class="w-100">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h6 class="text-primary fw-bold mb-0">
                                                <?php echo $pend['user_name']?>
                                                <p class="text-dark text-justify">
                                                    <?php echo $pend['user_comment']?>
                                                </p>
                                            </h6>
                                            <p style="position: absolute; right: 13px; top: 8px;" class="mb-0"><i class='bx bx-calendar'></i> <?php echo $created_at?></p>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="small mb-0" style="color: #aaa;">
                                                <a href="<?php echo SITE_URL.'Admin/src/controllers/CommentController.php?action=change-status&id='.$pend['id'].'&sset=Aprovado'?>" class="btn btn-success">Aprovar</a>
                                                <a href="<?php echo SITE_URL.'Admin/src/controllers/CommentController.php?action=change-status&id='.$pend['id'].'&sset=Reprovado'?>" class="btn btn-danger">Reprovar</a>
                                                <a href="<?php echo SITE_URL.'detalhes.php?id='.$pend['id_notice'];?>" class="btn btn-primary">Notícia Referente</a>
                                            </p>
                                            <div class="d-flex flex-row">
                                                <i data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Pendente" style="font-size: 20px;" class='bx bx-time-five' ></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php }}?>

                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container py-5 text-dark">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-12 col-lg-10 col-xl-8">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h4 class="mb-0" style="color: #ffc800;">Todos os comentários</h4>
                        </div>


                        <?php foreach ($allComments as $key => $comments) {
                            
                            $date = explode('-', $comments['created_at']);

                            $created_at = substr($date[2],0,2).'/'.$date[1].'/'.$date[0];
                        ?>

                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex flex-start">
                                        <img class="rounded-circle shadow-1-strong me-3"
                                            src="public/img/User_Icon.png" alt="avatar"
                                            width="40" height="40" />
                                        <div class="w-100">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <h6 class="text-primary fw-bold mb-0">
                                                    <?php echo $comments['user_name']?>
                                                    <p class="text-dark text-justify">
                                                    <?php echo $comments['user_comment']?>
                                                    </p>
                                                </h6>
                                                <p style="position: absolute; right: 8px; top: 8px;" class="mb-0"><i class='bx bx-calendar'></i> <?php echo $created_at?></p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="small mb-0" style="color: #aaa;">
                                                    <a href="<?php echo SITE_URL.'detalhes.php?id='.$comments['id_notice'];?>" class="btn btn-primary">Notícia Referente</a>
                                                </p>
                                                <div class="d-flex flex-row">
                                                    <?php echo $status_icon = $class->FormatCommentStatus($comments
                                                    ['comment_status'])?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php }?>

                    </div>
                </div>
            </div>
        </section>

    </section>

    <?php include 'includes/footer.php'?>