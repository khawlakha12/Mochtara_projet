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
<style>
    .product-grid {
        font-family: 'Fira Sans', sans-serif;
    }

    .product-grid .product-image {
        position: relative;
        overflow: hidden;
    }

    .product-grid .product-image a.image {
        display: block;
    }

    .product-grid.new .product-image a.image:before,
    .product-grid .product-image a.image:after {
        content: '';
        background-color: #ffd800;
        height: 70px;
        width: 70px;
        border-radius: 50%;
        position: absolute;
        right: -25px;
        top: -25px;
    }

    .product-grid .product-image a.image:after {
        height: 120px;
        width: 120px;
        right: auto;
        left: -120px;
        top: auto;
        bottom: -120px;
        transition: all 0.3s ease;
    }

    .product-grid:hover .product-image a.image:after {
        left: -25px;
        bottom: -40px;
    }

    .product-grid .product-image img {
        width: 100%;
        height: auto;
    }

    .product-grid .product-new-label {
        color: #000;
        font-size: 16px;
        font-weight: 600;
        text-transform: uppercase;
        position: absolute;
        top: 7px;
        right: 5px;
    }

    .product-grid .product-links {
        padding: 0;
        margin: 0;
        list-style: none;
        position: absolute;
        bottom: 7px;
        right: 10px;
    }

    .product-grid .product-links li {
        margin: 0 0 4px;
        transform: translateX(100px);
        transition: all 0.5s ease 0s;
    }

    .product-grid:hover .product-links li {
        transform: translateX(0);
    }

    .product-grid:hover .product-links li:nth-child(2) {
        transition-delay: 0.1s;
    }

    .product-grid:hover .product-links li:nth-child(3) {
        transition-delay: 0.2s;
    }

    .product-grid .product-links li:last-child {
        margin: 0;
    }

    .product-grid .product-links li a {
        color: #000;
        background: rgba(255, 216, 0, 0.2);
        font-size: 20px;
        text-align: center;
        line-height: 48px;
        height: 45px;
        width: 45px;
        border-radius: 50%;
        display: block;
        position: relative;
        transition: all 200ms ease 0s;
    }

    .product-grid .product-links li a:hover {
        background: #ffd800;
    }

    .product-grid .product-links li a:before,
    .product-grid .product-links li a:after {
        content: attr(data-tip);
        color: #fff;
        background-color: #000;
        font-size: 14px;
        line-height: 22px;
        border-radius: 0;
        padding: 8px 15px;
        border-radius: 5px;
        white-space: nowrap;
        transform: translateY(-50%);
        visibility: hidden;
        position: absolute;
        right: 60px;
        top: 50%;
        transition: all 0.3s ease;
    }

    .product-grid .product-links li a:after {
        content: '';
        height: 15px;
        width: 15px;
        padding: 0;
        border-radius: 0;
        transform: translateY(-50%) rotate(45deg);
        right: 58px;
        z-index: -1;
    }

    .product-grid .product-links li a:hover:before,
    .product-grid .product-links li a:hover:after {
        visibility: visible;
    }

    .product-grid .product-links li a:hover:before {
        right: 55px;
    }

    .product-grid .product-links li a:hover:after {
        right: 53px;
    }

    .product-grid .price {
        color: #000;
        font-size: 22px;
        font-weight: 700;
        position: absolute;
        bottom: 10px;
        left: 10px;
    }

    .product-grid .product-content {
        padding: 12px 0 0;
        position: relative;
    }

    .product-grid .title {
        font-size: 20px;
        font-weight: 500;
        text-transform: capitalize;
        margin: 0 0 10px;
    }

    .product-grid .title a {
        color: #000;
        transition: all 0.3s ease;
    }

    .product-grid .title a:hover {
        color: #666;
    }

    .product-content .rating {
        padding: 0;
        margin: 0 0 7px 0;
        list-style: none;
    }

    .product-grid .rating li {
        color: #ffba00;
        font-size: 14px;
        display: inline-block;
    }

    .product-grid .rating li.disable {
        color: #b6b3b0;
    }

    @media screen and (max-width:990px) {
        .product-grid {
            margin: 0 0 10px;
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
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid">
                        <div class="product-image" style="width: 250px;height:250px;border-radius:10px;">
                            <a href="#" class="image">
                                <img class="pic-1" src="img/design1.png">
                            </a>
                            <ul class="product-links">
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                            </ul>
                            <div class="price">$20.00</div>
                        </div>
                      
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid">
                        <div class="product-image" style="width: 250px;height:250px;border-radius:10px;">
                            <a href="#" class="image">
                                <img class="pic-1" src="img/design1.png">
                            </a>
                            <ul class="product-links">
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a>
                                </li>
                            </ul>
                            <div class="price">$20.00</div>
                        </div>
                      
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid">
                        <div class="product-image" style="width: 250px;height:250px;border-radius:10px;">
                            <a href="#" class="image">
                                <img class="pic-1" src="img/design1.png">
                            </a>
                            <ul class="product-links">
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a>
                                </li>
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a>
                                </li>
                            </ul>
                            <div class="price">$20.00</div>
                        </div>
                      
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid">
                        <div class="product-image" style="width: 250px;height:250px;border-radius:10px;">
                            <a href="#" class="image">
                                <img class="pic-1" src="img/design1.png">
                            </a>
                            <ul class="product-links">
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a>
                                </li>
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a>
                                </li>
                            </ul>
                            <div class="price">$20.00</div>
                        </div>
                      
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid">
                        <div class="product-image" style="width: 250px;height:250px;border-radius:10px;">
                            <a href="#" class="image">
                                <img class="pic-1" src="img/design1.png">
                            </a>
                            <ul class="product-links">
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a>
                                </li>
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a>
                                </li>
                            </ul>
                            <div class="price">$20.00</div>
                        </div>
                      
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid">
                        <div class="product-image" style="width: 250px;height:250px;border-radius:10px;">
                            <a href="#" class="image">
                                <img class="pic-1" src="img/design1.png">
                            </a>
                            <ul class="product-links">
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a>
                                </li>
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a>
                                </li>
                            </ul>
                            <div class="price">$20.00</div>
                        </div>
                      
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid">
                        <div class="product-image" style="width: 250px;height:250px;border-radius:10px;">
                            <a href="#" class="image">
                                <img class="pic-1" src="img/design1.png">
                            </a>
                            <ul class="product-links">
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a>
                                </li>
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a>
                                </li>
                            </ul>
                            <div class="price">$20.00</div>
                        </div>
                      
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid">
                        <div class="product-image" style="width: 250px;height:250px;border-radius:10px;">
                            <a href="#" class="image">
                                <img class="pic-1" src="img/design1.png">
                            </a>
                            <ul class="product-links">
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a>
                                </li>
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a>
                                </li>
                            </ul>
                            <div class="price">$20.00</div>
                        </div>
                      
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid">
                        <div class="product-image" style="width: 250px;height:250px;border-radius:10px;">
                            <a href="#" class="image">
                                <img class="pic-1" src="img/design1.png">
                            </a>
                            <ul class="product-links">
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a>
                                </li>
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a>
                                </li>
                            </ul>
                            <div class="price">$20.00</div>
                        </div>
                      
                    </div>
                </div><!-- End Gallery Item -->

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
