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
                <li class="breadcrumb-item active" aria-current="page">{{ __('strings.position_of_shipment') }}</li>
              </ol>
            </nav>
            <h1 class="pagetitle__heading">{{ __('strings.position_of_shipment') }}</h1>
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
            <form class="request-quote-form" action="{{route('orders.shipment_position',['id' => $order->id])}}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}  
              {{ method_field('Post') }}
              
                <div class="row mb-30">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <h5 class="form__title">{{ __('strings.position_of_shipment') }}</h5>
                    <div class="divider__line divider__theme divider__sm mb-30"></div>
                  </div><!-- /.col-lg-12 -->
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <input type="text"  name="position" class="form-control" placeholder="{{ __('strings.position_description') }}">
                    </div>
                  </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
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