@extends('layouts.app')

@section('content')

    <section id="page-title" class="page-title bg-overlay bg-parallax">
        <div class="bg-img"><img src="images/page-titles/10.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">{{ __('strings.home') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('strings.services') }}</li>
                        </ol>
                    </nav>
                    <h1 class="pagetitle__heading">{{ __('strings.what_we_do') }}</h1>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
          Services
      =========================== -->
    <section id="servicesLayout2" class="services services-layout2 bg-gray pb-70">
        <div class="container">
            <div class="row heading mb-40">
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
        </div><!-- /.container -->
        <div class="container col-padding-0">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="service-item">
                        <div class="service__img">
                            <img src="images/services/1.jpg" alt="service" class="img-fluid">
                        </div><!-- /.service-img -->
                        <div class="service__content ">
                            <div class="service__icon"><img src="images/icons/plane64.png" alt="plane icon"> </div>
                            <h4 class="service__title">{{ __('strings.services_air') }}</h4>
                            <p class="service__desc">{{ __('strings.services_air_def') }}</p>
                            <a href="{{ route('air_Freight') }}"
                                class="btn btn__secondary btn__link btn__underlined">{{ __('strings.services_air_but') }}</a>
                        </div>
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="service-item">
                        <div class="service__img">
                            <img src="images/services/2.jpg" alt="service" class="img-fluid">
                        </div><!-- /.service-img -->
                        <div class="service__content">
                            <div class="service__icon"><img src="images/icons/ship64.png" alt="ferry icon"></div>
                            <h4 class="service__title">{{ __('strings.services_ocean') }}</h4>
                            <p class="service__desc">{{ __('strings.services_ocean_def') }}</p>
                            <a href="{{ route('ocean_Freight') }}"
                                class="btn btn__secondary btn__link btn__underlined">{{ __('strings.services_ocean_but') }}</a>
                        </div>
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="service-item service-item-reversed">
                        <div class="service__img">
                            <img src="images/services/3.jpg" alt="service" class="img-fluid">
                        </div><!-- /.service-img -->
                        <div class="service__content">
                            <div class="service__icon"><img src="images/icons/truck64.png" alt="truck icon"></div>
                            <h4 class="service__title">{{ __('strings.services_road') }}</h4>
                            <p class="service__desc">{{ __('strings.services_road_def') }}</p>
                            <a href="{{ route('road_Freight') }}"
                                class="btn btn__secondary btn__link btn__underlined">{{ __('strings.services_road_but') }}</a>
                        </div>
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="service-item service-item-reversed">
                        <div class="service__img">
                            <img src="images/services/5.jpg" alt="service" class="img-fluid">
                        </div><!-- /.service-img -->
                        <div class="service__content">
                            <div class="service__icon"><img src="images/icons/train64.png" alt="train icon"></div>
                            <h4 class="service__title">{{ __('strings.services_rail') }}</h4>
                            <p class="service__desc">{{ __('strings.services_rail_def') }}</p>
                            <a href="{{ route('rail_Freight') }}"
                                class="btn btn__secondary btn__link btn__underlined">{{ __('strings.services_rail_but') }}</a>
                        </div>
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6 ">
                    <div class="service-item ">
                        <div class="service__img">
                            <img src="images/services/6.jpg" alt="service" class="img-fluid">
                        </div><!-- /.service-img -->
                        <div class="service__content">
                            <div class="service__icon"><img src="images/icons/container64.png" alt="container icon"></div>
                            <h4 class="service__title">{{ __('strings.services_container') }}</h4>
                            <p class="service__desc">{{ __('strings.services_container_def') }}</p>
                            <a href="{{ route('container_Freight') }}"
                                class="btn btn__secondary btn__link btn__underlined">{{ __('strings.services_container_but') }}</a>
                        </div>
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6 ">
                    <div class="service-item  ">
                        <div class="service__img">
                            <img src="images/services/4.jpg" alt="service" class="img-fluid">
                        </div><!-- /.service-img -->
                        <div class="service__content">
                            <div class="service__icon"><img src="images/icons/data-warehouse64.png" alt="warehousing icon">
                            </div>
                            <h4 class="service__title">{{ __('strings.services_warehousing') }}</h4>
                            <p class="service__desc">{{ __('strings.services_warehousing_def') }}</p>
                            <a href="{{ route('warehousing') }}"
                                class="btn btn__secondary btn__link btn__underlined">{{ __('strings.services_container_but') }}</a>
                        </div>
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Services layout 2 -->

    <!-- ===========================
        fancybox Layout2
      ============================= -->
    <section id="fancyboxLayout2" class="fancybox-layout2 pb-60">
        <div class="container">
            <div class="row">
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
                            <i class="icon-delivery-delay"></i>
                        </div><!-- /.fancybox-icon -->
                        <div class="fancybox__content">
                            <h4 class="fancybox__title">{{ __('strings.fast_efficient_delivery') }}</h4>
                            <p class="fancybox__desc">{{ __('strings.fast_efficient_delivery_def') }}</p>
                        </div><!-- /.fancybox-content -->
                    </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-3 -->
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
                <!-- fancybox item #5 -->
                <div class="col-sm-12 col-md-6 col-lg-3">
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
                <!-- fancybox item #7 -->
                <!-- fancybox item #8 -->
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="fancybox-item fancybox-item-custom">
                        <div class="fancybox__icon">
                            <i class="icon-stamp"></i>
                        </div><!-- /.fancybox-icon -->
                        <div class="fancybox__content text-center pb-20">
                            <h4 class="fancybox__title">{{ __('strings.awards_milestones') }}</h4>
                        </div><!-- /.fancybox-content -->
                    </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.fancybox Layout2 -->

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

@endsection
