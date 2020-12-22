<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            .container-fluid{
                font-family: 'Noto Serif', serif;
                max-width: 1400px;
            }
            .navbar{
                font-size: 25px;
            }
            .btn-outline-secondary{
                margin-left: 20px;
                border-radius: 40px;
            }

            .container{
                font-family: Bahnschrift;
            }


        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <div class="container-fluid" >
            <header>
                <nav class="navbar">
                    <div class="container-fluid">
                            <a class="navbar-brand" href="#">
                                <img src="{{ asset('img/logo.JPG') }}" alt="" width="450" height="220" class="d-inline-block align-top">
                            </a>


                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Aktualności</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Kontakt</a>
                            </li>
                            <li>
                                <button class="btn btn-sm btn-outline-secondary" type="button" style="background-color: #636b6f; color: #f8fafc; border-radius: 20px; font-size: 23px;" >Login</button>
                            </li>
                            <li>
                                <button class="btn btn-sm btn-outline-secondary" type="button" style="background-color: rgba(44,81,255,0.76); color: #f8fafc; border-radius: 20px;  font-size: 23px;">Rejestracja</button>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <main>
                <article>
                    <div class="container">
                        <div class="row">
                           <div id="firstContent">
                               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                   <ol class="carousel-indicators">
                                       <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                       <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                       <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                   </ol>
                                   <div class="carousel-inner">
                                       <div class="carousel-item active">
                                           <img src="{{url('/img/slider1.jpg')}}" class="d-block w-100" alt="image1" style="border-radius: 10px;">
                                           <div class="carousel-caption d-none d-md-block">
                                               <h2>Kup bilet lotniczy</h2>
                                               <p>i skorzystaj z najlepszych linii lotniczych</p>
                                           </div>

                                       </div>
                                       <div class="carousel-item">
                                           <img src="{{url('/img/slider2.jpg')}}" class="d-block w-100" alt="image2" style="border-radius: 10px;">
                                           <div class="carousel-caption d-none d-md-block">
                                               <h2>Wybierz klase lotu</h2>
                                               <p>i odpoczywaj w czasie podróży</p>
                                           </div>

                                       </div>
                                       <div class="carousel-item">
                                           <img src="{{url('/img/slider3.jpg')}}" class="d-block w-100" alt="image3" style="border-radius: 10px;">
                                           <div class="carousel-caption d-none d-md-block">
                                               <h2>Wykup dodatkowe ubezpieczenie</h2>
                                               <p>dbaj o Siebie i innych!</p>
                                           </div>

                                       </div>
                                   </div>
                                   <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                       <span class="sr-only"></span>
                                   </a>
                                   <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                       <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                       <span class="sr-only"></span>
                                   </a>
                               </div>
                           </div>
                        </div>
                    </div>
                </article>
            </main>
        </div>
    </body>
</html>

<!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
    <div class="top-right links">
@auth
        <a href="{{ url('/home') }}">Home</a>
                    @else
        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
                        @endif
    @endauth
        </div>
@endif
    -->
