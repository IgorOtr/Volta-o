<?php
    require 'Admin/src/db/connect.php';
    include 'includes/head.php';

    require 'Admin/src/classes/Elenco.php';
    $class_elenco = new Elenco(); 
    $players = $class_elenco->selectAllPlayers();
?>

<body>
    <?php include 'includes/nav.php'?>

    <section class="p-5 section_title_pages">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Elenco Profissional</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="p-5 sec_history">

    <?php include 'includes/banner_quick.php'?>

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

    <?php include 'includes/footer.php'?>