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
        <link rel="stylesheet" type="text/css" href="/css/layanan.css">
        <link rel="stylesheet" type="text/css" href="/css/mitra.css">
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
        <section class="c-section">
            <div class="c-hero c-hero--banner-full c-hero--font-2">
                <div class="container-fluid" style="padding:0%;">
                    <div class="row js-slider-both" data-slider-desktop="true,false,1,true,true,true"
                        data-slider-mobile="true,false,1,true,true,true">
                        
                        
                        <div class="col-12">
                            <div class="c-hero--banner-full__wrapper container-fluid">
                                <picture> 
                                <source src="/img/header_layanan/mas1.png" srcset="/img/header_layanan/mas1.png 400w, /img/header_layanan/mas1.png 800w, /img/header_layanan/mas1.png 3000w" media="(min-width: 769px)" alt="SyariHub-Bulanan" type="image/webp">
                                <source src="/img/header_layanan/mas2.png" srcset="/img/header_layanan/mas2.png 400w, /img/header_layanan/mas2.png 800w, /img/header_layanan/mas2.png 3000w" media="(min-width: 769px)" alt="SyariHub-Bulanan" type="image/jpeg">
                                <img src="/img/header_layanan/mas1.png" srcset="/img/header_layanan/mas1.png 400w, /img/header_layanan/mas1.png 800w, /img/header_layanan/mas1.png 3000w"alt="SyariHub-Bulanan" type="image/webp">
                                <img src="/img/header_layanan/mas2.png" srcset="/img/header_layanan/mas2.png 400w, /img/header_layanan/mas2.png 800w, /img/header_layanan/mas2.png 3000w" alt="SyariHub-Bulanan" type="image/jpeg">
                                </picture>


                                <div class="container">
                                    <div class="c-hero--banner-full__content u-text-align__center--mobile u-text-align__center--tablet">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                            <h1>SyariHub<br>MASSAGE</h1>
                                                
                                                <p style="color:white;font-family:'Times New Rowman';font-size: 105%;">
                                                    <strong>SyariHub paham bahwa tugas sebagai ibu sangat<br>beragam dan mulia.<br>Maka Syari Nanny akan memastikan ibu terbantu<br>tugasnya menjaga dan mengasuh anak.</strong>
                                                </p>      
                                                <div class="c-hero--banner-full__content__action mt-2 mt-md-4">
                                                    <a href="https://play.google.com/store/apps/details?id=com.ojesy.ojesy&hl=en">
                                                        <button type="button" class="js-show-popup"
                                                            data-id="content-video-hero-2">
                                                            DOWNLOAD SEKARANG
                                                            
                                                        </button>
                                                    </a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <div class="container-fluid" id="satu">
            <div id="tulisan">
            <b>MENGAPA SYARIHUB MASSAGE?</b>
            </div>
            <br><br>
            <div class="row">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-3" id="keuntungan">
                    <div>
                        <img src="/img/terpercaya.png">
                    </div>
                    <div>
                        <br>Terpercaya
                    </div>
                </div>
                <div class="col-sm-3" id="keuntungan">
                    <div>
                        <img src="/img/woman.png">
                    </div>
                    <div>
                        <br>Nanny Muslimah
                    </div>
                </div>
                <div class="col-sm-3" id="keuntungan">
                    <div>
                        <img src="/img/sahabat.png">
                    </div>
                    <div>
                        <br>Bersahabat
                    </div>
                </div>
                <div class="col-sm-1">
                </div>
            </div>   
        </div><br><br><br>
        <div class="container" id="dua">
            <div id="tulisan">
            <b>TESTIMONI CUSTOMER MASSAGE</b>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-6 col-sm-6">

                    <div class="card hovercard">
                        <div class="cardheader">
                        </div>
                        <div class="avatar">
                            <a><img alt="" src="/img/profil.png"></a>
                        </div>
                        <div class="info">
                            <div class="title">
                                <a target="_blank" href="http://www.doweb.in/">Heni A. - Sidoarjo</a>
                            </div>
                            <div class="desc">Sejak bergabung menjadi Sahabat Penendara SyariHub Ride <br> saya mulai berhijab dan mengikuti pengajian rutin RT.</div>
                            <div class="desc">Anak juga suka dengan perkembangan tersebut.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                </div>
            </div>
        </div><br><br><br>
        <div class="container" id="tiga">
            <div id="tulisan">
            <b>CARA PAKAI SYARIHUB-MASSAGE</b>
            </div>
            
            <div class="section" id="carousel">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 mr-auto ml-auto">

                            <!-- Carousel Card -->
                            <div class="card card-raised card-carousel">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3" class=""></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                    <img class="d-block w-100" src="https://rawgit.com/creativetimofficial/material-kit/master/assets/img/bg.jpg"
                                    alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                    <img class="d-block w-100" src="https://rawgit.com/creativetimofficial/material-kit/master/assets/img/bg2.jpg"  alt="Second slide">
                    
                                    </div>
                                    <div class="carousel-item">
                                    <img class="d-block w-100" src="https://rawgit.com/creativetimofficial/material-kit/master/assets/img/bg3.jpg" alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                    <img class="d-block w-100" src="https://rawgit.com/creativetimofficial/material-kit/master/assets/img/bg2.jpg"  alt="Second slide">
                    
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <i class="material-icons"><</i>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <i class="material-icons">></i>
                                    <span class="sr-only">Next</span>
                                </a>
                                </div>
                            </div>
                            <!-- End Carousel Card -->

                        </div>
                    </div>
                </div>
            </div>
    </div>
    <br><br>
        <!-- Selesai Ngoding -->
        <div id="footer" class="container-fluid">
        <div class="row">
            <div class="col-sm-5">
            </div>
            <div class="col-sm-2">
                <div class="row">
                    <div class="yap">
                        <a href="https://www.youtube.com/channel/UCviHmF9zS25B19n6lYarVJw">
                            <img src="/img/youtube.png" style="width:120%;max-width:40px;">
                        </a>
                    </div>
                    <div class="yap">
                        <a href="https://www.facebook.com/Admin1.Ojesy">
                            <img src="/img/facebook.png" style="width:100%;max-width:40px;">
                        </a>
                    </div>
                    <div class="yap">
                        <a href="https://www.instagram.com/syarihub.id/">
                            <img src="/img/instagram.png" style="width:100%;max-width:40px;">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
            </div>
        </div>
    </div>
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
