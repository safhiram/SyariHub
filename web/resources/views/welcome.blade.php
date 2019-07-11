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
    </head>
    <body>
    <!--============================= Navbar =============================-->
    <div class="navbar">
        <img src="/img/unnamed.png" style="width:5%;">
    </div>
 <!-- Slideshow container -->
<div id="slideshow">
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <img src="/img/MOKUP_CATERING.png" style="width:100%">
        </div>
      
        <div class="mySlides fade">
          <img src="/img/MOKUP_NANNY.png" style="width:100%">
        </div>
      
        <div class="mySlides fade">
          <img src="/img/SYARI_RIDE.png" style="width:100%">
        </div>
      
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
</div>
<br>

    <!-- Pengenalan -->
    <div id="pengenalan">
        <div class="row">
            <div class="col-sm-6">
                <b>SyariHub - Aplikasi Kebutuhan Syariah</b>
                <br>
                <p>Berbagai layanan syariah untuk ukhuwah Islamiyah</p>
            </div>
            <div class="col-sm-6"> 
                <video width="600" controls>
                <source src="/video/ojesy.mp4" type="video/mp4">
                <source src="/video/ojesy.ogg" type="video/ogg">
                Your browser does not support HTML5 video.
                </video>
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
                                <figcaption>Syari-Ride</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="https://www.w3schools.com">
                            <figure>
                                <img src="/img/nany.png" style="width:80%;">
                                <figcaption>Syari-Ride</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="https://www.w3schools.com">
                            <figure>
                                <img src="/img/ojek-bln.png" style="width:80%;">
                                <figcaption>Syari-Ride</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="https://www.w3schools.com">
                            <figure>
                                <img src="/img/catering.png" style="width:80%;">
                                <figcaption>Syari-Ride</figcaption>
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
                <div class="row">
                <div class="col-sm-2">
                        <a href="https://www.w3schools.com">
                            <figure>
                                <img src="/img/ngaji.png" style="width:90%;">
                                <figcaption>Syari-Ngaji</figcaption>
                            </figure>
                        </a>
                </div>
                <div class="col-sm-2">
                        <a href="https://www.w3schools.com">
                            <figure>
                                <img src="/img/store.png" style="width:90%;">
                                <figcaption>Syari-Store</figcaption>
                            </figure>
                        </a>
                </div>
                <div class="col-sm-2">
                        <a href="https://www.w3schools.com">
                            <figure>
                                <img src="/img/lifestyle.png" style="width:90%;">
                                <figcaption>Syari-LifeStyle</figcaption>
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
        <a href="">
            <img src="/img/twitter.png" style="width:7%;">
         </a>
         <a href="">
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
    </body>
</html>
