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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
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
<<<<<<< HEAD
                <a class="dropdown-item" href="ride"><img src="/img/icon/ojek.png">   SyariHub Ride</a>
                        <a class="dropdown-item" href="ride-bulanan"><img src="/img/icon/ojek-bln.png">   SyariHub Ride Bulanan</a>
                        <a class="dropdown-item" href="nanni"><img src="/img/icon/nany.png">   SyariHub Nanny</a>
                        <a class="dropdown-item" href="ngaji"><img src="/img/icon/ngaji.png">   SyariHub Al-Quran Mentor</a>
                        <a class="dropdown-item" href="catering"><img src="/img/icon/catering.png">   SyariHub Catering</a>
                        <a class="dropdown-item" href="massage"><img src="/img/icon/massage.png">   SyariHub Massage</a>
                        <a class="dropdown-item" href="store"><img src="/img/icon/store.png">   SyariHub Store</a>
=======
                <a class="dropdown-item" href="ride"><img src="/img/icon/ojek.png">   Syari Ride</a>
                <a class="dropdown-item" href="ride-bulanan"><img src="/img/icon/ojek-bln.png">   Syari Ride Bulanan</a>
                <a class="dropdown-item" href="nanny"><img src="/img/icon/nany.png">   Syari Nanny</a>
                <a class="dropdown-item" href="ngaji"><img src="/img/icon/ngaji.png">   Syari Ngaji</a>
                <a class="dropdown-item" href="catering"><img src="/img/icon/catering.png">   Syari Catering</a>
                <a class="dropdown-item" href="massage"><img src="/img/icon/massage.png">   Syari Massage</a>
                <a class="dropdown-item" href="store"><img src="/img/icon/store.png">   Syari Store</a>
                <a class="dropdown-item" href="lifestyle"><img src="/img/icon/lifestyle.png">   Syari Lifestyle</a>
>>>>>>> master
            </div>
            </li>
        <li class="nav-item">
            <li class="nav-item">
            <a class="nav-link" href="#">Berita</a>
            </li>
        <li class="nav-item">
            <li class="nav-item">
              <a class="nav-link" href="#">Berita</a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="/tentang-kami">Tentang Kami</a>
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
              <a class="dropdown-item" href="/mitra-massage"><img src="/img/icon/massage.png">   Massage</a>
            </div>
          </li>
        </ul>
        </div>
</nav>
 <!-- Slideshow container -->
<div id="slideshow">
    <div class="slideshow">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <img src="/img/cob.png" style="width:100%">
        </div>
      
        <div class="mySlides fade">
          <img src="/img/mockup1.png" style="width:100%">
        </div>
      
        <div class="mySlides fade">
          <img src="/img/mockup2.png" style="width:100%">
        </div>
      
        <!-- Next and previous buttons -->
        <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
    </div>
</div>

    <!-- Pengenalan -->
    <div id="pengenalan">
        <div class="row">
            <div class="col-sm-6" id="coba">
                <b>SyariHub <br> Aplikasi Kebutuhan Syariah</b>
                <br>
                <p>
                <a class="typewrite" data-period="2000" data-type='[ "  Berbagai layanan syariah untuk ukhuwah Islamiyah"]' style="color:black; text-decoration:none; font-family:'Lucas Sans'; font-size: 100%;">
                <span class="wrap"></span>
                </a>
                </p>
            </div>
            <div class="col-sm-6"> 
                <iframe width="100%" height="150%" src="https://www.youtube.com/embed/alld44x9Fbc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
    <br><br><br>
    <div id="macam_layanan">
        <div id="tulisan">
            <b>Dengan Layanan Syari, Kebutuhan Muslim Terpenuhi</b>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4" ></div>
                <div class="col-sm-4" >
                    <div class="row" class="container-fluid">
                        <div class="col-sm-3">
                        <a href="ride">
                            <figure>
                                <img src="/img/ojek.png" style="width:90%;max-width:100px;">
                                
                                <figcaption style>Syari<br>Ride
                                </figcaption>
                            </figure>
                        </a>
                        </div>
                        <div class="col-sm-3" >
                        <a href="ride-bulanan">
                            <figure>
                                <img src="/img/ojek-bln.png" style="width:90%;max-width:100px;">
                                <figcaption style>Syari<br>Ride<br>Bulanan
                                </figcaption>
                            </figure>
                        </a>
                        </div>
                        <div class="col-sm-3">
                        <a href="nanni">
                            <figure>
                                <img src="/img/nany.png" style="width:90%;max-width:100px;">
                                <figcaption style>Syari<br>Nanny
                                </figcaption>
                            </figure>
                        </a>
                        </div>
                        <div class="col-sm-3" >
                        <a href="ngaji">
                            <figure>
                                <img src="/img/ngaji.png" style="width:90%;max-width:100px;">
                                <figcaption style>Syari<br>Ngaji
                                </figcaption>
                            </figure>
                        </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4" ></div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4" ></div>
                <div class="col-sm-4" >
                    <div class="row" class="container-fluid">
                        <div class="col-sm-4" >
                        <a href="catering">
                            <figure>
                                <img src="/img/catering.png" style="width:60%;max-width:100px;">
                                <figcaption style>Syari<br>Catering
                                </figcaption>
                            </figure>
                        </a>
                        </div>
                        <div class="col-sm-4" style="margin-left:-2%;">
                        <a href="massage">
                            <figure>
                                <img src="/img/massage.png" style="width:60%;max-width:100px;">
                                <figcaption style>Syari<br>Massage
                                </figcaption>
                            </figure>
                        </a>
                        </div>
                        <div class="col-sm-4">
                        <a href="store">
                            <figure>
                                <img src="/img/store.png" style="width:60%;max-width:100px;">
                                <figcaption style>Syari<br>Store
                                </figcaption>
                            </figure>
                        </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
    </div>
    <div id="download">
        <div class="row">
            <div class="col-sm-6" id="download-1">
                <div id="tulisan">
                    <b>DOWNLOAD SEKARANG !</b>
                </div>
                <br>
                <div id="icon_gogleplay">
                    <a href="https://play.google.com/store/apps/details?id=com.ojesy.ojesy&hl=en">
                        <img src="/img/gogle_play.png" style="width:60%;">
                    </a>
                </div>
            </div>
            <div class="col-sm-6" id="gambar">
            <br><br>
                <img src="/img/hp.png" style="width:100%;" >
            </div>
        </div>
    </div>
    <br>
    <div id="telah_diliput">
        <div id="tulisan">
            <b>Telah Diliput Oleh</b>
        </div>
        <div id="iconmedia">
            <div class="hm" >
                <img src="/img/rcti.png" style="width:70%;max-width:200px;text-align:center;"> 
            </div>
            <div class="hm">
                <img src="/img/nett.png" style="width:70%;max-width:200px;">
            </div>
            <div class="hm">
                <img src="/img/trans7.png" style="width:70%;max-width:200px;">
            </div>
        </div>
    </div>
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
    <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none"; 
    }
  
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
    </script>
    <script>
    //made by vipul mirajkar thevipulm.appspot.com
var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
    </script>
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
