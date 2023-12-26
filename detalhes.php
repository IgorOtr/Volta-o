<?php 
require 'Admin/src/classes/Notice.php';

$class = new Notice();

$id = isset($_GET['id']) ? $_GET['id'] : '';
$details = $class->getNoticeDetails($id);
$date = explode(" ", $details[0]['created_at']);

// echo '<pre>';
// var_dump($details);
// echo '<;pre>';

include 'includes/head.php'

?>

<body>
    <?php include 'includes/nav.php'?>

    <section class="notices__sec__2">
        <div class="container">
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
    </section>

    <?php include 'includes/footer.php'?>