<div class="container mb-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="rounded banner__quick" style="filter: brightness(1);"
                            src="assets/img/banner-450.png" width="1200">
                    </div>
                    <div class="carousel-item">
                        <img class="rounded banner__quick" style="filter: brightness(1);"
                            src="assets/img/banner-650.png" width="1200">
                    </div>
                    <div class="carousel-item">
                        <img class="rounded banner__quick" style="filter: brightness(1);"
                            src="assets/img/banner-950.png" width="1200">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    const myCarouselElement = document.querySelector('#carouselExampleAutoplaying')

    const carousel = new bootstrap.Carousel(myCarouselElement, {
        interval: 3000
    })

</script>

<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
    </div>
</div>
<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script>
new window.VLibras.Widget('https://vlibras.gov.br/app');
</script>