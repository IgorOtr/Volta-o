<?php

session_start();
include 'session.php';
include 'src/classes/Notice.php';
include 'includes/head.php';

$class = new Notice();  
?>

<body>

    <?php include 'includes/nav.php'?>

    <section class="main_section mt-5">


        <div class="container">

        <?php 
            if (isset($_SESSION['action_success'])) { 

                echo $_SESSION['action_success'];
                unset($_SESSION['action_success']);
            }else{
        ?>

            <div class="row mb-5">
                <div class="col">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Está página deve ser utilizada para a <strong>vizualização e realização das operações de alterar
                            e apagar</strong> as notícias.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>

        <?php }?>

            <div class="row mb-5">
                <div class="col-md-12 text-center">
                    <h1 class="page__title">Notícias</h1>
                </div>
            </div>

            <div class="row mb-5">

                <?php 
                
                    $notices = $class->getAllNotices();  

                        if (count($notices) < 1) {
                            echo '<h2 class="text-center mt-5" style="color: #ffffff;">Desculpe! Não há nada por aqui... =(</h2><br><p class="text-center" style="color: #ffffff;">Clique <a style="color: #ffc800;" href="'.SITE_URL.'Admin/add-notice.php">aqui</a> para adicionar uma notícia! </p>';
                        }
                    foreach ($notices as $key => $notice) {
                    
                        $edit = SITE_URL.'Admin/add-notice.php?action=edit&id='.$notice['id'];
                        $delete = SITE_URL.'Admin/src/controllers/NoticeController.php?action=delete&id='.$notice['id']; 
                        $changeStatus = ($notice['notice_status'] == 'Ativo') ? 
                        '<a data-bs-toggle="tooltip" data-bs-placement="top" title="Bloquear" href="'.SITE_URL.'Admin/src/controllers/NoticeController.php?action=changeStatus&set=Bloq&id='.$notice['id'].'" class="btn btn-danger"><i class="bx bx-block"></i></a>' : 
                        '<a data-bs-toggle="tooltip" data-bs-placement="top" title="Desbloquear" href="'.SITE_URL.'Admin/src/controllers/NoticeController.php?action=changeStatus&set=Ativo&id='.$notice['id'].'" class="btn btn-danger"><i class="bx bx-check-circle"></i></a>' ;
                    ?>

                        <div class="col-md-4">
                            <div class="card" style="">
                                <?php echo $destaque = ($notice['notice_category'] === 'destaque') ? '<span class="badge bg-danger" style="position: absolute; left: 10px; top: 10px;">Destaque</span>' : ''?>
                                <img src="<?php echo SITE_URL.'/Admin/public/img/notices/'.$notice['notice_image']?>"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-justify"><?php echo substr($notice['notice_title'],0,58).'...'?>
                                    </h5>
                                    <p class="card-text text-justify">
                                        <?php echo substr(strip_tags($notice['notice_content']),0,120).'...'?>
                                    </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Alterar"
                                                href="<?php echo $edit?>" class="btn btn-warning"><i class='bx bx-edit'></i></a>

                                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Apagar"
                                                href="<?php echo $delete?>" class="btn btn-danger"><i
                                                    class='bx bx-trash'></i></a>
                                        </div>
                                        <div class="col-md-6 text-end">
                                            <?php echo $changeStatus?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php }?>

            </div>
        </div>
    </section>

    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>

</body>

</html>