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
            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p>Step 3</p>
            </div>
        </div>
    </div>
    <form role="form">
        <div class="setup-content" id="step-1">
            <div class="col-xs-12">
                <div class="col-sm-12">
                    <h3> Step 1</h3>
                    <div class="form-group">
                                        <label for="country" class="control-label">	
                                            Kota
                                        </label>
                                            <select class="form-control" name="country" id="country">
                                                <option value=""></option>
                                                <option value="">Surabaya</option>
                                                <option value="AR">Sidoarjo</option>
                                                <option value="AU">Malang</option>
                                                <option value="AT">Gresik</option>
                                                <option value="BY">Madiun</option>
                                                <option value="BE">Semarang</option>
                                                <option value="BE">Yogyakarta</option>
                                                <option value="BE">DKI Jakarta</option>
                                                <option value="BE">Tangerang</option>
                                                <option value="BE">Tangerang Selatan</option>
                                                <option value="BE">Bogor</option>
                                                <option value="BE">Depok</option>
                                                <option value="BE">Makassar</option>
                                                <option value="BE">Bandung</option>
                                                <option value="BE">Solo</option>
                                            </select>
                                    </div>
                    <div class="form-group">
                        <label class="control-label">Mengapa Tertarik bergabung di SyariHub?</label>
                        <input maxlength="100" type="text" required="required" class="form-control" placeholder="Alasan gabung di SyariHub" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Darimana kamu mengetahui SyariHub Ojek?</label>
                                            <select class="form-control" name="country" id="country">
                                                <option value=""></option>
                                                <option value="">Website</option>
                                                <option value="AR">Media Cetak</option>
                                                <option value="AU">Media Sosial</option>
                                                <option value="AT">Teman</option>
                                                <option value="BY">Sahabat Pengendara</option>
                                            </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Waktu yang dialokasikan untuk menjadi driver?</label><br>
                        <input type="radio" id="tgl_berlaku_plat"  name="tgl_berlaku_plat">Full Time <br>
                        <input type="radio" id="tgl_berlaku_plat"  name="tgl_berlaku_plat"> Part Time
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
                        <label class="control-label">Nama Lengkap</label>
                        <input maxlength="200" type="text" required="required" class="form-control" placeholder="Nama Lengkap" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Tanggal Lahir</label>
                        <input maxlength="200" type="date" required="required" class="form-control" placeholder="Tanggal Lahir"  />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Umur</label>
                        <input maxlength="200" type="text" required="required" class="form-control" placeholder="Umur" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Alamat Domisili</label>
                        <input maxlength="200" type="text" required="required" class="form-control" placeholder="Alamat Domisili" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Alamat Email</label>
                        <input maxlength="200" type="text" required="required" class="form-control" placeholder="Alamat Email" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">No. HP</label>
                        <input maxlength="200" type="text" required="required" class="form-control" placeholder="No. HP" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">No. KTP</label>
                        <input maxlength="200" type="text" required="required" class="form-control" placeholder="No.KTP" />
                    </div>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                </div>
            </div>
        </div>
        <div class="setup-content" id="step-3">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3> Step 3</h3>
                    <div class="form-group">
                        <label class="control-label">No. SIM</label>
                        <input maxlength="200" type="text" required="required" class="form-control" placeholder="No. SIM" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">SIM berlaku sampai kapan?</label>
                        <input maxlength="200" type="date" required="required" class="form-control" placeholder="Tanggal Kadaluarsa SIM" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Nomor Plat Nomor</label>
                        <input maxlength="200" type="text" required="required" class="form-control" placeholder="No. Plat" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Plat Nomor berlaku sampai kapan?</label>
                        <input maxlength="200" type="date" required="required" class="form-control" placeholder="Tanggal Kadaluarsa Plat Nomor" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Pengalaman berkendara</label>
                        <input maxlength="200" type="text" required="required" class="form-control" placeholder="Pengalaman Berkendara" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Nama Akun Medsos</label>
                        <input maxlength="200" type="text" required="required" class="form-control" placeholder="Nama Akun Media Sosial" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Bisa menggunakan Whatsapp?</label><br>
                        <input type="radio" id="tgl_berlaku_plat"  name="tgl_berlaku_plat">Ya <br>
                        <input type="radio" id="tgl_berlaku_plat"  name="tgl_berlaku_plat">Tidak
                    </div>
                    <div class="form-group">
                        <label class="control-label">Aktivitas saat ini</label>
                        <input maxlength="200" type="text" required="required" class="form-control" placeholder="Aktivitas saat ini" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Penghasilan Perbulan</label>
                        <input maxlength="200" type="text" required="required" class="form-control" placeholder="Penghasilan Perbulan" />
                    </div>

                    </div>
                    
                    <button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button>
                </div>
            </div>
        </div>
    </form>
</div>
<br><br><br>
<div class="container-fluid">
    <div id="tulisan">
    <b>MENGAPA SYARIHUB RIDE?</b>
    </div>
    <br><br>
    <div class="row">
        <div class="col-sm-1">
        </div>
        <div class="col-sm-2" id="keuntungan">
            <div>
                <img src="/img/keuntungan/uang.png">
            </div>
            <div>
                <br>Menambah penghasilan sehari hari
            </div>
        </div>
        <div class="col-sm-2" id="keuntungan">
            <div>
                <img src="/img/keuntungan/uang.png">
            </div>
            <div>
                <br>Menambah penghasilan sehari hari
            </div>
        </div>
        <div class="col-sm-2" id="keuntungan">
            <div>
                <img src="/img/keuntungan/uang.png">
            </div>
            <div>
                <br>Menambah penghasilan sehari hari
            </div>
        </div>
        <div class="col-sm-2" id="keuntungan">
            <div>
                <img src="/img/keuntungan/uang.png">
            </div>
            <div>
                <br>Menambah penghasilan sehari hari
            </div>
        </div>
        <div class="col-sm-2" id="keuntungan">
            <div>
                <img src="/img/keuntungan/uang.png">
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
    <b>TESTIMONI PENGENDARA</b>
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
                    <a><img alt="" src="/img/testimoni/photo.png"></a>
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
                Step 1
                </div>
                <div class="col-sm-6">
                    <img width="100%" src="/img/cara_mendaftar/1.png">
                </div>
                <div class="col-sm-4" id="kata">
                    Isikan data anda di form.
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
                Step 2
                </div>
                <div class="col-sm-6">
                    <img width="100%" src="/img/cara_mendaftar/2.png">
                </div>
                <div class="col-sm-4" id="kata">
                    Tunggu sampai anda dihubugi oleh pihak SyariHub
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