<style>
    .gallery-auto-scroll {
        display: flex;
        overflow: hidden;
        position: relative;

    }

    #scroll {
        width: 300px;
        animation: scrollLeft 30s linear infinite;
        position: relative;
    }


    @keyframes scrollLeft {
        from {
            transform: translateX(100%);
        }

        to {
            transform: translateX(-100%);
        }
    }

    .search input {

        border: 2px solid grey;
        border-radius: 30px;
        color: #999;
        height: 40px;
        padding-left: 40px;
        width: 30%;
        color: black;
    }

    .search-icon {
        position: absolute;
        right: 63%;
        font-size: 1rem;
        color: #000000;
    }

    .form-control {
        padding-right: 30px;
    }

    .side-panel {
        position: absolute;
        bottom: 0;
        right: 0;
        background-color: #27a776;
        border-radius: 10px;
        padding: 5px 10px;
    }
</style>

<x-navbar />

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade"
    data-aos-delay="1500">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h2>I'm <span>Jenny Wilson</span> a Professional Photographer from New York City</h2>
                <p>Blanditiis praesentium aliquam illum tempore incidunt debitis dolorem magni est deserunt sed qui
                    libero. Qui voluptas amet.</p>
                <a href="#" class="btn-get-started">Available for hire</a>
            </div>
        </div>
    </div>
</section><!-- End Hero Section -->

<main id="main" data-aos="fade" data-aos-delay="1500">
    <!-- ======= Tandence Section ======= -->
    <section id="gallery" class="gallery">
        <div class="container-fluid">
            <div class="row gy-4 justify-content-center gallery-auto-scroll"
                style="margin-right:10px;margin-left:10px;">
                <div class="col-xl-3 col-lg-4 col-md-6" style=" width: 300px;margin-right: 20px; ">
                    <div class="gallery-item  h-100" id="scroll">
                        <img src="img/design1.png" class="img-fluid" style="width: 300px;height:250px;" alt="">
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-xl-3 col-lg-4 col-md-6 "style=" width: 300px;margin-right: 20px; ">
                    <div class="gallery-item  h-100" id="scroll">
                        <img src="img/design2.png" class="img-fluid" style="width: 300px;height:250px;" alt="">
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6" style=" width: 300px;margin-right: 20px; ">
                    <div class="gallery-item  h-100" id="scroll">
                        <img src="img/design3.png" class="img-fluid" style="width: 300px;height:250px;" alt="">
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6" style=" width: 300px;margin-right: 20px; ">
                    <div class="gallery-item  h-100" id="scroll">
                        <img src="img/design1.png" class="img-fluid" style="width: 300px;height:250px;">
                    </div>
                </div>
            </div>
    </section>
    <!-- ======= Search Section ======= -->
    <section class="mt-4">
        <div class="search d-flex justify-content-center align-items-center">
            <input type="search" class="form-control" placeholder="search" />
            <i class="bi bi-search search-icon"></i>
        </div>
    </section>
    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
        <div class="container-fluid">
            <div class="row gy-4 justify-content-center">


            </div>
    </section>
</main>
<x-footer />

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<div id="preloader">
    <div class="line"></div>
</div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>
