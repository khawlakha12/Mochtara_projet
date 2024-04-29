<style>
    div[ng-app] {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
    }

    .styled-elements {
        border: 2px dashed black;
        padding: 10px 40px;
        height: 60%;
        color: black;
        background-color: white;
        display: block;
        margin: 10px 0;
    }

    input.styled-elements {
        width: calc(70% - 80px);
        box-sizing: border-box;
    }

    .container {
        position: relative;
        text-align: center;
        width: fit-content;
        margin: auto;
    }

    .container h1 {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        margin: 0;
    }

    .styled-element {
       
        color: white;
        width: auto;
        box-sizing: border-box;
    }

    img.img-fluid {
        display: block;
        width: 100%;
        height: auto;
    }
    #imageContainer img {
    width: 100%; 
    height: 100%; 
    object-fit: contain; 
}
#border {
    border-right: none; 
}

#border {
    border-top-left-radius: 8px; 
    border-bottom-left-radius: 8px; 
}
.button {
  --green: #1BFD9C;
  font-size: 15px;
  padding: 0.7em 2.7em;
  letter-spacing: 0.06em;
  position: relative;
  font-family: inherit;
  border-radius: 0.6em;
  overflow: hidden;
  transition: all 0.3s;
  line-height: 1.4em;
  border: 2px solid var(--green);
  background: linear-gradient(to right, rgba(27, 253, 156, 0.1) 1%, transparent 40%,transparent 60% , rgba(27, 253, 156, 0.1) 100%);
  color: var(--green);
  box-shadow: inset 0 0 10px rgba(27, 253, 156, 0.4), 0 0 9px 3px rgba(27, 253, 156, 0.1);
}

.button:hover {
  color: #82ffc9;
  box-shadow: inset 0 0 10px rgba(27, 253, 156, 0.6), 0 0 9px 3px rgba(27, 253, 156, 0.2);
}

.button:before {
  content: "";
  position: absolute;
  left: -4em;
  width: 4em;
  height: 100%;
  top: 0;
  transition: transform .4s ease-in-out;
  background: linear-gradient(to right, transparent 1%, rgba(27, 253, 156, 0.1) 40%,rgba(27, 253, 156, 0.1) 60% , transparent 100%);
}

.button:hover:before {
  transform: translateX(15em);
}
</style>

<x-navbar />

<main id="main" data-aos="fade" data-aos-delay="1500" style="position: relative; overflow-x:hidden;" ng-app="">
    <div onmouseout="hovredireturn()" id="border" onmouseover="hovredi()" class="hovermebaby" style="position: absolute; height: 40px; width: 35px; top: 350px; right: 0; z-index: 100;background:#27a776;" >
        <svg id="blue_copy" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" style="height: 40px;width:40px;">
            <g id="Layer_8_copy_4">
                <path d="M58.644,27.26v8.294c0,0.571-0.305,1.1-0.8,1.385L37.632,48.608c-1.066,0.616-1.066,2.155,0,2.771l20.212,11.669c0.495,0.286,0.8,0.814,0.8,1.385v8.294c0,1.231-1.333,2.001-2.399,1.385L16.869,51.379c-1.066-0.616-1.066-2.155,0-2.771l39.375-22.733C57.311,25.259,58.644,26.029,58.644,27.26z" fill="#000000" />
            </g>
        </svg>
    </div>
    @if (session('success'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="close" data-dismiss="alert"
            aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
    
    <div id="categorySelector" style="display: flex; align-items: center; justify-content: center; transform: translateX(100%); position: absolute; top: 350px; right: 0; height: 100px; width: 200px; background: #fff; z-index: 10;" class="flex tomove">
        @foreach($categories as $category)
            <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" style="background: #27a776; border:#fff 1px; height:50px; width:50px; margin-left:10px;"
            data-image-url="{{ asset('storage/' . $category->image) }}"
            data-sizes="{{ json_encode($category->sizes) }}" class="image-sele">
        @endforeach
    </div>
    
    <div class="page-header d-flex align-items-center">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-md-6 d-flex justify-content-center align-items-center me-md-4">
                    <x-designs />
                    <div class="flex flex-col overflow-y-scroll h-[400px]">
                        @foreach ($designs as $design)
                        <img src="{{ asset('storage/' . $design->img) }}" alt="{{ $design->name ?? 'Design Image' }}"
                            class="image-select mr-2 mb-2 h-24 w-24 border border-with">
                            @endforeach
                    </div>

                    <div class="card-body bg-white rounded" style="height: 400px;">
                        <div class="d-flex justify-content-center align-items-center position-relative"
                            style="height: 100%;">
                            <div id="inputOrImageContainer"
                                style="display: flex; justify-content: center; align-items: center; height: 100%;width:90%;">
                                <input type="text" contenteditable="true" ng-model="Your_text"
                                    placeholder="Enter Your text her" id="yourTextInput" class="styled-elements">
                            </div>
                            <button type="submit" class="position-absolute" id="styleButton"
                                style="background:#27a776;margin-right:10px;margin-bottom:10px;bottom: 0; right: 0; border-radius: 50%; width: 35px; height: 35px; display: flex; justify-content: center; align-items: center; padding: 0;">
                                <svg fill="#000000" height="800px" width="800px" version="1.1" id="Capa_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    style="height:15px;width:15px;" viewBox="0 0 449.213 449.213" xml:space="preserve">
                                    <path
                                        d="M415.035,142.109l21.016-21.016c8.487-8.487,13.162-19.772,13.162-31.775c0-12.003-4.675-23.288-13.162-31.775L391.66,13.15
                                       c-17.521-17.519-46.028-17.521-63.551,0L47.611,293.649c-1.649,1.649-2.891,3.66-3.627,5.873L0.767,429.469
                                       c-1.792,5.388-0.388,11.325,3.627,15.34c2.859,2.859,6.692,4.394,10.608,4.394c1.583,0,3.181-0.251,4.731-0.767l129.946-43.218
                                       c2.213-0.736,4.225-1.978,5.873-3.627l238.269-238.269l3.153,3.153c9.56,9.559,14.131,22.741,12.543,36.167
                                       c-1.589,13.426-9.11,25.178-20.638,32.243l-71.469,43.804c-29.461,18.056-47.874,49.449-49.256,83.976
                                       c-0.331,8.277,6.11,15.256,14.389,15.587c0.204,0.008,0.407,0.013,0.61,0.013c8.007,0,14.654-6.328,14.978-14.401
                                       c0.98-24.503,14.048-46.783,34.956-59.597l71.47-43.804c19.41-11.897,32.077-31.688,34.752-54.296
                                       c2.675-22.608-5.023-44.807-21.122-60.905L415.035,142.109z M349.322,34.364c5.824-5.825,15.301-5.824,21.125,0l44.392,44.393
                                       c2.821,2.821,4.375,6.572,4.375,10.562s-1.554,7.741-4.375,10.563l-35.865,35.865l-65.516-65.517L349.322,34.364z M66.55,326.731
                                       l55.921,55.921l-83.786,27.866L66.55,326.731z M141.411,373.307l-65.516-65.516L299.316,84.37l65.516,65.517L141.411,373.307z" />
                                </svg>
                            </button>
                            <button type="button" class="position-absolute" id="changeButton"
                                style="background:#27a776; margin-left:10px; margin-bottom:10px; bottom: 0; left: 0; border-radius: 50%; width: 35px; height: 35px; display: flex; justify-content: center; align-items: center; padding: 0;">
                                <img src="https://cdn-icons-png.flaticon.com/512/5953/5953659.png " alt="" title="" class="img-small" style="width: 20px; height: 20px;">
                            </button>
                            <div id="styleOptions" class="position-absolute"
                                style="display:none; flex-direction: column; right: 0px; border-radius: 5px; padding: 10px;">
                                <button onclick="applyStyle('bold')"
                                    style ="background:#27a776;margin-top:10px; border-radius: 50%; width: 35px; height: 35px; display: flex; justify-content: center; align-items: center; padding: 0; color:black;">B</button>
                                <button onclick="applyStyle('italic')"
                                    style ="background:#27a776;margin-top:10px; border-radius: 50%; width: 35px; height: 35px; display: flex; justify-content: center; align-items: center; padding: 0; color:black;">I</button>
                                <button onclick="applyStyle('underline')"
                                    style ="background:#27a776;margin-top:10px; border-radius: 50%; width: 35px; height: 35px; display: flex; justify-content: center; align-items: center; padding: 0; color:black;">U</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 justify-content-center">
                    <div class="container">
                        <h1 id="styledText" class="styled-element"
                            style="height: 32%;width:27%;color:#000000;text-align:center;text-wrap: balance;">@{{ Your_text }}
                        </h1>
                        <h1 id="imageContainer" class="styled-element"
                            style="height: 32%;width:27%;text-align: center;background-position: center center;"></h1>
                        <img src="https://www.centraltshirts.com/cdn/shop/files/AdultHoodie-NoL.png?v=1709139072" alt="image" id="main-image" class="img-fluid">
                    </div>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center" style="gap: 20px; min-height: 100px;">
                    <div>
                        <div id="sizesContainer" style="position: absolute; top: 460px; left: 0; right: 0; text-align: center;">
                            <!-- Les boutons de tailles seront ajoutés ici -->
                        </div>
                    </div>
                    @auth
                    <button type="submit" id="printButton" class="button" style="margin-top:5%;">Print</button>
                @endauth
                </div>
                
            </div>
            
        </div>
    </div>
   
    
</main>
<x-footer />
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<x-link_script />

{{--------------------------------styled text----------------------------}}
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        document.getElementById('styleButton').addEventListener('click', function() {
            var styleOptions = document.getElementById('styleOptions');
            styleOptions.style.display = styleOptions.style.display === 'none' || styleOptions.style
                .display === '' ? 'flex' : 'none';
        });
    });

    function applyStyle(style) {
        var textInput = document.getElementById('yourTextInput');
        var styledText = document.getElementById('styledText');

        switch (style) {
            case 'bold':
                textInput.style.fontWeight = textInput.style.fontWeight === 'bold' ? '' : 'bold';
                styledText.style.fontWeight = styledText.style.fontWeight === 'bold' ? '' : 'bold';
                break;
            case 'italic':
                textInput.style.fontStyle = textInput.style.fontStyle === 'italic' ? '' : 'italic';
                styledText.style.fontStyle = styledText.style.fontStyle === 'italic' ? '' : 'italic';
                break;
            case 'underline':
                textInput.style.textDecoration = textInput.style.textDecoration === 'underline' ? '' : 'underline';
                styledText.style.textDecoration = styledText.style.textDecoration === 'underline' ? '' : 'underline';
                break;
        }
    }

    function updateText() {
        var textInput = document.getElementById('yourTextInput');
        document.getElementById('styledText').innerText = textInput.value;
    }
</script>
{{-- --------------------------------afficher l'image dans le div -------------------------- --}}
<script>
    document.addEventListener('DOMContentLoaded', () => {

        document.querySelectorAll('.image-select').forEach(image => {
            image.addEventListener('click', function() {
                const selectedImage = document.createElement('img');
                selectedImage.src = this.src;
                selectedImage.classList.add('mr-2', 'mb-2', 'h-48', 'w-48');

                const container = document.getElementById('inputOrImageContainer');
                container.innerHTML = '';
                container.appendChild(selectedImage);
            });
        });
    });
</script>
{{-- --------------------------------afficher l'image dans le t-shirt -------------------------- --}}
<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('.image-select').forEach(image => {
            image.addEventListener('click', function() {
                const imageContainer = document.getElementById('imageContainer');
                imageContainer.innerHTML = ''; 
    
                const selectedImage = document.createElement('img');
                selectedImage.src = this.src;
                selectedImage.classList.add('img-fluid');
    
                imageContainer.appendChild(selectedImage);
                imageContainer.style.display = 'block';
    
                document.getElementById('styledText').style.display = 'none';
            });
        });
    });
    </script>
    
{{-- --------------------------------afficher pour choisir catégorie for design-------------------------- --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const hoverDiv = document.getElementById('border'); 
            const moveDiv = document.querySelector('.tomove'); 
        
        hoverDiv.addEventListener('click', function() {
    
                if (moveDiv.style.transform === 'translateX(100%)' || moveDiv.style.transform === '') {
                    moveDiv.style.transform = 'translateX(0%)'; 
                } else {
                    moveDiv.style.transform = 'translateX(100%)'; 
                }
            });
            
        });
</script>
{{-- --------------------------------choisir autre categorie for design-------------------------- --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.image-sele').forEach(item => {
            item.addEventListener('click', function () {
                const mainImage = document.getElementById('main-image'); 
                mainImage.src = this.getAttribute('data-image-url');
                mainImage.alt = this.alt;
            });
        });
    });
</script>

    <script>
        document.getElementById('printButton').addEventListener('click', function() {
     fetch('/print', { 
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'  
        },
        body: JSON.stringify({
            design_id: selectedDesignId,  
            category_id: selectedCategoryId,
            price: selectedPrice
        })
    })
    .then(response => response.json())
    .then(data => console.log(data.message))
    .catch(error => console.error('Error:', error));
});

    </script>
    

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const inputContainer = document.getElementById('inputOrImageContainer');
        const imageContainer = document.getElementById('imageContainer');
        const styledText = document.getElementById('styledText');
    
        document.getElementById('changeButton').addEventListener('click', function() {
            if (imageContainer.innerHTML !== '') {
                imageContainer.innerHTML = '';
                imageContainer.style.display = 'none';
                if (!inputContainer.querySelector('input')) {
                    inputContainer.innerHTML = `
                        <input type="text" contenteditable="true" ng-model="Your_text"
                        placeholder="Enter Your text here" id="yourTextInput" class="styled-elements">
                    `;
                }
                inputContainer.style.display = 'flex';
                styledText.style.display = 'block';
            }
        });
        document.getElementById('yourTextInput')?.addEventListener('input', function() {
            styledText.innerText = this.value;
        });
    });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.image-select').forEach(image => {
                image.addEventListener('click', function() {
                    const styledText = document.getElementById('styledText');
                    styledText.style.backgroundImage = `url('${this.src}')`;
                    styledText.innerText = '';
                });
            });
            document.getElementById('changeButton').addEventListener('click', function() {
                const styledText = document.getElementById('styledText');
                if (styledText.style.backgroundImage !== '') {
                    styledText.style.backgroundImage = ''; 
                    styledText.innerHTML = "@{{ Your_text }} "; 
                }
            });
        });
        </script>
        
</body>

</html>
