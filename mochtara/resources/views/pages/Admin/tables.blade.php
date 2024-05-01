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
    <link href="assets-dash/css/nucleo-icons.css" rel="stylesheet" />
    <link href="assets-dash/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
    <link href="assets-dash/demo/demo.css" rel="stylesheet" />
    <style>
        #pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        #pagination button {
            margin: 5px;
            padding: 8px 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            outline: none;
        }

        #pagination button:hover {
            background-color: #0056b3;
        }

        .checkbox-wrapper input[type="checkbox"] {
            visibility: hidden;
            display: none;
        }

        .checkbox-wrapper *,
        .checkbox-wrapper ::after,
        .checkbox-wrapper ::before {
            box-sizing: border-box;
            user-select: none;
        }

        .checkbox-wrapper {
            position: relative;
            display: block;
            overflow: hidden;
        }

        .checkbox-wrapper .label {
            cursor: pointer;
        }

        .checkbox-wrapper .check {
            width: 50px;
            height: 50px;
            position: absolute;
            opacity: 0;
        }

        .checkbox-wrapper .label svg {
            vertical-align: middle;
        }

        .checkbox-wrapper .path1 {
            stroke-dasharray: 400;
            stroke-dashoffset: 400;
            transition: .5s stroke-dashoffset;
            opacity: 0;
        }

        .checkbox-wrapper .check:checked+label svg g path {
            stroke-dashoffset: 0;
            opacity: 1;
        }
    </style>
</head>

<body class="">
    <div class="wrapper">
        <div class="sidebar">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="/admin" class="simple-text logo-mini">
                        <img src="img/LOGOdash.png" alt="">
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
                    <li>
                        <a href="/Categories">
                            <i class="fas fa-tshirt"></i>
                            <p>Categories</p>
                        </a>
                    </li>
                    <li class="active ">
                        <a href="/liste_clients">
                            <i class="tim-icons icon-puzzle-10"></i>
                            <p>Clients/Commande</p>
                        </a>
                    </li>
                    <li>
                        <a href="/new_product">
                            <i class="fas fa-box"></i>
                            <p>Product</p>
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
                        <a class="navbar-brand" href="javascript:void(0)">Listes</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <div class="photo">
                                        <img src="assets-dah/img/anime3.png" alt="Profile Photo"
                                            class="replaceable-image">
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
                                    <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log
                                            out</a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
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
                            <div class="card-header">
                                <h4 class="card-title">Table cliens</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    @if (session('success'))
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>{{ session('success') }}</strong>
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
                                    <table class="table tablesorter " id="productTable">
                                        <thead class=" text-primary">
                                            <tr>
                                                <th class="text-center">
                                                    Name
                                                </th>
                                                <th class="text-center">
                                                    email
                                                </th>
                                                <th class="text-center">
                                                    Commende
                                                </th>
                                                <th class="text-center">
                                                    Supprime
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                            @if($user->role === 'client')
                                                <tr>
                                                    <td class="text-center">
                                                        {{ $user->name }}
                                                    </td>
                                                    <td class="text-center">
                                                        {{ $user->email }}
                                                    </td>
                                                    <td class="text-center">
                                                        {{ $user->commandes->where('status', 'visible')->count() }}
                                                    </td>
                                                    <td class="text-center">
                                                        <form action="{{ route('user.delete', $user->id) }}"
                                                            method="GET">
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger btn-block">
                                                                Supprimer </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endif
                                            @endforeach

                                        </tbody>
                                    </table>
                                    <div id="pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header">
                                <h4 class="card-title">Table Commende</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive" id="productTable">
                                    <table class="table tablesorter " id="">
                                        <thead class=" text-primary">
                                           
                                            
                                                <tr>
                                                    <th class="text-center">
                                                        Client
                                                    </th>
                                                    <th class="text-center">
                                                        Date
                                                    </th>
                                                    <th class="text-center">
                                                        Product
                                                    </th>
                                                    <th class="text-center">
                                                        Size
                                                    </th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($commandes as $commande)
                                             @if($commande->status === 'visible')
                                            <tr>
                                                <td class="text-center">
                                                    {{ $commande->user->name }} 
                                                <td class="text-center">
                                                    {{ $commande->created_at->format('d/m/Y') }} 
                                                </td>
                                                <td class="text-center">
                                                    {{ $commande->product->name }} 
                                                </td>
                                                <td class="text-center">
                                                    {{ $commande->size->name }} 
                                                </td>
                                            </tr>
                                            @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div id="pagination"></div>
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
    
                <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
                <script>
                    window.TrackJS &&
                        TrackJS.install({
                            token: "ee6fab19c5a04ac1a32a645abde4613a",
                            application: "black-dashboard-free"
                        });
                </script>
                {{-- ------------------------------pagination------------------------------------- --}}
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const rowsPerPage = 5;
                        const rows = Array.from(document.querySelector('#productTable tbody').rows);
                        const paginationWrapper = document.getElementById('pagination');

                        function setupPagination(rows, wrapper, rowsPerPage) {
                            wrapper.innerHTML = "";

                            let pageCount = Math.ceil(rows.length / rowsPerPage);
                            for (let i = 1; i <= pageCount; i++) {
                                let btn = document.createElement('button');
                                btn.innerText = i;
                                btn.className = 'pagination-btn';
                                btn.addEventListener('click', function() {
                                    displayPage(i);
                                });
                                wrapper.appendChild(btn);
                            }
                        }

                        function displayPage(page) {
                            const start = (page - 1) * rowsPerPage;
                            const end = start + rowsPerPage;
                            rows.forEach((row, index) => {
                                if (index >= start && index < end) {
                                    row.style.display = '';
                                } else {
                                    row.style.display = 'none';
                                }
                            });
                        }

                        setupPagination(rows, paginationWrapper, rowsPerPage);
                        displayPage(1);
                    });
                </script>
</body>

</html>
