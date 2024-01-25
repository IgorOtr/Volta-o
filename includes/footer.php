
<footer>
        <div class="container p-3">
            <div class="row">

                <div class="col-md-4">
                    <div class="col-md-12 text-center">
                        <img src="assets/img/logo2.png" width="170" alt="">
                    </div>

                    <div class="col-md-12 text-center">
                        <h3>Volta Redonda<br>Futebol Clube</h3>
                    </div>

                    <div class="col-md-12 text-center">
                        <p>Funcionamento da Sede Administrativa:<br>
                            Segunda a sexta-feira das 9h às 16h.</p>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <h3>LINKS</h3>
        
                            <ul>
                                <li>
                                    <a href="<?php echo SITE_URL?>">Home</a>
                                </li>
                                <li>
                                    <a href="#">Futebol</a>
                                </li>
                                <li>
                                    <a href="<?php echo SITE_URL.'historia.php'?>">O Clube</a>
                                </li>
                                <li>
                                    <a href="<?php echo SITE_URL.'transparencia.php'?>">Transparência</a>
                                </li>
                                <li>
                                    <a href="https://www.eusouvoltaco.com.br/">Seja Sócio</a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/@voltacotv76">Voltço Tv</a>
                                </li>
                                <li>
                                    <a href="contact.php">Contatos</a>
                                </li>
                            </ul>
                        </div>
        
                        <div class="col-md-4 text-center">
                            <h3>LINKS RÁPIDOS</h3>
        
                            <ul>
                                <li>
                                    <a href="<?php echo SITE_URL.'politics.php'?>">POLÍTICA DE PRIVACIDADE</a>
                                </li>
                                <li>
                                    <a href="<?php echo SITE_URL.'terms.php'?>">TERMOS DE USO</a>
                                </li>
                                <li>
                                    <a href="#">TOPO</a>
                                </li>
                            </ul>
                        </div>
        
                        <div class="col-md-4 text-center">
                            <div class="col-md-12">
                                <h3>CANAIS OFICIAIS</h3>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="row text-center">
                                        <div class="col-3">
                                            <a href="https://www.instagram.com/voltacofc/" target="_blank"><i class='bx bxl-instagram'></i></a>
                                        </div>
                                        <div class="col-3">
                                            <a href="https://www.facebook.com/VoltacoFutebolClube" target="_blank"><i class='bx bxl-facebook-square'></i></a>
                                        </div>
                                        <div class="col-3">
                                            <a href="https://twitter.com/VoltacoFC" target="_blank"><i class='bx bxl-twitter'></i></a>
                                        </div>
                                        <div class="col-3">
                                            <a href="https://www.youtube.com/@voltacotv76" target="_blank"><i class='bx bxl-youtube'></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container-fluid" style="background-color: #ffc800; padding-top: 6px; padding-bottom: 6px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 text-center" style="color: black; font-size: 12px; font-weight: 600;">
                        Copyright 2023 © - Todos os Direitos Reservados
                    </div>
                    <div class="col-md-4">
    
                    </div>
                    <div class="col-md-4 text-center" style="color: black; font-size: 12px; font-weight: 600;">
                        Developed By Intentoo
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            rewind: true,
            margin: 10,
            responsiveClass: true,
            nav: false,
            autoplay:true,
            autoplayTimeout:3000,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 5,
                    nav: true,
                    loop: false
                }
            }
        })
    </script>

    <script src="assets/js/app.js"></script>

</body>

</html>