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
        <link rel="stylesheet" type="text/css" href="/css/form.css">
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
<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Register Pengendara</div>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()" action="success.php" method="">
                                <div class="form-group row">
                                    <label for="nama_lengkap" class="col-md-4 col-form-label text-md-right">Nama Lengkap</label>
                                    <div class="col-md-6">
                                        <input type="text" id="nama_lengkap" class="form-control" name="nama_lengkap">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tanggal_lahir" class="col-md-4 col-form-label text-md-right">Tanggal Lahir</label>
                                    <div class="col-md-6">
                                        <input type="date" id="tanggal_lahir" class="form-control" name="tanggal_lahir">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="umur" class="col-md-4 col-form-label text-md-right">Umur</label>
                                    <div class="col-md-6">
                                        <input type="text" id="umur" class="form-control" name="umur">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="alamat_domisili" class="col-md-4 col-form-label text-md-right">Alamat Domisili</label>
                                    <div class="col-md-6">
                                        <input type="text" id="alamat-domisili" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="alamat_email" class="col-md-4 col-form-label text-md-right">Alamat Email</label>
                                    <div class="col-md-6">
                                        <input type="text" id="alamat_email" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="no_hp" class="col-md-4 col-form-label text-md-right">No. HP</label>
                                    <div class="col-md-6">
                                        <input type="text" id="no_hp" class="form-control" name="no_hp">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="no_ktp" class="col-md-4 col-form-label text-md-right">No. KTP</label>
                                    <div class="col-md-6">
                                        <input type="text" id="no_ktp" class="form-control" name="no_ktp">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="no_sim" class="col-md-4 col-form-label text-md-right">No. SIM</label>
                                    <div class="col-md-6">
                                        <input type="text" id="no_sim" class="form-control" name="no_sim">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tgl_berlaku_sim" class="col-md-4 col-form-label text-md-right">SIM berlaku sampai kapan?</label>
                                    <div class="col-md-6">
                                        <input type="date" id="tgl_berlaku_sim" class="form-control" name="tgl_berlaku_sim">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="no_plat" class="col-md-4 col-form-label text-md-right">Nomer Plat Motor</label>
                                    <div class="col-md-6">
                                        <input type="text" id="no_plat" class="form-control" name="no_plat">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tgl_berlaku_plat" class="col-md-4 col-form-label text-md-right">Plat Nomor berlaku sampai kapan?</label>
                                    <div class="col-md-6">
                                        <input type="date" id="tgl_berlaku_plat" class="form-control" name="tgl_berlaku_plat">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tgl_berlaku_plat" class="col-md-4 col-form-label text-md-right">Bisa Menggunakan Whatsapp?</label>
                                    <div class="col-md-6">
                                        <input type="radio" id="tgl_berlaku_plat"  name="tgl_berlaku_plat"> Ya 
                                        <input type="radio" id="tgl_berlaku_plat"  name="tgl_berlaku_plat"> Tidak 
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tgl_berlaku_plat" class="col-md-4 col-form-label text-md-right">Aktivitas Perbulan</label>
                                    <div class="col-md-6">
                                        <input type="text" id="tgl_berlaku_plat" class="form-control" name="tgl_berlaku_plat">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tgl_berlaku_plat" class="col-md-4 col-form-label text-md-right">Penghasilan perbulan</label>
                                    <div class="col-md-6">
                                        <input type="text" id="tgl_berlaku_plat" class="form-control" name="tgl_berlaku_plat">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="country" class="col-md-4 col-form-label text-md-right">	
                                        Kota
                                    </label>
                                    <div class="col-md-6">
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
                                </div>
     
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                        Register
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</main>

<!--Selesai Isi Page -->
<script type="text/javascript">
    $(document).ready(function () {
    $('.navbar-light .dmenu').hover(function () {
            $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
        }, function () {
            $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
        });
    });
</script>
<script>
    function validform() {

    var a = document.forms["my-form"]["full-name"].value;
    var b = document.forms["my-form"]["email-address"].value;
    var c = document.forms["my-form"]["username"].value;
    var d = document.forms["my-form"]["permanent-address"].value;
    var e = document.forms["my-form"]["nid-number"].value;

    if (a==null || a=="")
    {
        alert("Please Enter Your Full Name");
        return false;
    }else if (b==null || b=="")
    {
        alert("Please Enter Your Email Address");
        return false;
    }else if (c==null || c=="")
    {
        alert("Please Enter Your Username");
        return false;
    }else if (d==null || d=="")
    {
        alert("Please Enter Your Permanent Address");
        return false;
    }else if (e==null || e=="")
    {
        alert("Please Enter Your NID Number");
        return false;
    }

    }
</script>
    </body>
</html>