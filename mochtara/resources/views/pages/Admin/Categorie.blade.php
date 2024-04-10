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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <link href="assets-dash/css/nucleo-icons.css" rel="stylesheet" />
    <link href="assets-dash/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
    <link href="assets-dash/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper">
        <div class="sidebar">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="/admin" class="simple-text logo-mini">

                    </a>
                    <a href="/admin" class="simple-text logo-normal">
                        Mochtara
                    </a>
                </div>
                <ul class="nav">
                    <li>
                        <a href="/admin">
                            <i class="tim-icons icon-chart-pie-36"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="/profil">
                            <i class="tim-icons icon-single-02"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li class="active ">
                        <a href="/Categories">
                            <i class="fas fa-tshirt"></i>
                            <p>Categories</p>
                        </a>
                    </li>
                    <li>
                        <a href="/liste_clients">
                            <i class="tim-icons icon-puzzle-10"></i>
                            <p>Table Clients/Commande</p>
                        </a>
                    </li>
                    <li>
                        <a href="/arabe">
                            <i class="tim-icons icon-world"></i>
                            <p>RTL Support</p>
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
                        <a class="navbar-brand" href="/Categories">Categories</a>
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4 class="card-title mb-0">Table produits</h4>
                                <button type="button" class="btn btn-info btn-circle btn-xl" data-toggle="modal"
                                    data-target="#exampleModal">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Ajouter Produit</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div>
                                                <div class="mb-4 d-flex justify-content-center">
                                                    <img id="selectedImage"
                                                        src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg"
                                                        alt="example placeholder" style="width: 300px;" />
                                                </div>
                                                <div class="d-flex justify-content-center">
                                                    <div class="btn btn-primary btn-rounded">
                                                        <label class="form-label text-white m-1"
                                                            for="customFile1">Choose file</label>
                                                        <input type="file" class="form-control d-none"
                                                            id="customFile1"
                                                            onchange="displaySelectedImage(event, 'selectedImage')" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" style="color:black">Name</label>
                                                    <input type="text" class="form-control"
                                                        id="exampleInputEmail1" aria-describedby="emailHelp"
                                                        placeholder="Enter Name" style="color: black;">
                                                </div>
                                                <!-- Multi Select for Colors -->
                                                <div class="form-group mt-3">
                                                    <label for="colorSelect" style="color:black">Color</label>
                                                    <select class="form-control" id="colorSelect"
                                                        style="color: black;" multiple>
                                                        <option>Red</option>
                                                        <option>Blue</option>
                                                        <option>Green</option>
                                                        <option>Yellow</option>
                                                    </select>
                                                </div>

                                                <!-- Multi Select for Sizes -->
                                                <div class="form-group mt-3">
                                                    <label for="sizeSelect" style="color:black">Size</label>
                                                    <select class="form-control" id="sizeSelect"
                                                        style="color: black;" multiple>
                                                        <option>Small</option>
                                                        <option>Medium</option>
                                                        <option>Large</option>
                                                        <option>Extra Large</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Ajouter Produit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table tablesorter " id="">
                                        <thead class=" text-primary">
                                            <tr>
                                                <th class="text-center">
                                                    image
                                                </th>
                                                <th class="text-center">
                                                    name
                                                </th>
                                                <th class="text-center">
                                                    Couleurs
                                                </th>
                                                <th class="text-center">
                                                    Sizes
                                                </th>
                                                <th class="text-center">
                                                    Supprimer
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">
                                                    <img src="img/9obya.png" class="" alt="Cinque Terre"
                                                        style="height:50px;width:50px;">
                                                </td>
                                                <td class="text-center">
                                                    Hoodies
                                                </td>
                                                <td class="text-center">
                                                    <select class="selectpicker">
                                                        <optgroup label="Couleurs">
                                                            <option>Mustard</option>
                                                            <option>Ketchup</option>
                                                            <option>Relish</option>
                                                        </optgroup>
                                                </td>
                                                <td class="text-center">
                                                    <select class="selectpicker">
                                                        <optgroup label="Sizes">
                                                            <option>Mustard</option>
                                                            <option>Ketchup</option>
                                                            <option>Relish</option>
                                                        </optgroup>
                                                </td>
                                                <td class="text-center">
                                                    <button class="btn btn-danger btn-block"> Supprimer </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header">
                                <h4 class="card-title">Table designs</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table tablesorter " id="">
                                        <thead class=" text-primary">
                                            <tr>
                                                <th class="text-center">
                                                    Id Design
                                                </th>
                                                <th class="text-center">
                                                    image
                                                </th>
                                                <th class="text-center">
                                                    title
                                                </th>
                                                <th class="text-center">
                                                    Supprime
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">
                                                    1
                                                </td>
                                                <td class="text-center">
                                                    <img src="img/design2.png" class="" alt="Cinque Terre"
                                                        style="height:50px;width:50px;">
                                                </td>
                                                <td class="text-center">
                                                    Design1
                                                </td>
                                                <td class="text-center">
                                                    <button class="btn btn-danger btn-block"> Supprimer </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
                <script>
                    $(document).ready(function() {
                        $('#colorSelect').select2();
                        $('#sizeSelect').select2();
                    });
                </script>
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
</body>

</html>
