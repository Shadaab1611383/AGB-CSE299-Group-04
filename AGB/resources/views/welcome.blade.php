{{--<!doctype html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--        <title>Laravel</title>--}}

{{--        <!-- Fonts -->--}}
{{--        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">--}}

{{--        <!-- Styles -->--}}
{{--        <style>--}}
{{--            html, body {--}}
{{--                background-color: #fff;--}}
{{--                color: #636b6f;--}}
{{--                font-family: 'Nunito', sans-serif;--}}
{{--                font-weight: 200;--}}
{{--                height: 100vh;--}}
{{--                margin: 0;--}}
{{--            }--}}

{{--            .full-height {--}}
{{--                height: 100vh;--}}
{{--            }--}}

{{--            .flex-center {--}}
{{--                align-items: center;--}}
{{--                display: flex;--}}
{{--                justify-content: center;--}}
{{--            }--}}

{{--            .position-ref {--}}
{{--                position: relative;--}}
{{--            }--}}

{{--            .top-right {--}}
{{--                position: absolute;--}}
{{--                right: 10px;--}}
{{--                top: 18px;--}}
{{--            }--}}

{{--            .content {--}}
{{--                text-align: center;--}}
{{--            }--}}

{{--            .title {--}}
{{--                font-size: 84px;--}}
{{--            }--}}

{{--            .links > a {--}}
{{--                color: #636b6f;--}}
{{--                padding: 0 25px;--}}
{{--                font-size: 13px;--}}
{{--                font-weight: 600;--}}
{{--                letter-spacing: .1rem;--}}
{{--                text-decoration: none;--}}
{{--                text-transform: uppercase;--}}
{{--            }--}}

{{--            .m-b-md {--}}
{{--                margin-bottom: 30px;--}}
{{--            }--}}
{{--        </style>--}}
{{--    </head>--}}
{{--    <body>--}}
{{--        <div class="flex-center position-ref full-height">--}}
{{--            @if (Route::has('login'))--}}
{{--                <div class="top-right links">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}">Login</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            <div class="content">--}}
{{--                <div class="title m-b-md">--}}
{{--                    Laravel--}}
{{--                </div>--}}

{{--                <div class="links">--}}
{{--                    <a href="https://laravel.com/docs">Docs</a>--}}
{{--                    <a href="https://laracasts.com">Laracasts</a>--}}
{{--                    <a href="https://laravel-news.com">News</a>--}}
{{--                    <a href="https://blog.laravel.com">Blog</a>--}}
{{--                    <a href="https://nova.laravel.com">Nova</a>--}}
{{--                    <a href="https://forge.laravel.com">Forge</a>--}}
{{--                    <a href="https://github.com/laravel/laravel">GitHub</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </body>--}}
{{--</html>--}}


        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('front') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('front') }}/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>AGB</title>
</head>
<body class="bg-db">

<header>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(45, 87, 122)">
        <a class="navbar-brand" href="#">Adarsha Gram Binirman</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('dashboard') }}">Dashboard<span class="sr-only">(current)</span></a>
                </li>
                
                    <a class="nav-link"href="{{ route('aacomplaint.show') }}">Action Against Complaint</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"href="{{ route('complain') }}">Complaint</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cprojects.show') }}">Current Projects</a>
                </li>
                
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('front') }}/Caro-Img1.jpg" alt="Los Angeles" width="1100" height="600">
                <div class="carousel-caption">
                    <h3>Sohagdal, Pirojpur</h3>
                    <p>Embankment Repair Work is being Done</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('front') }}/Caro-Img2.jpg" alt="Chicago" width="1100" height="600">
                <div class="carousel-caption">
                    <h3>Sangumukh, Bandarban</h3>
                    <p>Tree Implantation Program will be starting from tommorow</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('front') }}/Caro-Img3.jpg" alt="New York" width="1100" height="600">
                <div class="carousel-caption">
                    <h3>Kansa, Jhalkathi</h3>
                    <p>Road Repair Work has been finished</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</header>

<section>
    <div class="container-fluid mt-5" style="background-color: rgb(67, 106, 138)">
        <img class="mx-auto d-block pt-3" src="{{ asset('front') }}/parliament.png" alt="parliament_logo" width="150" height="200">
        <h1 class="text-center text-capitalize mop"><a href="{{ route('frontmp.show') }}">Members of Parliament</a></h1>
        <hr class="w-25 mx-auto" style="background-color: rgb(108,171,221)">
        /*<h2 class="text-center text-capitalize pb-1" style="color: whitesmoke"></h2>
       <p class="text-center pb-3" style="color: whitesmoke"></p>*/
    </div>
</section>

<section>
    <div class="container-fluid mt-5" style="background-color: rgb(67, 106, 138)">
        <img class="mx-auto d-block pt-3 mb-3" src="{{ asset('front') }}/village.png" alt="village_logo" width="145" height="160">
        <h1 class="text-center text-capitalize pt-4 nov"><a href="{{ route('frontarea.show') }}">Areas/Seats</a></h1>
        <hr class="w-25 mx-auto" style="background-color: rgb(108,171,221)">
        /*<h2 class="text-center text-capitalize pb-1" style="color: whitesmoke"></h2>
        <p class="text-center pb-3" style="color: whitesmoke"></p>*/
    </div>
</section>

<section>
    <div class="container-fluid mt-5 pb-3">
        <h1 class="text-center text-capitalize">Latest Added Seats</h1>
        <hr class="w-25 mx-auto hr-1">
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div id="sha" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="container">
                                <div class="row text-center">
                                    <div class="card-deck">
                                        <div class="card" style="background-color: rgba(67, 106, 138)">
                                            <img class="card-img-top" src="{{ asset('front') }}/village-card1.jpg" alt="Card image">
                                            <div class="card-body">
                                                <h4 class="card-title" style="color:snow">Latifpur</h4>
                                                <p class="card-text" style="color:snow">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                <a href="#" class="btn btn-primary" style="background-color: rgb(231, 202, 38);color: rgb(6, 7, 7); border: rgb(42, 38, 24)">See More</a>
                                            </div>
                                        </div>

                                        <div class="card" style="background-color: rgba(67, 106, 138)">
                                            <img class="card-img-top" src="{{ asset('front') }}/village-card2.jpg" alt="Card image">
                                            <div class="card-body">
                                                <h4 class="card-title" style="color:snow">Niamati</h4>
                                                <p class="card-text" style="color:snow">Lorem ipsum dolor sit amet consectetur. fdfsgsdfdfsfdsf</p>
                                                <a href="#" class="btn btn-primary" style="background-color: rgb(231, 202, 38);color: rgb(6, 7, 7); border: rgb(42, 38, 24)">See More</a>
                                            </div>
                                        </div>

                                        <div class="card" style="background-color: rgba(67, 106, 138)">
                                            <img class="card-img-top" src="{{ asset('front') }}/village-card3.jpg" alt="Card image">
                                            <div class="card-body">
                                                <h4 class="card-title" style="color:snow">Dhamsar</h4>
                                                <p class="card-text" style="color:snow">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos!</p>
                                                <a href="#" class="btn btn-primary" style="background-color: rgb(231, 202, 38);color: rgb(6, 7, 7); border: rgb(42, 38, 24)">See More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="container">
                                <div class="row text-center">
                                    <div class="card-deck">
                                        <div class="card" style="background-color: rgba(67, 106, 138)">
                                            <img class="card-img-top" src="{{ asset('front') }}/village-card1.jpg" alt="Card image">
                                            <div class="card-body">
                                                <h4 class="card-title" style="color:snow">Narikelbaria</h4>
                                                <p class="card-text" style="color:snow">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                <a href="#" class="btn btn-primary" style="background-color: rgb(231, 202, 38);color: rgb(6, 7, 7); border: rgb(42, 38, 24)">See More</a>
                                            </div>
                                        </div>

                                        <div class="card" style="background-color: rgba(67, 106, 138)">
                                            <img class="card-img-top" src="{{ asset('front') }}/village-card2.jpg" alt="Card image">
                                            <div class="card-body">
                                                <h4 class="card-title" style="color:snow">Pathorghata</h4>
                                                <p class="card-text" style="color:snow">Lorem ipsum dolor sit amet consectetur. fdfsgsdfdfsfdsf</p>
                                                <a href="#" class="btn btn-primary" style="background-color: rgb(231, 202, 38);color: rgb(6, 7, 7); border: rgb(42, 38, 24)">See More</a>
                                            </div>
                                        </div>

                                        <div class="card" style="background-color: rgba(67, 106, 138)">
                                            <img class="card-img-top" src="{{ asset('front') }}/village-card3.jpg" alt="Card image">
                                            <div class="card-body">
                                                <h4 class="card-title" style="color:snow">Rudrapur</h4>
                                                <p class="card-text" style="color:snow">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos!</p>
                                                <a href="#" class="btn btn-primary" style="background-color: rgb(231, 202, 38);color: rgb(6, 7, 7); border: rgb(42, 38, 24)">See More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <a href="#sha" class="carousel-control-prev" data-slide="previous">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a href="#sha" class="carousel-control-next" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>

<section>
    <div class="container-fluid mt-5 pb-3">
        <h1 class="text-center text-capitalize">Recent MP Added</h1>
        <hr class="w-25 mx-auto hr-1">
    </div>

    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-sm-12">
                <div id="inam" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="container">
                                <div class="row text-center">
                                    <div class="card-deck">
                                        <div class="card" style="background-color: rgba(67, 106, 138)">
                                            <img class="card-img-top" src="{{ asset('front') }}/MP-img.jpg" alt="Card image">
                                            <div class="card-body">
                                                <h4 class="card-title" style="color:snow">Khwaja Nazimuddin</h4>
                                                <p class="card-text" style="color:snow">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                                                <a href="#" class="btn btn-primary" style="background-color: rgb(231, 202, 38);color: rgb(6, 7, 7); border: rgb(42, 38, 24)">Profile</a>
                                            </div>
                                        </div>

                                        <div class="card" style="background-color: rgba(67, 106, 138)">
                                            <img class="card-img-top" src="{{ asset('front') }}/MP-img.jpg" alt="Card image">
                                            <div class="card-body">
                                                <h4 class="card-title" style="color:snow">Shakhawat Hossain</h4>
                                                <p class="card-text" style="color:snow">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                                <a href="#" class="btn btn-primary" style="background-color: rgb(231, 202, 38);color: rgb(6, 7, 7); border: rgb(42, 38, 24)">Profile</a>
                                            </div>
                                        </div>

                                        <div class="card" style="background-color: rgba(67, 106, 138)">
                                            <img class="card-img-top" src="{{ asset('front') }}/MP-img.jpg" alt="Card image">
                                            <div class="card-body">
                                                <h4 class="card-title" style="color:snow">Abul Hashem</h4>
                                                <p class="card-text" style="color:snow">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                                <a href="#" class="btn btn-primary" style="background-color: rgb(231, 202, 38);color: rgb(6, 7, 7); border: rgb(42, 38, 24)">Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="container">
                                <div class="row text-center">
                                    <div class="card-deck">
                                        <div class="card" style="background-color: rgba(67, 106, 138)">
                                            <img class="card-img-top" src="{{ asset('front') }}/MP-img.jpg" alt="Card image">
                                            <div class="card-body">
                                                <h4 class="card-title" style="color:snow">Mashrafe Bin Murtaza</h4>
                                                <p class="card-text" style="color:snow">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                                                <a href="#" class="btn btn-primary" style="background-color: rgb(231, 202, 38);color: rgb(6, 7, 7); border: rgb(42, 38, 24)">Profile</a>
                                            </div>
                                        </div>

                                        <div class="card" style="background-color: rgba(67, 106, 138)">
                                            <img class="card-img-top" src="{{ asset('front') }}/MP-img.jpg" alt="Card image">
                                            <div class="card-body">
                                                <h4 class="card-title" style="color:snow">Abdul Hamid</h4>
                                                <p class="card-text" style="color:snow">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                                <a href="#" class="btn btn-primary" style="background-color: rgb(231, 202, 38);color: rgb(6, 7, 7); border: rgb(42, 38, 24)">Profile</a>
                                            </div>
                                        </div>

                                        <div class="card" style="background-color: rgba(67, 106, 138)">
                                            <img class="card-img-top" src="{{ asset('front') }}/MP-img.jpg" alt="Card image">
                                            <div class="card-body">
                                                <h4 class="card-title" style="color:snow">Abul Kalam</h4>
                                                <p class="card-text" style="color:snow">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                                <a href="#" class="btn btn-primary" style="background-color: rgb(231, 202, 38);color: rgb(6, 7, 7); border: rgb(42, 38, 24)">Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <a href="#inam" class="carousel-control-prev" data-slide="prev">
                        <span class="carousel-control-prev-icon" ></span>
                    </a>
                    <a href="#inam" class="carousel-control-next" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>





<script src="{{ asset('front') }}/js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="{{ asset('front') }}/js/bootstrap.bundle.min.js"></script>
</body>
</html>
