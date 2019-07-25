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
    <form role="form" action="" method="post" autocomplete="off">
        @csrf
        <div class="setup-content" id="step-1">
            <div class="col-xs-12">
                <div class="col-sm-12">
                    <h3> Step 1</h3>
                    <div class="form-group">
                                        <label for="kota" class="control-label">	
                                            Kota
                                        </label>
                                            <select class="form-control" name="kota" id="kota">
                                                <option value="null"></option>
                                                <option value="Surabaya">Surabaya</option>
                                                <option value="Sidoarjo">Sidoarjo</option>
                                                <option value="Malang">Malang</option>
                                                <option value="Gresik">Gresik</option>
                                                <option value="Madiun">Madiun</option>
                                                <option value="Semarang">Semarang</option>
                                                <option value="Yogyakarta">Yogyakarta</option>
                                                <option value="DKI_Jakarta">DKI Jakarta</option>
                                                <option value="Tangerang">Tangerang</option>
                                                <option value="Tangerang_Selatan">Tangerang Selatan</option>
                                                <option value="Bogor">Bogor</option>
                                                <option value="Depok">Depok</option>
                                                <option value="Makassar">Makassar</option>
                                                <option value="Bandung">Bandung</option>
                                                <option value="Solo">Solo</option>
                                            </select>
                                    </div>
                    <div class="form-group">
                        <label class="control-label">Mengapa Tertarik bergabung di SyariHub?</label>
                        <input maxlength="100" type="text" name="alasan" id="alasan" required="required" class="form-control" placeholder="Alasan gabung di SyariHub" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Darimana kamu mengetahui SyariHub Ojek?</label>
                                            <select class="form-control" name="darimana" id="darimana">
                                                <option value="null"></option>
                                                <option value="Website">Website</option>
                                                <option value="Media_Cetak">Media Cetak</option>
                                                <option value="Media_Sosial">Media Sosial</option>
                                                <option value="Teman">Teman</option>
                                                <option value="Sahabat_Pengendara">Sahabat Pengendara</option>
                                            </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Waktu yang dialokasikan untuk menjadi driver?</label><br>
                        <input type="radio" id="jam_kerja"  name="jam_kerja" value="Full_Time">Full Time <br>
                        <input type="radio" id="jam_kerja"  name="jam_kerja" value="Part_Time"> Part Time
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
                        <input maxlength="200" type="text" name="nama_lengkap" id="nama_lengkap" required="required" class="form-control" placeholder="Nama Lengkap" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Tanggal Lahir</label>
                        <input maxlength="200" type="date" name="tanggal_lahir" id="tanggal_lahir" required="required" class="form-control" placeholder="Tanggal Lahir"  />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Umur</label>
                        <input maxlength="200" type="text" name="umur" id="umur" required="required" class="form-control" placeholder="Umur" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Alamat Domisili</label>
                        <input maxlength="200" type="text" name="alamat_domisili" id="alamat_domisili" required="required" class="form-control" placeholder="Alamat Domisili" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Alamat Email</label>
                        <input maxlength="200" type="text" name="alamat_email" id="alamat_email required="required" class="form-control" placeholder="Alamat Email" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">No. HP</label>
                        <input maxlength="200" type="text" name="no_hp" id="no_hp" required="required" class="form-control" placeholder="No. HP" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">No. KTP</label>
                        <input maxlength="200" type="text" name="no_ktp" id="no_ktp" required="required" class="form-control" placeholder="No.KTP" />
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
                        <input maxlength="200" type="text" name="no_sim" id="no_sim" required="required" class="form-control" placeholder="No. SIM" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">SIM berlaku sampai kapan?</label>
                        <input maxlength="200" type="date" name="tgl_berlaku_sim" id="tgl_berlaku_sim" required="required" class="form-control" placeholder="Tanggal Kadaluarsa SIM" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Nomor Plat Nomor</label>
                        <input maxlength="200" type="text" name="no_plat" id="no_plat" required="required" class="form-control" placeholder="No. Plat" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Plat Nomor berlaku sampai kapan?</label>
                        <input maxlength="200" type="date" name="tgl_berlaku_plat" id="tgl_berlaku_plat" required="required" class="form-control" placeholder="Tanggal Kadaluarsa Plat Nomor" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Pengalaman berkendara</label>
                        <input maxlength="200" type="text" name="pengalaman" id="pengalaman" required="required" class="form-control" placeholder="Pengalaman Berkendara" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Nama Akun Medsos</label>
                        <input maxlength="200" type="text" name="medsos" id="medsos" required="required" class="form-control" placeholder="Nama Akun Media Sosial" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Bisa menggunakan Whatsapp?</label><br>
                        <input type="radio" id="bisa_whatsapp"  name="bisa_whatsapp" value="ya">Ya <br>
                        <input type="radio" id="bisa_whatsapp"  name="bisa_whatsapp" value="tidak">Tidak
                    </div>
                    <div class="form-group">
                        <label class="control-label">Aktivitas saat ini</label>
                        <input maxlength="200" type="text" name="aktivitas" id="aktivitas" required="required" class="form-control" placeholder="Aktivitas saat ini" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Penghasilan Perbulan</label>
                        <input maxlength="200" type="text" name="penghasilan_perbulan" id="penghasilan_perbulan" required="required" class="form-control" placeholder="Penghasilan Perbulan" />
                    </div>

                    </div>
                    
                    <button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button>
                </div>
            </div>
        </div>
    </form>
</div>
<br><br>

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