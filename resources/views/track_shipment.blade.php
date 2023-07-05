@extends('layouts.app')

@section('content')

<section id="page-title" class="page-title bg-overlay bg-parallax">
    <div class="bg-img"><img src="images/page-titles/4.jpg" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('welcome') }}">{{ __('strings.home') }}</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ __('strings.track_trace') }}</li>
            </ol>
          </nav>
          <h1 class="pagetitle__heading">{{ __('strings.track_trace') }}</h1>
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.page-title -->

  <!-- ======================
     Track Shipmeent
  ========================= -->
  <section id="trackShipmeent" class="track-shipmeent">
    <div class="container">
      <div class="row">
        @if (session('error'))
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="alert alert-primary text-center mb-45">
              {{session('error')}}
            </div>
            <div class=" divider__theme divider__sm mb-30"></div>
          </div><!-- /.col-lg-12 -->
        @endif
        
        <div class="col-sm-12 col-md-12 col-lg-4">
          <aside class="sidebar sidebar-layout2 mb-30">
            <div class="widget widget-help bg-theme">
              <div class="widget__content">
                <h5>{{ __('strings.how_can') }} <br>{{ __('strings.we_help_you') }}</h5>
                <p>{{ __('strings.we_help_you_def') }}</p>
                <a href="{{ route('contact_us') }}" class="btn btn__secondary btn__hover2"><i class="fa fa-envelope"></i>{{ __('strings.contact_us_in') }}</a>
              </div><!-- /.widget-download -->
            </div><!-- /.widget-help -->
          </aside><!-- /.sidebar -->
        </div><!-- /.col-lg-4 -->
        <div class="col-sm-12 col-md-12 col-lg-8">
         
          <form class="request-quote-form" action="{{route('orders.find')}}" method="get">
            <div class="row mb-20">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <p class="fz-16 mb-40">{{ __('strings.track_trace_p1') }}</p>
              </div><!-- /.col-lg-12 -->
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <label>{{ __('strings.track_trace_p2') }}</label>
                  <div class="form-group">
                    <textarea class="form-control" name="search"
                      placeholder="{{ __('strings.track_trace_p4') }}"></textarea>
                  </div>
                </div>
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <button type="submit" class="btn btn__secondary btn__block">{{ __('strings.track_trace_p3') }}</button>
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
          </form>
        </div><!-- /.col-lg-8 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.Track Shipmeent -->

@endsection