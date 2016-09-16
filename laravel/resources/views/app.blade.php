<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{ asset('laravel/resources/assets/bootstrap-3.3.6-dist/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('laravel/resources/assets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('laravel/resources/assets/owl.carousel.2.1.0/assets/owl.carousel.css') }}" rel="stylesheet">

<link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

<script src="{{ asset('laravel/resources/assets/js/jquery-2.2.4.min.js')}}"></script>

</head>
<body>
<!--Header-->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="{{ asset('laravel/resources/assets/img/logo.png') }}" width="90"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <!-- <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>-->
      <form class="navbar-form navbar-left hidden-sm hidden-md hidden-lg">
        <div class="form-group">
         <div class="input-group">
            <input type="text" class="form-control" placeholder="Search">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-primary"><i class="ion-android-search"></i></button>
            </span>
          </div>
        </div>
        <!-- <button type="submit" class="btn btn-default"><i class="ion-android-search"></i></button> -->
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">Beranda</a></li>
        <li><a href="#">Bantuan</a></li>
        <li><a href="#">Cara Pesan</a></li>
        <li><a href="#">Cek Pesan</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">Register</a></li>
        <li class="dropdown hidden-xs">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search"></i></a>
          <div class="dropdown-menu">
            <form class="navbar-form navbar-left">
              <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control" style="width:200px;" placeholder="Search">
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-primary"><i class="ion-android-search"></i></button>
                    </span>
                </div>
              </div>
              <!-- <button type="submit" class="btn btn-default"><i class="ion-android-search"></i></button> -->
            </form>
          </div>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!--./Header-->
<div class="content">
@yield('content')
</div>



<!--Footer-->
<div class="container-fluid footer">
  <div class="row">
    <div class="col-sm-2 col-sm-offset-1">
      <img src="{{ asset('laravel/resources/assets/img/logo-footer.png') }}" class="footer-logo">
      <div class="contact"><strong>Contact</strong></div>
      <p>&nbsp; &nbsp;  24 Hour Call Center</p>
      <p><img src="{{ asset('laravel/resources/assets/img/phone.png') }}" width="15"> 8041080808</p>
    </div>
    <div class="col-sm-8">
      <div class="col-sm-2 menu no-padding">
        <strong>Rental</strong>
        <ul class="footer-menu">
            <li><a href="#">Cara Pesan</a></li>
            <li><a href="#">Cek Pesan</a></li>
            <li><a href="#">Kendaraan</a></li>
            <li><a href="#">Fasilitas</a></li>
            <li><a href="#">Area Layanan</a></li>
            <li><a href="#">Bantuan</a></li>
            <li><a href="#">Syarat & Ketentuan</a></li>
        </ul>
      </div>
      <div class="col-sm-2 menu no-padding">
        <strong>Airport Transfer</strong>
        <ul class="footer-menu">
            <li><a href="#">Cara Pesan</a></li>
            <li><a href="#">Cek Pesan</a></li>
            <li><a href="#">Kendaraan</a></li>
            <li><a href="#">Fasilitas</a></li>
            <li><a href="#">Area Layanan</a></li>
            <li><a href="#">Bantuan</a></li>
            <li><a href="#">Syarat & Ketentuan</a></li>
        </ul>
      </div>
      <div class="col-sm-2 menu no-padding">
        <strong>Airport Shuttle</strong>
        <ul class="footer-menu">
            <li><a href="#">Cara Pesan</a></li>
            <li><a href="#">Cek Pesan</a></li>
            <li><a href="#">Kendaraan</a></li>
            <li><a href="#">Fasilitas</a></li>
            <li><a href="#">Area Layanan</a></li>
            <li><a href="#">Bantuan</a></li>
            <li><a href="#">Syarat & Ketentuan</a></li>
        </ul>
      </div>
      <div class="col-sm-2 menu no-padding">
        <strong>Tourism</strong>
        <ul class="footer-menu">
            <li><a href="#">Cara Pesan</a></li>
            <li><a href="#">Cek Pesan</a></li>
            <li><a href="#">Kendaraan</a></li>
            <li><a href="#">Fasilitas</a></li>
            <li><a href="#">Area Layanan</a></li>
            <li><a href="#">Bantuan</a></li>
            <li><a href="#">Syarat & Ketentuan</a></li>
        </ul>
      </div>
      <div class="col-sm-2 menu no-padding">
        <strong>Fleet Management</strong>
        <ul class="footer-menu">
            <li><a href="#">Cara Pesan</a></li>
            <li><a href="#">Cek Pesan</a></li>
            <li><a href="#">Kendaraan</a></li>
            <li><a href="#">Fasilitas</a></li>
            <li><a href="#">Area Layanan</a></li>
            <li><a href="#">Bantuan</a></li>
            <li><a href="#">Syarat & Ketentuan</a></li>
        </ul>
      </div>
      <div class="col-sm-2 menu no-padding">
        <strong>Tentang Aerotrans</strong>
        <ul class="footer-menu">
            <li><a href="#">Cara Pesan</a></li>
            <li><a href="#">Cek Pesan</a></li>
            <li><a href="#">Kendaraan</a></li>
            <li><a href="#">Fasilitas</a></li>
            <li><a href="#">Area Layanan</a></li>
            <li><a href="#">Bantuan</a></li>
            <li><a href="#">Syarat & Ketentuan</a></li>
        </ul>
      </div>

    </div>
  </div>

    <div class="row" >
      <div class="col-sm-10 col-sm-offset-1 copyright text-right">
        <span class="pull-left">
          <img src="{{ asset('laravel/resources/assets/img/ssl-vpn.png') }}" width="20">
        </span>
        copyright &copy; 2016 Aerotrans
      </div>
    </div>

    <div class="row" align="center">
      <div class="col-sm-6 col-sm-offset-3">

          <img src="{{ asset('laravel/resources/assets/img/footer-join-us.png') }}" width="120">
          <div class="social-wrap">
            <ul class="social">
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
      </div>
    </div>
</div>
<!--./Footer-->


<script src="{{ asset('laravel/resources/assets/bootstrap-3.3.6-dist/js/bootstrap.js')}}"></script>
<script src="{{ asset('laravel/resources/assets/owl.carousel.2.1.0/owl.carousel.js')}}"></script>

<script>

$(window).scroll(function () {
    var w = $(window).width();
    if (w > 768) {
        if ($(this).scrollTop() > 50) {
          $('.navbar-default').css("background", "#fff");
        } else {
          $('.navbar-default').css("background", "transparent");
        }
    }
});

$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    items:1
  })
});
</script>

</body>
</html>
