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
    .search-box {
        width: fit-content;
        height: fit-content;
        position: relative;
    }

    .input-search {
        height: 50px;
        width: 50px;
        border-style: none;
        padding: 10px;
        font-size: 18px;
        letter-spacing: 2px;
        outline: none;
        border-radius: 25px;
        transition: all .5s ease-in-out;
        background-color: #27a776;
        padding-right: 40px;
        color: #fff;
    }

    .input-search::placeholder {
        color: rgba(255, 255, 255, .5);
        font-size: 18px;
        letter-spacing: 2px;
        font-weight: 100;
    }

    .btn-search {
        width: 50px;
        height: 50px;
        border-style: none;
        font-size: 20px;
        font-weight: bold;
        outline: none;
        cursor: pointer;
        border-radius: 50%;
        position: absolute;
        right: 0px;
        color: #ffffff;
        background-color: transparent;
        pointer-events: painted;
    }

    .btn-search:focus~.input-search {
        width: 300px;
        border-radius: 0px;
        background-color: transparent;
        border-bottom: 1px solid rgba(255, 255, 255, .5);
        transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
    }

    .input-search:focus {
        width: 300px;
        border-radius: 0px;
        background-color: transparent;
        border-bottom: 1px solid rgba(255, 255, 255, .5);
        transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
    }
</style>
<link rel="stylesheet"href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<x-navbar />

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade"
    data-aos-delay="1500">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h2> <span>Welcome</span> to Market Mochtara</h2>
            </div>
        </div>
    </div>
</section><!-- End Hero Section -->

<main id="main" data-aos="fade" data-aos-delay="1500">
    <!-- ======= Tandence Section ======= -->
    <section id="gallery" class="gallery">
            <x-slider />
    </section>
    <!-- ======= Search Section ======= -->
    <section class="mt-4 flex justify-center ">
        <div class="search-box">
            <button class="btn-search" ><i class="fas fa-search"></i></button>
            <input type="text" class="input-search" id="searchInput" placeholder="Type to Search...">
        </div>
    </section>
    <!-- ======= Gallery Section ======= -->
    <div class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 justify-items-center justify-center gap-x-14 mt-10 mb-5">
    <x-product />
</div>
</main>
<x-footer />

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<div id="preloader">
    <div class="line"></div>
</div>

<x-link_script />
{{-- -------------------Recherche name------------------- --}}
<script>
    document.getElementById('searchInput').addEventListener('keyup', function() {
        let searchValue = this.value.toLowerCase();
        let products = document.querySelectorAll('.product'); 
        products.forEach(function(product) {
            let productName = product.querySelector('[name="name"]').textContent.toLowerCase();
            if (productName.includes(searchValue)) {
                product.style.display = ''; 
            } else {
                product.style.display = 'none'; 
            }
        });
    });
</script>
    
    

</body>

</html>
