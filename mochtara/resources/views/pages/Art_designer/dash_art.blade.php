<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="assets-dash/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>Mochtara</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css">
    <link href="assets-dash/css/nucleo-icons.css" rel="stylesheet" />
    <link href="assets-dash/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
    <link href="assets-dash/demo/demo.css" rel="stylesheet" />
    <style>
        .box {
            position: relative;
            width: 300px;
            height: 400px;
            background: rgba(0, 0, 0, 0.75);
            border-radius: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .border-blur::before,
        .border-blur::after {
            border-radius: 50%;
            height: 400px !important;
            width: 500px !important;
        }

        .box::after,
        .border-blur::after {
            content: "";
            position: absolute;
            width: 500px;
            height: 500px;
            background-image: conic-gradient(transparent,
                    transparent,
                    transparent,
                    #d400d4);
            animation: animate 4s linear infinite;
            animation-delay: -2s;
        }

        .box::before,
        .border-blur::before {
            content: "";
            position: absolute;
            width: 500px;
            height: 500px;
            background-image: conic-gradient(transparent,
                    transparent,
                    transparent,
                    #00ccff);
            animation: animate 4s linear infinite;
        }

        @keyframes animate {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .box span {
            position: absolute;
            inset: 5px;
            border-radius: 16px;
            background: #ffff;
            z-index: 1;
        }

        .secondary {
            height: 35px;
            width: 35px;
            border: 2px solid #d400d4;
            border-radius: 90px;
            color: #d400d4;
            background-color: #fff;
        }

        .secondary:hover {
            background-color: #d400d4;
            color: #fff;
        }

        .bn30 {
            border: 5em;
            cursor: pointer;
            outline: none;
            font-size: 16px;
            -webkit-transform: translate(0);
            transform: translate(0);
            background-image: linear-gradient(45deg, #4568dc, #b06ab3);
            padding: 0.7em 2em;
            border-radius: 65px;
            box-shadow: 1px 1px 10px rgba(255, 255, 255, 0.438);
            -webkit-transition: box-shadow 0.25s;
            transition: box-shadow 0.25s;
            color: white;
        }

        .bn30 .text {
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-image: linear-gradient(45deg, #4568dc, #b06ab3);
        }

        .bn30:after {
            content: "";
            border-radius: 18px;
            position: absolute;
            margin: 4px;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: -1;
            background: #0e0e10;
        }

        .bn30:hover {
            background-image: linear-gradient(-45deg, #4568dc, #b06ab3);
            box-shadow: 0 12px 24px rgba(128, 128, 128, 0.1);
        }

        .bn30:hover .text {
            background-image: linear-gradient(-45deg, #4568dc, #b06ab3);
        }
    </style>
</head>

<body class="">
    <div class="wrapper">
        <div class="sidebar">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="/new_design" class="simple-text logo-mini">

                    </a>
                    <a href="/new_design" class="simple-text logo-normal">
                        Mochtara
                    </a>
                </div>
                <ul class="nav">
                    <li class="active ">
                        <a href="/new_design">
                            <i class="tim-icons icon-chart-pie-36"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="/profile_designer">
                            <i class="tim-icons icon-single-02"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="/Categ">
                            <i class="fas fa-tshirt"></i>
                            <p>Categories</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle d-inline">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="/Categ">Design</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="search-bar input-group">
                                <button class="btn btn-link" id="search-button" data-toggle="modal"
                                    data-target="#searchModal"><i class="tim-icons icon-zoom-split"></i>
                                    <span class="d-lg-none d-md-block">Search</span>
                                </button>
                            </li>

                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <div class="photo">
                                        <img src="assets-dash/img/anime3.png" alt="Profile Photo">
                                    </div>
                                    <b class="caret d-none d-lg-block d-xl-block"></b>
                                    <p class="d-lg-none">
                                        Log out
                                    </p>
                                </a>
                                <ul class="dropdown-menu dropdown-navbar">
                                    <li class="nav-link"><a href="/profil" class="nav-item dropdown-item">Profile</a>
                                    </li>
                                    <li class="nav-link"><a href="javascript:void(0)"
                                            class="nav-item dropdown-item">Settings</a></li>
                                    <li class="dropdown-divider"></li>
                                    <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Log
                                            out</a></li>
                                </ul>
                            </li>
                            <li class="separator d-lg-none"></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog"
                aria-labelledby="searchModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <input type="text" class="form-control" id="inlineFormInputGroup"
                                placeholder="SEARCH">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="tim-icons icon-simple-remove"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Navbar -->
            <div class="content">
                <form action="{{ route('designs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row ">
                        <div class="col-md-12 d-flex justify-content-center align-items-center">
                            <div class="image-group d-flex flex-column mr-2">
                                <img src="img/9obya.png" alt="Image 1"
                                    style="width:120px; height:120px; object-fit: cover; margin-bottom: 10px;">
                                <img src="img/9obya.png" alt="Image 2"
                                    style="width:120px; height:120px; object-fit: cover; margin-bottom: 10px;">
                                <img src="img/9obya.png" alt="Image 3"
                                    style="width:120px; height:120px; object-fit: cover;margin-bottom: 10px;">
                                <img src="img/9obya.png" alt="Image 4"
                                    style="width:120px; height: 120px; object-fit: cover;margin-bottom: 10px;">
                            </div>
                            <div class="card" style="height: 80vh; width: 50vw; background: #ffff;">
                                <div class="card-body d-flex justify-content-center align-items-center"
                                    style="position: relative;">
                                    <div id="imageBox" class="box" style="height: 50%; width: 50%;">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span>
                                            <div id="uploadedImageContainer"
                                                style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; display: flex; justify-content: center; align-items: center;">
                                            </div>
                                        </span>
                                    </div>
                                    <a href="#" id="uploadTrigger"
                                        class="button secondary d-flex justify-content-center align-items-center"
                                        style="position: absolute; bottom: 20px; right: 20px;">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                    <input type="file" id="fileUpload" name="image" style="display: none;" />
                                    <a href="#" id="editTrigger"
                                        class="button secondary d-flex justify-content-center align-items-center"
                                        style="position: absolute; bottom: 20px; left: 20px;">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <div id="textStyleControls" style="position: absolute; bottom: 70px; left: 20px; display: flex; flex-direction: column; display:none;">
                                        <button class="button secondary" style="margin-bottom: 5px;" id="boldText">G</button>
                                        <button class="button secondary" style="margin-bottom: 5px;" id="italicText">I</button>
                                        <button class="button secondary" style="margin-bottom: 5px;" id="underlineText">S</button>
                                        <input class="button secondary" style="margin-bottom: 5px;" type="color" id="textColorPicker">
                                        <select class="button secondary" style="margin-bottom: 5px;" id="fontSizeSelector">
                                            <option value="16px">Petit</option>
                                            <option value="24px">Moyen</option>
                                            <option value="32px">Grand</option>
                                        </select>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="image-group d-flex flex-column" style="margin-left: 10px;">
                                <img src="img/9obya.png" alt="Image 5"
                                    style="width:120px; height:120px; object-fit: cover; margin-bottom: 10px;">
                                <img src="img/9obya.png" alt="Image 6"
                                    style="width:120px; height:120px; object-fit: cover; margin-bottom: 10px;">
                                <img src="img/9obya.png" alt="Image 7"
                                    style="width:120px; height:120px; object-fit: cover;margin-bottom: 10px;">
                                <img src="img/9obya.png" alt="Image 8"
                                    style="width:120px; height: 120px; object-fit: cover;margin-bottom: 10px;">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center" style="width: 100%;">
                            <a href="#"><button type="submit" class="bn30">Save</button></a>
                        </div>
                </form>
            </div>

        </div>
        <footer class="footer">
            <div class="container-fluid">
                <div class="copyright">
                    ©
                    <script></script>2024 made with <i class="tim-icons icon-heart-2"></i> by
                    <a href="javascript:void(0)" target="_blank">Mochtara</a> for a better web.
                </div>
            </div>
        </footer>
        <!--   Core JS Files   -->
        <script src="assets-dash/js/core/jquery.min.js"></script>
        <script src="assets-dash/js/core/popper.min.js"></script>
        <script src="assets-dash/js/core/bootstrap.min.js"></script>
        <script src="assets-dash/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <script src="assets-dash/js/black-dashboard.min.js?v=1.0.0"></script>
        <script src="assets-dash/demo/demo.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>
        <script>
            $(document).ready(function() {
                $().ready(function() {
                    $sidebar = $('.sidebar');
                    $navbar = $('.navbar');
                    $main_panel = $('.main-panel');
                    $full_page = $('.full-page');
                    $sidebar_responsive = $('body > .navbar-collapse');
                    sidebar_mini_active = true;
                    white_color = false;
                    window_width = $(window).width();
                    fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();
                    $('.fixed-plugin a').click(function(event) {
                        if ($(this).hasClass('switch-trigger')) {
                            if (event.stopPropagation) {
                                event.stopPropagation();
                            } else if (window.event) {
                                window.event.cancelBubble = true;
                            }
                        }
                    });
                    $('.fixed-plugin .background-color span').click(function() {
                        $(this).siblings().removeClass('active');
                        $(this).addClass('active');
                        var new_color = $(this).data('color');
                        if ($sidebar.length != 0) {
                            $sidebar.attr('data', new_color);
                        }
                        if ($main_panel.length != 0) {
                            $main_panel.attr('data', new_color);
                        }
                        if ($full_page.length != 0) {
                            $full_page.attr('filter-color', new_color);
                        }
                        if ($sidebar_responsive.length != 0) {
                            $sidebar_responsive.attr('data', new_color);
                        }
                    });
                    $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
                        var $btn = $(this);
                        if (sidebar_mini_active == true) {
                            $('body').removeClass('sidebar-mini');
                            sidebar_mini_active = false;
                            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
                        } else {
                            $('body').addClass('sidebar-mini');
                            sidebar_mini_active = true;
                            blackDashboard.showSidebarMessage('Sidebar mini activated...');
                        }
                        var simulateWindowResize = setInterval(function() {
                            window.dispatchEvent(new Event('resize'));
                        }, 180);
                        setTimeout(function() {
                            clearInterval(simulateWindowResize);
                        }, 1000);
                    });
                    $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
                        var $btn = $(this);
                        if (white_color == true) {
                            $('body').addClass('change-background');
                            setTimeout(function() {
                                $('body').removeClass('change-background');
                                $('body').removeClass('white-content');
                            }, 900);
                            white_color = false;
                        } else {
                            $('body').addClass('change-background');
                            setTimeout(function() {
                                $('body').removeClass('change-background');
                                $('body').addClass('white-content');
                            }, 900);
                            white_color = true;
                        }
                    });
                    $('.light-badge').click(function() {
                        $('body').addClass('white-content');
                    });
                    $('.dark-badge').click(function() {
                        $('body').removeClass('white-content');
                    });
                });
            });
        </script>
        <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
        <script>
            window.TrackJS &&
                TrackJS.install({
                    token: "ee6fab19c5a04ac1a32a645abde4613a",
                    application: "black-dashboard-free"
                });
        </script>
        {{-- -----------------------------upload image------------------------------ --}}
        <script>
            document.getElementById('uploadTrigger').addEventListener('click', function() {
                const editTextInput = document.getElementById('editInput');
                if (editTextInput) {
                    editTextInput.value = '';
                }
                document.getElementById('fileUpload').click();
            });
            document.getElementById('fileUpload').addEventListener('change', function(event) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const newImage = new Image();
                    newImage.src = e.target.result;
                    newImage.style.maxWidth = '100%';
                    newImage.style.maxHeight = '100%';

                    const imageContainer = document.getElementById('uploadedImageContainer');
                    imageContainer.innerHTML = '';
                    imageContainer.appendChild(newImage);
                };
                reader.readAsDataURL(event.target.files[0]);
            });
        </script>
        {{-- -----------------------------écrire text------------------------------ --}}
        <script>
            document.getElementById('editTrigger').addEventListener('click', function(event) {
                event.preventDefault();

                const imageBox = document.getElementById('imageBox');
                let input = document.getElementById('editInput');

                if (!input) {
                    input = createTextInput();
                    imageBox.appendChild(input);
                }
                const textStyleControls = document.getElementById('textStyleControls');
                textStyleControls.style.display = 'flex';
                input.focus();
            });

            function createTextInput() {
                const input = document.createElement('input');
                input.setAttribute('type', 'text');
                input.setAttribute('id', 'editInput');
                applyDefaultInputStyles(input);
                return input;
            }

            function applyDefaultInputStyles(input) {
                input.style.position = 'absolute';
                input.style.top = '0';
                input.style.left = '0';
                input.style.height = '100%';
                input.style.width = '100%';
                input.style.opacity = '0.5';
                input.style.zIndex = '10';
                input.style.color = 'black';
                input.style.paddingLeft = '20px';
                input.style.paddingRight = '20px';
                input.style.backgroundColor = 'rgba(255, 255, 255, 0)';
            }

            document.getElementById('boldText').addEventListener('click', () => {
                const input = document.getElementById('editInput');
                input.style.fontWeight = input.style.fontWeight === 'bold' ? 'normal' : 'bold';
            });

            document.getElementById('italicText').addEventListener('click', () => {
                const input = document.getElementById('editInput');
                input.style.fontStyle = input.style.fontStyle === 'italic' ? 'normal' : 'italic';
            });

            document.getElementById('underlineText').addEventListener('click', () => {
                const input = document.getElementById('editInput');
                input.style.textDecoration = input.style.textDecoration === 'underline' ? 'none' : 'underline';
            });

            document.getElementById('textColorPicker').addEventListener('change', (e) => {
                const input = document.getElementById('editInput');
                input.style.color = e.target.value;
            });

            document.getElementById('fontSizeSelector').addEventListener('change', (e) => {
                const input = document.getElementById('editInput');
                input.style.fontSize = e.target.value;
            });

        </script>

</body>

</html>
