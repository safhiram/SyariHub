<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SyariHub</title>
        <link rel="icon" type="icon/image" href="/img/unnamed.png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="/css/welcome.css">
        <!-- Boostrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <!-- Javascript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
    <body>
    <!--============================= Navbar =============================-->
<!-- Just an image -->
        <nav class="navbar navbar-expand-sm   navbar-light bg-light">
            <img src="/img/unnamed.png" width="12%;" style="padding-left:8%;min-width:60px;margin-right:3%;">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item dropdown dmenu">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Layanan
                        </a>
                        <div class="dropdown-menu sm-menu">
                        <a class="dropdown-item" href="ride"><img src="/img/icon/ojek.png">   Syari Ride</a>
                        <a class="dropdown-item" href="ride-bulanan"><img src="/img/icon/ojek-bln.png">   Syari Ride Bulanan</a>
                        <a class="dropdown-item" href="nanny"><img src="/img/icon/nany.png">   Syari Nanny</a>
                        <a class="dropdown-item" href="ngaji"><img src="/img/icon/ngaji.png">   Syari Ngaji</a>
                        <a class="dropdown-item" href="catering"><img src="/img/icon/catering.png">   Syari Catering</a>
                        <a class="dropdown-item" href="massage"><img src="/img/icon/massage.png">   Syari Massage</a>
                        <a class="dropdown-item" href="store"><img src="/img/icon/store.png">   Syari Store</a>
                        <a class="dropdown-item" href="lifestyle"><img src="/img/icon/lifestyle.png">   Syari Lifestyle</a>
                    </div>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Berita</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tentang Kami</a>
                </li>
                </ul>
                <ul class="navbar-right navbar-nav mr-4">
                <li class="nav-item dropdown dmenu">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Gabung SyariHub
                    </a>
                    <div class="dropdown-menu sm-menu">
                    <a class="dropdown-item" href="/mitra-pengendara"><img src="/img/icon/ojek.png">   Pengendara</a>
                    <a class="dropdown-item" href="/mitra-nanny"><img src="/img/icon/nany.png">   Nanny</a>
                    <a class="dropdown-item" href="/mitra-mentor"><img src="/img/icon/ngaji.png">   Mentor Al-Quran</a>
                    </div>
                </li>
                </ul>
                </div>
        </nav>
        <!-- Mulai Ngoding -->

        <!-- Selesai Ngoding -->
        <script type="text/javascript">
            $(document).ready(function () {
            $('.navbar-light .dmenu').hover(function () {
                    $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
                }, function () {
                    $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
                });
            });
        </script>
    </body>
</html>
