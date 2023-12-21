<?php
    require 'Admin/src/classes/Notice.php';

    $class = new Notice();
    $notices = $class->getNoticesToFront();
    $details = $class->getDestaques();

    include 'includes/head.php';
?>

<body>
    <?php include 'includes/nav.php'?>

    <section class="first__view__sec pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div id="carouselExampleCaptions" class="carousel slide">
                        <span class="badge text-bg-warning">Destaque</span>
                        <div class="carousel-inner">

                            <?php foreach ($details as $key => $detail) {?>

                            <div class="carousel-item active">
                                <img src="Admin/public/img/notices/<?php echo $detail['notice_image']?>"
                                    class="d-block w-100" alt="..." />
                                <div class="carousel-caption d-none d-md-block">
                                    <h5><?php echo $detail['notice_title']?></h5>
                                    <p><?php echo substr(strip_tags($detail['notice_content']), 0, 80)."..."?></p>
                                </div>
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
                <div class="col-md-4">
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <div class="div_card_title text-center">
                                <h5 class="card-title">Próximo Jogo</h5>
                            </div>
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <div class="div_card_title text-center">
                                <h5 class="card-title">Jogo Anterior</h5>
                            </div>
                            <div class="card-body">

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="notices__sec pt-5 pb-5">
        <div class="container section__title">
            <div class="row">
                <div class="col-md-12">
                    <h3>Ultimas Notícias</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <?php foreach ($notices as $key => $notice) {
                    
                    $date = explode(" ", $notice['created_at']);
                    // var_dump($date);
                ?>

                <div class="col-md-4 mb-3">
                    <a href="" class="notice__link">
                        <div class="notice__card">
                            <img src="Admin/public/img/notices/<?php echo $notice['notice_image']?>" alt="">

                            <div class="card-date mt-2">
                                Publicado em: <?php echo $date[0];?>
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

            <div class="row mt-5">
                <div class="col-md-12 text-center">
                    <a href="noticias.php" class="btn btn-warning">Ver Mais</a>
                </div>
            </div>
        </div>
    </section>

    <section class="cast__sec pt-5 pb-5">
        <div class="container section__title">
            <div class="row">
                <div class="col-md-12">
                    <h3>Elenco</h3>
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

                                <!-- GOLEIROS -->
                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="assets/img/Elenco/41.jpg" alt="">
                                            <h5>Avelino</h5>
                                            <p>Goleiro</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="assets/img/Elenco/33.jpg" alt="">
                                            <h5>Gustavo</h5>
                                            <p>Goleiro</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="assets/img/Elenco/31.jpg" alt="">
                                            <h5>Jefferson</h5>
                                            <p>Goleiro</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="assets/img/Elenco/11-1.jpg" alt="">
                                            <h5>Vinicius Dias</h5>
                                            <p>Goleiro</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- ZAGUEIROS -->
                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="assets/img/Elenco/43.jpg" alt="">
                                            <h5>Alix</h5>
                                            <p>Zagueiro</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="assets/img/Elenco/39.jpg" alt="">
                                            <h5>Daniel Felipe</h5>
                                            <p>Zagueiro</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="assets/img/Elenco/27.jpg" alt="">
                                            <h5>Kaylan</h5>
                                            <p>Zagueiro</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="assets/img/Elenco/21.jpg" alt="">
                                            <h5>Marco Gabriel</h5>
                                            <p>Zagueiro</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="assets/img/Elenco/14.jpg" alt="">
                                            <h5>Sandro Silva</h5>
                                            <p>Zagueiro</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- LATERAIS -->
                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="assets/img/Elenco/34.jpg" alt="">
                                            <h5>Gilson</h5>
                                            <p>Lateral</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="assets/img/Elenco/30.jpg" alt="">
                                            <h5>Iury</h5>
                                            <p>Lateral</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="assets/img/Elenco/15.jpg" alt="">
                                            <h5>Marcos Bebê</h5>
                                            <p>Lateral</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="assets/img/Elenco/16.jpg" alt="">
                                            <h5>Ricardo Sena</h5>
                                            <p>Lateral</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="assets/img/Elenco/10.jpg" alt="">
                                            <h5>Wellington Silva</h5>
                                            <p>Lateral</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- MEIO CAMPISTA -->
                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="assets/img/Elenco/38.jpg" alt="">
                                            <h5>Bruno Barra</h5>
                                            <p>Meio-Campista</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="assets/img/Elenco/37.jpg" alt="">
                                            <h5>Danrsley</h5>
                                            <p>Meio-Campista</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="assets/img/Elenco/36.jpg" alt="">
                                            <h5>Dudu</h5>
                                            <p>Meio-Campista</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="assets/img/Elenco/32.jpg" alt="">
                                            <h5>Henrique Silva</h5>
                                            <p>Meio-Campista</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="assets/img/Elenco/28.jpg" alt="">
                                            <h5>Júlio César</h5>
                                            <p>Meio-Campista</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="assets/img/Elenco/25-1.jpg" alt="">
                                            <h5>Luciano</h5>
                                            <p>Meio-Campista</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Atacante -->
                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="assets/img/Elenco/20.jpg" alt="">
                                            <h5>Andrey</h5>
                                            <p>Atacante</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="assets/img/Elenco/40.jpg" alt="">
                                            <h5>Berguinho</h5>
                                            <p>Atacante</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="assets/img/Elenco/35.jpg" alt="">
                                            <h5>Guilherme Cachoeira</h5>
                                            <p>Atacante</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="assets/img/Elenco/26.jpg" alt="">
                                            <h5>Lelê</h5>
                                            <p>Atacante</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="assets/img/Elenco/23.jpg" alt="">
                                            <h5>Luizinho</h5>
                                            <p>Atacante</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="assets/img/Elenco/22.jpg" alt="">
                                            <h5>Macário</h5>
                                            <p>Atacante</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="assets/img/Elenco/19.jpg" alt="">
                                            <h5>Pedrinho</h5>
                                            <p>Atacante</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="assets/img/Elenco/13.jpg" alt="">
                                            <h5>Souza</h5>
                                            <p>Atacante</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 178px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="cast__card">
                                            <img src="assets/img/Elenco/12.jpg" alt="">
                                            <h5>Thiaguinho</h5>
                                            <p>Atacante</p>
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

    <section class="sponsors__sec pb-5">
        <div class="container section__title">
            <div class="row">
                <div class="col-md-12">
                    <h3>Nossos Patrocinadores</h3>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center"><img style="width: 50%;" src="assets/img/Sponsors/1.png" alt=""></div>
                <div class="col-md-3 text-center"><img style="width: 50%;" src="assets/img/Sponsors/2.png" alt=""></div>
                <div class="col-md-3 text-center"><img style="width: 50%;" src="assets/img/Sponsors/3.png" alt=""></div>
                <div class="col-md-3 text-center"><img style="width: 50%;" src="assets/img/Sponsors/4.png" alt=""></div>
                <div class="col-md-3 text-center"><img style="width: 50%;" src="assets/img/Sponsors/5.png" alt=""></div>
                <div class="col-md-3 text-center"><img style="width: 50%;" src="assets/img/Sponsors/6.png" alt=""></div>
                <div class="col-md-3 text-center"><img style="width: 50%;" src="assets/img/Sponsors/7.png" alt=""></div>
                <div class="col-md-3 text-center"><img style="width: 50%;" src="assets/img/Sponsors/8.png" alt=""></div>
                <div class="col-md-3 text-center"><img style="width: 50%;" src="assets/img/Sponsors/9.png" alt=""></div>
                <div class="col-md-3 text-center"><img style="width: 50%;" src="assets/img/Sponsors/10.png" alt=""></div>
            </div>
        </div>
    </section>

    <section class="sponsors__sec pb-5">
        <div class="container section__title">
            <div class="row">
                <div class="col-md-12">
                    <h3>Nossos Parceiros</h3>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center"><img style="width: 50%;" src="assets/img/Sponsors/11.webp" alt=""></div>
                <div class="col-md-3 text-center"><img style="width: 50%;" src="assets/img/Sponsors/12.webp" alt=""></div>
                <div class="col-md-3 text-center"><img style="width: 50%;" src="assets/img/Sponsors/13.webp" alt=""></div>
                <div class="col-md-3 text-center"><img style="width: 50%;" src="assets/img/Sponsors/14.webp" alt=""></div>
                <div class="col-md-3 text-center"><img style="width: 50%;" src="assets/img/Sponsors/15.webp" alt=""></div>
                <div class="col-md-3 text-center"><img style="width: 50%;" src="assets/img/Sponsors/16.webp" alt=""></div>
                <div class="col-md-3 text-center"><img style="width: 50%;" src="assets/img/Sponsors/17.webp" alt=""></div>
                <div class="col-md-3 text-center"><img style="width: 50%;" src="assets/img/Sponsors/18.webp" alt=""></div>
                <div class="col-md-3 text-center"><img style="width: 50%;" src="assets/img/Sponsors/19.webp" alt=""></div>
                <div class="col-md-3 text-center"><img style="width: 50%;" src="assets/img/Sponsors/20.webp" alt=""></div>
                <div class="col-md-3 text-center"><img style="width: 50%;" src="assets/img/Sponsors/21.webp" alt=""></div>
                <div class="col-md-3 text-center"><img style="width: 50%;" src="assets/img/Sponsors/22.webp" alt=""></div>
                <div class="col-md-3 text-center"><img style="width: 50%;" src="assets/img/Sponsors/23.webp" alt=""></div>
                <div class="col-md-3 text-center"><img style="width: 50%;" src="assets/img/Sponsors/24.webp" alt=""></div>
                <div class="col-md-3 text-center"><img style="width: 50%;" src="assets/img/Sponsors/25.webp" alt=""></div>
                <div class="col-md-3 text-center"><img style="width: 50%;" src="assets/img/Sponsors/26.webp" alt=""></div>
                <div class="col-md-3 text-center"><img style="width: 50%;" src="assets/img/Sponsors/27.webp" alt=""></div>
                <div class="col-md-3 text-center"><img style="width: 50%;" src="assets/img/Sponsors/28.webp" alt=""></div>
                <div class="col-md-3 text-center"><img style="width: 50%;" src="assets/img/Sponsors/29.webp" alt=""></div>
                <div class="col-md-3 text-center"><img style="width: 50%;" src="assets/img/Sponsors/30.webp" alt=""></div>
                <div class="col-md-3 text-center"><img style="width: 50%;" src="assets/img/Sponsors/31.webp" alt=""></div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'?>