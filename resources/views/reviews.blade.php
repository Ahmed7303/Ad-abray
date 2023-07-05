@extends('layouts.app')

@section('content')

    <section id="page-title" class="page-title bg-overlay bg-parallax">
        <div class="bg-img"><img src="/images/page-titles/15.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">{{ __('strings.home') }}</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('why_us') }}">{{ __('strings.company') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('strings.reviews') }}</li>
                        </ol>
                    </nav>
                    <h1 class="pagetitle__heading">{{ __('strings.reviews') }}</h1>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->


    <section class="cer">
        <div class="container">
            <div class="cer_wrap">
                <h4 class="main_sup-title">
                    {{ __('strings.reviews_title') }}
                </h4>
                <h2 class="main_title">
                    {{ __('strings.reviews_title_2') }}
                </h2>

                <div class="cer_box">
                    @if (count($reviews) > 0)
                        @foreach ($reviews as $item)
                            <div class="cer_box-item">
                                <div class="cer_box-item-photo">
                                    <img src="{{ env('APP_URL') }}/{{ $item->image }}" alt="Reviews">
                                </div>
                                <h4 class="cer_box-item-title">
                                    {{ $item->title }}
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
