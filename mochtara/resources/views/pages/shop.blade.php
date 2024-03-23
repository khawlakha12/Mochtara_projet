<style>
  .gallery-auto-scroll {
    display: flex;
    overflow: hidden; 
    position: relative;

}

#scroll{
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
            <div class="row gy-4 justify-content-center gallery-auto-scroll" style="margin-right:10px;margin-left:10px;">
                <div class="col-xl-3 col-lg-4 col-md-6" style=" width: 300px;margin-right: 20px; ">
                    <div class="gallery-item  h-100" id="scroll">
                        <img src="img/design1.png" class="img-fluid" style="width: 300px;height:300px;" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="#" title="Gallery 1"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                          
                        </div>
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-xl-3 col-lg-4 col-md-6 "style=" width: 300px;margin-right: 20px; ">
                    <div class="gallery-item  h-100" id="scroll">
                        <img src="img/design2.png" class="img-fluid" style="width: 300px;height:300px;" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="#" title="Gallery 2"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                          
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6" style=" width: 300px;margin-right: 20px; ">
                  <div class="gallery-item  h-100" id="scroll">
                      <img src="img/design3.png" class="img-fluid" style="width: 300px;height:300px;" alt="">
                      <div class="gallery-links d-flex align-items-center justify-content-center">
                          <a href="#" title="Gallery 1"
                              class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                        
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6" style=" width: 300px;margin-right: 20px; ">
                <div class="gallery-item  h-100" id="scroll">
                    <img src="img/design1.png" class="img-fluid" style="width: 300px;height:300px;">
                    <div class="gallery-links d-flex align-items-center justify-content-center">
                        <a href="#" title="Gallery 1"
                            class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                      
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
        <div class="container-fluid">

            <div class="row gy-4 justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="assets/img/gallery/gallery-1.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-1.jpg" title="Gallery 1"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="#" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-2.jpg" title="Gallery 2"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="#" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="assets/img/gallery/gallery-3.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-3.jpg" title="Gallery 3"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="#" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="assets/img/gallery/gallery-4.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-4.jpg" title="Gallery 4"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="#" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="assets/img/gallery/gallery-5.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-5.jpg" title="Gallery 5"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="#" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="assets/img/gallery/gallery-6.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-6.jpg" title="Gallery 6"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="#" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="assets/img/gallery/gallery-7.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-7.jpg" title="Gallery 7"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="#" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="assets/img/gallery/gallery-8.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-8.jpg" title="Gallery 8"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="#" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="assets/img/gallery/gallery-9.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-9.jpg" title="Gallery 9"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="#" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="assets/img/gallery/gallery-10.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-10.jpg" title="Gallery 10"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="#" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="assets/img/gallery/gallery-11.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-11.jpg" title="Gallery 11"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="assets/img/gallery/gallery-12.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-12.jpg" title="Gallery 12"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="#" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div>
            </div>
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
