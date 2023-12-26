<?php
    session_start();
    include 'session.php';

    $act = isset($_GET['act']) ? $_GET['act'] : '';
    include 'includes/head.php';
?>

<body>

    <?php include 'includes/nav.php'?>

    <?php if ($act === 'next') {?>

        <section class="main_section mt-5">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-12 text-center">
                        <h1 class="page__title">Próximos Jogos</h1>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    
                </div>
            </div>
        </section>

    <?php } elseif($act === 'last') {?>

        <section class="main_section mt-5">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-12 text-center">
                        <h1 class="page__title">Jogos Anteriores</h1>
                    </div>
                </div>
            </div>
        </section>

    <?php }?>

    <?php include 'includes/footer.php'?>