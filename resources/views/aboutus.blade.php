<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Odlot.pl/o-nas</title>

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
                <div class="row" style="text-align: center; margin-top: 120px;" >
                    <section>
                        <header> <h2>Kim jesteśmy?</h2></header>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vehicula dapibus cursus. Mauris a tellus vel ante semper auctor. Nulla quis efficitur magna. Proin tincidunt ornare condimentum. Cras faucibus euismod eros, ac iaculis augue. Vestibulum fringilla quis ante ac ullamcorper. Morbi blandit risus gravida tincidunt sollicitudin.

                            Quisque accumsan ante eros, et lacinia urna commodo sed. Morbi ultrices hendrerit ex, quis varius ex. Suspendisse dapibus lectus vel fermentum mattis. Ut vel sagittis erat, eu maximus odio. Sed ut est eu justo faucibus consequat. Cras enim felis, eleifend vel ultricies id, sagittis quis neque. Phasellus lectus lorem, venenatis et sem vitae, lacinia aliquam libero. In efficitur augue vitae porta aliquam. Curabitur vulputate libero quis ligula lobortis vestibulum. Sed erat sem, pretium semper nunc mollis, ornare commodo arcu. Morbi cursus dictum risus vel tincidunt.

                            Duis rutrum feugiat malesuada. Nunc nisi dui, ornare ut purus nec, tempus finibus sapien. Nunc at convallis nunc. Vestibulum tortor velit, facilisis quis velit quis, molestie molestie felis. In mollis scelerisque libero, et interdum velit imperdiet eget. Curabitur convallis purus sapien, at elementum lorem rutrum eget. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi fringilla ac eros sed elementum. Vestibulum vehicula, arcu vel commodo aliquam, leo lorem pharetra nibh, ut elementum lacus nunc nec enim. Quisque tincidunt nulla ac fringilla congue. Curabitur a ipsum viverra, bibendum lorem sed, semper est. Etiam velit lacus, blandit eu posuere ornare, auctor non enim.p>
                        <h2>Opinie naszych klientów:</h2>
                    </section>
                </div>

                <div class="row" style="font-size: 40px; font-family: 'Bradley Hand ITC';">
                    <div class="col">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor justo gravida augue sagittis tincidunt. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                    <p style="font-family: Bahnschrift">Jan Kowalski</p>
                    </div>
                    <div class="col">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor justo gravida augue sagittis tincidunt. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        <p style="font-family: Bahnschrift">Andrzej Nowak</p>
                    </div>
                    <div class="col">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor justo gravida augue sagittis tincidunt. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        <p style="font-family: Bahnschrift">Filip Larawelski</p>
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
