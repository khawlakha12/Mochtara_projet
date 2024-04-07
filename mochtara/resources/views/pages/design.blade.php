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
        border: 2px dashed black;
        padding: 10px 40px;
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        width: auto;
        box-sizing: border-box;
    }

    img.img-fluid {
        display: block;
        width: 100%;
        height: auto;
    }
</style>
<x-navbar />

<main id="main" data-aos="fade" data-aos-delay="1500" ng-app="">
    <div class="page-header d-flex align-items-center">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-md-6 d-flex justify-content-center align-items-center me-md-4">
                    <x-designs />
                    <div class="card-body bg-white rounded" style="height: 70%;">
                        <div class="d-flex justify-content-center align-items-center position-relative"
                            style="height: 100%;">
                            <input type="text" ng-model="Your_text" placeholder="Enter Your text her"
                                class="styled-elements">
                            <button type="submit" class="position-absolute"
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
                        </div>
                    </div>
                </div>
                <div class="col-md-5 justify-content-center">
                    <div class="container">
                        <h1 class="styled-element" style="height: 40%;width:27%;">@{{ Your_text }}</h1>
                        <img src="img/pa_tshirt.png" alt="image" class="img-fluid">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <x-size />
                </div>
            </div>
        </div>
    </div>
</main>
<x-footer />
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<x-link_script />

</body>

</html>
