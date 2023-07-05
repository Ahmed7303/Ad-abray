{{-- <header id="header" class="header header-transparent" style="position: absolute; width:100%"> --}}
<header id="header" class="header header-transparent">

    <nav class="navbar navbar-expand-lg remove_height">
        <div class="container">
            <a class="navbar-brand main-logo" href="{{ route('welcome') }}">
                @if (Route::is('ship'))
                    <img src="{{ env('APP_URL') }}/images/logo/ship-logo.png" class="logo-light" alt="logo">
                    <img src="{{ env('APP_URL') }}/images/logo/ship-dark.png" class="logo-dark" alt="logo">
                @else
                    <img src="{{ env('APP_URL') }}/images/logo/logo-light.png" class="logo-light" alt="logo">
                    <img src="{{ env('APP_URL') }}/images/logo/logo-dark.png" class="logo-dark" alt="logo">
                @endif
            </a>
            <button class="navbar-toggler" type="button">
                <span class="menu-lines"><span></span></span>
            </button>
            <div class="header__top-right d-none d-lg-block">
                <ul class="list-unstyled d-flex justify-content-end align-items-center">

                    {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flag-icon flag-icon-us"> </span> English</a>
                <div class="dropdown-menu" aria-labelledby="dropdown09">
                    <a class="dropdown-item" href="#fr"><span class="flag-icon flag-icon-fr"> </span>  French</a>
                    <a class="dropdown-item" href="#it"><span class="flag-icon flag-icon-it"> </span>  Italian</a>
                    <a class="dropdown-item" href="#ru"><span class="flag-icon flag-icon-ru"> </span>  Russian</a>
                </div>
            </li> --}}

                    <li>

                        @guest
                        <li>
                            <a href="{{ route('login') }}" class="btn btn__primary btn__hover3"><i
                                    class="icon-list"></i>
                                <span>{{ __('strings.log') }}</span></a>
                        </li>
                    @else
                        <li class="nav__item with-dropdown ">
                            {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a> --}}
                            <a id="navbarDropdown" class="nav__item-link" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}<span class="caret"></span>
                            </a>

                            <div class="dropdown-menu">

                                <a class="dropdown-item " href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('strings.logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest

                </ul>


            </div><!-- /.header-top-right -->
            <div class="collapse navbar-collapse" id="mainNavigation">
                <ul class="navbar-nav ml-auto">
                    <li class="nav__item with-dropdown">
                        <a href="{{ route('welcome') }}"
                            class="dropdown-toggle nav__item-link">{{ __('strings.home') }}</a>
                    </li><!-- /.nav-item -->
                    <li class="nav__item with-dropdown">
                        <a href="{{ route('why_us') }}" class="nav__item-link">{{ __('strings.company') }}</a>
                        <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                        <ul class="">
                            <!-- <li class="nav__item"><a href="{{ route('why_us') }}"
                                    class="nav__item-link">{{ __('strings.about_us') }}</a></li> -->
                            <!-- /.nav-item -->
                            <!-- <li class="nav__item"><a href="{{ route('global_locations') }}"
                                    class="nav__item-link">{{ __('strings.global_locations') }}</a></li>-->
                            <!-- /.nav-item -->
                            <!--<li class="nav__item"><a href="{{ route('reviews') }}"
                                    class="nav__item-link">{{ __('strings.reviews') }}</a></li> -->
                            <!-- /.nav-item -->
                           <!--- <li class="nav__item"><a href="{{ route('gallery') }}" class="nav__item-link">{{ __('strings.our_gallery') }}</a></li>--->
                            <!--<li class="nav__item"><a href="{{ route('events') }}"
                                    class="nav__item-link">{{ __('strings.events') }}</a></li>
                            <li class="nav__item"><a href="{{ route('marketing') }}"
                                    class="nav__item-link">{{ __('strings.marketing') }}</a></li>-->
                            <!-- /.nav-item -->
                        </ul><!-- /.dropdown-menu -->
                    </li><!-- /.nav-item -->
                    <li class="nav__item with-dropdown">
                        <a href="{{ route('services') }}" class="nav__item-link">{{ __('strings.services') }}</a>
                        <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                        <ul class="dropdown-menu ">
                            <li class="nav__item"><a class="nav__item-link"
                                    href="{{ route('air_Freight') }}">{{ __('strings.air_freight') }}</a>
                            </li> <!-- /.nav-item -->
                            <li class="nav__item"><a class="nav__item-link"
                                    href="{{ route('ocean_Freight') }}">{{ __('strings.ocean_freight') }}</a>
                            </li> <!-- /.nav-item -->
                            <li class="nav__item"><a class="nav__item-link"
                                    href="{{ route('road_Freight') }}">{{ __('strings.road_freight') }}</a>
                            </li> <!-- /.nav-item -->
                            <li class="nav__item"><a class="nav__item-link"
                                    href="{{ route('rail_Freight') }}">{{ __('strings.rail_freight') }}</a>
                            </li> <!-- /.nav-item -->
                            <li class="nav__item"><a class="nav__item-link"
                                    href="{{ route('container_Freight') }}">{{ __('strings.container_transport') }}</a>
                            </li> <!-- /.nav-item -->
                            <li class="nav__item"><a href="{{ route('ship') }}"
                                    class="nav__item-link">{{ __('strings.ship') }}</a></li>
                            <li class="nav__item"><a href="{{ route('tender') }}"
                                    class="nav__item-link">{{ __('strings.tender') }}</a></li>
                            <li class="nav__item"><a class="nav__item-link"
                                    href="{{ route('warehousing') }}">{{ __('strings.warehousing') }}</a>
                            </li> <!-- /.nav-item -->
                            <li class="nav__item"><a class="nav__item-link"
                                    href="{{ route('customs_brokerage') }}">{{ __('strings.customs_brokerage') }}</a>
                            </li> <!-- /.nav-item -->


                        </ul><!-- /.dropdown-menu -->
                    </li><!-- /.nav-item -->

                    <li class="nav__item with-dropdown">
                        <a href="{{ route('blog_classic') }}" class="nav__item-link">{{ __('strings.news_media') }}</a>
                        <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                        <ul class="dropdown-menu">
                            <li class="nav__item"><a href="{{ route('events') }}"
                                    class="nav__item-link">{{ __('strings.events') }}</a>
                                    
                                </li>
                                <li class="nav__item"></li>
                        </ul>
                    </li><!-- /.nav-item --> 
                         <li class="nav__item with-dropdown">
                        <a href="{{ route('track_shipment') }}"
                            class="nav__item-link">{{ __('strings.track_shipment') }}</a>
                        <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                    </li><!-- /.nav-item -->
                    @auth
                        <li class="nav__item with-dropdown">
                            <a href="{{ route('my_orders') }}"
                                class="nav__item-link">{{ __('strings.my_orders') }}</a>
                            <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                        </li><!-- /.nav-item -->
                    @endauth

                    <li class="nav__item">
                        <a href="{{ route('contact_us') }}"
                            class="nav__item-link">{{ __('strings.contact_us_in') }}</a>
                    </li><!-- /.nav-item -->

                    <li class="nav__item with-dropdown">

                        @php $locale = session()->get('locale'); @endphp
                        <a href="#" class="nav__item-link">
                            @switch($locale)
                                @case('ru')
                                    Рус
                                @break

                                @case('en')
                                    Eng
                                @break

                                @case('tm')
                                    Tkm
                                @break

                                @default
                                    Eng
                            @endswitch
                        </a>
                        <i class="icon-map" data-toggle="dropdown"></i>
                        <ul class="dropdown-menu">
                            <li class="nav__item "><a href="{{ env('APP_URL') }}/lang/en"
                                    class="nav__item-link lang_row">English
                                    <span class="lang_icon">
                                        <img src="images/en.png" alt="lang-icon">
                                    </span>
                                </a></li>
                            <!-- /.nav-item -->
                            <li class="nav__item"><a href="{{ env('APP_URL') }}/lang/ru"
                                    class="nav__item-link lang_row">Pусский
                                    <span class="lang_icon">
                                        <img src="images/ru.png" alt="lang-icon">
                                    </span>
                                </a></li>
                            <!-- /.nav-item -->
                            <li class="nav__item"><a href="{{ env('APP_URL') }}/lang/tm"
                                    class="nav__item-link lang_row">Türkmen
                                    <span class="lang_icon">
                                        <img src="images/tm.png" alt="lang-icon">
                                    </span>
                                </a></li>
                        </ul><!-- /.dropdown-menu -->
                    </li><!-- /.nav-item -->
                </ul><!-- /.navbar-nav -->
            </div><!-- /.navbar-collapse -->
            {{-- <div class="navbar-modules">
                <div class="modules__wrapper d-flex align-items-center">
                    <a href="#" class="module__btn module__btn-search"><i class="fa fa-search"></i></a>
                </div><!-- /.modules-wrapper -->
            </div><!-- /.navbar-modules --> --}}
        </div><!-- /.container -->
    </nav><!-- /.navabr -->
</header><!-- /.Header -->
