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

        #imageGroupContainer {
            display: flex;
            /* Aligns children (images) inline */
            overflow-x: auto;
            /* Enables horizontal scrolling */
            white-space: nowrap;
            /* Ensures no line breaks among children */
            scroll-behavior: smooth;
            /* Optional: Smoothens the scrolling */
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
                            <p>Designs</p>
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