@extends('layouts.app')

@section('content')

<section id="page-title" class="page-title bg-overlay bg-parallax">
    <div class="bg-img"><img src="{{env('APP_URL')}}/images/page-titles/6.jpg" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('welcome') }}">{{ __('strings.home') }}</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ __('strings.edit_order') }}</li>
            </ol>
          </nav>
          <h1 class="pagetitle__heading">{{ __('strings.edit_order') }}</h1>
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.page-title -->

  <!-- ======================
     Request Quote
  ========================= -->
  <section id="requestQuote" class="request-quote">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <form action="{{route('orders.update',['order' => $order->id])}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}  
            {{ method_field('PUT') }}
            <div class="row mb-30">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <h5 class="form__title"> {{ __('strings.add_order_new_p1') }}</h5>
                <div class="divider__line divider__theme divider__sm mb-30"></div>
              </div><!-- /.col-lg-12 -->
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <input type="text" name="company" value="{{$order->company}}" class="form-control" placeholder="{{ __('strings.add_order_new_p2') }}">
                </div>
              </div><!-- /.col-lg-12 -->
              <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="form-group">
                  <input type="text" name="name" value="{{$order->name}}" class="form-control" placeholder="{{ __('strings.add_order_new_p3') }}">
                </div>
              </div><!-- /.col-lg-4 -->
              <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="form-group">
                  <input type="email" name="email" value="{{$order->email}}" class="form-control" placeholder="{{ __('strings.add_order_new_p4') }}">
                </div>
              </div><!-- /.col-lg-4 -->
              <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="form-group">
                  <input type="tel" name="phone" value="{{$order->phone}}" class="form-control" placeholder="{{ __('strings.add_order_new_p5') }}">
                </div>
              </div><!-- /.col-lg-4 -->
              <div class="col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap">
                <div class="form-group input-radio mr-30">
                  <label class="label-radio">{{ __('strings.air_freight') }}
                    <input type="radio" name="type" @if ($order->type === "Air freight")checked @endif  value="Air freight">
                    <span class="radio-indicator"></span>
                  </label>
                </div>
                <div class="form-group input-radio mr-30">
                  <label class="label-radio">{{ __('strings.ocean_freight') }}
                    <input type="radio" name="type" @if ($order->type === "Ocean freight")checked @endif value="Ocean freight">
                    <span class="radio-indicator"></span>
                  </label>
                </div>
                <div class="form-group input-radio mr-30">
                  <label class="label-radio">{{ __('strings.road_freight') }}
                    <input type="radio" name="type" @if ($order->type === "Road freight")checked @endif value="Road freight">
                    <span class="radio-indicator"></span>
                  </label>
                </div>
                <div class="form-group input-radio">
                  <label class="label-radio">{{ __('strings.rail_freight') }}
                    <input type="radio" name="type" @if ($order->type === "Train freight")checked @endif value="Train freight">
                    <span class="radio-indicator"></span>
                  </label>
                </div>
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
            <div class="row mb-30">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <h5 class="form__title">{{ __('strings.pick_up_address') }} </h5>
                <div class="divider__line divider__theme divider__sm mb-30"></div>
              </div><!-- /.col-lg-12 -->
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <input type="text" name="pick_up_street" value="{{$order->pick_up_street}}" class="form-control" placeholder="{{ __('strings.add_order_new_p6') }}">
                </div>
              </div><!-- /.col-lg-12 -->
              <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="form-group">
                  <input type="text" name="pick_up_country" value="{{$order->pick_up_country}}" class="form-control" placeholder="{{ __('strings.add_order_new_p7') }}">
                </div>
              </div><!-- /.col-lg-4 -->
              <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="form-group">
                  <input type="text" name="pick_up_city" value="{{$order->pick_up_city}}"  class="form-control" placeholder="{{ __('strings.add_order_new_p8') }}">
                </div>
              </div><!-- /.col-lg-4 -->
              <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="form-group">
                  <input type="text"  name="pick_up_zip" value="{{$order->pick_up_zip}}" class="form-control" placeholder="{{ __('strings.add_order_new_p9') }}">
                </div>
              </div><!-- /.col-lg-4 -->
              <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <input type="number" step=any name="pick_up_lat" value="{{$order->pick_up_lat}}" class="form-control" placeholder="{{ __('strings.add_order_new_p10') }}">
                </div>
              </div><!-- /.col-lg-4 -->
              <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <input type="number" step=any  name="pick_up_lon" value="{{$order->pick_up_lon}}" class="form-control" placeholder="{{ __('strings.add_order_new_p11') }}">
                </div>
              </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
            <div class="row mb-30">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <h5 class="form__title">{{ __('strings.drop_off_ddress') }}</h5>
                <div class="divider__line divider__theme divider__sm mb-30"></div>
              </div><!-- /.col-lg-12 -->
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <input type="text" name="drop_off_street" value="{{$order->drop_off_street}}" class="form-control" placeholder="{{ __('strings.add_order_new_p6') }}">
                </div>
              </div><!-- /.col-lg-12 -->
              <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="form-group">
                  <input type="text" name="drop_off_country" value="{{$order->drop_off_country}}" class="form-control" placeholder="{{ __('strings.add_order_new_p7') }}">
                </div>
              </div><!-- /.col-lg-4 -->
              <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="form-group">
                  <input type="text" name="drop_off_city" value="{{$order->drop_off_city}}" class="form-control" placeholder="{{ __('strings.add_order_new_p8') }}">
                </div>
              </div><!-- /.col-lg-4 -->
              <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="form-group">
                  <input type="text" name="drop_off_zip" value="{{$order->drop_off_zip}}" class="form-control" placeholder="{{ __('strings.add_order_new_p9') }}">
                </div>
              </div><!-- /.col-lg-4 -->
              <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <input type="number" step=any name="drop_off_lat" value="{{$order->drop_off_lat}}" class="form-control" placeholder="{{ __('strings.add_order_new_p10') }}">
                </div>
              </div><!-- /.col-lg-4 -->
              <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <input type="number" step=any name="drop_off_lon" value="{{$order->drop_off_lon}}"  class="form-control" placeholder="{{ __('strings.add_order_new_p11') }}">
                </div>
              </div><!-- /.col-lg-4 -->
              
            </div><!-- /.row -->
              <div class="row mb-30">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <h5 class="form__title">{{ __('strings.add_order_new_p12') }}</h5>
                <div class="divider__line divider__theme divider__sm mb-30"></div>
              </div><!-- /.col-lg-12 -->
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <input type="number" name="weight" value="{{$order->weight}}" class="form-control" placeholder="{{ __('strings.add_order_new_p13') }}">
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
              </div>
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12">
                
                <button type="submit" class="btn btn__secondary btn__block">{{ __('strings.edit_order') }}</button>
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
          </form>
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.Input page -->
  
  @endsection