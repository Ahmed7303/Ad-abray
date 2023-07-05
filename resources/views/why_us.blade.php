@extends('layouts.app')

@section('content')
    <section id="page-title" class="page-title bg-overlay bg-parallax">
        <div class="bg-img"><img src="images/page-titles/5.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">{{ __('strings.home') }}</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('why_us') }}">{{ __('strings.company') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('strings.about_us') }}</li>
                        </ol>
                    </nav>
                    <h1 class="pagetitle__heading">{{ __('strings.about_company') }}</h1>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
          About 1
        =========================== -->
    <section id="about1" class="about about-1 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="heading heading-2">
                        <h2 class="heading__title">{{ __('strings.about1_head') }}</h2>
                        <p class="heading__desc mb-30">{{ __('strings.about1_def1') }}</p>
                        <p>{{ __('strings.about1_def2') }}</p>
                    </div><!-- /.heading -->
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-10 col-lg-6">
                    <div class="about__img text-right">
                        <img src="images/about/1.jpg" alt="about img" class="img-fluid">
                    </div><!-- /.about-img -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.About 1 -->

    <!-- ===========================
          fancybox Layout2
        ============================= -->
    <section id="fancyboxLayout2" class="fancybox-layout2 pt-0 pb-80">
        <div class="container">
            <div class="row pt-40">
                <!-- fancybox item #1 -->
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="fancybox-item">
                        <div class="fancybox__icon">
                            <i class="icon-credit-cards"></i>
                        </div><!-- /.fancybox-icon -->
                        <div class="fancybox__content">
                            <h4 class="fancybox__title">{{ __('strings.affordable_pricing') }}</h4>
                            <p class="fancybox__desc">{{ __('strings.affordable_pricing_def') }}</p>
                        </div><!-- /.fancybox-content -->
                    </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-3 -->
                <!-- fancybox item #2 -->
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="fancybox-item">
                        <div class="fancybox__icon">
                            <i class="icon-search-worldwide"></i>
                        </div><!-- /.fancybox-icon -->
                        <div class="fancybox__content">
                            <h4 class="fancybox__title">{{ __('strings.real_time_tracking') }}</h4>
                            <p class="fancybox__desc">{{ __('strings.real_time_tracking_def') }} </p>
                        </div><!-- /.fancybox-content -->
                    </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-3 -->
                <!-- fancybox item #3 -->
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="fancybox-item">
                        <div class="fancybox__icon">
                            <i class="icon-boxes"></i>
                        </div><!-- /.fancybox-icon -->
                        <div class="fancybox__content">
                            <h4 class="fancybox__title">{{ __('strings.warehouse_storage') }}</h4>
                            <p class="fancybox__desc">{{ __('strings.warehouse_storage_def') }}</p>
                        </div><!-- /.fancybox-content -->
                    </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-3 -->
                <!-- fancybox item #4 -->
                <div class="col-sm-12 col-md-6 col-lg-3">
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
        </div><!-- /.container -->
    </section><!-- /.fancybox Layout2 -->

    <section class="cer">
        <div class="container">
            <div class="cer_wrap">
                <h4 class="main_sup-title">
                    {{ __('strings.reviews_title') }}
                </h4>
                <h2 class="main_title">
                    {{ __('strings.ship.licenses') }}
                </h2>

                <div class="cer_box">
                    @if (count($licenses) > 0)
                        @foreach ($licenses as $item)
                            <div class="cer_box-item">
                                <div class="cer_box-item-photo">
                                    <img src="{{ env('APP_URL') }}/{{ $item->image }}" alt="Certificates">
                                </div>
                                <h4 class="cer_box-item-title">
                                    {{$item->title}}
                                </h4>
    
                                <a class="open fancybox" href="{{ env('APP_URL') }}/{{ $item->image }}"
                                    data-fancybox="images-preview-1" data-width="1500" data-height="1000"></a>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </section>
    

    <!-- =====================
           Clients 1
        ======================== -->
    <section id="clients" class="clients clients-1 border-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="carousel owl-carousel" data-slide="6" data-slide-md="4" data-slide-sm="2"
                        data-autoplay="true" data-nav="false" data-dots="false" data-space="20" data-loop="true"
                        data-speed="700">
                        @if (count($clients) > 0)
                            @foreach ($clients as $item)
                                <div class="client">
                                    <a target="_blank" rel="noopener noreferrer"><img
                                            src="{{ asset('storage/' . $item->logo) }}" alt="client"
                                            class="img-fluid"></a>
                                </div><!-- /.client -->
                            @endforeach
                        @endif
                    </div><!-- /.carousel -->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.clients 1 -->

    <!-- =========================
                cta 1
        =========================  -->
    <section id="cta1" class="cta cta-1 border-top pt-40 pb-10">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="contact-panel contact-panel-2">
                        <div class="contact__panel-header d-flex align-items-center">
                            <i class="icon-placeholder"></i>
                            <h4 class="contact__panel-title">{{ __('strings.main_office') }}</h4>
                        </div>
                        <div id="accordion">
                            <div class="accordion-item">
                                <div class="accordion__item-header opened" data-toggle="collapse" data-target="#collapse1">
                                    <a class="accordion__item-title" href="#">{{ __('strings.ashgabat_office') }}</a>
                                </div><!-- /.accordion-item-header -->
                                <div id="collapse1" class="collapse  show" data-parent="#accordion">
                                    <div class="accordion__item-body">
                                        <ul class="contact__list list-unstyled">
                                            <li><b>{{ __('strings.tel1_head') }}</b>{{ __('strings.tel1') }}</li>
                                            <!-- Üýtgeşme -->
                                            <li><b>{{ __('strings.mail_head') }}</b>{{ __('strings.mail') }}</li>
                                            <!-- Üýtgeşme -->
                                            <li><b>{{ __('strings.address_head') }}</b>{{ __('strings.address') }}
                                            </li> <!-- Üýtgeşme -->
                                            <li><b>{{ __('strings.working_hours_head') }}</b>{{ __('strings.working_hours') }}
                                            </li> <!-- Üýtgeşme -->
                                        </ul>
                                    </div><!-- /.accordion-item-body -->
                                </div>
                            </div><!-- /.accordion-item -->
                        </div>
                    </div><!-- /.contact-panel -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.cta1 -->


    <!-- =========================
                YandexMap
        =========================  -->
    <section id="googleMap" class="google-map p-0">
        <div id="map"><iframe
                src="https://yandex.com/map-widget/v1/?um=constructor%3A74553a0424c44ff7de68fb514bb294ca5bbf25c439c2bc8cc04f65f26d3f2c66&amp;source=constructor"
                width="100%" height="100%" frameborder="0"></iframe></div>
    </section><!-- /.YandexMap -->


@endsection
