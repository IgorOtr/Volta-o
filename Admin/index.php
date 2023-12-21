<?php
    session_start();
    include 'session.php';
    include 'includes/head.php';
?>

<body>

    <?php include 'includes/nav.php'?>

    <section class="main_section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="../assets/img/logo2.png" width="130" alt="">
                    <h2 class="page__title mt-3">Volta Redonda Futebol Club</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 text-center">
                    <p class="page__wellcome">
                        Olá, <?php echo $_SESSION["nome"]?>!<br>Bem vindo(a) á plataforma de gerenciamento de conteúdo do site.<br>
                        Aqui estão alguns recursos que você encontrará no nosso sistema de gerenciamento de
                        conteúdo:<br><br>
                    </p>

                    <ul class="page__wellcome__list">
                        <li>
                            Uma interface intuitiva e fácil de usar: Você não precisa ser um especialista em tecnologia
                            para usar o nosso sistema.
                        </li>
                        <li>
                            Ferramentas e recursos: Você terá tudo o que precisa para criar, editar um conteúdo
                            de alta qualidade.
                        </li>
                        <li>
                            Um suporte técnico de qualidade: Nossa equipe está sempre pronta para ajudar você a resolver
                            quaisquer problemas que possa encontrar.
                        </li>
                    </ul>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>

</body>

</html>