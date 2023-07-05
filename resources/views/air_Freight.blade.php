@extends('layouts.app')

@section('content')

<section id="page-title" class="page-title bg-overlay bg-parallax">
    <div class="bg-img"><img src="images/page-titles/9.jpg" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('welcome') }}">{{ __('strings.home') }}</a></li>
              <li class="breadcrumb-item"><a href="{{ route('services') }}">{{ __('strings.services') }}</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ __('strings.air_freight') }}</li>
            </ol>
          </nav>
          <h1 class="pagetitle__heading">{{ __('strings.air_freight') }}</h1>
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.page-title -->

  <section id="caseStudiesSingle" class="case-studies-single">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-4">
          <aside class="sidebar mb-30">
            <div class="widget widget-categories widget-categories-2">
              <div class="widget-content">
                <ul class="list-unstyled">
                  <li><a href="#" class="active">{{ __('strings.other_services') }}</a></li>
                  <li><a href="{{ route('ocean_Freight') }}">{{ __('strings.ocean_freight') }}</a></li>
                  <li><a href="{{ route('road_Freight') }}">{{ __('strings.road_freight') }}</a></li>
                  <li><a href="{{ route('rail_Freight') }}">{{ __('strings.rail_freight') }}</a></li>
                  <li><a href="{{ route('container_Freight') }}">{{ __('strings.container_transport') }}</a></li>
                  <li><a href="{{ route('warehousing') }}">{{ __('strings.warehousing') }}</a></li>
                  <li><a href="{{ route('customs_brokerage') }}">{{ __('strings.customs_brokerage') }}</a></li>
                </ul>
              </div><!-- /.widget-content -->
            </div><!-- /.widget-categories -->
            <div class="widget widget-help bg-theme">
              <div class="widget__content">
                <h5>{{ __('strings.how_can') }}<br> {{ __('strings.we_help_you') }}</h5>
                <p>{{ __('strings.we_help_you_def') }}</p>
                <a href="{{ route('contact_us') }}" class="btn btn__secondary btn__hover2"><i class="fa fa-envelope"></i>{{ __('strings.contact_us_in') }}</a>
              </div><!-- /.widget-download -->
            </div><!-- /.widget-help -->
          </aside><!-- /.sidebar -->
        </div><!-- /.col-lg-4 -->
        <div class="col-sm-12 col-md-12 col-lg-8">
          <div class="case-single-item">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="text__block mb-40">
                  <h5 class="text__block-title">{{ __('strings.air_p0') }}</h5>
                  <p class="text__block-desc">{{ __('strings.air_p1') }}</p>
                  <p class="text__block-desc">{{ __('strings.air_p2') }}</p>
                </div><!-- /.text-block -->
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="text__block  mb-40">
                      <h5 class="text__block-title">{{ __('strings.air_head5') }}</h5>
                      <p class="text__block-desc"><b>{{ __('strings.air_p3') }}</b></p>
                      <p class="text__block-desc"><b>{{ __('strings.air_p4') }}</b></p>
                      <p class="text__block-desc"><b>{{ __('strings.air_p5') }}</b></p>
                      <p class="text__block-desc"><b>{{ __('strings.air_p6') }}</b></p>
                    </div><!-- /.text-block -->
                  </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="projects-carousel-2 carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2"
                  data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30"
                  data-loop="true" data-speed="800">
                  <div class="project-item">
                    <div class="project__img">
                      <img src="images/Types of Servics/intl03_02.jpg" alt="project img"></div><!-- /.project-img -->
                  </div><!-- /.project-item -->
                  <div class="project-item">
                    <div class="project__img">
                      <img src="images/Types of Servics/intl03_05.jpg" alt="project img"></div><!-- /.project-img -->
                  </div><!-- /.project-item -->
                  <div class="project-item">
                    <div class="project__img">
                      <img src="images/Types of Servics/2017-09-12_NEWS_COM.50.17_PRES-Turkmenistan_736x300.png" alt="project img"> </div><!-- /.project-img -->
                  </div><!-- /.project-item -->
                </div><!-- /.carousel -->
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
            <div class="row mt-50">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="text__block">
                  <h5 class="text__block-title">{{ __('strings.why_us') }}</h5>
                  <p class="text__block-desc">{{ __('strings.why_us_defa') }}</p>
                </div><!-- /.text-block -->
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
            <div class="fancybox-layout2 fancybox-layout2-panel">
              <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                  <div class="fancybox-item">
                    <div class="fancybox__icon">
                      <i class="icon-credit-cards"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                      <h4 class="fancybox__title">{{ __('strings.affordable_pricing') }}</h4>
                      <p class="fancybox__desc">{{ __('strings.affordable_pricing_def') }}</p>
                    </div><!-- /.fancybox-content -->
                  </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-4 col-lg-4">
                  <div class="fancybox-item">
                    <div class="fancybox__icon">
                      <i class="icon-search-worldwide"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                      <h4 class="fancybox__title">{{ __('strings.real_time_tracking') }}</h4>
                      <p class="fancybox__desc">{{ __('strings.real_time_tracking_def') }}  </p>
                    </div><!-- /.fancybox-content -->
                  </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-4 col-lg-4">
                  <div class="fancybox-item">
                    <div class="fancybox__icon">
                      <i class="icon-boxes"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                      <h4 class="fancybox__title">{{ __('strings.warehouse_storage') }}</h4>
                      <p class="fancybox__desc">{{ __('strings.warehouse_storage_def') }}</p>
                    </div><!-- /.fancybox-content -->
                  </div>
                </div><!-- /.col-lg-4 -->
              </div><!-- /.row -->
          </div><!-- /.case-single-item -->
        </div><!-- /.col-lg-8 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.case studies Single -->


  <section id="team" class="team  pb-70">
    <div class="container">
  <div class="row heading ">
    <div class="col-sm-12 col-md-12 col-lg-12">
      <span class="heading__subtitle">{{ __('strings.team_head') }}</span>
    </div><!-- /.col-lg-12 -->
    <div class="col-sm-12 col-md-6 col-lg-5">
      <h2 class="heading__title">{{ __('strings.team_head_def1') }}</h2>
    </div><!-- /.col-lg-5 -->
    <div class="col-sm-12 col-md-6 col-lg-6 offset-lg-1">
      <p class="heading__desc">{{ __('strings.team_head_def2') }}</p>
    </div><!-- /.col-lg-6 -->
  </div><!-- /.row -->
    </div>
  </section>

<!-- ========================
        Team members
  ========================== -->
  <section id="contactPanels" class="contact-panels text-center pb-70">
    <div class="container">
      <div class="row justify-content-center">
        <!-- Contact panel #1 -->
        @if(count($staffs) > 0)
            @foreach($staffs as $staff)
            <?php 
              $items = count($staffs);
              $cols = $items == 1 ? '8' : '6' ;
            ?>
              <div class="col-sm-12 col-md-12 col-lg-{{$cols}}">
                <div class="contact-panel">
                  <div class="contact__panel-header">
                    <h4 class="contact__panel-title">{{$staff->name}}</h4>
                  </div>
                  <ul class="contact__list list-unstyled">
                    <li><b>{{ __('strings.tel1_head') }}</b>{{$staff->phone}}</li>
                    <li><b>{{ __('strings.mail_head') }}</b>{{$staff->email}}</li>
                    <li><b>{{ __('strings.address_head') }}</b>{{$staff->address}}</li>
                    <li><b>{{ __('strings.working_hours_head') }}</b>{{$staff->hours }}</li>


                  </ul>
                </div><!-- /.contact-panel -->
              </div><!-- /.col-lg-4 -->
            @endforeach
          @endif
        
      
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /. Contact panels -->

  
@endsection