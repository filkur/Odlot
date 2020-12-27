<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Odlot.pl</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://    fonts.googleapis.com/css2?family=Noto+Serif:wght@400;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            .container-fluid{
                font-family: 'Noto Serif', serif;
                max-width: 1400px;
            }
            .navbar{
                font-size: 25px;
            }

            .container{
                font-family: Bahnschrift;
            }

            main {
                background: linear-gradient(#ffffff,rgba(44,77,223,0));
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            button {
                padding: 15px 25px;
                text-align: center;
                cursor: pointer;
                outline: none;
                color: #fff;
                background-color: #3490dc;
                border: none;
            }

            button:hover {
                background-color: #636b6f;
                color: #f8fafc;
            }

            button:active {
                background-color: #f8fafc;
                transform: translateY(4px);
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
                        <div class="top-left links">
                            <a href="{{ url('/') }}"><img src="{{ asset('img/haslo.png') }}"></a>
                        </div>
                    @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                    <a href="{{ url('home') }}">Home</a>
                                @else
                                    <a href="{{ url('o-nas') }}">O nas</a>

                                    <a href="{{ url('kontakt') }}">Kontakt</a>

                                    <a href="{{ route('login') }}"><button type="button">Zaloguj</button></a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"><button type="button">Rejestruj</button></a>
                                    @endif
                                @endauth
                            </div>
                        @endif

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
                        <div class="row" style="text-align: center; margin-top: 120px;" >
                            <section>
                                <header> <h2>Witamy na naszej pierwszej oficjalnej stronie ODLOT.PL</h2></header>
                                <p>Strona ta powstała z myślą o tych, którzy uwielbiają podróżować po Polsce oraz po świecie.
                                To co nasz różni od innych jest fakt, że u nas zawsze można liczyć na  korzystne oferty oraz promocje.
                                Dodatkowo, u nas możesz wykupić ubezpieczenie na podróż, a nawet zarezerwować samochód w jednej z naszych wypożyczalni!</p>
                            </section>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-4 mb-5">
                                <div class="card h-100">
                                    <img class="card-img-top" src="{{url('/img/adult.jpg')}}" alt="image4">
                                    <div class="card-body">
                                        <h4 class="card-title">Troska</h4>
                                        <p class="card-text">Bezpieczeństwo podróży jest naszym priorytetem, dlatego wprowadziliśmy pakiet ubezpieczeń</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-5">
                                <div class="card h-100">
                                    <img class="card-img-top" src="{{url('/img/happy.jpg')}}" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title">Radość</h4>
                                        <p class="card-text">Dobre rekomendacje klientów oraz oceny motywują nas w rozwoju projektu oraz są prawdziwym wynikiem naszej pracy</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-5">
                                <div class="card h-100">
                                    <img class="card-img-top" src="{{url('/img/person.jpg')}}" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title">Szczęście</h4>
                                        <p class="card-text">Zadowolilśmy już ponad 100 tysięcy klientów. Następny możesz być Ty!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <footer>
                                <div class="row my-5 justify-content-center py-5">
                                    <div class="col-11">
                                        <div class="row ">
                                            <div class="col-xl-8 col-md-4 col-sm-4 col-12 my-auto mx-auto a">
                                                <img src="{{ asset('img/logo.JPG') }}" alt="" width="450" height="220" class="d-inline-block align-top">
                                            </div>
                                            <div class="col-xl-2 col-md-4 col-sm-4 col-12">
                                                <h6 class="mb-3 mb-lg-4 bold-text "><b>MENU</b></h6>
                                                <ul class="list-unstyled">
                                                    <li>O nas</li>
                                                    <li>Kontakt</li>
                                                    <li>Logowanie</li>
                                                    <li>Rejestracja</li>
                                                </ul>
                                            </div>
                                            <div class="col-xl-2 col-md-4 col-sm-4 col-12">
                                                <h6 class="mb-3 mb-lg-4 text-muted bold-text mt-sm-0 mt-5"><b>ADDRESS</b></h6>
                                                <p class="mb-1">Nadbystrzycka 35</p>
                                                <p>Lublin</p>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-xl-8 col-md-4 col-sm-4 col-auto my-md-0 mt-5 order-sm-1 order-3 align-self-end">
                                                <p class="social text-muted mb-0 pb-0 bold-text"> <span class="mx-2"><i class="fa fa-facebook" aria-hidden="true"></i></span> <span class="mx-2"><i class="fa fa-linkedin-square" aria-hidden="true"></i></span> <span class="mx-2"><i class="fa fa-twitter" aria-hidden="true"></i></span> <span class="mx-2"><i class="fa fa-instagram" aria-hidden="true"></i></span> </p><small class="rights"><span>&#174;</span>All Rights Reserved.</small>
                                            </div>

                                            <div class="col-xl-2 col-md-4 col-sm-4 col-auto order-2 align-self-end mt-3 ">
                                                <h6 class="text-muted bold-text"><b>Filip Kuranda</b></h6><small><span><i class="fa fa-envelope" aria-hidden="true"></i></span> filipkurandadev@gmail.com</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        </div>
                    </div>
                </article>
            </main>
        </div>
    </body>
</html>

