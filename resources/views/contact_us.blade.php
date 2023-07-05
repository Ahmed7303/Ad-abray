@extends('layouts.app')

@section('content')

    <section id="page-title" class="page-title bg-overlay bg-parallax">
        <div class="bg-img"><img src="images/page-titles/contact-us.jpg" alt="background"></div>
        {{-- <div class="bg-img"><img src="images/page-titles/Contact.jpg" alt="background"></div> --}}
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">{{ __('strings.home') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('strings.contact_us') }}</li>
                        </ol>
                    </nav>
                    <h1 class="pagetitle__heading">{{ __('strings.contact_us') }}</h1>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ==========================
              contact 1
          =========================== -->
    <section id="contact1" class="contact text-center">
        <div class="container">
            <div class="row">
                @if (session('success'))
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        <div class=" divider__theme divider__sm mb-30"></div>
                    </div><!-- /.col-lg-12 -->
                @endif
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading text-center mb-50">
                        <span class="heading__subtitle">{{ __('strings.get_in_touch') }}</span>
                        <h2 class="heading__title">{{ __('strings.contact_us') }}</h2>
                        <div class="divider__line divider__theme divider__center mb-0"></div>
                        <p class="heading__desc">{{ __('strings.we_help_you_def') }}</p>
                    </div><!-- /.heading -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                    <form action="{{ route('request') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group"><input type="text" name="name" class="form-control"
                                        placeholder="{{ __('strings.add_order_new_p3') }}"></div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group"><input type="email" name="email" class="form-control"
                                        placeholder="{{ __('strings.add_order_new_p4') }}"></div>
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group"><input type="text" name="phone" class="form-control"
                                        placeholder="{{ __('strings.add_order_new_p5') }}"></div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group"><input type="text" name="company" class="form-control"
                                        placeholder="{{ __('strings.add_order_new_p2') }}"></div>
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="description" placeholder="{{ __('strings.contact_us_p1') }}"></textarea>
                                </div>
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <button type="submit"
                                    class="btn btn__secondary btn__hover3">{{ __('strings.contact_us_p2') }}</button>
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                    </form>
                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.contact 1 -->

    <!-- =========================
                  Yandex Map
          =========================  -->
    <section id="googleMap" class="google-map p-0">
        <div id="map"><iframe
                src="https://yandex.com/map-widget/v1/?um=constructor%3A58ebb0cc3f3ed2875f1dd4f6d8d818885c106fb02200d4192e6f7893c8fe0f3c&amp;source=constructor"
                width="100%" height="100%" frameborder="0"></iframe></div>
    </section><!-- /.YandexMap -->

    <!-- ==========================
             Contact panels
          ============================ -->
    <section id="contactPanels" class="contact-panels text-center pb-70">
        <div class="container">
            <div class="row">
                @if (count($offices) > 0)
                    @foreach ($offices as $office)
                        <!-- Contact panel #1 -->
                        <?php 
                            $ii = (count($offices) % 2);
                        ?>
                        @if($loop->last)
                        <div class="col-sm-12 col-md-12 col-lg-{{$ii == 1 ? '12' : '6'}}">
                        @else
                        <div class="col-sm-12 col-md-12 col-lg-6">
                        @endif
                            <div class="contact-panel">
                                <div class="contact__panel-header">
                                    <h4 class="contact__panel-title">{{ $office->name }}</h4>
                                </div>
                                <ul class="contact__list list-unstyled">
                                    <li><b>{{ $office->responsible }}</b></li>
                                    <li><b>{{ __('strings.tel1_head') }}</b>{{ $office->phone }}</li>
                                    <li><b>{{ __('strings.mail_head') }}</b>{{ $office->email }}</li>
                                    <li><b>{{ __('strings.address_head') }}</b>{{ $office->address }}</li>
                                    <li><b>{{ __('strings.working_hours_head') }}</b>{{ $office->open_hours }}</li>
                                </ul>
                            </div><!-- /.contact-panel -->
                        </div><!-- /.col-lg-4 -->
                    @endforeach
                @endif
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /. Contact panels -->


@endsection
