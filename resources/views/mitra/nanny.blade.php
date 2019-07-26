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
    <form role="form" action="" method="post" autocomplete="off" enctype="multipart/form-data">
        @csrf
        <div class="setup-content" id="step-1">
            <div class="col-xs-12">
                <div class="col-sm-12">
                    <h3> Step 1</h3>
                    <div class="form-group">
                        <label class="control-label">Nama Lengkap</label>
                        <input maxlength="200" type="text" name="nama_lengkap" id="nama_lengkap" required="required" class="form-control" placeholder="Nama Lengkap" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Tempat Lahir</label>
                        <input maxlength="200" type="text" name="tempat_lahir" id="tempat_lahir" required="required" class="form-control" placeholder="Tempat Lahir"  />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Tanggal Lahir</label>
                        <input maxlength="200" type="date" name="tanggal_lahir" id="tanggal_lahir" required="required" class="form-control" placeholder="Tanggal Lahir"  />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Nomor WhatsApp</label>
                        <input maxlength="200" type="text" name="no_whatsapp" id="no_whatsapp" required="required" class="form-control" placeholder="Nomor WhatsApp" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">No. KTP</label>
                        <input maxlength="200" type="text" name="no_ktp" id="no_ktp" required="required" class="form-control" placeholder="No.KTP" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Alamat Sesuai KTP</label>
                        <input maxlength="200" type="text" name="alamat_ktp" id="alamat_ktp" required="required" class="form-control" placeholder="Alamat Sesuai KTP" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Alamat Domisili</label>
                        <input maxlength="200" type="text" name="alamat_domisili" id="alamat_domisili" required="required" class="form-control" placeholder="Alamat Domisili" />
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
                    <div class="form-group">
                        <label class="control-label">Hobi</label>
                        <input maxlength="200" type="text" name="hobi" id="hobi" required="required" class="form-control" placeholder="Hobi" />
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
                        <label class="control-label">Jumlah Anak yang pernah diasuh</label>
                        <select class="form-control" name="jml_anak" id="jml_anak">
                                                <option value="null"></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="lebih dari 5">Lebih dari 5</option>
                          </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Jelaskan pengalaman mengasuh anak!</label>
                        <input maxlength="20000" type="text" name="pengalaman" id="pengalaman" required="required" class="form-control" placeholder="Pengalaman mengasuh anak" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Coba jelaskan apa yang harus dilakukan untuk menerangkan anak usia 2 tahun yang menangis?</label>
                        <input maxlength="20000" type="text" name="penjelasan1" id="penjelasan1" required="required" class="form-control" placeholder="Jawaban" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Coba jelaskan apa yang harus dilakukan jika anak lari dan terjatuh karena tersandung mainannya?</label>
                        <input maxlength="20000" type="text" name="penjelasan2" id="penjelasan2" required="required" class="form-control" placeholder="Jawaban" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Coba jelaskan apa yang harus dilakukan jika anak tidak mau disuapi makanan?</label>
                        <input maxlength="20000" type="text" name="penjelasan3" id="penjelasan3" required="required" class="form-control" placeholder="Jawaban" />
                    </div>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                </div>
            </div>
        </div>
        <div class="setup-content" id="step-3">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3> Step 3</h3><br>
                    <div class="custom-file-upload">
                        <h5>Foto KTP</h5>
                        <label for="file-upload" class="custom-file-upload1">
                            <i class="fa fa-cloud-upload"></i> Upload Foto KTP
                        </label>
                        <input name="foto_ktp" id="file-upload" type="file"/>
                    </div><br>
                    <div class="custom-file-upload">
                        <h5>Foto Diri</h5>
                        <label for="file-upload" class="custom-file-upload1">
                            <i class="fa fa-cloud-upload"></i> Upload Foto Diri
                        </label>
                        <input name="foto_diri" id="file-upload" type="file"/>
                    </div><br>
                    <div class="custom-file-upload">
                        <h5>Foto Ijazah atau Sertifikat yang mendukung</h5>
                        <label for="file-upload" class="custom-file-upload1">
                            <i class="fa fa-cloud-upload"></i> Upload Foto Ijazah atau Sertifikat yang mendukung
                        </label>
                        <input name="foto_ijazah" id="file-upload" type="file"/>
                    </div><br>

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