<?php
    require 'Admin/src/classes/Notice.php';
    require 'Admin/src/classes/Match.php';
    require 'Admin/src/classes/Banner.php';
    require 'Admin/src/classes/Elenco.php';
    $page = 'index';
    $class_notice = new Notice();
    $class_matches = new Matches();
    $class_banner = new Banner(); 
    $class_elenco = new Elenco(); 

    $notices = $class_notice->getNoticesToIndex();
    $details = $class_notice->getDestaques();
    $next_matches = $class_matches->getTheNextMatch();
    $last_matches = $class_matches->getTheLastMatch();
    $banners = $class_banner->getBanners();
    $players = $class_elenco->selectAllPlayers();

    include 'includes/head.php';

    $page = 'index';
?>

<body>
    <?php include 'includes/nav.php'?>

    <section class="first__view__sec pt-5 pb-5">

        <?php include 'includes/banner_quick.php'?>

        <div class="container">
            <div class="row">
                <div class="col-md-8 mb-3">
                    <div id="carouselExampleCaptions" class="carousel slide">
                        <span class="badge text-bg-warning">Destaque</span>
                        <div class="carousel-inner">

                            <?php foreach ($details as $key => $detail) {?>

                            <div class="carousel-item active">
                                <a href="<?php echo SITE_URL.'detalhes.php?id='.$detail['id']?>">
                                    <div class="banner_slide" style="background-image: url(Admin/public/img/notices/<?php echo $detail['notice_image']?>);">
                                        <div class="background__banner"></div>
                                    </div>
                                    <div class="carousel-caption text-start d-none d-md-block">
                                        <h5><?php echo $detail['notice_title']?></h5>
                                        <p><?php echo substr(strip_tags($detail['notice_content']), 0, 140)."..."?></p>
                                    </div>
                                </a>
                            </div>

                            <?php }?>

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <div class="div_card_title text-center">
                                <h5 class="card-title">Próximo Jogo</h5>
                            </div>


                            <?php foreach ($next_matches as $key => $next) {?>


                            <div class="card-body">
                                <div class="row p-2">
                                    <div class="col-4 d-flex align-items-center justify-content-center">
                                        <img src="assets/img/logo.png" alt="" width="45" srcset="">
                                    </div>
                                    <div class="col-4 text-center d-flex align-items-center justify-content-center">
                                        <h1 style="font-size: 22px; font-weight: 600; color: #ffc800; margin: 0px;">X
                                        </h1>
                                    </div>
                                    <div class="col-4 d-flex align-items-center justify-content-center">
                                        <img src="Admin/public/img/times/<?php echo $next['adversary_img']?>" alt=""
                                            width="45" srcset="">
                                    </div>
                                </div>
                                <div class="row pt-3 pb-3">
                                    <div class="col-md-2"></div>
                                    <div class="match__info col-md-8 text-center">
                                        <i class='bx bx-calendar'></i> <?php echo $next['match_date']?> às
                                        <?php echo $next['match_time']?><br>
                                        <i class='bx bx-map-pin'></i> <?php echo $next['match_local']?>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                            </div>


                            <?php }?>


                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <div class="div_card_title text-center">
                                <h5 class="card-title">Jogo Anterior</h5>
                            </div>



                            <?php foreach ($last_matches as $key => $last) {?>


                            <div class="card-body">
                                <div class="row p-2">
                                    <div class="col-4 text-center d-flex justify-content-center">
                                        <div class="col-md-12 d-flex align-items-center justify-content-center">
                                            <img src="assets/img/logo.png" alt="" width="45" srcset="">
                                        </div>
                                    </div>
                                    <div class="col-4 text-center d-flex align-items-center justify-content-between">
                                        <h3 style="margin: 0px; color: #000000; font-size: 26px;">
                                            <?php echo $last['score_vr']?></h3>
                                        <h1 style="font-size: 22px; font-weight: 600; color: #ffc800; margin: 0px;">X
                                        </h1>
                                        <h3 style="margin: 0px; color: #000000; font-size: 26px;">
                                            <?php echo $last['score_adversary']?></h3>
                                    </div>
                                    <div class="col-4 text-center d-flex justify-content-center">
                                        <div class="col-md-12 d-flex align-items-center justify-content-center">
                                            <img src="Admin/public/img/times/<?php echo $last['adversary_img']?>" alt=""
                                                width="45" srcset="">
                                        </div>

                                    </div>
                                </div>
                                <div class="row pt-3 pb-3">
                                    <div class="col-md-2"></div>
                                    <div class="match__info col-md-8 text-center">
                                        <i class='bx bx-calendar'></i> <?php echo $last['match_date']?> às
                                        <?php echo $last['match_time']?><br>
                                        <i class='bx bx-map-pin'></i> <?php echo $last['match_local']?>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                            </div>


                            <?php }?>



                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <section class="notices__sec pt-5 pb-5">
        <div class="container section__title">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 style="font-weight: 800;">Ultimas Notícias</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <?php foreach ($notices as $key => $notice) {
                    
                    $date = explode(" ", $notice['created_at']);
                    // var_dump($date);
                ?>

                <div class="col-md-4 mb-5">
                    <a href="<?php echo SITE_URL.'detalhes.php?id='.$notice['id']?>" class="notice__link">
                        <div class="notice__card">
                            <div
                                style="height: 225px; width: 100%; background-image: url(Admin/public/img/notices/<?php echo $notice['notice_image']?>); background-size: cover; background-repeat: no-repeat;">
                            </div>

                            <div class="row">
                                <div class="col-md-6 card-date mt-2">
                                    Publicado em: <?php echo $date[0];?>
                                </div>
                                <div class="col-md-6 card-date mt-2 text-end">
                                    Por: <?php echo $notice['notice_author']?>
                                </div>
                            </div>

                            <div class="notice-title">
                                <?php echo substr(strip_tags($notice['notice_title']), 0, 40)."..."?>
                            </div>
                            <div class="notice-content">
                                <?php echo substr(strip_tags($notice['notice_content']), 0, 140)."..."?>
                            </div>
                        </div>
                    </a>
                </div>

                <?php }?>

            </div>

            <div class="row mt-5">
                <div class="col-md-12 text-center">
                    <a href="noticias.php" class="btn btn-warning">Ver Mais</a>
                </div>
            </div>
        </div>
    </section>


    <section class="cast__sec pt-5 pb-5" id="elenco">
        <div class="container section__title">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 style="color: #000000; font-weight: 800;">Elenco</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(-990px, 0px, 0px); transition: all 0.25s ease 0s; width: 2376px;">

                                <?php foreach ($players as $key => $player) {?>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="Admin/public/img/elenco/<?php echo $player['player_image']?>"
                                                alt="">
                                            <h5><?php echo $player['player_name']?></h5>
                                            <p><?php echo $player['player_position']?></p>
                                        </div>
                                    </div>
                                </div>

                                <?php }?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="notices__sec pt-5 pb-5">

        <div class="container">
            <div class="row">


                <?php foreach ($banners as $key => $banner) {
                
                $link = empty($banner['banner_link']) ? '' : 'href="'.$banner['banner_link'].'" target="_blank"';
            ?>

                <div class="col-md-4 mb-3 mt-3">
                    <a <?php echo $link?>>
                        <div class="cardPubli"
                            style="background-image: url(Admin/public/img/banners/<?php echo $banner['banner_image']?>);">
                        </div>
                    </a>
                </div>

                <?php }?>


            </div>
        </div>

    </section>

    <section class="sponsors__sec pb-5 pt-5">
        <div class="container section__title">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 style="color: #000000; font-weight: 800;">Patrocinadores</h3>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(-990px, 0px, 0px); transition: all 0.25s ease 0s; width: 2376px;">


                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card__sponsors">
                                            <img class="sponsors_logo" src="assets/img/Sponsors/3.png" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card__sponsors">
                                            <img class="sponsors_logo" src="assets/img/Sponsors/2.png" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card__sponsors">
                                            <img class="sponsors_logo" src="assets/img/quick preto 2.png" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card__sponsors">
                                            <img class="sponsors_logo" style="width: 55% !important;" src="assets/img/Sponsors/Volkswagen_logo.png" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card__sponsors">
                                            <img class="sponsors_logo" src="assets/img/Sponsors/Betspeed.png" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card__sponsors">
                                            <img class="sponsors_logo" src="assets/img/Sponsors/CSN.png" alt="">
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sponsors__sec pb-5 pt-3">
        <div class="container section__title">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 style="color: #000000; font-weight: 800;">Parceiros</h3>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="owl-carousel owl-theme owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(-990px, 0px, 0px); transition: all 0.25s ease 0s; width: 2376px;">

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card__sponsors">
                                            <img class="sponsors_logo" src="assets/img/Sponsors/11.webp" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card__sponsors">
                                            <img class="sponsors_logo" src="assets/img/Sponsors/12.webp" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card__sponsors">
                                            <img class="sponsors_logo" src="assets/img/Sponsors/14.webp" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card__sponsors">
                                            <img class="sponsors_logo" src="assets/img/Sponsors/15.webp" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card__sponsors">
                                            <img class="sponsors_logo" src="assets/img/Sponsors/16.webp" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card__sponsors">
                                            <img class="sponsors_logo" src="assets/img/Sponsors/17.webp" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card__sponsors">
                                            <img class="sponsors_logo" src="assets/img/Sponsors/18.webp" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card__sponsors">
                                            <img class="sponsors_logo" src="assets/img/Sponsors/19.webp" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card__sponsors">
                                            <img class="sponsors_logo" src="assets/img/Sponsors/20.webp" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card__sponsors">
                                            <img class="sponsors_logo" src="assets/img/Sponsors/21.webp" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card__sponsors">
                                            <img class="sponsors_logo" src="assets/img/Sponsors/22.webp" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card__sponsors">
                                            <img class="sponsors_logo" src="assets/img/Sponsors/23.webp" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card__sponsors">
                                            <img class="sponsors_logo" src="assets/img/Sponsors/24.webp" alt="">
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card__sponsors">
                                            <img class="sponsors_logo" src="assets/img/Sponsors/25.webp" alt="">
                                        </div>
                                    </div>
                                </div> -->
                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card__sponsors">
                                            <img class="sponsors_logo" src="assets/img/Sponsors/26.webp" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card__sponsors">
                                            <img class="sponsors_logo" src="assets/img/Sponsors/27.webp" alt="">
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card__sponsors">
                                            <img class="sponsors_logo" src="assets/img/Sponsors/28.webp" alt="">
                                        </div>
                                    </div>
                                </div> -->
                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card__sponsors">
                                            <img class="sponsors_logo" src="assets/img/Sponsors/29.webp" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card__sponsors">
                                            <img class="sponsors_logo" src="assets/img/Sponsors/30.webp" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card__sponsors">
                                            <img class="sponsors_logo" src="assets/img/Sponsors/32-Forneria.webp" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card__sponsors">
                                            <img class="sponsors_logo" src="assets/img/Sponsors/Rede-Gas.webp"
                                                alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card__sponsors">
                                            <img class="sponsors_logo" src="assets/img/Sponsors/bernardo.webp" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card__sponsors">
                                            <img class="sponsors_logo" src="assets/img/Sponsors/Ativ.webp" alt="">
                                        </div>
                                    </div>
                                </div>
                              
                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card__sponsors">
                                            <img class="sponsors_logo" src="assets/img/Sponsors/Global-Protecao-Veicular-2.png.webp" alt="">
                                        </div>
                                    </div>
                                </div>
                              
                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card__sponsors">
                                            <img class="sponsors_logo" src="assets/img/Sponsors/Idealize.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'?>