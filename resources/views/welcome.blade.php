@extends('layouts.app')

@section('content')
    <!-- ============================
                        Slider
                    ============================== -->
    <section id="slider2" class="slider slider-2">
        <div class="carousel owl-carousel carousel-arrows carousel-dots" data-slide="1" data-slide-md="1" data-slide-sm="1"
            data-autoplay="true" data-nav="true" data-dots="false" data-space="0" data-loop="true" data-speed="3000"
            data-transition="fade" data-animate-out="fadeOut" data-animate-in="fadeIn">
            @if (count($slider) > 0)
                @foreach ($slider as $item)
                    <div class="slide-item align-v-h bg-overlay">
                        <div class="bg-img"><img src="{{ env('APP_URL') }}/{{ $item->image }}" alt="slide img">
                        </div>
                        <div class="container">
                            <div class="row text">
                                <div class="col-sm-12 col-md-12 col-lg-8">
                                    <div class="slide__content">
                                        <h2 class="slide__title">{{ $item->title }}</h2>
                                        <p class="slide__desc">{{ $item->description }}</p>
                                    </div><!-- /.slide-content -->
                                </div><!-- /.col-lg-8 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.slide-item -->
                @endforeach
            @else
                <div class="slide-item align-v-h bg-overlay">
                    <div class="bg-img"><img src="images/sliders/2.jpg" alt="slide img"></div>
                    <div class="container">
                        <div class="row text">
                            <div class="col-sm-12 col-md-12 col-lg-8">
                                <div class="slide__content">
                                    <h2 class="slide__title">{{ __('strings.slider_head1') }}</h2>
                                    <p class="slide__desc">{{ __('strings.slider_def1') }}</p>
                                </div><!-- /.slide-content -->
                            </div><!-- /.col-lg-8 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.slide-item -->
                <div class="slide-item align-v-h bg-overlay">
                    <div class="bg-img"><img src="images/sliders/3.jpg" alt="slide img"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-8">
                                <div class="slide__content">
                                    <h2 class="slide__title">{{ __('strings.slider_head2') }}</h2>
                                    <p class="slide__desc">{{ __('strings.slider_def2') }}</p>
                                </div><!-- /.slide-content -->
                            </div><!-- /.col-lg-8 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.slide-item -->
                <div class="slide-item align-v-h bg-overlay">
                    <div class="bg-img"><img src="images/sliders/5.jpg" alt="slide img"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-8">
                                <div class="slide__content">
                                    <h2 class="slide__title">{{ __('strings.slider_head3') }}</h2>
                                    <p class="slide__desc">{{ __('strings.slider_def3') }}</p>
                                </div><!-- /.slide-content -->
                            </div><!-- /.col-lg-8 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.slide-item -->
                <div class="slide-item align-v-h bg-overlay">
                    <div class="bg-img"><img src="images/sliders/4.jpg" alt="slide img"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-8">
                                <div class="slide__content">
                                    <h2 class="slide__title">{{ __('strings.slider_head4') }}</h2>
                                    <p class="slide__desc">{{ __('strings.slider_def4') }}</p>
                                </div><!-- /.slide-content -->
                            </div><!-- /.col-lg-8 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.slide-item -->
            @endif
        </div><!-- /.carousel -->

        <div class="request__form d-none d-lg-block">

            <div class="request__form-header d-flex align-items-center">
                <i class="icon-box"></i>
                <h4 class="request__form-title">{{ __('strings.track_trace') }}</h4>
            </div>
            @if (session('error'))
                <div class="alert alert-danger d-flex align-items-center">
                    {{ session('error') }}

                </div>
            @endif


            <!-- /.request-form-header -->
            <form action="{{ route('orders.find') }}" method="get">
                <div class="request__form-body">
                    <p class="mb-30">{{ __('strings.track_trace_home_def') }}</p>
                    <div class="form-group mb-5">
                        <input type="text" class="form-control" name="search"
                            placeholder="{{ __('strings.track_trace_p2') }}">
                    </div>
                    <small class="d-block mb-30">{{ __('strings.track_trace_p4') }}</small>
                    <button class="btn btn__primary btn__hover3">{{ __('strings.track_trace_p3') }}</button>
                </div><!-- /.request-form-body -->
            </form>
        </div><!-- /.request-form -->
    </section><!-- /.slider -->

    <!-- ========================
                        Services
                    =========================== -->
    <section id="services" class="services  bg-gray pb-70">
        <div class="container">
            <div class="row heading  mb-40">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <span class="heading__subtitle">{{ __('strings.services_we_offer') }}</span>
                </div><!-- /.col-lg-12 -->
                <div class="col-sm-12 col-md-6 col-lg-5">
                    <h2 class="heading__title">{{ __('strings.services_def1') }}</h2>
                </div><!-- /.col-lg-5 -->
                <div class="col-sm-12 col-md-6 col-lg-6 offset-lg-1">
                    <p class="heading__desc">{{ __('strings.services_def2') }}</p>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                @if (count($servicing) > 0)
                    @foreach ($servicing as $item)
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="service-item">
                                <div class="service__img">
                                    <img src="{{ env('APP_URL') }}/{{ $item->image }}" alt="service"
                                        class="img-fluid">
                                </div><!-- /.service-img -->
                                <div class="service__overlay">
                                    <div class="service__icon"><img src="{{ asset('storage/' . $item->icon) }}"
                                            alt="plane-icon"> </div>
                                    <h4 class="service__title">{{ $item->title }}</h4>
                                    <p class="service__desc">{{ $item->description }}</p>
                                    <a href="{{ $item->link }}"
                                        class="btn btn__white btn__link btn__underlined">{{ __('strings.services_air_but') }}</a>
                                </div>
                            </div><!-- /.service-item -->
                        </div><!-- /.col-lg-4 -->
                    @endforeach
                @else
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service__img">
                                <img src="images/services/1.jpg" alt="service" class="img-fluid">
                            </div><!-- /.service-img -->
                            <div class="service__overlay">
                                <div class="service__icon"><img src="images/icons/plane.svg" alt="plane-icon"> </div>
                                <h4 class="service__title">{{ __('strings.services_air') }}</h4>
                                <p class="service__desc">{{ __('strings.services_air_def') }}</p>
                                <a href="{{ route('air_Freight') }}"
                                    class="btn btn__white btn__link btn__underlined">{{ __('strings.services_air_but') }}</a>
                            </div>
                        </div><!-- /.service-item -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service__img">
                                <img src="images/services/2.jpg" alt="service" class="img-fluid">
                            </div><!-- /.service-img -->
                            <div class="service__overlay">
                                <div class="service__icon"> <img src="images/icons/ship.svg" alt="ship-icon"> </div>
                                <h4 class="service__title">{{ __('strings.services_ocean') }}</h4>
                                <p class="service__desc"> {{ __('strings.services_ocean_def') }}</p>
                                <a href="{{ route('ocean_Freight') }}"
                                    class="btn btn__white btn__link btn__underlined">{{ __('strings.services_ocean_but') }}</a>
                            </div>
                        </div><!-- /.service-item -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service__img">
                                <img src="images/services/3.jpg" alt="service" class="img-fluid">
                            </div><!-- /.service-img -->
                            <div class="service__overlay">
                                <div class="service__icon"> <img src="images/icons/truck.svg" alt="truck-icon"> </div>
                                <h4 class="service__title">{{ __('strings.services_road') }}</h4>
                                <p class="service__desc">{{ __('strings.services_road_def_m') }}</p>
                                <a href="{{ route('road_Freight') }}"
                                    class="btn btn__white btn__link btn__underlined">{{ __('strings.services_road_but') }}</a>
                            </div>
                        </div><!-- /.service-item -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service__img">
                                <img src="images/services/4.jpg" alt="service" class="img-fluid">
                            </div><!-- /.service-img -->
                            <div class="service__overlay">
                                <div class="service__icon"> <img src="images/icons/trainselected.svg" alt="train-icon">
                                </div>
                                <h4 class="service__title">{{ __('strings.services_rail') }}</h4>
                                <p class="service__desc">{{ __('strings.services_rail_def') }}</p>
                                <a href="{{ route('rail_Freight') }}"
                                    class="btn btn__white btn__link btn__underlined">{{ __('strings.services_rail_but') }}</a>
                            </div>
                        </div><!-- /.service-item -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service__img">
                                <img src="images/services/5.jpg" alt="service" class="img-fluid">
                            </div><!-- /.service-img -->
                            <div class="service__overlay">
                                <div class="service__icon"><img src="images/icons/container.svg" alt="container icon">
                                </div>
                                <h4 class="service__title">{{ __('strings.services_container') }}</h4>
                                <p class="service__desc">{{ __('strings.services_container_def_m') }}</p>
                                <a href="{{ route('container_Freight') }}"
                                    class="btn btn__white btn__link btn__underlined">{{ __('strings.services_container_but') }}</a>
                            </div>
                        </div><!-- /.service-item -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service__img">
                                <img src="images/services/6.jpg" alt="service" class="img-fluid">
                            </div><!-- /.service-img -->
                            <div class="service__overlay">
                                <div class="service__icon"><img src="images/icons/data-warehouse.svg"
                                        alt="warehousing icon">
                                </div>
                                <h4 class="service__title">{{ __('strings.services_warehousing') }}</h4>
                                <p class="service__desc">{{ __('strings.services_warehousing_def') }} </p>
                                <a href="{{ route('warehousing') }}"
                                    class="btn btn__white btn__link btn__underlined">{{ __('strings.services_warehousing_but') }}
                                </a>
                            </div>
                        </div><!-- /.service-item -->
                    </div><!-- /.col-lg-4 -->
                @endif
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Services -->



    <!-- ========================
                      About 2
                    =========================== -->
    <section id="about2" class="about about-2 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-9 col-lg-5">
                    <div class="about__img mb-50">
                        <img src="images/about/2.jpg" alt="about img" class="img-fluid">
                    </div><!-- /.about-img -->
                </div><!-- /.col-lg-5 -->
                <div class="col-sm-12 col-md-12 col-lg-7">
                    <div class="row heading heading-2">
                        <div class="col-sm-12 col-md-12 col-sm-12">
                            <h2 class="heading__title">{{ __('strings.head_about_title') }}</h2>
                        </div><!-- /.col-lg-12 -->
                        <div class="col-sm-12 col-md-7 col-lg-7">
                            <p class="heading__desc mb-30">{{ __('strings.head_about_p1') }}</p>
                            <p>{{ __('strings.head_about_p2') }}</p>
                        </div><!-- /.col-lg-7 -->
                        <div class="col-sm-12 col-md-5 col-lg-5">
                            <div class="carousel owl-carousel carousel-dots" data-slide="1" data-slide-md="1"
                                data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="0"
                                data-loop="true" data-speed="700">
                                <div class="fancybox-item">
                                    <div class="fancybox__icon">
                                        <i class="icon-worldwide"></i>
                                    </div><!-- /.fancybox-icon -->
                                    <div class="fancybox__content">
                                        <h4 class="fancybox__title">{{ __('strings.our_mission') }}</h4>
                                        <p class="fancybox__desc">{{ __('strings.our_mission_def') }}</p>
                                    </div><!-- /.fancybox-content -->
                                </div><!-- /.fancybox-item -->
                                <div class="fancybox-item">
                                    <div class="fancybox__icon">
                                        <i class="icon-transfer"></i>
                                    </div><!-- /.fancybox-icon -->
                                    <div class="fancybox__content">
                                        <h4 class="fancybox__title">{{ __('strings.our_vision') }}</h4>
                                        <p class="fancybox__desc">{{ __('strings.our_vision_def') }}</p>
                                    </div><!-- /.fancybox-content -->
                                </div><!-- /.fancybox-item -->
                            </div><!-- /.carousel -->
                        </div><!-- /.col-lg-5 -->
                    </div><!-- /.row -->
                </div><!-- /.col-lg-7 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.About 2 -->


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
                                            src="{{ asset('storage/' . $item->logo) }}" alt="client" class="img-fluid"></a>
                                </div><!-- /.client -->
                           @endforeach
                        @endif
                    </div><!-- /.carousel -->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.clients 1 -->


    <!-- =========================
                       Parallax counter
                      =========================== -->
    <section id="video1" class="video video-1 bg-overlay bg-parallax counters-white">
        <div class="bg-img"><img src="images/backgrounds/3.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
                    <div class="heading">
                        <span class="heading__subtitle color-white">{{ __('strings.counter_head') }}</span>
                        <h3 class="heading__title color-white">{{ __('strings.counter_def') }}</h3>
                    </div><!-- /.heading -->
                </div><!-- /.col-xl-5 -->
                <div class="col-sm-12 col-md-12 col-lg-7 col-xl-6 offset-xl-1">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="counter-item">
                                <div class="counter__icon"><i class="icon-worldwide"></i></div>
                                <h4><span class="counter">{{ $totalClients }}</span></h4>
                                <p class="counter__desc">{{ __('strings.counter_client') }}</p>
                            </div><!-- /.counter-item -->
                        </div><!-- /.col-lg-4 -->
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="counter-item">
                                <div class="counter__icon"><i class="icon-trolley"></i></div>
                                <h4><span class="counter">{{ $totalWeight }}</span></h4>
                                <p class="counter__desc">{{ __('strings.counter_goods') }}</p>
                            </div><!-- /.counter-item -->
                        </div><!-- /.col-lg-4 -->
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="counter-item">
                                <div class="counter__icon"><i class="icon-truck"></i></div>
                                <h4><span class="counter">{{ $totalDistance }}</span></h4>
                                <p class="counter__desc">{{ __('strings.counter_miles') }}</p>
                            </div><!-- /.counter-item -->
                        </div><!-- /.col-lg-4 -->
                    </div><!-- /.row -->
                </div><!-- /.col-xl-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.video 1 -->


    <!-- ======================
                           banner 1
                      ========================= -->
    <section id="banner1" class="banner banner-1 video fancybox-layout2 p-0 bg-theme">
        <div class="container-fluid col-padding-0">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 equal-height">
                    <div class="inner-padding">
                        <div class="heading heading-2 mb-50">
                            <h2 class="heading__title color-white">{{ __('strings.turkmenLine_head') }}</h2>
                            <p class="heading__desc color-white">{{ __('strings.turkmenLine_def') }}</p>
                        </div><!-- /.heading -->
                        <div class="row">
                            <!-- fancybox item #1 -->
                            <div class="col-sm-12 col-md-6 col-lg-6">
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
                            <!-- fancybox item #2 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="fancybox-item">
                                    <div class="fancybox__icon">
                                        <i class="icon-search-worldwide"></i>
                                    </div><!-- /.fancybox-icon -->
                                    <div class="fancybox__content">
                                        <h4 class="fancybox__title">{{ __('strings.real_time_tracking') }}</h4>
                                        <p class="fancybox__desc"> {{ __('strings.real_time_tracking_def') }}</p>
                                    </div><!-- /.fancybox-content -->
                                </div><!-- /.fancybox-item -->
                            </div><!-- /.col-lg-3 -->
                        </div><!-- /.row -->
                        <a href="http://www.turkmenline.com/"
                            class="btn  btn__white btn__hover2 btn__lg">{{ __('strings.turkmenLine_but') }}</a>
                    </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="bg-overlay">
                        <div class="bg-img"><img src="images/video/1.jpg" alt="background"></div>
                        <div class="align-v-h equal-height">
                        </div>
                    </div><!-- /.bg-overlay -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.banner 1 -->


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
