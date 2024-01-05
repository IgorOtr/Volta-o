<?php

require 'Admin/src/classes/Notice.php';
 
$class = new Notice();
$notices = $class->getNoticesToFront();

include 'includes/head.php';
?>

<body>
<?php include 'includes/nav.php'?>

    <section class="notices__sec__2">

    <?php include 'includes/banner_quick.php'?>

        <div class="container section__title">
            <div class="row">
                <div class="col-md-12">
                    <h3 style="color: #000000;">Notícias do Clube</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

            <?php foreach ($notices as $key => $notice) {
                
                $date = explode(" ", $notice['created_at']);
            ?>

                <div class="col-md-4 mb-3">
                    <a href="<?php echo SITE_URL.'detalhes.php?id='.$notice['id']?>" class="notice__link">
                        <div class="notice__card">
                            <img src="Admin/public/img/notices/<?php echo $notice['notice_image']?>" alt="">

                            <div class="card-date">
                                Publicado em: <?php echo $date[0]?>
                            </div>
                            <div class="notice-title">
                                <?php echo $notice['notice_title']?>
                            </div>
                            <div class="notice-content">
                                <?php echo substr(strip_tags($notice['notice_content']), 0, 140)."..."?>
                            </div>
                        </div>
                    </a>
                </div>

            <?php }?>
                
            </div>

        </div>
    </section>

<?php include 'includes/footer.php'?>