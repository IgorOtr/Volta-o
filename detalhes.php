<?php 
require 'Admin/src/classes/Notice.php';
require 'Admin/src/classes/Comment.php';

$class = new Notice();
$class_comment = new Comment();

$id = isset($_GET['id']) ? $_GET['id'] : '';
$details = $class->getNoticeDetails($id);
$date = explode(" ", $details[0]['created_at']);

$next_notice = $class->getNextNotice($id);
$last_notice = $class->getLastNotice($id);
$all_last_notice = $class->getAllLastNotices($id);

$comments = $class_comment->GetCommentsByNoticeId($id);

include 'includes/head.php'

?>

<body>

    <?php include 'includes/nav.php'?>

    <section class="notices__sec__2">

        <?php include 'includes/banner_quick.php'?>

        <div class="container p-3">

            <?php 
                if (isset($_SESSION['notice_added'])) { 

                    echo $_SESSION['notice_added'];
                    unset($_SESSION['notice_added']);
                }
            ?>

            <div class="row">
                <div class="col-md-8 section__title">
                    <h3 style="color: #000000;"><?php echo $details[0]['notice_title']?></h3>
                </div>
            </div>
            <div class="row">

                <div class="col-md-8 mb-3">
                    <div class="details__card">
                        <img src="Admin/public/img/notices/<?php echo $details[0]['notice_image']?>" alt="">

                        <div class="card-date">
                            Publicado em: <?php echo $date[0]?>
                        </div>
                        <div class="notice-content">
                            <?php echo $details[0]['notice_content']?>
                        </div>
                    </div>
                    <div class="row mt-5 mb-5">
                        <div class="col-md-6 d-flex flex-column" style="border-right: 1px solid #ffc800;">
                            <h5><i class='bx bx-left-arrow-alt'></i> Anterior</h5>
                            <a href="<?php echo SITE_URL.'detalhes.php?id='.@$last_notice[0]['id']?>"
                                style="color: #000000; font-weight: 600; font-size: 14px;"><?php echo substr(@$last_notice[0]['notice_title'],0, 55).'...'?></a>
                        </div>
                        <div class="col-md-6 d-flex flex-column" style="border-left: 1px solid #ffc800;">
                            <h5>Próxima <i class='bx bx-right-arrow-alt'></i></h5>
                            <a href="<?php echo SITE_URL.'detalhes.php?id='.@$next_notice[0]['id']?>"
                                style="color: #000000; font-weight: 600; font-size: 14px;"><?php echo substr(@$next_notice[0]['notice_title'],0, 55).'...'?></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="notice__card">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <h5>Últimas Notícias</h5>
                            </div>
                        </div>

                        <?php foreach ($all_last_notice as $key => $last) {?>

                        <div class="row g-0">
                            <div class="col-md-4 d-flex align-items-center">
                                <img src="<?php echo SITE_URL.'Admin/public/img/notices/'.$last['notice_image']?>" alt="Trendy Pants and Shoes" class="img-fluid rounded-start">
                            </div>
                            <div class="col-md-8 d-flex align-items-center">
                                <div class="card-body">
                                    <h5 style="font-size: 16px;"><?php echo substr($last['notice_title'], 0, 20).'...'?></h5>
                                    <p class="card-text" style="font-size: 12px;">
                                        <?php echo substr(strip_tags($last['notice_content']), 0, 120).'...'?>
                                    </p>
                                    <p class="card-text">
                                        <small class="text-muted">Publicado em: 12/01/2024</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <?php }?>

                    </div>
                </div>

            </div>
        </div>

        <div class="container p-3">
            <div class="row">
                <div class="col-md-12 section__title">
                    <h3 style="color: #000000;">Deixe seu comentário</h3>
                    <p>O seu endereço de e-mail não será publicado. Campos obrigatórios são marcados com <span
                            style="color:red;">*</span></p>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8">
                            <form action="Admin/src/controllers/CommentController.php" method="POST">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Comentário: <span
                                            style="color:red;">*</span></label>
                                    <textarea name="comment" class="form-control" id="exampleFormControlTextarea1"
                                        rows="7" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nome: <span
                                            style="color:red;">*</span></label>
                                    <input type="text" name="user_name" class="form-control"
                                        id="exampleFormControlInput1" placeholder="Seu Nome:" required>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email: <span
                                            style="color:red;">*</span></label>
                                    <input type="email" name="user_email" class="form-control"
                                        id="exampleFormControlInput1" placeholder="Seu email:" required>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Site:</label>
                                    <input type="text" name="user_site" class="form-control"
                                        id="exampleFormControlInput1" placeholder="Seu Site:">
                                </div>

                                <div class="mb-3 mt-5">
                                    <input type="hidden" name="notice_id" value="<?php echo $id?>">
                                    <button type="submit" name="add_comment" class="btn btn-warning"
                                        id="exampleFormControlInput1">Enviar Comentário</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container p-3">
            <div class="row">
                <div class="col-md-12">
                    <h3 style="color: #000000;">Comentários Publicados</h3>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">

                    <?php 

                            if (empty($comments)) {

                                echo "<h6 style='color: #000000;'>Não há comentários nessa publicação. Seja o primeira a comentar!!</h6>";
                            }else{
                                foreach ($comments as $key => $comment) {
                            
                                    $date = explode('-', $comment['created_at']);
        
                                    $created_at = substr($date[2],0,2).'/'.$date[1].'/'.$date[0];    

                        ?>
                    <div class="card-comment rounded shadow-0 border">
                        <div class="card-body p-4">

                            <div class="card-comment mb-4">
                                <div class="card-body">
                                    <p><?php echo $comment['user_comment']?></p>

                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                            <img src="Admin/public/img/User_Icon.png" alt="avatar" width="25"
                                                height="25" />
                                            <p class="small mb-0 ms-2"><?php echo $comment['user_name']?></p>
                                        </div>
                                        <div class="d-flex flex-row align-items-center">
                                            <p class="small text-muted mb-0"><i class='bx bx-calendar'></i> Publicado
                                                em: <?php echo $created_at?></p>
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

    <?php include 'includes/footer.php'?>