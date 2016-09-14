@extends('app')
@section('title','Welcome to Aerotrans')
@section('content')
<style>
.navbar-default {
   background-color: transparent;
}
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

<!--Slide-->

<!--./Slide-->

<!--Booking-->

<!--./Booking-->

<!--Product-->

<!--./Product-->

<!--Promo-->
<div class="row promo">
  <div class="container">

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
<div class="row">
  <div class="container-fluid">
    <a href="#">
      <img src="{{ asset('laravel/resources/assets/img/video/cover.jpg')}}" class="img-responsive">
    </a>
  </div>
</div>
<!--./Video-->



@endsection
