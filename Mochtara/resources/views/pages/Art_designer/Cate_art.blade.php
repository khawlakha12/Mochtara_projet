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
</style>

<x-links_art />
<!-- End Navbar -->
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Table designs</h4>
                    <a href="/new_design"><button type="button" class="btn btn-info btn-circle btn-xl">
                            <i class="fa fa-plus"></i>
                        </button></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter " id="designTable">
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
                                @foreach ($designs as $design)
                                    <tr>
                                        <td class="text-center">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="text-center">
                                            <img src="{{ asset('storage/' . $design->img) }}" class=""
                                                alt="Cinque Terre" style="height:50px;width:50px;">
                                        </td>
                                        <td class="text-center">
                                            {{ $design->price }}MAD
                                        </td>
                                        <td class="text-center">
                                            <form action="{{ route('designs.destroy', $design->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-block"> Supprimer
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const rowsPerPage = 5;
            const rows = Array.from(document.querySelector('#designTable tbody').rows);
            const paginationWrapper = document.getElementById('pagination');

            function setupPagination(rows, wrapper, rowsPerPage) {
                wrapper.innerHTML = "";

                let pageCount = Math.ceil(rows.length / rowsPerPage);
                for (let i = 1; i <= pageCount; i++) {
                    let btn = document.createElement('button');
                    btn.innerText = i;
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
            displayPage(1); // Display the first page initially
        });
    </script>

    </body>

    </html>
