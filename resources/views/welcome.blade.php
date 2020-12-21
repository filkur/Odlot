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
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <div class="container-fluid" >
            <header>
                <nav class="navbar col-sm-border">
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
            <div class="container">
                <h2>Lorem ipsum</h2>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ultrices justo et eleifend laoreet. Pellentesque sit amet pulvinar ipsum. Etiam vitae lacinia tellus. Curabitur tincidunt, felis eu finibus consequat, justo lacus mattis dolor, sed iaculis odio arcu nec velit. Curabitur egestas, tellus at volutpat elementum, urna tortor porta neque, sed lobortis orci purus id est. Integer condimentum, erat quis lobortis pulvinar, ante tellus fermentum erat, vitae fermentum risus mauris vitae elit. Duis eu sapien purus. Morbi nec consectetur eros. Maecenas nec aliquet magna. Aliquam ipsum tortor, volutpat at risus ac, fermentum ultrices ligula. Nam blandit, massa id vulputate ornare, arcu est ornare tellus, et sollicitudin leo elit non neque.

                Duis tristique massa magna, accumsan tristique dui viverra at. Ut dictum tellus et metus scelerisque, vitae condimentum odio sodales. Phasellus molestie ante a tincidunt commodo. Donec vel dictum leo. Nunc non sem orci. Curabitur mollis massa sit amet nibh scelerisque scelerisque. Curabitur iaculis porta porta.
            </div>
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
