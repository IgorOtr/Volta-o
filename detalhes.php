<?php 
require 'Admin/src/classes/Notice.php';

$class = new Notice();

$id = isset($_GET['id']) ? $_GET['id'] : '';
$details = $class->getNoticeDetails($id);
$date = explode(" ", $details[0]['created_at']);

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
                <div class="col-md-8 mb-3">
                    <div class="row">
                        <div class="col-md-12 section__title">
                            <h3 style="color: #000000;"><?php echo $details[0]['notice_title']?></h3>
                        </div>
                    </div>
                    <div class="details__card">
                        <img src="Admin/public/img/notices/<?php echo $details[0]['notice_image']?>" alt="">

                        <div class="card-date">
                            Publicado em: <?php echo $date[0]?>
                        </div>
                        <div class="notice-content">
                            <?php echo $details[0]['notice_content']?>
                        </div>
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

    </section>

    <?php include 'includes/footer.php'?>