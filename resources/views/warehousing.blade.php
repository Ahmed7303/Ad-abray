@extends('layouts.app')

@section('content')

<section id="page-title" class="page-title bg-overlay bg-parallax">
    <div class="bg-img"><img src="images/warehouse/2.jpg" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('welcome') }}">{{ __('strings.home') }}</a></li>
              <li class="breadcrumb-item"><a href="{{ route('services') }}">{{ __('strings.services') }}</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ __('strings.warehousing') }}</li>
            </ol>
          </nav>
          <h1 class="pagetitle__heading">{{ __('strings.warehousing') }}</h1>
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.page-title -->

  <!-- ======================
    case studies Single
  ========================= -->
  <section id="caseStudiesSingle" class="case-studies-single">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-4">
          <aside class="sidebar mb-30">
            <div class="widget widget-categories widget-categories-2">
              <div class="widget-content">
                <ul class="list-unstyled">
                  <li><a href="#" class="active">{{ __('strings.other_services') }}</a></li>
                  <li><a href="{{ route('air_Freight') }}">{{ __('strings.air_freight') }}</a></li>
                  <li><a href="{{ route('ocean_Freight') }}">{{ __('strings.ocean_freight') }}</a></li>
                  <li><a href="{{ route('road_Freight') }}">{{ __('strings.road_freight') }}</a></li>
                  <li><a href="{{ route('rail_Freight') }}">{{ __('strings.rail_freight') }}</a></li>
                  <li><a href="{{ route('container_Freight') }}">{{ __('strings.container_transport') }}</a></li>
                  <li><a href="{{ route('customs_brokerage') }}">{{ __('strings.customs_brokerage') }}</a></li>
                </ul>
              </div><!-- /.widget-content -->
            </div><!-- /.widget-categories -->
            <div class="widget widget-help bg-theme">
              <div class="widget__content">
                <h5>{{ __('strings.how_can') }} <br>{{ __('strings.we_help_you') }}</h5>
                <p>{{ __('strings.we_help_you_def') }}</p>
                <a href="contact_us" class="btn btn__secondary btn__hover2"><i class="fa fa-envelope"></i>{{ __('strings.contact_us_in') }}</a>
              </div><!-- /.widget-download -->
            </div><!-- /.widget-help -->
          </aside><!-- /.sidebar -->
        </div><!-- /.col-lg-4 -->
        <div class="col-sm-12 col-md-12 col-lg-8">
          <div class="case-single-item">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="text__block mb-40">
                  <h5 class="text__block-title">{{ __('strings.warehousing_p0') }}</h5>
                  <p class="text__block-desc">{{ __('strings.warehousing_p1') }}</p>
                </div><!-- /.text-block -->
                <div class="row">
                  <div class="col-sm-12 col-md-7 col-lg-7">
                    <div class="text__block ">
                      <p class="text__block-desc"><b>{{ __('strings.warehousing_p2') }}</b></p>
                      <p class="text__block-desc">{{ __('strings.warehousing_p2_1') }}</p>
                      <p class="text__block-desc"> <b>{{ __('strings.warehousing_p2_2') }}</b>{{ __('strings.warehousing_p2_3') }}</p>
                    </div><!-- /.text-block -->
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-12 col-md-5 col-lg-5">
                    <div class="row ">
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <img src="images/Types of Servics/manufactured-and-designed-temperature-controlled-building-Cold-room.jpg" alt="chart" class="img-fluid mt-50 mb-30">
                      </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                  </div><!-- /.col-lg-6 -->
                </div>
                <div class="row">
                  <div class="col-sm-12 col-md-7 col-lg-7">
                    <div class="text__block ">
                      <p class="text__block-desc"><b>{{ __('strings.warehousing_p3') }}</b></p>
                      <p class="text__block-desc">{{ __('strings.warehousing_p3_1') }}</p>
                      <p class="text__block-desc"> <b>{{ __('strings.warehousing_p3_2') }}</b>{{ __('strings.warehousing_p3_3') }}</p>
                    </div><!-- /.text-block -->
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-12 col-md-5 col-lg-5">
                    <div class="row ">
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <img src="images/Types of Servics/unnamed.jpg" alt="chart" class="img-fluid mt-50 mb-30">
                      </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                  </div><!-- /.col-lg-6 -->
                </div>
                <div class="row">
                  <div class="col-sm-12 col-md-7 col-lg-7">
                    <div class="text__block ">
                      <p class="text__block-desc"><b>{{ __('strings.warehousing_p4') }}</b></p>
                      <p class="text__block-desc">{{ __('strings.warehousing_p4_1') }}</p>
                      <p class="text__block-desc"> <b>{{ __('strings.warehousing_p4_2') }}</b>{{ __('strings.warehousing_p4_3') }}</p>
                    </div><!-- /.text-block -->
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-12 col-md-5 col-lg-5">
                    <div class="row ">
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <img src="images/Types of Servics/1.jpg" alt="chart" class="img-fluid mt-50 mb-30">
                      </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                  </div><!-- /.col-lg-6 -->
                </div>
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="text__block">
                  <h5 class="text__block-title">{{ __('strings.why_us') }}</h5>
                  <p class="text__block-desc">{{ __('strings.why_us_defw') }}</p>
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
                      <i class="icon-telephone-1"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                      <h4 class="fancybox__title">{{ __('strings.hours_support') }}</h4>
                      <p class="fancybox__desc">{{ __('strings.hours_support_def') }}</p>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-3 -->
                <div class="col-sm-12 col-md-4 col-lg-4">
                  <div class="fancybox-item">
                    <div class="fancybox__icon">
                      <i class="icon-balance"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                      <h4 class="fancybox__title">{{ __('strings.sec_for_cargo') }}</h4>
                      <p class="fancybox__desc">{{ __('strings.sec_for_cargo_def') }}</p>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-3 -->
              </div><!-- /.row -->
            </div><!-- /.fancybox-layout2-panel -->
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
      <div class="row">
        <!-- Contact panel #1 -->
       
        <div class="col-sm-12 col-md-12 col-lg-12">
          <div class="contact-panel">
            <div class="contact__panel-header">
              <h4 class="contact__panel-title">{{ __('strings.team_name21') }}</h4>
            </div>
            <ul class="contact__list list-unstyled">
              <li><b>{{ __('strings.tel1_head') }}</b>{{ __('strings.team_name18_tel') }}</li>       
              <li><b>{{ __('strings.mail_head') }}</b>{{ __('strings.team_name18_mail') }}</li>      
              <li><b>{{ __('strings.address_head') }}</b>{{ __('strings.team_name18_address') }}</li>    
              <li><b>{{ __('strings.working_hours_head') }}</b>{{ __('strings.working_hours') }}</li>   
            </ul>
          </div><!-- /.contact-panel -->
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /. Contact panels -->

@endsection