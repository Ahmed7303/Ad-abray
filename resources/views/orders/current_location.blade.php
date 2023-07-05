@extends('layouts.app')

@section('content')

     <!-- ========================
       page title 
    =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
      <div class="bg-img"><img src="{{env('APP_URL')}}/images/page-titles/6.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.html">{{ __('strings.home') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ __('strings.current_location') }}</li>
              </ol>
            </nav>
            <h1 class="pagetitle__heading">{{ __('strings.current_location') }}</h1>
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
            <form class="request-quote-form" action="{{route('orders.current_location',['id' => $order->id])}}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}  
              {{ method_field('PUT') }}
                <div class="row mb-30">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <h5 class="form__title">{{ __('strings.current_location_delivery') }} </h5>
                      <div class="divider__line divider__theme divider__sm mb-30"></div>
                    </div><!-- /.col-lg-12 -->
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <div class="form-group">
                        <input type="text" name="current_address"  class="form-control" placeholder="{{ __('strings.type_here') }}">
                      </div>
                    </div><!-- /.col-lg-12 -->
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="text" name="current_lat" class="form-control" placeholder="{{ __('strings.add_order_new_p10') }}">
                      </div>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="text" name="current_lon" class="form-control" placeholder="{{ __('strings.add_order_new_p11') }}">
                      </div>
                    </div><!-- /.col-lg-4 -->
                    
                  </div>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <button type="submit" class="btn btn__secondary btn__block">{{ __('strings.save_changes') }}</button>
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
            </form>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Input page -->
      
@endsection