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
          <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item dropdown dmenu">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Layanan
                </a>
                <div class="dropdown-menu sm-menu">
                <a class="dropdown-item" href="ride"><img src="/img/icon/ojek.png">   SyariHub Ride</a>
                        <a class="dropdown-item" href="ride-bulanan"><img src="/img/icon/ojek-bln.png">   SyariHub Ride Bulanan</a>
                        <a class="dropdown-item" href="nanni"><img src="/img/icon/nany.png">   SyariHub Nanny</a>
                        <a class="dropdown-item" href="ngaji"><img src="/img/icon/ngaji.png">   SyariHub Al-Quran Mentor</a>
                        <a class="dropdown-item" href="catering"><img src="/img/icon/catering.png">   SyariHub Catering</a>
                        <a class="dropdown-item" href="massage"><img src="/img/icon/massage.png">   SyariHub Massage</a>
                        <a class="dropdown-item" href="store"><img src="/img/icon/store.png">   SyariHub Store</a>
            </div>
            </li>
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

<!--Mulai Ngoding isi page di sini -->
<br>
<div class="container">
        <div id="tulisan">
                <b>FORM PENDAFTARAN SYARIHUB MASSAGE</b>
        </div>
        <br>
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
                        <label class="control-label">Nama Lengkap</label>
                        <input maxlength="100" type="text" name="nama_lengkap" id="nama_lengkap" required="required" class="form-control" placeholder="Nama Lengkap" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Tempat Lahir</label>
                        <input maxlength="100" type="text" name="tempat_lahir" id="tempat_lahir" required="required" class="form-control" placeholder="Tempat Lahir" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" required="required" class="form-control" placeholder="Tanggal Lahir" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                                <option value="null"></option>
                                                <option value="Wanita">Wanita</option>
                                                <option value="Pria">Pria</option>
                          </select>
                    </div>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div></div>
        </div>
        <div class="setup-content" id="step-2">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3> Step 2</h3>
                    <div class="form-group">
                        <label class="control-label">Alamat Sesuai KTP</label>
                        <input maxlength="100" type="text" name="alamat_ktp" id="alamat_ktp" required="required" class="form-control" placeholder="Alamat Sesuai KTP" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Alamat Tinggal</label>
                        <input maxlength="100" type="text" name="alamat_tinggal" id="alamat_tinggal" required="required" class="form-control" placeholder="Alamat Tinggal" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">No. KTP</label>
                        <input maxlength="100" type="text" name="no_ktp" id="no_ktp" required="required" class="form-control" placeholder="Nomor KTP" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Pendidikan Terakhir</label>
                        <select class="form-control" name="pendidikan" id="pendidikan">
                                                <option value="null"></option>
                                                <option value="S1">S1</option>
                                                <option value="D3">D3</option>
                                                <option value="SMA">SMA</option>
                                                <option value="SMP">SMP</option>
                                                <option value="SD">SD</option>
                          </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Memiliki HP Android?</label><br>
                        <input type="radio" id="hp_android"  name="hp_android" value="Ya">Ya <br>
                        <input type="radio" id="hp_android"  name="hp_android" value="Tidak"> Tidak
                    </div>
                    <div class="form-group">
                        <label class="control-label">Keahlian Memijat</label>
                        <select class="form-control" name="keahlian" id="keahlian">
                                                <option value="null"></option>
                                                <option value="Pijat Ibu dan Anak">Pijat Ibu dan Anak</option>
                                                <option value="Pijat Pra/Pasca Kelahiran">Pijat Pra/Pasca Kelahiran</option>
                                                <option value="Pijat Refleksi">Pijat Refleksi</option>
                          </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Status</label>
                        <select class="form-control" name="status" id="status">
                                                <option value="null"></option>
                                                <option value="Menikah">Menikah</option>
                                                <option value="Belum Menikah">Belum Menikah</option>
                                                <option value="Pernah Menikah">Pernah Menikah</option>
                          </select>
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
                        <label class="control-label">Berapa tahun pengalaman memijat?</label>
                        <select class="form-control" name="pengalaman" id="pengalaman">
                                                <option value="null"></option>
                                                <option value="kurang dari 1 tahun">Kurang dari 1 tahun</option>
                                                <option value="1 - 2 tahun">1 - 2 tahun</option>
                                                <option value="2 - 3 tahun">2 - 3 tahun</option>
                                                <option value="Lebih dari 3 tahun">Lebih dari 3 tahun</option>
                          </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Darimana kamu mengetahui SyariHub Massage?</label>
                                            <select class="form-control" name="darimana" id="darimana">
                                                <option value="null"></option>
                                                <option value="Website">Website</option>
                                                <option value="Media_Cetak">Media Cetak</option>
                                                <option value="Media_Sosial">Media Sosial</option>
                                                <option value="Teman">Teman</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Alasan bergabung dengan SyariHub Massage?</label>
                        <select class="form-control" name="alasan" id="alasan">
                                                <option value="null"></option>
                                                <option value="Waktu kerja yang flexibel">Waktu kerja yang flexibel</option>
                                                <option value="Pendapatan yang menjanjikan">Pendapatan yang menjanjikan</option>
                                                <option value="Bidang pekerjaan yang sesuai minat">Bidang pekerjaan yang sesuai minat</option>
                                                <option value="Lainnya">Lainnya</option>
                          </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Waktu yang dialokasikan untuk menjadi driver?</label><br>
                        <input type="radio" id="jam_kerja"  name="jam_kerja" value="Full_Time">Full Time <br>
                        <input type="radio" id="jam_kerja"  name="jam_kerja" value="Part_Time"> Part Time
                    </div>
                    
                    <button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button>
                </div>
            </div>
        </div>
    </form>
</div>
<br><br><br>
<div id="pertama">
<div class="container-fluid">
    <div id="tulisan">
    <b>MENGAPA SYARIHUB MASSAGE?</b>
    </div>
    <br><br><br>
    <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-2" id="keuntungan">
            <div>
                <img src="/img/syarat.png">
            </div>
            <div>
                <br>Persyaratan Mudah
            </div>
        </div>
        <div class="col-sm-2" id="keuntungan">
            <div>
                <img src="/img/time.png">
            </div>
            <div>
                <br>Jam Kerja Fleksibel
            </div>
        </div>
        <div class="col-sm-2" id="keuntungan">
            <div>
                <img src="/img/duit.png">
            </div>
            <div>
                <br>Penghasilan Berkah
            </div>
        </div>
        <div class="col-sm-3">
        </div>
    </div>
</div>
<br>
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
