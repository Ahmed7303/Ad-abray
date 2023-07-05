@extends('layouts.app')

@section('content')

    <section id="page-title" class="page-title bg-overlay bg-parallax">
        <div class="bg-img"><img src="images/page-titles/Ocean.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">{{ __('strings.home') }}</a>
                            </li>
                            <li class="breadcrumb-item"><a
                                    href="{{ route('services') }}">{{ __('strings.services') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('strings.ocean_freight') }}</li>
                        </ol>
                    </nav>
                    <h1 class="pagetitle__heading">{{ __('strings.ocean_freight') }}</h1>
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
                                    <li><a href="{{ route('road_Freight') }}">{{ __('strings.road_freight') }}</a></li>
                                    <li><a href="{{ route('rail_Freight') }}">{{ __('strings.rail_freight') }}</a>
                                    </li>
                                    <li><a
                                            href="{{ route('container_Freight') }}">{{ __('strings.container_transport') }}</a>
                                    </li>
                                    <li><a href="{{ route('warehousing') }}">{{ __('strings.warehousing') }}</a></li>
                                    <li><a
                                            href="{{ route('customs_brokerage') }}">{{ __('strings.customs_brokerage') }}</a>
                                    </li>
                                </ul>
                            </div><!-- /.widget-content -->
                        </div><!-- /.widget-categories -->
                        <div class="widget widget-help bg-theme">
                            <div class="widget__content">
                                <h5>{{ __('strings.how_can') }} <br>{{ __('strings.we_help_you') }}</h5>
                                <p>{{ __('strings.we_help_you_def') }}</p>
                                <a href="{{ route('contact_us') }}" class="btn btn__secondary btn__hover2"><i
                                        class="fa fa-envelope"></i>{{ __('strings.contact_us_in') }}</a>
                            </div><!-- /.widget-download -->
                        </div><!-- /.widget-help -->
                    </aside><!-- /.sidebar -->
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <div class="case-single-item">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="text__block mb-40">
                                    <h5 class="text__block-title">{{ __('strings.ocean_f_p0') }}</h5>
                                    <p class="text__block-desc">
                                        <b>{{ __('strings.ocean_f_b') }}</b>{{ __('strings.ocean_f_b_def') }}</p>
                                    <p class="text__block-desc">{{ __('strings.ocean_f_p1') }}</p>
                                </div><!-- /.text-block -->
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="text__block  mb-40">
                                            <h5 class="text__block-title">{{ __('strings.ocean_f_p2') }}</h5>
                                            <p class="text__block-desc"><b>{{ __('strings.ocean_f_p3') }}</b></p>
                                            <p class="text__block-desc"><b>{{ __('strings.ocean_f_p4') }}</b></p>
                                            <p class="text__block-desc"><b>{{ __('strings.ocean_f_p5') }}</b></p>
                                            <p class="text__block-desc"><b>{{ __('strings.ocean_f_p6') }}</b></p>
                                            <p class="text__block-desc"><b>{{ __('strings.ocean_f_p7') }}</b></p>
                                        </div><!-- /.text-block -->
                                    </div><!-- /.col-lg-6 -->
                                </div><!-- /.row -->

                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <h5>{{ __('strings.ocean_f_p8') }}</h5>
                                        <div id="accordion" class="mb-50">
                                            <div id="accordion" class="mb-50">
                                                <div class="accordion-item">
                                                    <div class="accordion__item-header opened" data-toggle="collapse"
                                                        data-target="#collapse1">
                                                        <a class="accordion__item-title"
                                                            href="#">{{ __('strings.ocean_f_p9') }}</a>
                                                    </div><!-- /.accordion-item-header -->
                                                    <div id="collapse1" class="collapse show" data-parent="#accordion">
                                                        <div class="accordion__item-body">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-7 col-lg-7">
                                                                    <div class="text__block  mb-40">
                                                                        <p class="text__block-desc">
                                                                            <b>{{ __('strings.ocean_f_p9') }}</b>{{ __('strings.ocean_f_p9_1') }}
                                                                        </p> <br>
                                                                        <p class="text__block-desc">
                                                                            {{ __('strings.ocean_f_p9_2') }}<b>{{ __('strings.ocean_f_p9_3') }}</b>{{ __('strings.ocean_f_p9_4') }}
                                                                        </p><br>
                                                                        <p class="text__block-desc">
                                                                            {{ __('strings.ocean_f_p9_5') }}<b>{{ __('strings.ocean_f_p9_6') }}</b>{{ __('strings.ocean_f_p9_7') }}
                                                                        </p>
                                                                    </div><!-- /.text-block -->
                                                                </div><!-- /.col-lg-6 -->
                                                                <div class="col-sm-12 col-md-5 col-lg-5">
                                                                    <div class="row">
                                                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                                                            <img src="images/Types of Servics/Screenshot_20190806-004211_Gallery.jpg"
                                                                                alt="chart" class="img-fluid mt-50 mb-30">
                                                                        </div><!-- /.col-lg-12 -->
                                                                    </div><!-- /.row -->
                                                                </div><!-- /.col-lg-6 -->
                                                            </div><!-- /.row -->
                                                        </div><!-- /.accordion-item-body -->
                                                    </div>
                                                </div><!-- /.accordion-item -->
                                                <div class="accordion-item">
                                                    <div class="accordion__item-header" data-toggle="collapse"
                                                        data-target="#collapse2">
                                                        <a class="accordion__item-title"
                                                            href="#">{{ __('strings.ocean_f_p10') }}</a>
                                                    </div><!-- /.accordion-item-header -->
                                                    <div id="collapse2" class="collapse" data-parent="#accordion">
                                                        <div class="accordion__item-body">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-7 col-lg-7">
                                                                    <div class="text__block  mb-40">
                                                                        <p class="text__block-desc">
                                                                            <b>{{ __('strings.ocean_f_p10') }}</b>{{ __('strings.ocean_f_p10_1') }}
                                                                        </p>
                                                                        <br>
                                                                        <p class="text__block-desc">
                                                                            <b>{{ __('strings.ocean_f_p10_2') }}</b>{{ __('strings.ocean_f_p10_3') }}
                                                                        </p> <br>
                                                                        <p class="text__block-desc">
                                                                            {{ __('strings.ocean_f_p10_4') }}
                                                                            <b>{{ __('strings.ocean_f_p10_5') }}</b>{{ __('strings.ocean_f_p10_6') }}
                                                                        </p>
                                                                    </div><!-- /.text-block -->
                                                                </div><!-- /.col-lg-6 -->
                                                                <div class="col-sm-12 col-md-5 col-lg-5">
                                                                    <div class="row">
                                                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                                                            <img src="images/Types of Servics/image.png"
                                                                                alt="chart" class="img-fluid mt-50 mb-30">
                                                                        </div><!-- /.col-lg-12 -->
                                                                    </div><!-- /.row -->
                                                                </div><!-- /.col-lg-6 -->
                                                            </div><!-- /.row -->
                                                        </div><!-- /.accordion-item-body -->
                                                    </div>
                                                </div><!-- /.accordion-item -->
                                                <div class="accordion-item">
                                                    <div class="accordion__item-header" data-toggle="collapse"
                                                        data-target="#collapse3">
                                                        <a class="accordion__item-title"
                                                            href="#">{{ __('strings.ocean_f_p11') }}</a>
                                                    </div><!-- /.accordion-item-header -->
                                                    <div id="collapse3" class="collapse" data-parent="#accordion">
                                                        <div class="accordion__item-body">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-7 col-lg-7">
                                                                    <div class="text__block  mb-40">
                                                                        <p class="text__block-desc">
                                                                            <b>{{ __('strings.ocean_f_p11') }}</b>{{ __('strings.ocean_f_p11_1') }}
                                                                        </p>
                                                                        <br>
                                                                        <p class="text__block-desc">
                                                                            {{ __('strings.ocean_f_p11_2') }}<b>{{ __('strings.ocean_f_p11_3') }}</b>
                                                                        </p>
                                                                    </div><!-- /.text-block -->
                                                                </div><!-- /.col-lg-6 -->
                                                                <div class="col-sm-12 col-md-5 col-lg-5">
                                                                    <div class="row">
                                                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                                                            <img src="images/Types of Servics/cisterna.jpg"
                                                                                alt="chart" class="img-fluid mt-50 mb-30">
                                                                        </div><!-- /.col-lg-12 -->
                                                                    </div><!-- /.row -->
                                                                </div><!-- /.col-lg-6 -->
                                                            </div><!-- /.row -->
                                                        </div><!-- /.accordion-item-body -->
                                                    </div>
                                                </div><!-- /.accordion-item -->
                                                <div class="accordion-item">
                                                    <div class="accordion__item-header" data-toggle="collapse"
                                                        data-target="#collapse4">
                                                        <a class="accordion__item-title"
                                                            href="#">{{ __('strings.ocean_f_p12') }}</a>
                                                    </div><!-- /.accordion-item-header -->
                                                    <div id="collapse4" class="collapse" data-parent="#accordion">
                                                        <div class="accordion__item-body">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-7 col-lg-7">
                                                                    <div class="text__block  mb-40">
                                                                        <p class="text__block-desc"><b>
                                                                                {{ __('strings.ocean_f_p12') }}
                                                                            </b>{{ __('strings.ocean_f_p12_1') }}</p>
                                                                        <br>
                                                                        <p class="text__block-desc">
                                                                            {{ __('strings.ocean_f_p12_2') }}<b>{{ __('strings.ocean_f_p12_3') }}</b>{{ __('strings.ocean_f_p12_4') }}
                                                                        </p>
                                                                    </div><!-- /.text-block -->
                                                                </div><!-- /.col-lg-6 -->
                                                                <div class="col-sm-12 col-md-5 col-lg-5">
                                                                    <div class="row">
                                                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                                                            <img src="images/Types of Servics/platforma-without bg.png"
                                                                                alt="chart" class="img-fluid mt-50 mb-30">
                                                                        </div><!-- /.col-lg-12 -->
                                                                    </div><!-- /.row -->
                                                                </div><!-- /.col-lg-6 -->
                                                            </div><!-- /.row -->
                                                        </div><!-- /.accordion-item-body -->
                                                    </div>
                                                </div><!-- /.accordion-item -->
                                                <div class="accordion-item">
                                                    <div class="accordion__item-header" data-toggle="collapse"
                                                        data-target="#collapse5">
                                                        <a class="accordion__item-title"
                                                            href="#">{{ __('strings.ocean_f_p13') }}</a>
                                                    </div><!-- /.accordion-item-header -->
                                                    <div id="collapse5" class="collapse" data-parent="#accordion">
                                                        <div class="accordion__item-body">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-7 col-lg-7">
                                                                    <div class="text__block  mb-40">
                                                                        <p class="text__block-desc">
                                                                            <b>{{ __('strings.ocean_f_p13') }}</b>{{ __('strings.ocean_f_p13_1') }}
                                                                        </p>
                                                                        <br>
                                                                        <p class="text__block-desc">
                                                                            {{ __('strings.ocean_f_p13_2') }}<b>{{ __('strings.ocean_f_p13_3') }}</b>{{ __('strings.ocean_f_p13_4') }}
                                                                        </p>
                                                                    </div><!-- /.text-block -->
                                                                </div><!-- /.col-lg-6 -->
                                                                <div class="col-sm-12 col-md-5 col-lg-5">
                                                                    <div class="row">
                                                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                                                            <img src="images/Types of Servics/platforma-without bg.png"
                                                                                alt="chart" class="img-fluid mt-50 mb-30">
                                                                        </div><!-- /.col-lg-12 -->
                                                                    </div><!-- /.row -->
                                                                </div><!-- /.col-lg-6 -->
                                                            </div><!-- /.row -->
                                                        </div><!-- /.accordion-item-body -->
                                                    </div>
                                                </div><!-- /.accordion-item -->
                                            </div><!-- /.col-lg-12 -->
                                        </div><!-- /.row -->
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <div class="projects-carousel-2 carousel owl-carousel carousel-dots"
                                                    data-slide="3" data-slide-md="2" data-slide-sm="1" data-autoplay="true"
                                                    data-nav="false" data-dots="true" data-space="30" data-loop="true"
                                                    data-speed="800">
                                                    <div class="project-item">
                                                        <div class="project__img">
                                                            <img src="images/case-studies/grid/1.jpg" alt="project img">
                                                            <a href="#" class="zoom__icon"></a>
                                                        </div><!-- /.project-img -->
                                                        <div class="project__content">
                                                            <div class="project__cat">
                                                            </div><!-- /.project-cat -->
                                                            <h4 class="project__title"><a
                                                                    href="#">{{ __('strings.ocean_f_p9') }}</a></h4>
                                                        </div><!-- /.project-content -->
                                                    </div><!-- /.project-item -->
                                                    <div class="project-item">
                                                        <div class="project__img">
                                                            <img src="images/case-studies/grid/2.jpg" alt="project img">
                                                            <a href="#" class="zoom__icon"></a>
                                                        </div><!-- /.project-img -->
                                                        <div class="project__content">
                                                            <div class="project__cat">
                                                            </div><!-- /.project-cat -->
                                                            <h4 class="project__title"><a
                                                                    href="#">{{ __('strings.ocean_f_p10') }}</a></h4>
                                                        </div><!-- /.project-content -->
                                                    </div><!-- /.project-item -->
                                                    <div class="project-item">
                                                        <div class="project__img">
                                                            <img src="images/case-studies/grid/3.jpg" alt="project img">
                                                            <a href="#" class="zoom__icon"></a>
                                                        </div><!-- /.project-img -->
                                                        <div class="project__content">
                                                            <div class="project__cat">
                                                            </div><!-- /.project-cat -->
                                                            <h4 class="project__title"><a
                                                                    href="#">{{ __('strings.ocean_f_p11') }}</a></h4>
                                                        </div><!-- /.project-content -->
                                                    </div><!-- /.project-item -->
                                                    <div class="project-item">
                                                        <div class="project__img">
                                                            <img src="images/case-studies/grid/4.jpg" alt="project img">
                                                            <a href="#" class="zoom__icon"></a>
                                                        </div><!-- /.project-img -->
                                                        <div class="project__content">
                                                            <div class="project__cat">
                                                            </div><!-- /.project-cat -->
                                                            <h4 class="project__title"><a
                                                                    href="#">{{ __('strings.ocean_f_p12') }}</a></h4>
                                                        </div><!-- /.project-content -->
                                                    </div><!-- /.project-item -->
                                                    <div class="project-item">
                                                        <div class="project__img">
                                                            <img src="images/case-studies/grid/5.jpg" alt="project img">
                                                            <a href="#" class="zoom__icon"></a>
                                                        </div><!-- /.project-img -->
                                                        <div class="project__content">
                                                            <div class="project__cat">
                                                            </div><!-- /.project-cat -->
                                                            <h4 class="project__title"><a
                                                                    href="#">{{ __('strings.ocean_f_p13') }}</a></h4>
                                                        </div><!-- /.project-content -->
                                                    </div><!-- /.project-item -->
                                                </div><!-- /.carousel -->
                                            </div><!-- /.col-lg-12 -->
                                        </div><!-- /.row -->
                                        <div class="row mt-50">
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <div class="text__block">
                                                    <h5 class="text__block-title">{{ __('strings.why_us') }}</h5>
                                                    <p class="text__block-desc">{{ __('strings.why_us_defo') }}</p>
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
                                                            <h4 class="fancybox__title">
                                                                {{ __('strings.affordable_pricing') }}</h4>
                                                            <p class="fancybox__desc">
                                                                {{ __('strings.affordable_pricing_def') }}</p>
                                                        </div><!-- /.fancybox-content -->
                                                    </div>
                                                </div><!-- /.col-lg-4 -->
                                                <div class="col-sm-12 col-md-4 col-lg-4">
                                                    <div class="fancybox-item">
                                                        <div class="fancybox__icon">
                                                            <i class="icon-search-worldwide"></i>
                                                        </div><!-- /.fancybox-icon -->
                                                        <div class="fancybox__content">
                                                            <h4 class="fancybox__title">
                                                                {{ __('strings.real_time_tracking') }}</h4>
                                                            <p class="fancybox__desc">
                                                                {{ __('strings.real_time_tracking_def') }} </p>
                                                        </div><!-- /.fancybox-content -->
                                                    </div>
                                                </div><!-- /.col-lg-4 -->
                                                <div class="col-sm-12 col-md-4 col-lg-4">
                                                    <div class="fancybox-item">
                                                        <div class="fancybox__icon">
                                                            <i class="icon-boxes"></i>
                                                        </div><!-- /.fancybox-icon -->
                                                        <div class="fancybox__content">
                                                            <h4 class="fancybox__title">
                                                                {{ __('strings.warehouse_storage') }}</h4>
                                                            <p class="fancybox__desc">
                                                                {{ __('strings.warehouse_storage_def') }}</p>
                                                        </div><!-- /.fancybox-content -->
                                                    </div>
                                                </div><!-- /.col-lg-4 -->
                                            </div><!-- /.row -->
                                        </div><!-- /.case-single-item -->
                                    </div><!-- /.col-lg-8 -->
                                </div><!-- /.row -->
                            </div><!-- /.container -->
    </section><!-- /.case studies Single -->

    <section class="statistic">
        <div>
            <div class="statistic_wrap">
                <h4 class="main_sup-title">
                    {{ __('strings.diagram.title') }}
                </h4>
                <h2 class="main_title">
                    {{ __('strings.diagram.main_title') }}
                </h2>

                @if (count($diagrams) > 0)
                    @foreach ($diagrams as $item)
                        <div class="statistic_photo">
                            <img src="{{ env('APP_URL') }}/{{ $item->image }}" alt="statistic-img">
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

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
              @if (isset($staffs) && count($staffs) > 0)
                    @foreach ($staffs as $staff)
                        <?php
                        $items = count($staffs);
                        $cols = $items == 1 ? '8' : '6';
                        ?>
                        <div class="col-sm-12 col-md-12 col-lg-{{ $cols }}">
                            <div class="contact-panel">
                                <div class="contact__panel-header">
                                    <h4 class="contact__panel-title">{{ $staff->name }}</h4>
                                </div>
                                <ul class="contact__list list-unstyled">
                                    <li><b>{{ __('strings.tel1_head') }}</b>{{ $staff->phone }}</li>
                                    <li><b>{{ __('strings.mail_head') }}</b>{{ $staff->email }}</li>
                                    <li><b>{{ __('strings.address_head') }}</b>{{ $staff->address }}</li>
                                    <li><b>{{ __('strings.working_hours_head') }}</b>{{ $staff->hours }}</li>

                                </ul>
                            </div><!-- /.contact-panel -->
                        </div><!-- /.col-lg-4 -->
                    @endforeach
                @endif
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /. Contact panels -->

@endsection
