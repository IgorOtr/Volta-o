<?php
session_start();
include 'session.php';
include 'src/classes/Notice.php';
include 'includes/head.php';

$class = new Notice();

$notices = $class->getAllNotices();

var_dump($notices);
die();
    
?>

<body>

    <?php include 'includes/nav.php'?>

    <section class="main_section mt-5">


        <div class="container">

            <div class="row mb-5">
                <div class="col">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Está página deve ser utilizada para a <strong>vizualização e realização das operações de alterar
                            e apagar</strong> as notícias.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-md-12 text-center">
                    <h1 class="page__title">Notícias</h1>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-md-4">
                    <div class="card" style="">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div><div class="col-md-4">
                    <div class="card" style="">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>