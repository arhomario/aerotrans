@extends('app')
@section('title','Welcome to Aerotrans')
@section('content')
<style>
.navbar-default {
   background-color: transparent;
}
.book{
  border: 1px solid #eee !important;
  padding-bottom: 15px;
}
.book .book-tabs{
  background: #07509c;
  color: #fff;
  margin-top: -46px;
  z-index: 9;
  position:relative;
}


@media(max-width:768px){
  .book .book-tabs{
    margin: -2px;
  }

  .book .book-tabs .nav-justified > li {
    /*float: left;*/
    display: table-cell;
    width: 1%;
  }
  .nav-justified > li > a {
    margin-bottom: 0;
  }
  .book .book-tabs .nav-justified img {
    width: 11px;
  }
  .book .book-tabs .nav > li > a{
    padding: 10px 5px;

  }
}
.book .tab-content{
  border: 1px solid #eee !important;
}

.book .tab-content .book-form{
  padding-top: 25px;
  padding-bottom: 25px;
}


.book .tab-content .book-form input{
  border-top: 0;
  border-right: 0;
  border-left: 0;
  border-radius: 0;
  -webkit-box-shadow: none;
  box-shadow: none;
}

.nav > li > a:hover, .nav > li > a{
  color: #fff;
}
.nav > li > a:hover, .nav > li > a:focus{
  background: #014287;
}

/*Product*/
.book .product-title{
  border-top: 1px solid #eee;
}
.book .title{
  font-family: 'Nexabold';
  font-size: 30px;
  color: #07509c;
  margin-top: 10px;
}
.book .help-block{
  font-family: 'Nexalight';
}
.book .search-cars{
  margin-top: 15px;
}
.book .search-cars .input-group-addon{
  padding: 0;
  border: 0;
  border-radius: 0;
}


.book .product{
  list-style-type: none;
  margin: 0;
  padding: 0;
}
.book .product li{
  float: left;
  text-align: center;
  padding: 15px;
  margin-top: 15px;

  -webkit-transition: all 1000ms ease;
  -moz-transition: all 1000ms ease;
  -ms-transition: all 1000ms ease;
  -o-transition: all 1000ms ease;
  transition: all 1000ms ease;
}
 @media(max-width:500px){
   .book .product li{
     width: 100%;
   }
 }
 @media(min-width:500px){
   .book .product li{
     width: 50%;
   }
 }
 @media(min-width:768px){
   .book .product li{
     width: 50%;
   }
 }
 @media(min-width:992px){
   .book .product li{
     width: 25%;
   }
 }

 .book .product .product-img{
   text-align: center;
   width: 100%;
   margin-bottom: 25px;
 }
.book .product li:hover {
  background-color: #eee;
  border-radius: 15px;

  -webkit-transition: all 1000ms ease;
  -moz-transition: all 1000ms ease;
  -ms-transition: all 1000ms ease;
  -o-transition: all 1000ms ease;
  transition: all 1000ms ease;
}

.book .product li:hover .product-img{
  transform: scale(1.1);
  -webkit-transition: all 1000ms ease;
  -moz-transition: all 1000ms ease;
  -ms-transition: all 1000ms ease;
  -o-transition: all 1000ms ease;
  transition: all 1000ms ease;
}

.book .product li a{
}

.book .product .items{
  width: 100%;

}

/*.book .product .product-img-area{

  padding-top:25px;

}*/
.book .product .product-img{
  width: 70%;
}

.book .btn-book{
  margin-top: 15px;
}
.promo{
  margin-top: 25px;
  margin-bottom: 25px;
}
.promo .title h2{
    font-family: 'Nexabold';
    color: #07509c;
}
.promo .title .help-block{
    font-family: 'Nexalight';
}

.promo .content{
  margin-right: -15px;
  margin-left: -15px;
}

 @media(max-width:768px){
   .promo{
       padding: 15px;
   }
   .promo .content{
     padding: 15px;
   }
 }
/*.promo .items{
  position: relative;
  height: 0;
}*/

</style>


<style>

    .overlay{
      position: absolute;
      background-color: rgba(0, 0, 0, 0.5);
      /*display: table;*/
      width: 100%;
      height : 100%;
      color: white;
      z-index: 9;
      opacity: 0;
      -webkit-transition: all 500ms ease;
      -moz-transition: all 500ms ease;
      -ms-transition: all 500ms ease;
      -o-transition: all 500ms ease;
      transition: all 500ms ease;
    }

    .overlay .vertical-area {
        display: table;
        width: 100%;
        height: 100%;
        text-align: center;
    }

    .overlay .middle {
        display: table-cell;
        vertical-align: middle;
    }

    .overlay .middle .title{
        font-family: 'Nexabold';
        font-size: 20px;
    }
    .overlay .middle .desc{
        font-family: 'Nexalight';
    }
    .overlay .middle .date{
        font-family: 'Nexalight';
        margin-top: 1%;
        margin-bottom: 1%;
    }
    .overlay .middle button{
      margin-top: 30px;
      background: transparent;
      color: #fff;
    }

    .overlay:hover{
      opacity: 1;
      -webkit-transition: all 500ms ease;
      -moz-transition: all 500ms ease;
      -ms-transition: all 500ms ease;
      -o-transition: all 500ms ease;
      transition: all 500ms ease;
    }



</style>

<!--Slide-->
<div class="owl-carousel owl-theme">
  <div><img src="{{ asset('laravel/resources/assets/img/slide/1.jpg') }}"></div>
</div>
<!--./Slide-->


<!--Booking-->
<div class="col-lg-10 col-lg-offset-1 book">
  <div class="row">
    <div class="">
      <div class="book-tabs">
        <ul class="nav nav-tab nav-justified" >
          <li class="active"><a data-toggle="tab" href="#first"><img src="{{ asset('laravel/resources/assets/img/car-rental.png') }}" width="25">&nbsp; &nbsp;Hourly Rental</a></li>
          <li><a data-toggle="tab" href="#second"><img src="{{ asset('laravel/resources/assets/img/airport.png') }}" width="25">&nbsp; &nbsp;Airport Transfer</a></li>
          <li><a data-toggle="tab" href="#three"><img src="{{ asset('laravel/resources/assets/img/bus-rental.png') }}" width="20">&nbsp; &nbsp;Airport Shuttle</a></li>
        </ul>
      </div>
      <div class="tab-content">
        <div id="first" class="tab-pane fade in active">
            <div class="col-sm-4 book-form">
              <form>
                <div class="form-group form-border" >
                  <label>Pick-up Location</label>
                  <input type="text" class="form-control" placeholder="">
                </div>
                <div class="row">
                  <div class="col-xs-6">
                    <div class="form-group form-border">
                      <label>Pick-up Location</label>
                      <input type="text" class="form-control" placeholder="">
                    </div>
                  </div>
                  <div class="col-xs-6">
                    <div class="form-group form-border">
                      <label>Pick-up Location</label>
                      <input type="text" class="form-control" placeholder="">
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary flat">Book</button>
              </form>
            </div>
            <div class="col-sm-8 hidden-xs no-padding">
              <img src="{{ asset('laravel/resources/assets/img/book-background.png')}}" class="img-responsive">
            </div>
        </div>
        <div id="second" class="tab-pane fade">
          <div class="col-sm-4 book-form">
            <form>
              <div class="form-group form-border" >
                <label>Pick-up Location</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="row">
                <div class="col-xs-6">
                  <div class="form-group form-border">
                    <label>Pick-up Location</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="col-xs-6">
                  <div class="form-group form-border">
                    <label>Pick-up Location</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary flat">Book</button>
            </form>
          </div>
          <div class="col-sm-8 hidden-xs no-padding">
            <img src="{{ asset('laravel/resources/assets/img/book-background.png')}}" class="img-responsive">
          </div>
        </div>
        <div id="three" class="tab-pane fade">
          <div class="col-sm-4 book-form">
            <form>
              <div class="form-group form-border" >
                <label>Pick-up Location</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="row">
                <div class="col-xs-6">
                  <div class="form-group form-border">
                    <label>Pick-up Location</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="col-xs-6">
                  <div class="form-group form-border">
                    <label>Pick-up Location</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary flat">Book</button>
            </form>
          </div>
          <div class="col-sm-8 hidden-xs no-padding">
            <img src="{{ asset('laravel/resources/assets/img/book-background.png')}}" class="img-responsive">
          </div>
        </div>

      </div>
    </div>
  </div>


  <!--Product-->
  <div class="row product-title">
    <div class="col-sm-8 col-sm-offset-2 text-center">
      <p class="title">Cars</p>
      <p class="help-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>

    </div>
    <div class="col-sm-2">
      <form class="form-inline search-cars">
        <div class="form-group">
          <div class="input-group">
            <input type="text" class="form-control flat" placeholder="Search cars">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-primary"><i class="ion-android-search"></i></button>
            </span>
          </div>
        </div>
      </form>

    </div>
  </div>


  <div class="product-area">
    <ul class="product">
      <li>
        <div class="col-sm-12 product-img-wrap">
          <img src="{{ asset('laravel/resources/assets/img/product/BRV.png')}}" class="product-img">
        </div>
        <div class="col-sm-12">
          <a href="#"><strong>Honda Mobilio</strong></a>
          <p class="help-block">IDR 300.000/Hour</p>
          <div class="input-group">
            <span class="input-group-addon"><img src="{{ asset('laravel/resources/assets/img/cars-icon-1.png')}}" width="11"> 6</span>
            <span class="input-group-addon"><img src="{{ asset('laravel/resources/assets/img/cars-icon-2.png')}}" width="11"> M</span>
            <span class="input-group-addon"><img src="{{ asset('laravel/resources/assets/img/cars-icon-3.png')}}" width="11"> Lorem</span>
          </div>
          <div class="btn-book"><a class="btn btn-primary btn-sm">Book</a></div>
        </div>
      </li>
      <li>
        <div class="text-center items">
          <div class="product-img-wrap">
            <img src="{{ asset('laravel/resources/assets/img/product/Mobilio.png')}}" class="product-img">
          </div>
          <div class="col-sm-12">
            <a href="#"><strong>Honda Mobilio</strong></a>
            <p class="help-block">IDR 300.000/Hour</p>
            <div class="input-group">
              <span class="input-group-addon"><img src="{{ asset('laravel/resources/assets/img/cars-icon-1.png')}}" width="11"> 6</span>
              <span class="input-group-addon"><img src="{{ asset('laravel/resources/assets/img/cars-icon-2.png')}}" width="11"> M</span>
              <span class="input-group-addon"><img src="{{ asset('laravel/resources/assets/img/cars-icon-3.png')}}" width="11"> Lorem</span>
            </div>
            <div class="btn-book"><a class="btn btn-primary btn-sm">Book</a></div>
          </div>
        </div>
      </li>
      <li>
        <div class="text-center items">
          <div class="product-img-wrap">
            <img src="{{ asset('laravel/resources/assets/img/product/Freed2012.png')}}" class="product-img">
          </div>
          <div class="col-sm-12">
            <a href="#"><strong>Honda Mobilio</strong></a>
            <p class="help-block">IDR 300.000/Hour</p>
            <div class="input-group">
              <span class="input-group-addon"><img src="{{ asset('laravel/resources/assets/img/cars-icon-1.png')}}" width="11"> 6</span>
              <span class="input-group-addon"><img src="{{ asset('laravel/resources/assets/img/cars-icon-2.png')}}" width="11"> M</span>
              <span class="input-group-addon"><img src="{{ asset('laravel/resources/assets/img/cars-icon-3.png')}}" width="11"> Lorem</span>
            </div>
            <div class="btn-book"><a class="btn btn-primary btn-sm">Book</a></div>
          </div>
        </div>
      </li>
      <li>
        <div class="text-center items">
          <div class="product-img-wrap">
            <img src="{{ asset('laravel/resources/assets/img/product/Mobilio.png')}}" class="product-img">
          </div>
          <div class="col-sm-12">
            <a href="#"><strong>Honda Mobilio</strong></a>
            <p class="help-block">IDR 300.000/Hour</p>
            <div class="input-group">
              <span class="input-group-addon"><img src="{{ asset('laravel/resources/assets/img/cars-icon-1.png')}}" width="11"> 6</span>
              <span class="input-group-addon"><img src="{{ asset('laravel/resources/assets/img/cars-icon-2.png')}}" width="11"> M</span>
              <span class="input-group-addon"><img src="{{ asset('laravel/resources/assets/img/cars-icon-3.png')}}" width="11"> Lorem</span>
            </div>
            <div class="btn-book"><a class="btn btn-primary btn-sm">Book</a></div>
          </div>
        </div>
      </li>
    </ul>
  </div>


  <!--./Product-->


</div>
<!--./Booking-->



<!--Promo-->
<div class="col-lg-10 col-lg-offset-1 promo">
  <div class="title">
      <div class="col-sm-6 col-sm-offset-3 text-center">
        <h2>Promo</h2>
        <p class="help-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
      </div><!--./col-->
  </div><!--./row-->
  <div class="content">
    <div>
      <?php
      $i = 0;
      while($i < 4){
      ?>
      <div class="col-xs-6 col-sm-4" style="margin: 15px 0px;">
        <!-- <div class="col-sm-12 no-padding items" style="background:url('{{ asset('laravel/resources/assets/img/promo/1.jpg')}}'); height:100% auto;"> -->

        <div class="col-sm-12 no-padding">
            <a href="#">
                <div class="overlay">
                  <div class="vertical-area">
                      <div class="middle">
                        <p class="title">Lorem Ipsum</p>
                        <p class="desc">Dolor sit amet</p>
                        <p class="date">20-19 July</p>
                        <button class="btn btn-default">Learn more</button>
                      </div>
                  </div>
                </div>
            </a>
          <img src="{{ asset('laravel/resources/assets/img/promo/1.jpg')}}" class="img-responsive">
        </div><!--./col-->
      </div><!--./col-->
      <?php
      $i++;
      }
      ?>
      <div class="col-xs-12 col-sm-8" style="margin: 15px 0px;">
        <div class="col-sm-12 no-padding">
            <a href="#">
                <div class="overlay">
                  <div class="vertical-area">
                      <div class="middle">
                        <p class="title">Lorem Ipsum</p>
                        <p class="desc">Dolor sit amet</p>
                        <p class="date">20-19 July</p>
                        <button class="btn btn-default">Learn more</button>
                      </div>
                  </div>
                </div>
            </a>
          <img src="{{ asset('laravel/resources/assets/img/promo/5.jpg')}}" class="img-responsive">
        </div><!--./col-->
      </div><!--./col-->

    </div><!--./content --->
  </div><!--./row-->
</div><!--./container-->
<!--./Promo-->

<!--Video-->
<a href="#">
  <img src="{{ asset('laravel/resources/assets/img/video/cover.jpg')}}" class="img-responsive">
</a>
<!--./Video-->

<script>



$(document).ready(function(){
  car_resize();
})
$(window).resize(function(){
  console.log(1);
  car_resize();
});
function car_resize(){
  var prod_img_h = $('.product-img-wrap').width();
  $('.product-img-wrap').css('height',prod_img_h-100);
}

  //
  // var promo_img_w = $('.promo .content img').width();
  // var promo_img_h = $('.promo .content img').height();
  // $('.promo .content img').css('height',promo_img_h);
</script>


@endsection
