@extends('layouts.app')

@section('content')

    <section id="page-title" class="page-title bg-overlay bg-parallax">
        <div class="bg-img"><img src="images/container/1.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">{{ __('strings.home') }}</a>
                            </li>
                            <li class="breadcrumb-item"><a
                                    href="{{ route('services') }}">{{ __('strings.services') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('strings.container_transport') }}
                            </li>
                        </ol>
                    </nav>
                    <h1 class="pagetitle__heading">{{ __('strings.container_transport') }}</h1>
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
                                    <li><a href="{{ route('ocean_Freight') }}">{{ __('strings.ocean_freight') }}</a>
                                    </li>
                                    <li><a href="{{ route('road_Freight') }}">{{ __('strings.road_freight') }}</a>
                                    </li>
                                    <li><a href="{{ route('rail_Freight') }}">{{ __('strings.rail_freight') }}</a>
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
                                    <h5 class="text__block-title">{{ __('strings.container_p0') }}</h5>
                                    <p class="text__block-desc">
                                        {{ __('strings.container_p1') }}<b>{{ __('strings.container_p2') }}</b>{{ __('strings.container_p3') }}
                                    </p>
                                </div><!-- /.text-block -->
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="text__block  mb-40">
                                            <h5 class="text__block-title">{{ __('strings.container_p4') }}</h5>
                                            <p class="text__block-desc"><b>{{ __('strings.container_p5') }}</b></p>
                                            <p class="text__block-desc"><b>{{ __('strings.container_p6') }}</b></p>
                                            <p class="text__block-desc"><b>{{ __('strings.container_p7') }}</b></p>
                                            <p class="text__block-desc"><b>{{ __('strings.container_p8') }}</b></p>
                                            <p class="text__block-desc"><b>{{ __('strings.container_p9') }}</b></p>
                                        </div><!-- /.text-block -->
                                    </div><!-- /.col-lg-6 -->
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="text__block  mb-40">
                                            <h5 class="text__block-title">{{ __('strings.container_p10') }}</h5>
                                            <p class="text__block-desc"><b>{{ __('strings.container_p11') }}</b></p>
                                            <p class="text__block-desc"><b>•</b>{{ __('strings.container_p12') }}</p>
                                            <p class="text__block-desc"><b>•</b>{{ __('strings.container_p13') }}</p>
                                        </div><!-- /.text-block -->
                                    </div><!-- /.col-lg-6 -->
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="projects-carousel-2 carousel owl-carousel carousel-dots" data-slide="3"
                                            data-slide-md="2" data-slide-sm="1" data-autoplay="true" data-nav="false"
                                            data-dots="true" data-space="30" data-loop="true" data-speed="800">
                                            <div class="project-item">
                                                <div class="project__img">
                                                    <img src="images/case-studies/grid/1.jpg" alt="project img">

                                                </div><!-- /.project-img -->
                                                <div class="project__content">
                                                    <div class="project__cat">
                                                    </div><!-- /.project-cat -->
                                                    <h4 class="project__title">{{ __('strings.container_p14') }}</h4>
                                                </div><!-- /.project-content -->
                                            </div><!-- /.project-item -->
                                            <div class="project-item">
                                                <div class="project__img">
                                                    <img src="images/case-studies/grid/2.jpg" alt="project img">

                                                </div><!-- /.project-img -->
                                                <div class="project__content">
                                                    <div class="project__cat">
                                                    </div><!-- /.project-cat -->
                                                    <h4 class="project__title">{{ __('strings.container_p15') }}</h4>
                                                </div><!-- /.project-content -->
                                            </div><!-- /.project-item -->
                                            <div class="project-item">
                                                <div class="project__img">
                                                    <img src="images/case-studies/grid/3.jpg" alt="project img">
                                                </div><!-- /.project-img -->
                                                <div class="project__content">
                                                    <div class="project__cat">
                                                    </div><!-- /.project-cat -->
                                                    <h4 class="project__title">{{ __('strings.container_p16') }}</h4>
                                                </div><!-- /.project-content -->
                                            </div><!-- /.project-item -->
                                            <div class="project-item">
                                                <div class="project__img">
                                                    <img src="images/case-studies/grid/5.jpg" alt="project img">
                                                </div><!-- /.project-img -->
                                                <div class="project__content">
                                                    <div class="project__cat">
                                                    </div><!-- /.project-cat -->
                                                    <h4 class="project__title">{{ __('strings.container_p17') }}</h4>
                                                </div><!-- /.project-content -->
                                            </div><!-- /.project-item -->
                                        </div><!-- /.carousel -->
                                    </div><!-- /.col-lg-12 -->
                                </div><!-- /.row -->
                                <div class="row mt-30">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <h5>{{ __('strings.container_p18') }}</h5>
                                        <div id="accordion" class="mb-50">
                                            <div id="accordion" class="mb-50">
                                                <div class="accordion-item">
                                                    <div class="accordion__item-header opened" data-toggle="collapse"
                                                        data-target="#collapse1">
                                                        <a class="accordion__item-title"
                                                            href="#">{{ __('strings.container_p19') }}</a>
                                                    </div><!-- /.accordion-item-header -->
                                                    <div id="collapse1" class="collapse show" data-parent="#accordion">
                                                        <div class="accordion__item-body">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-7 col-lg-7">
                                                                    <div class="text__block  mb-40">
                                                                        <p class="text__block-desc">
                                                                            <b>{{ __('strings.container_p20') }}</b>{{ __('strings.container_p21') }}
                                                                        </p>
                                                                        <br>
                                                                        <p class="text__block-desc">
                                                                            <b>{{ __('strings.container_p22') }}</b></p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p23') }} </p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p24') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p25') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p26') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p27') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p28') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p29') }}</p>
                                                                    </div><!-- /.text-block -->
                                                                </div><!-- /.col-lg-6 -->
                                                                <div class="col-sm-12 col-md-5 col-lg-5">
                                                                    <div class="row">
                                                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                                                            <img src="images/Types of Servics/Picture-2020-01-28 13.51.31.jpg"
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
                                                            href="#">{{ __('strings.container_p30') }}</a>
                                                    </div><!-- /.accordion-item-header -->
                                                    <div id="collapse2" class="collapse" data-parent="#accordion">
                                                        <div class="accordion__item-body">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-7 col-lg-7">
                                                                    <div class="text__block  mb-40">
                                                                        <p class="text__block-desc">
                                                                            <b>{{ __('strings.container_p20') }}</b>{{ __('strings.container_p21') }}
                                                                        </p>
                                                                        <br>
                                                                        <p class="text__block-desc">
                                                                            <b>{{ __('strings.container_p31') }}</b></p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p32') }} </p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p33') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p34') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p35') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p36') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p37') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p38') }}</p>
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
                                                        data-target="#collapse3">
                                                        <a class="accordion__item-title"
                                                            href="#">{{ __('strings.container_p39') }}</a>
                                                    </div><!-- /.accordion-item-header -->
                                                    <div id="collapse3" class="collapse" data-parent="#accordion">
                                                        <div class="accordion__item-body">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-7 col-lg-7">
                                                                    <div class="text__block  mb-40">
                                                                        <p class="text__block-desc">
                                                                            <b>{{ __('strings.container_p20') }}</b>{{ __('strings.container_p21') }}
                                                                        </p>
                                                                        <br>
                                                                        <p class="text__block-desc">
                                                                            <b>{{ __('strings.container_p40') }}</b></p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p41') }} </p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p42') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p43') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p44') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p45') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p46') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p47') }}</p>
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
                                                            href="#">{{ __('strings.container_p48') }}</a>
                                                    </div><!-- /.accordion-item-header -->
                                                    <div id="collapse4" class="collapse" data-parent="#accordion">
                                                        <div class="accordion__item-body">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-7 col-lg-7">
                                                                    <div class="text__block  mb-40">
                                                                        <p class="text__block-desc">
                                                                            {{ __('strings.container_p49') }}<b>{{ __('strings.container_p50') }}</b>
                                                                        </p>
                                                                        <br>
                                                                        <p class="text__block-desc">
                                                                            <b>{{ __('strings.container_p51') }}</b></p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p52') }} </p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p53') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p54') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p55') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p56') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p57') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p58') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p_rtemp') }}</p>
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
                                                        data-target="#collapse5">
                                                        <a class="accordion__item-title"
                                                            href="#">{{ __('strings.container_p59') }}</a>
                                                    </div><!-- /.accordion-item-header -->
                                                    <div id="collapse5" class="collapse" data-parent="#accordion">
                                                        <div class="accordion__item-body">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-7 col-lg-7">
                                                                    <div class="text__block  mb-40">
                                                                        <p class="text__block-desc">
                                                                            {{ __('strings.container_p49') }}<b>{{ __('strings.container_p50') }}</b>
                                                                        </p>
                                                                        <br>
                                                                        <p class="text__block-desc">
                                                                            <b>{{ __('strings.container_p60') }}</b></p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p61') }} </p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p62') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p63') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p64') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p65') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p66') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p67') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p_rtemp') }}</p>
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
                                                        data-target="#collapse6">
                                                        <a class="accordion__item-title"
                                                            href="#">{{ __('strings.container_p68') }}</a>
                                                    </div><!-- /.accordion-item-header -->
                                                    <div id="collapse6" class="collapse" data-parent="#accordion">
                                                        <div class="accordion__item-body">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-7 col-lg-7">
                                                                    <div class="text__block  mb-40">
                                                                        <p class="text__block-desc">
                                                                            {{ __('strings.container_p49') }}<b>{{ __('strings.container_p50') }}</b>
                                                                        </p>
                                                                        <br>
                                                                        <p class="text__block-desc">
                                                                            <b>{{ __('strings.container_p69') }}</b></p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p70') }} </p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p71') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p72') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p73') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p74') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p75') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p76') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p_rtemp') }}
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
                                                        data-target="#collapse7">
                                                        <a class="accordion__item-title"
                                                            href="#">{{ __('strings.container_p77') }}</a>
                                                    </div><!-- /.accordion-item-header -->
                                                    <div id="collapse7" class="collapse" data-parent="#accordion">
                                                        <div class="accordion__item-body">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-7 col-lg-7">
                                                                    <div class="text__block  mb-40">
                                                                        <p class="text__block-desc">
                                                                            <b>{{ __('strings.container_p78') }}</b>{{ __('strings.container_p79') }}
                                                                        </p>
                                                                        <br>
                                                                        <p class="text__block-desc">
                                                                            <b>{{ __('strings.container_p80') }}</b></p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p81') }} </p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p82') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p83') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p84') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p85') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p86') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p87') }}</p>
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
                                                        data-target="#collapse8">
                                                        <a class="accordion__item-title"
                                                            href="#">{{ __('strings.container_p88') }}</a>
                                                    </div><!-- /.accordion-item-header -->
                                                    <div id="collapse8" class="collapse" data-parent="#accordion">
                                                        <div class="accordion__item-body">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-7 col-lg-7">
                                                                    <div class="text__block  mb-40">
                                                                        <p class="text__block-desc">
                                                                            <b>{{ __('strings.container_p78') }}</b>{{ __('strings.container_p79') }}
                                                                        </p>
                                                                        <br>
                                                                        <p class="text__block-desc">
                                                                            <b>{{ __('strings.container_p89') }}</b></p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p90') }} </p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p91') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p92') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p93') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p94') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p95') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p96') }}</p>
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
                                                        data-target="#collapse9">
                                                        <a class="accordion__item-title"
                                                            href="#">{{ __('strings.container_p97') }}</a>
                                                    </div><!-- /.accordion-item-header -->
                                                    <div id="collapse9" class="collapse" data-parent="#accordion">
                                                        <div class="accordion__item-body">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-7 col-lg-7">
                                                                    <div class="text__block  mb-40">
                                                                        <p class="text__block-desc">
                                                                            <b>{{ __('strings.container_p78') }}</b>{{ __('strings.container_p79') }}
                                                                        </p>
                                                                        <br>
                                                                        <p class="text__block-desc">
                                                                            <b>{{ __('strings.container_p98') }}</b></p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p99') }} </p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p100') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p101') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p102') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p103') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p104') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p105') }}</p>
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
                                                        data-target="#collapse10">
                                                        <a class="accordion__item-title"
                                                            href="#">{{ __('strings.container_p106') }}</a>
                                                    </div><!-- /.accordion-item-header -->
                                                    <div id="collapse10" class="collapse" data-parent="#accordion">
                                                        <div class="accordion__item-body">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-7 col-lg-7">
                                                                    <div class="text__block  mb-40">
                                                                        <p class="text__block-desc">
                                                                            {{ __('strings.container_p107') }}<b>{{ __('strings.container_p108') }}</b>{{ __('strings.container_p109') }}
                                                                        </p>
                                                                        <br>
                                                                        <p class="text__block-desc">
                                                                            <b>{{ __('strings.container_p110') }}</b>
                                                                        </p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p111') }} </p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p112') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p113') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p114') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p115') }}</p>
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
                                                        data-target="#collapse11">
                                                        <a class="accordion__item-title"
                                                            href="#">{{ __('strings.container_p116') }}</a>
                                                    </div><!-- /.accordion-item-header -->
                                                    <div id="collapse11" class="collapse" data-parent="#accordion">
                                                        <div class="accordion__item-body">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-7 col-lg-7">
                                                                    <div class="text__block  mb-40">
                                                                        <p class="text__block-desc">
                                                                            {{ __('strings.container_p107') }}<b>{{ __('strings.container_p108') }}</b>{{ __('strings.container_p109') }}
                                                                        </p>
                                                                        <br>
                                                                        <p class="text__block-desc">
                                                                            <b>{{ __('strings.container_p117') }}</b>
                                                                        </p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p118') }} </p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p119') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p120') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p121') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p122') }}</p>
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
                                                        data-target="#collapse12">
                                                        <a class="accordion__item-title"
                                                            href="#">{{ __('strings.container_p123') }}</a>
                                                    </div><!-- /.accordion-item-header -->
                                                    <div id="collapse12" class="collapse" data-parent="#accordion">
                                                        <div class="accordion__item-body">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-7 col-lg-7">
                                                                    <div class="text__block  mb-40">
                                                                        <p class="text__block-desc">
                                                                            <b>{{ __('strings.container_p124') }}</b>{{ __('strings.container_p125') }}
                                                                        </p>
                                                                        <br>
                                                                        <p class="text__block-desc">
                                                                            <b>{{ __('strings.container_p126') }}</b>
                                                                        </p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p127') }} </p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p128') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p129') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p130') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p131') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p132') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p133') }}</p>
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
                                                        data-target="#collapse13">
                                                        <a class="accordion__item-title"
                                                            href="#">{{ __('strings.container_p134') }}</a>
                                                    </div><!-- /.accordion-item-header -->
                                                    <div id="collapse13" class="collapse" data-parent="#accordion">
                                                        <div class="accordion__item-body">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-7 col-lg-7">
                                                                    <div class="text__block  mb-40">
                                                                        <p class="text__block-desc">
                                                                            <b>{{ __('strings.container_p124') }}</b>{{ __('strings.container_p125') }}
                                                                        </p>
                                                                        <br>
                                                                        <p class="text__block-desc">
                                                                            <b>{{ __('strings.container_p135') }}</b>
                                                                        </p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p136') }} </p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p137') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p138') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p139') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p140') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p141') }}</p>
                                                                        <p class="text__block-desc"><b>•
                                                                            </b>{{ __('strings.container_p142') }}</p>
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
                                        <div class="row mt-30">
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <div class="text__block">
                                                    <h5 class="text__block-title">{{ __('strings.why_us') }}</h5>
                                                    <p class="text__block-desc">
                                                        <b>{{ __('strings.why_us_defco1') }}</b>{{ __('strings.why_us_defco2') }}
                                                    </p>
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
                                                            <i class="icon-balance"></i>
                                                        </div><!-- /.fancybox-icon -->
                                                        <div class="fancybox__content">
                                                            <h4 class="fancybox__title">
                                                                {{ __('strings.sec_for_cargo') }}</h4>
                                                            <p class="fancybox__desc">
                                                                {{ __('strings.sec_for_cargo_def') }}</p>
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

    <!-- ========================
            Team members
      ========================== -->
    <section id="contactPanels" class="contact-panels text-center pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Contact panel #1 -->
                @if (count($staffs) > 0)
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
