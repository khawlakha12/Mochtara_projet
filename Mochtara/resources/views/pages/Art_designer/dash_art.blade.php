<x-links_art />
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
                        <div class="col-md-12 d-flex flex-column justify-content-center align-items-center">
                            <div id="imageGroupContainer" class="image-group d-flex  mr-2"
                                style="overflow-x: auto; white-space: nowrap; width: 60%; height: 120px;margin-bottom:10px;">
                                @foreach($designs as $design)
                                <img src="{{ Storage::url($design->img) }}" alt="Image 1"
                                    style="width:100px; height:100px; object-fit: cover; margin-left: 10px;">
                                    @endforeach
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
                                    <div id="textStyleControls"
                                        style="position: absolute; bottom: 70px; left: 20px; display: flex; flex-direction: column; display:none;">
                                        <button class="button secondary" style="margin-bottom: 5px;"
                                            id="boldText">G</button>
                                        <button class="button secondary" style="margin-bottom: 5px;"
                                            id="italicText">I</button>
                                        <button class="button secondary" style="margin-bottom: 5px;"
                                            id="underlineText">S</button>
                                        <input class="button secondary" style="margin-bottom: 5px;" type="color"
                                            id="textColorPicker">
                                        <select class="button secondary" style="margin-bottom: 5px;"
                                            id="fontSizeSelector">
                                            <option value="16px">Petit</option>
                                            <option value="24px">Moyen</option>
                                            <option value="32px">Grand</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center" style="width: 100%;">
                            <a href="#"><button type="button" class="bn30" data-toggle="modal" data-target="#saveDesignModal">Save</button>
                            </a>
                        </div>
                        <!-- Modal for entering name and price -->
<div class="modal fade" id="saveDesignModal" tabindex="-1" role="dialog" aria-labelledby="saveDesignModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="saveDesignModalLabel">Enter Design Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="saveDesignForm">
            <div class="form-group">
              <label for="designName">Name</label>
              <input type="text" class="form-control" id="designName" name="name" style="color: black;" required>
            </div>
            <div class="form-group">
              <label for="designPrice">Price</label>
              <input type="number" step="0.01" class="form-control" id="designPrice" style="color: black;"name="price" required>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="submitDesign()">Save Design</button>
        </div>
      </div>
    </div>
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

                const textStyleControls = document.getElementById('textStyleControls');

                textStyleControls.style.display = textStyleControls.style.display === 'flex' ? 'none' : 'flex';

                let input = document.getElementById('editInput');
                if (!input) {
                    input = createTextInput();
                    document.getElementById('imageBox').appendChild(input);
                    input.focus();
                }
            });

            function createTextInput() {
                const input = document.createElement('input');
                input.setAttribute('type', 'text');
                input.setAttribute('id', 'editInput');
                applyDefaultInputStyles(input);
                return input;
            }

            function createTextInput() {
                const input = document.createElement('input');
                input.setAttribute('type', 'text');
                input.setAttribute('id', 'editInput');
                applyDefaultInputStyles(input);
                return input;
            }

            function applyDefaultInputStyles(input) {
                input.style.whiteSpace = 'pre-wrap';
                input.style.overflowWrap = 'break-word';
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
            document.getElementById('boldText').addEventListener('click', function(event) {
                event.preventDefault();
                const input = document.getElementById('editInput');
                input.style.fontWeight = input.style.fontWeight === 'bold' ? '' : 'bold';
            });
            document.getElementById('italicText').addEventListener('click', function(event) {
                event.preventDefault();
                const input = document.getElementById('editInput');
                input.style.fontStyle = input.style.fontStyle === 'italic' ? '' : 'italic';
            });
            document.getElementById('underlineText').addEventListener('click', function(event) {
                event.preventDefault();
                const input = document.getElementById('editInput');
                input.style.textDecoration = input.style.textDecoration === 'underline' ? '' : 'underline';
            });
            document.getElementById('textColorPicker').addEventListener('change', function(event) {
                event.preventDefault();
                const input = document.getElementById('editInput');
                input.style.color = event.target.value;
            });
            document.getElementById('fontSizeSelector').addEventListener('change', (e) => {
                const input = document.getElementById('editInput');
                input.style.fontSize = e.target.value;
            });
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>


        <script>
            document.getElementById('saveButton').addEventListener('click', function() {
                html2canvas(document.querySelector("#textContainer")).then(canvas => {
                    canvas.toBlob(function(blob) {
                        var formData = new FormData();
                        formData.append('image', blob, 'textImage.png');
                        fetch('{{ route('designs.store') }}', {
                                method: 'POST',
                                body: formData,
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                    'Accept': 'application/json'
                                },
                            })
                            .then(response => {
                                if (!response.ok) throw new Error('Network response was not ok');
                                return response.json();
                            })
                            .then(data => console.log(data))
                            .catch(error => console.error('Error:', error));
                    });
                });
            });
        </script>
 {{-- -----------------------------script de caroussel------------------------------ --}}
<script>
    function scrollImages() {
        const container = document.getElementById('imageGroupContainer');
        container.scrollLeft += 2;
        if (container.scrollLeft >= container.scrollWidth - container.clientWidth) {
            container.scrollLeft = 0;
        }
        requestAnimationFrame(scrollImages);
    }
    scrollImages();
</script>

<script>
    function submitDesign() {

        var name = document.getElementById('designName').value;
        var price = document.getElementById('designPrice').value;
        var form = document.querySelector('form[action="{{ route('designs.store') }}"]');
        var inputName = document.createElement('input');
        inputName.type = 'hidden';
        inputName.name = 'name';
        inputName.value = name;
        var inputPrice = document.createElement('input');
        inputPrice.type = 'hidden';
        inputPrice.name = 'price';
        inputPrice.value = price;
        
        form.appendChild(inputName);
        form.appendChild(inputPrice);

        form.submit();
    }
    </script>
    

</body>

</html>
