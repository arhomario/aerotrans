<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{ asset('laravel/resources/assets/bootstrap-3.3.6-dist/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('laravel/resources/assets/owl.carousel.2.1.0/assets/owl.carousel.css') }}" rel="stylesheet">

<link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">


<script src="{{ asset('laravel/resources/assets/js/jquery-2.2.4.min.js')}}"></script>

<style>
  @media(max-width:768px){
    .navbar-default {
       background-color: #fff !important;
    }
    .navbar-default .navbar-toggle{
          border-color: transparent;
    }
    .content{
      margin-top: 52px;
    }
  }

  .footer{
    background: url('{{ asset("laravel/resources/assets/img/footer-background.jpg")}}');
    padding-top: 25px;
    padding-bottom: 25px;
    color: #fff;
  }
  .footer .copyright{
    border-top: 2px solid #fff;
    padding-bottom: 25px;
  }
  .footer .footer-logo{
    width: 50%;
    margin-bottom: 15px;
  }
  @media(max-width:768px){
    .footer .footer-logo{
      width: 20%;
    }
  }
  .footer .footer-menu{
    margin: 0;
    padding: 0;
  }
  .footer .footer-menu li{
    list-style: none;
  }
  .footer .footer-menu li a{
    color: #fff;
  }
</style>


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
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <!-- <button type="submit" class="btn btn-default"><i class="ion-android-search"></i></button> -->
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Beranda</a></li>
        <li><a href="#">Bantuan</a></li>
        <li><a href="#">Cara Pesan</a></li>
        <li><a href="#">Cek Pesan</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">Register</a></li>
        <li class="hidden-xs"><a href="#"><i class="ion-android-search"></i></a></li>
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li> -->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!--./Header-->
<div class="content">
@yield('content')
</div>

<!--Footer-->
<div class="footer">
  <div class="row footer-top">
    <div class="container">
      <div class="col-sm-2">
        <img src="{{ asset('laravel/resources/assets/img/logo-footer.png') }}" class="footer-logo">
        <p><strong>Contact</strong></p>
        <p>24 Hour Call Center</p>
        <p><i class="ion ion-ios-telephone-outline"></i> 8041080808</p>
      </div>
      <div class="col-sm-2">
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
      <div class="col-sm-2">
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
      <div class="col-sm-2">
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
      <div class="col-sm-2">
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
      <div class="col-sm-2">
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


    </div>

  </div>
  <div class="row">
    <div class="container copyright text-right">
      <small>Copyright &copy; 2016 Aerotrans</small>
    </div>
  </div>

  <div class="row">
    <div class="container text-center">
        <img src="{{ asset('laravel/resources/assets/img/footer-join-us.png') }}" width="100">
        <!-- <ul>
          <li><a href="#"></a></li>
        </ul> -->
    </div>
  </div>

</div>
<!--./Footer-->


<script src="{{ asset('laravel/resources/assets/bootstrap-3.3.6-dist/js/bootstrap.js')}}"></script>
<script src="{{ asset('laravel/resources/assets/owl.carousel.2.1.0/owl.carousel.js')}}"></script>

<script>
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
