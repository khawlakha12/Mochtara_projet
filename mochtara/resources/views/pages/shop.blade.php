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

    <style>
        .pagination {
          width: 400px;
          height: 60px;
          background: #27a776;
          border-radius: 50px;
          box-shadow: inset 5px 5px 1px #717171, inset -5px -5px 1px #ffffff;
          display: flex;
          justify-content: space-between;
          padding: 1em 2em;
          margin: 0 auto; 
        }
        
        .x {
          margin: 0 auto;
          text-align: center;
        }
        
        .x li {
          display: inline-block;
          list-style-type: none;
          margin-left: 5px;
          background: rgba(0, 0, 0, 0.03);
          border-radius: 50%;
          height: 35px;
          width: 35px;
          line-height: 35px;
          align-self: center;
          font-weight: 400;
          justify-content: center;
          transition: all .5s ease-in-out;
        }
        
        .x li:hover,
        .y:hover {
          transform: scale(0.96);
        }
        
        .y {
          line-height: 35px;
          width: 75px;
          border: 0;
          background-color: hsla(220, 15%, 58%, .1);
          border-radius: 50px;
          font-weight: 600;
          transition: all .5s ease-in-out;
        }
        
        .x .active {
          background-image: linear-gradient(90deg, #090909, #020202);
          background-repeat: no-repeat;
          color: #fff;
          font-weight: 600;
        }
        
        @media screen and (max-width: 667px) {
          .pagination {
            padding: 1em 1.2em;
          }
        
          .y {
            width: 60px;
          }
        
          .x li:last-child {
            display: none;
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
                <h2> <span>Welcome</span> to Market Mochtara</h2>
            </div>
        </div>
    </div>
</section><!-- End Hero Section -->
@if (session('success'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>{{ session('success') }}</strong>
    <button type="button" class="close" data-dismiss="alert"
        aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
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
    <div id="products-container" class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 justify-items-center justify-center gap-x-14 mt-10 mb-5">
    <x-product />
</div>
<div class="pagination">
    <button class="y" id="previous">Prev</button>
    <ul class="x" id="pagination-controls"></ul>
    <button class="y" id="next">Next</button>
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

{{-- -------------------Filter par Catégorie------------------- --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.category-link').forEach(function(link) {
            link.addEventListener('click', function() {
                var selectedCategory = this.dataset.category; 
                document.querySelectorAll('.product').forEach(function(product) {
                    if (product.dataset.category === selectedCategory) {
                        product.style.display = ''; 
                    } else {
                        product.style.display = 'none'; 
                    }
                });
            });
        });
        var allLink = document.createElement('li');
        allLink.innerHTML = '<a href="javascript:void(0);" class="category-link" data-category="all"></a>';
        document.querySelector('ul').appendChild(allLink);
        allLink.addEventListener('click', function() {
            document.querySelectorAll('.product').forEach(function(product) {
                product.style.display = '';
            });
        });
    });
</script>
 {{-- -------------------Pagination------------------- --}}   
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const productsPerPage = 12;
        const container = document.getElementById('products-container');
        const products = Array.from(container.getElementsByClassName('product'));
        const paginationControls = document.getElementById('pagination-controls');
        let currentPage = 1;
    
        function renderPaginationControls() {
            const pageCount = Math.ceil(products.length / productsPerPage);
            paginationControls.innerHTML = ''; 
            for (let i = 1; i <= pageCount; i++) {
                const li = document.createElement('li');
                li.textContent = i;
                li.onclick = () => showPage(i);
                paginationControls.appendChild(li);
            }
            updateActiveClass();
        }
    
        function showPage(page) {
            const startIndex = (page - 1) * productsPerPage;
            const endIndex = startIndex + productsPerPage;
            products.forEach((prod, index) => {
                prod.style.display = index >= startIndex && index < endIndex ? '' : 'none';
            });
            currentPage = page;
            updateActiveClass();
        }
    
        function updateActiveClass() {
            Array.from(paginationControls.children).forEach((btn, index) => {
                if (index + 1 === currentPage) {
                    btn.classList.add('active');
                } else {
                    btn.classList.remove('active');
                }
            });
        }
    
        document.getElementById('previous').onclick = function() {
            if (currentPage > 1) {
                showPage(currentPage - 1);
            }
        };
    
        document.getElementById('next').onclick = function() {
            const pageCount = Math.ceil(products.length / productsPerPage);
            if (currentPage < pageCount) {
                showPage(currentPage + 1);
            }
        };
    
        renderPaginationControls();
        showPage(1); 
    });
    </script>
    
    

</body>

</html>
