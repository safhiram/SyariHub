<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <nav class="navbar navbar-expand-sm   navbar-light bg-light" style="padding: .3%;">
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#"><img src="/img/unnamed.png" style="width:11%; padding-left:2%;"> <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <div class="social-part">
            <a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
          </div>
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
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
</div>

    <!-- Pengenalan -->
    <div id="pengenalan">
        <div class="row">
            <div class="col-sm-6" id="coba">
                <b>SyariHub - Aplikasi Kebutuhan Syariah</b>
                <br>
                <p>
                <a class="typewrite" data-period="2000" data-type='[ "Berbagai layanan syariah untuk ukhuwah Islamiyah"]' style="color:black; text-decoration:none; font-family:'Lucas Sans'; font-size: 120%;">
                <span class="wrap"></span>
                </a>
                </p>
            </div>
            <div class="col-sm-6"> 
                <iframe width="560" height="315" src="https://www.youtube.com/embed/alld44x9Fbc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
    <div id="macam_layanan">
        <div id="tulisan">
            <h4>Dengan Layanan Kami, Kebutuhan Anda Terpenuhi</h4>
        </div>
        <div id="atas" class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8" >
                <div class="row">
                    <div class="col-sm-2">
                        <a href="https://www.w3schools.com">
                            <figure>
                                <img src="/img/ojek.png" style="width:80%;">
                                <figcaption>Syari<br>Ride
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="https://www.w3schools.com">
                            <figure>
                                <img src="/img/ojek-bln.png" style="width:80%;">
                                <figcaption>Syari<br>Ride<br>Bulanan</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="https://www.w3schools.com">
                            <figure>
                                <img src="/img/nany.png" style="width:80%;">
                                <figcaption>Syari<br>Nany</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="https://www.w3schools.com">
                            <figure>
                                <img src="/img/catering.png" style="width:80%;">
                                <figcaption>Syari<br>Catering</figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2"></div>          
        </div>
        <br>
        <div id="bawah" class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="row" id="coba">
                <div class="col-sm-2">
                        <a href="https://www.w3schools.com">
                            <figure>
                                <img src="/img/ngaji.png" style="width:90%;">
                                <figcaption>Syari<br>Ngaji</figcaption>
                            </figure>
                        </a>
                </div>
                <div class="col-sm-2">
                        <a href="https://www.w3schools.com">
                            <figure>
                                <img src="/img/store.png" style="width:90%;">
                                <figcaption>Syari<br>Store</figcaption>
                            </figure>
                        </a>
                </div>
                <div class="col-sm-2">
                        <a href="https://www.w3schools.com">
                            <figure>
                                <img src="/img/lifestyle.png" style="width:90%;">
                                <figcaption>Syari<br>LifeStyle</figcaption>
                            </figure>
                        </a>
                </div>
            </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
    <div id="download">
        <div class="row">
            <div class="col-sm-6" id="download-1">
                <div id="tulisan">
                    <b>Download Sekarang !</b>
                </div>
                <br>
                <br>
                <div id="icon_gogleplay">
                    <a href="https://play.google.com/store/apps/details?id=com.ojesy.ojesy&hl=en">
                        <img src="/img/gogle_play.png" style="width:60%;">
                    </a>
                </div>
            </div>
            <div class="col-sm-6" id="gambar">
                <img src="/img/hp.png" style="width:110%;" >
            </div>
        </div>
    </div>
    <div id="telah_diliput">
        <div id="tulisan">
            Telah Diliput Oleh
        </div>
        <br><br>
        <div id="icon_media" class="row">
            <div class="col-sm-4">
                <a href="https://www.rcti.tv/">
                    <img src="/img/rcti.png" style="width:70%;">
                </a>
            </div> 
            <div class="col-sm-4">
                <a href="http://www.netmedia.co.id">
                    <img src="/img/nett.png" style="width:70%;">
                </a>
            </div>
            <div class="col-sm-4">
                <a href="https://www.trans7.co.id/">
                    <img src="/img/trans7.png" style="width:70%;">
                </a>
            </div>                
        </div>
    </div>
    <div id="footer">
        <a href="https://www.youtube.com/channel/UCviHmF9zS25B19n6lYarVJw">
            <img src="/img/youtube.png" style="width:9%;">
         </a>
         <a href="https://www.facebook.com/Admin1.Ojesy">
            <img src="/img/facebook.png" style="width:7%;">
         </a>
         <a href="https://www.instagram.com/syarihub.id/">
            <img src="/img/instagram.png" style="width:7%;">
         </a>   
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
    </body>
</html>
