@extends('app')
@section('title','Welcome to Aerotrans')
@section('content')
<style>
.navbar-default {
   background-color: transparent;
}

.book .book-tabs{
  background: #07509c;
  color: #fff;
  margin-top: -41px;
  z-index: 9;
  position:relative;

}
.book .tab-content{
  border: 1px solid #eee !important;

}

.book .tab-content .book-form{
  padding-top: 25px;
  padding-bottom: 25px;
}
.book .tab-content .form-border{
  border-bottom: 1px solid #eee !important;
}

.book .tab-content .form-border input{
  border: none;
}
.book .tab-content .form-border input.:focus{
  border: none;
}
.nav > li > a:hover, .nav > li > a{
  color: #fff;
}
.nav > li > a:hover, .nav > li > a:focus{
  background: #014287;
}
/*.014287*/
.promo{
  margin-top: 25px;
  margin-bottom: 25px;
}
.promo .items{
  padding-top: 25px;
}
</style>
<!--Slide-->
<div class="owl-carousel owl-theme">
  <div><img src="{{ asset('laravel/resources/assets/img/slide/1.jpg') }}"></div>
</div>
<!--./Slide-->


<!--Booking-->
<div class="container">
  <div class="row">
    <div class="book">
      <div class="book-tabs">
        <ul class="nav nav-tab nav-justified" >
          <li class="active"><a data-toggle="tab" href="#first">Hourly Rental</a></li>
          <li><a data-toggle="tab" href="#second">Airport Transfer</a></li>
          <li><a data-toggle="tab" href="#three">Airport Shuttle</a></li>
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
                <button type="submit" class="btn btn-default">Book</button>
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
              <button type="submit" class="btn btn-default">Book</button>
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
              <button type="submit" class="btn btn-default">Book</button>
            </form>
          </div>
          <div class="col-sm-8 hidden-xs no-padding">
            <img src="{{ asset('laravel/resources/assets/img/book-background.png')}}" class="img-responsive">
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<!--./Booking-->

<!--Product-->

<!--./Product-->

<!--Promo-->
<div class="container no-padding">
  <div class="row promo">
      <div class="col-xs-6 col-sm-4 items">
        <a href="#">
          <img src="{{ asset('laravel/resources/assets/img/promo/1.jpg')}}" class="img-responsive">
        </a>
      </div>
      <div class="col-xs-6 col-sm-4 items">
        <a href="#">
          <img src="{{ asset('laravel/resources/assets/img/promo/2.jpg')}}" class="img-responsive">
        </a>
      </div>
      <div class="col-xs-6 col-sm-4 items">
        <a href="#">
          <img src="{{ asset('laravel/resources/assets/img/promo/3.jpg')}}" class="img-responsive">
        </a>

      </div>
      <div class="col-xs-6 col-sm-4 items">
        <a href="#">
          <img src="{{ asset('laravel/resources/assets/img/promo/4.jpg')}}" class="img-responsive">
        </a>
      </div>
      <div class="col-xs-12 col-sm-8 items">
        <a href="#">
          <img src="{{ asset('laravel/resources/assets/img/promo/5.jpg')}}" class="img-responsive">
        </a>
      </div>
    </div>
</div>
<!--./Promo-->

<!--Video-->

<div class="container-fluid">
  <div class="row">
      <a href="#">
        <img src="{{ asset('laravel/resources/assets/img/video/cover.jpg')}}" class="img-responsive">
      </a>
  </div>
</div>
<!--./Video-->


@endsection
