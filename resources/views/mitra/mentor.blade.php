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
        <link rel="stylesheet" type="text/css" href="/css/form.css">
        <link rel="stylesheet" type="text/css" href="/css/mitra.css">
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
            <li class="nav-item dropdown dmenu">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Layanan
                </a>
                <div class="dropdown-menu sm-menu">
                <a class="dropdown-item" href="#"><img src="/img/icon/ojek.png">   Syari Ride</a>
                <a class="dropdown-item" href="#"><img src="/img/icon/ojek-bln.png">   Syari Ride Bulanan</a>
                <a class="dropdown-item" href="#"><img src="/img/icon/nany.png">   Syari Nanny</a>
                <a class="dropdown-item" href="#"><img src="/img/icon/ngaji.png">   Syari Ngaji</a>
                <a class="dropdown-item" href="#"><img src="/img/icon/catering.png">   Syari Catering</a>
                <a class="dropdown-item" href="#"><img src="/img/icon/massage.png">   Syari Massage</a>
                <a class="dropdown-item" href="#"><img src="/img/icon/store.png">   Syari Store</a>
                <a class="dropdown-item" href="#"><img src="/img/icon/lifestyle.png">   Syari Lifestyle</a>
            </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Berita</a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Bantuan</a>
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
              <a class="dropdown-item" href="/mitra-massage"><img src="/img/icon/massage.png">   Massage</a>
            </div>
          </li>
        </ul>
        </div>
</nav>

<!--Mulai Ngoding isi page di sini -->
<br>
<div class="container">
        <div id="tulisan">
                <b>FORM PENDAFTARAN SYARIHUB MENTOR AL-QURAN</b>
        </div><br>
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                <p>Step 1</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p>Step 2</p>
            </div>
        </div>
    </div>
    <form role="form" action="" method="post" autocomplete="off">
        @csrf
        <div class="setup-content" id="step-1">
            <div class="col-xs-12">
                <div class="col-sm-12">
                    <h3> Step 1</h3>
                    <div class="form-group">
                        <label class="control-label">Nama Lengkap</label>
                        <input maxlength="100" type="text" name="nama_lengkap" id="nama_lengkap" required="required" class="form-control" placeholder="Nama Lengkap" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Nomor Whatsapp</label>
                        <input maxlength="100" type="text" name="no_whatsapp" id="no_whatsapp" required="required" class="form-control" placeholder="Nomor Whatsapp" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" required="required" class="form-control" placeholder="Tanggal Lahir" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Alamat</label>
                        <input maxlength="100" type="text" name="alamat" id="alamat" required="required" class="form-control" placeholder="Alamat" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Pendidikan Terakhir</label>
                        <select class="form-control" name="pendidikan" id="pendidikan">
                                                <option value="null"></option>
                                                <option value="Universitas">Universitas</option>
                                                <option value="SMA">SMA</option>
                                                <option value="SMP">SMP</option>
                                                <option value="SD">SD</option>
                          </select>
                    </div>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                </div>
            </div>
        </div>
        <div class="setup-content" id="step-2">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3> Step 2</h3>
                    <div class="form-group">
                        <label class="control-label">Khatam Al-Quran berapa juz?</label>
                        <select class="form-control" name="khatam_AlQuran" id="khatam_AlQuran">
                                                <option value="null"></option>
                                                <option value="kurang dari 1 kali">Kurang dari 1 kali</option>
                                                <option value="1 kali">1 kali</option>
                                                <option value="2 kali">2 kali</option>
                                                <option value="lebih dari 2 kali">Lebih dari 2 kali</option>
                          </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Jumlah Juz yang dihafal</label>
                        <select class="form-control" name="jml_juz" id="jml_juz">
                                                <option value="null"></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                          </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Sebutkan pengalaman yang mendukung kemampuan membaca Al-Quran!</label>
                        <input maxlength="200" type="text" name="pengalaman" id="pengalaman" required="required" class="form-control" placeholder="Pengalaman yang mendukung" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Apakaha Anda bisa menjelaskan tentang aturan membaca Al-Quran dengan Tajwid?</label>
                        <input maxlength="1000" type="text" name="penjelasan" id="penjelasan" required="required" class="form-control" />
                    </div>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                </div>
            </div>
        </div>
    </form>
</div>
<br><br><br>
<div id="pertama">
<div class="container-fluid">
    <div id="tulisan">
    <b>MENGAPA SYARIHUB MENTOR AL-QURAN?</b>
    </div>
    <br><br>
    <div class="row">
        <div class="col-sm-1">
        </div>
        <div class="col-sm-2" id="keuntungan">
            <div>
                <img src="/img/duit.png">
            </div>
            <div>
                <br>Menambah penghasilan sehari hari
            </div>
        </div>
        <div class="col-sm-2" id="keuntungan">
            <div>
                <img src="/img/duit.png">
            </div>
            <div>
                <br>Menambah penghasilan sehari hari
            </div>
        </div>
        <div class="col-sm-2" id="keuntungan">
            <div>
                <img src="/img/duit.png">
            </div>
            <div>
                <br>Menambah penghasilan sehari hari
            </div>
        </div>
        <div class="col-sm-2" id="keuntungan">
            <div>
                <img src="/img/duit.png">
            </div>
            <div>
                <br>Menambah penghasilan sehari hari
            </div>
        </div>
        <div class="col-sm-2" id="keuntungan">
            <div>
                <img src="/img/duit.png">
            </div>
            <div>
                <br>Menambah penghasilan sehari hari
            </div>
        </div>
        <div class="col-sm-1">
        </div>
    </div>
</div>
<br><br><br>
<div class="container">
    <div id="tulisan">
    <b>TESTIMONI MENTOR AL-QURAN</b>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-3">
        </div>
		<div class="col-lg-6 col-sm-6">

            <div class="card hovercard">
                <div class="cardheader" style="background-color:white;">
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
</div>
</div>
<br><br>
<div class="container-fluid">
    <div id="tulisan">
        <b>CARA MENDAFTAR</b>
    </div>
    <br>
    <div class="row" id="bor">
        <div class="col-sm-1">
        </div>
        <div class="col-sm-10">
            <div class="row">
                <div class="col-sm-2" id="step">
                <h2>STEP 1</h2> 
                <p>Isikan data anda di form</p> 
                </div>
                <div class="col-sm-6" id="stepp">
                    <img width="100%" src="/img/form.png">
                </div>
            </div>
        </div>
        <div class="col-sm-1">
        </div>
    </div>
    <div class="row" id="bor">
        <div class="col-sm-1">
        </div>
        <div class="col-sm-10">
            <div class="row">
                <div class="col-sm-2" id="step">
                <h2>STEP 2</h2>
                <p>Tunggu sampai anda dihubugi oleh pihak SyariHub</p>
                </div>
                <div class="col-sm-6" id="stepp">
                        <img width="100%" src="/img/telfon.png">
                </div>
            </div>
        </div>
        <div class="col-sm-1">
        </div>
    </div>
</div>
<!--Selesai Isi Page -->
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

<script type="text/javascript">
$(document).ready(function () {

var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn');

allWells.hide();

navListItems.click(function (e) {
    e.preventDefault();
    var $target = $($(this).attr('href')),
            $item = $(this);

    if (!$item.hasClass('disabled')) {
        navListItems.removeClass('btn-primary').addClass('btn-default');
        $item.addClass('btn-primary');
        allWells.hide();
        $target.show();
        $target.find('input:eq(0)').focus();
    }
});

allNextBtn.click(function(){
    var curStep = $(this).closest(".setup-content"),
        curStepBtn = curStep.attr("id"),
        nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
        curInputs = curStep.find("input[type='text'],input[type='url']"),
        isValid = true;

    $(".form-group").removeClass("has-error");
    for(var i=0; i<curInputs.length; i++){
        if (!curInputs[i].validity.valid){
            isValid = false;
            $(curInputs[i]).closest(".form-group").addClass("has-error");
        }
    }

    if (isValid)
        nextStepWizard.removeAttr('disabled').trigger('click');
});

$('div.setup-panel div a.btn-primary').trigger('click');
});
</script>
    </body>
</html>