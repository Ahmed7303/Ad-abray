@extends('layouts.app')

@section('content')

<section id="page-title" class="page-title bg-overlay bg-parallax">
    <div class="bg-img"><img src="images/page-titles/13.jpg" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('welcome') }}">{{ __('strings.home') }}</a></li>
              <li class="breadcrumb-item"><a href="{{ route('why_us') }}">{{ __('strings.company') }}</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ __('strings.global_locations') }}</li>
            </ol>
          </nav>
          <h1 class="pagetitle__heading">{{ __('strings.global_locations') }}</h1>
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.page-title -->

  <!-- =========================== 
    locations
  ============================= -->
  <section id="locations" class="locations pb-0">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <div class="locations-panel">
            <div class="locations__panel-header">
              <h4 class="locations__panel-title">{{ __('strings.africa') }}</h4>
            </div><!-- /.locations-panel-header -->
            <ul class="list-unstyled">
              <li><a href="https://www.google.com/maps/place/%D0%90%D0%BB%D0%B5%D0%BA%D1%81%D0%B0%D0%BD%D0%B4%D1%80%D0%B8%D1%8F,+%D0%AD%D0%BB%D1%8C-%D0%98%D1%81%D0%BA%D0%B0%D0%BD%D0%B4%D0%B0%D1%80%D1%8C%D1%8F,+%D0%95%D0%B3%D0%B8%D0%BF%D0%B5%D1%82/data=!4m2!3m1!1s0x14f5c49126710fd3:0xb4e0cda629ee6bb9?sa=X&ved=2ahUKEwj_-L6TzIDsAhUyl4sKHQuqA94Q8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.alexandria') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%A2%D0%B0%D0%BD%D0%B6%D0%B5%D1%80,+%D0%9C%D0%B0%D1%80%D0%BE%D0%BA%D0%BA%D0%BE/data=!4m2!3m1!1s0xd0b875cf04c132d:0x76bfc571bfb4e17a?sa=X&ved=2ahUKEwiQrcaIzIDsAhWRxosKHVkiAtIQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.tanger') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%92%D0%BE%D1%81%D1%82%D0%BE%D0%BA+%D0%90%D1%84%D1%80%D0%B8%D0%BA%D0%B0/data=!4m2!3m1!1s0x187215248481cf73:0x523b9426a36c703d?sa=X&ved=2ahUKEwiHjPj9y4DsAhVDpYsKHXlCCXEQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.east_africa') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%A2%D0%BE%D0%B3%D0%BE/@8.6039012,-1.4121107,7z/data=!3m1!4b1!4m5!3m4!1s0x1023e1c113185419:0xfaae5b301ad19360!8m2!3d8.619543!4d0.824782"><i class="fa fa-map-marker"></i><span>{{ __('strings.togo') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%9A%D0%B0%D0%B8%D1%80,+%D0%AD%D0%BB%D1%8C-%D0%9A%D0%B0%D1%85%D0%B8%D1%80%D0%B0,+%D0%95%D0%B3%D0%B8%D0%BF%D0%B5%D1%82/data=!4m2!3m1!1s0x14583fa60b21beeb:0x79dfb296e8423bba?sa=X&ved=2ahUKEwiBp4Lny4DsAhUix4sKHc8YBw8Q8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.cairo') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%90%D0%BD%D1%82%D0%B0%D0%BD%D0%B0%D0%BD%D0%B0%D1%80%D0%B8%D0%B2%D1%83,+%D0%9C%D0%B0%D0%B4%D0%B0%D0%B3%D0%B0%D1%81%D0%BA%D0%B0%D1%80/@-18.887626,47.3724277,11z/data=!3m1!4b1!4m5!3m4!1s0x21f07de34f1f4eb3:0xdf110608bcc082f9!8m2!3d-18.8791902!4d47.5079055"><i class="fa fa-map-marker"></i><span>{{ __('strings.antananarivo') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/Matsapha,+%D0%AD%D1%81%D0%B2%D0%B0%D1%82%D0%B8%D0%BD%D0%B8/data=!4m2!3m1!1s0x1eef4978b74dcc3b:0x155fd212cf7dad92?sa=X&ved=2ahUKEwjFjOfLy4DsAhWhlIsKHbz9BlkQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.matshapa') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%90%D0%BD%D0%B3%D0%BE%D0%BB%D0%B0/data=!4m2!3m1!1s0x1a51f24ecaad8b27:0x590a289d0d4a4e3d?sa=X&ved=2ahUKEwijssrBy4DsAhXPpIsKHdm0D5YQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.angola') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%9A%D0%B0%D1%81%D0%B0%D0%B1%D0%BB%D0%B0%D0%BD%D0%BA%D0%B0,+%D0%9C%D0%B0%D1%80%D0%BE%D0%BA%D0%BA%D0%BE/data=!4m2!3m1!1s0xda7cd4778aa113b:0xb06c1d84f310fd3?sa=X&ved=2ahUKEwjt2-u2y4DsAhWKHHcKHcoBBXIQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.casablanca') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%BE.+%D0%9C%D0%B0%D0%B2%D1%80%D0%B8%D0%BA%D0%B8%D0%B9/data=!4m2!3m1!1s0x217c504df94474c9:0x4203d9c2116bd031?sa=X&ved=2ahUKEwj73fKry4DsAhXHxIsKHbx9Al4Q8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.mauritius') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%9F%D0%BE%D1%80%D1%82-%D0%A5%D0%B0%D1%80%D0%BA%D0%BE%D1%80%D1%82,+%D0%9D%D0%B8%D0%B3%D0%B5%D1%80%D0%B8%D1%8F/data=!4m2!3m1!1s0x1069cea39f2c48e3:0x53562bdd7d8832db?sa=X&ved=2ahUKEwiPo92hy4DsAhWBlosKHfcKCJoQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.port_harcourt') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%9B%D1%83%D0%B0%D0%BD%D0%B4%D0%B0,+%D0%90%D0%BD%D0%B3%D0%BE%D0%BB%D0%B0/data=!4m2!3m1!1s0x1a51f15cdc8d2c7d:0x850c1c5c5ecc5a92?sa=X&ved=2ahUKEwjTjdKXy4DsAhVIr4sKHfzEDkQQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.luanda') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%9F%D0%BE%D1%80%D1%82-%D0%A1%D0%B0%D0%B8%D0%B4,+Port+Fouad+City,+%D0%9F%D0%BE%D1%80%D1%82-%D0%A1%D0%B0%D0%B8%D0%B4,+%D0%95%D0%B3%D0%B8%D0%BF%D0%B5%D1%82/data=!4m2!3m1!1s0x14f99c3e939e6b99:0x4cae04550f7d4cb3?sa=X&ved=2ahUKEwiO0O2Ly4DsAhWQuIsKHZCqBssQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.port_said') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%9F%D0%BE%D1%80%D1%82-%D0%9B%D1%83%D0%B8,+%D0%BE.+%D0%9C%D0%B0%D0%B2%D1%80%D0%B8%D0%BA%D0%B8%D0%B9/data=!4m2!3m1!1s0x217c504941d601ef:0xfdc5186c91bdbb3d?sa=X&ved=2ahUKEwjHhO6By4DsAhWHw4sKHbkCD8cQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.port_louis') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%9C%D0%B0%D1%8D/@-7.1047391,42.4902722,5z/data=!3m1!4b1!4m5!3m4!1s0x22e02a53ba923a19:0x4363dd948132e22c!8m2!3d-4.6826693!4d55.480396"><i class="fa fa-map-marker"></i><span>{{ __('strings.mahe') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%A2%D0%B0%D0%BD%D0%B7%D0%B0%D0%BD%D0%B8%D1%8F/data=!4m2!3m1!1s0x184b51314869a111:0x885a17314bc1c430?sa=X&ved=2ahUKEwjQ2cbsyoDsAhXnkIsKHUtqBJcQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.tanzania') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%9D%D0%B0%D0%B9%D1%80%D0%BE%D0%B1%D0%B8,+%D0%9A%D0%B5%D0%BD%D0%B8%D1%8F/data=!4m2!3m1!1s0x182f1172d84d49a7:0xf7cf0254b297924c?sa=X&ved=2ahUKEwiMhNvfyoDsAhVFEncKHaG3CjIQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.nairobi') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%93%D0%B0%D0%BD%D0%B0/data=!4m2!3m1!1s0xfd75acda8dad6c7:0x54d7f230d093d236?sa=X&ved=2ahUKEwiqsay9yoDsAhVMxIsKHYlzC8MQ8gEwAHoECAoQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.ghana') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/Manica+Malawi+Limited+warehouse/@-15.796826,35.0308463,15z/data=!4m5!3m4!1s0x0:0xee9a2e3d3c3da49c!8m2!3d-15.796826!4d35.0308463"><i class="fa fa-map-marker"></i><span>{{ __('strings.manica_malawi') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%9A%D0%B5%D0%B9%D0%BF%D1%82%D0%B0%D1%83%D0%BD,+%D0%AE%D0%B6%D0%BD%D0%B0%D1%8F+%D0%90%D1%84%D1%80%D0%B8%D0%BA%D0%B0/data=!4m2!3m1!1s0x1dcc500f8826eed7:0x687fe1fc2828aa87?sa=X&ved=2ahUKEwiXvbaN3IDsAhXhmIsKHVJxDRgQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.cape_town') }}</span></a></li>
            </ul>
          </div><!-- /.locations-panel -->
          <div class="locations-panel">
            <div class="locations__panel-header">
              <h4 class="locations__panel-title">{{ __('strings.asia') }}</h4>
            </div><!-- /.locations-panel-header -->
            <ul class="list-unstyled">
              <li><a href="https://www.google.com/maps/place/%D0%90%D1%85%D0%BC%D0%B5%D0%B4%D0%B0%D0%B1%D0%B0%D0%B4,+%D0%93%D1%83%D0%B4%D0%B6%D0%B0%D1%80%D0%B0%D1%82,+%D0%98%D0%BD%D0%B4%D0%B8%D1%8F/@23.0199968,72.2995501,10z/data=!3m1!4b1!4m5!3m4!1s0x395e848aba5bd449:0x4fcedd11614f6516!8m2!3d23.022505!4d72.5713621"><i class="fa fa-map-marker"></i><span>{{ __('strings.ahmedabad') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%A7%D0%B5%D0%BD%D0%BD%D0%B0%D0%B9,+%D0%A2%D0%B0%D0%BC%D0%B8%D0%BB%D0%BD%D0%B0%D0%B4,+%D0%98%D0%BD%D0%B4%D0%B8%D1%8F/@13.0474878,80.0689252,11z/data=!3m1!4b1!4m5!3m4!1s0x3a5265ea4f7d3361:0x6e61a70b6863d433!8m2!3d13.0826802!4d80.2707184"><i class="fa fa-map-marker"></i><span>{{ __('strings.chennai') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%9A%D0%B5%D1%80%D1%82%D0%B5%D1%85,+%D0%A2%D1%80%D0%B5%D0%BD%D0%B3%D0%B0%D0%BD%D1%83,+%D0%9C%D0%B0%D0%BB%D0%B0%D0%B9%D0%B7%D0%B8%D1%8F/data=!4m2!3m1!1s0x31c8714eeb250acf:0x766f6e5eb2614157?sa=X&ved=2ahUKEwjd1-nn04DsAhXdBhAIHVZlB4AQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.kerteh') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%9F%D0%BE%D1%80%D1%82-%D0%9A%D0%BB%D0%B0%D0%BD%D0%B3,+%D0%A1%D0%B5%D0%BB%D0%B0%D0%BD%D0%B3%D0%BE%D1%80,+%D0%9C%D0%B0%D0%BB%D0%B0%D0%B9%D0%B7%D0%B8%D1%8F/@2.9774322,101.3447313,12z/data=!3m1!4b1!4m5!3m4!1s0x31cdabeb32799c95:0x7d83561396a9bedd!8m2!3d2.999852!4d101.39283"><i class="fa fa-map-marker"></i><span>{{ __('strings.port_klang') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%91%D0%B0%D0%BD%D0%B3%D0%B0%D0%BB%D0%BE%D1%80,+%D0%9A%D0%B0%D1%80%D0%BD%D0%B0%D1%82%D0%B0%D0%BA%D0%B0,+%D0%98%D0%BD%D0%B4%D0%B8%D1%8F/data=!4m2!3m1!1s0x3bae1670c9b44e6d:0xf8dfc3e8517e4fe0?sa=X&ved=2ahUKEwil_I-F1IDsAhUjmYsKHV5VCakQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.bangalore') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%9A%D0%B0%D0%BB%D1%8C%D0%BA%D1%83%D1%82%D1%82%D0%B0,+%D0%97%D0%B0%D0%BF%D0%B0%D0%B4%D0%BD%D0%B0%D1%8F+%D0%91%D0%B5%D0%BD%D0%B3%D0%B0%D0%BB%D0%B8%D1%8F,+%D0%98%D0%BD%D0%B4%D0%B8%D1%8F/@22.6757521,88.0495361,10z/data=!3m1!4b1!4m5!3m4!1s0x39f882db4908f667:0x43e330e68f6c2cbc!8m2!3d22.572646!4d88.363895"><i class="fa fa-map-marker"></i><span>{{ __('strings.kolkata') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%A6%D0%B8%D0%BD%D0%B4%D0%B0%D0%BE,+%D0%A8%D0%B0%D0%BD%D1%8C%D0%B4%D1%83%D0%BD,+%D0%9A%D0%B8%D1%82%D0%B0%D0%B9/data=!4m2!3m1!1s0x35960fd582f8f06b:0x614d82fa614cf2f3?sa=X&ved=2ahUKEwiB7YWg1IDsAhXkAxAIHVXkCQ4Q8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.qingdao') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%91%D0%B0%D0%BD%D0%B3%D0%BA%D0%BE%D0%BA,+%D0%A2%D0%B0%D0%B8%D0%BB%D0%B0%D0%BD%D0%B4/data=!4m2!3m1!1s0x311d6032280d61f3:0x10100b25de24820?sa=X&ved=2ahUKEwikz7bE1IDsAhVu_SoKHWLlDlMQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.bangkok') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%94%D0%B0%D0%BD%D0%B0%D0%BD%D0%B3,+H%E1%BA%A3i+Ch%C3%A2u+District,+%D0%94%D0%B0+%D0%9D%D0%B0%D0%BD%D0%B3,+%D0%92%D1%8C%D0%B5%D1%82%D0%BD%D0%B0%D0%BC/data=!4m2!3m1!1s0x314219c792252a13:0xfc14e3a044436487?sa=X&ved=2ahUKEwjv2rDO1IDsAhWipYsKHTZVBJ0Q8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.danang') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%9A%D1%83%D0%B0%D0%BB%D0%B0-%D0%9B%D1%83%D0%BC%D0%BF%D1%83%D1%80,+%D0%A4%D0%B5%D0%B4%D0%B5%D1%80%D0%B0%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F+%D1%82%D0%B5%D1%80.+%D0%9A%D1%83%D0%B0%D0%BB%D0%B0-%D0%9B%D1%83%D0%BC%D0%BF%D1%83%D1%80,+%D0%9C%D0%B0%D0%BB%D0%B0%D0%B9%D0%B7%D0%B8%D1%8F/@3.1385036,101.6169489,12z/data=!3m1!4b1!4m5!3m4!1s0x31cc49c701efeae7:0xf4d98e5b2f1c287d!8m2!3d3.139003!4d101.686855"><i class="fa fa-map-marker"></i><span>{{ __('strings.kuala_lumpur') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%9D%D0%B0%D0%B2%D0%B8+%D0%9C%D1%83%D0%BC%D0%B1%D0%B0%D0%B8,+%D0%9C%D0%B0%D1%85%D0%B0%D1%80%D0%B0%D1%88%D1%82%D1%80%D0%B0,+%D0%98%D0%BD%D0%B4%D0%B8%D1%8F/data=!4m2!3m1!1s0x3be7b9f0b81f13ad:0x3c12f7681185f869?sa=X&ved=2ahUKEwjQv_fq1IDsAhXqk4sKHUoPAXIQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.raigad_navi_mumbai') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%92%D0%B0%D0%B4%D0%BE%D0%B4%D0%B0%D1%80%D0%B0,+%D0%93%D1%83%D0%B4%D0%B6%D0%B0%D1%80%D0%B0%D1%82,+%D0%98%D0%BD%D0%B4%D0%B8%D1%8F/data=!4m2!3m1!1s0x395fc8ab91a3ddab:0xac39d3bfe1473fb8?sa=X&ved=2ahUKEwirx4741IDsAhWvxIsKHZ5iCp0Q8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.baroda') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%93%D0%B0%D0%BD%D0%B4%D1%85%D0%B8%D0%B4%D1%85%D0%B0%D0%BC,+%D0%93%D1%83%D0%B4%D0%B6%D0%B0%D1%80%D0%B0%D1%82,+%D0%98%D0%BD%D0%B4%D0%B8%D1%8F/@23.0702616,70.0486539,12z/data=!3m1!4b1!4m5!3m4!1s0x3950b98e8bec0d97:0x9d6ccb522ee8f6e0!8m2!3d23.075297!4d70.133673"><i class="fa fa-map-marker"></i><span>{{ __('strings.gandhidham') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%9A%D1%83%D0%B0%D1%82%D0%B0%D0%BD,+%D0%9F%D0%B0%D1%85%D0%B0%D0%BD%D0%B3,+%D0%9C%D0%B0%D0%BB%D0%B0%D0%B9%D0%B7%D0%B8%D1%8F/data=!4m2!3m1!1s0x31c8b9f8e826e005:0xa44c16aafb214f62?sa=X&ved=2ahUKEwic45ac1YDsAhXMBhAIHZqaC_QQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.kuantan') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%A1%D0%B5%D0%BC%D0%B0%D1%80%D0%B0%D0%BD%D0%B3,+Semarang+City,+%D0%A6%D0%B5%D0%BD%D1%82%D1%80%D0%B0%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F+%D0%AF%D0%B2%D0%B0,+%D0%98%D0%BD%D0%B4%D0%BE%D0%BD%D0%B5%D0%B7%D0%B8%D1%8F/@-7.0247246,110.3470246,12z/data=!3m1!4b1!4m5!3m4!1s0x2e708b4d3f0d024d:0x1e0432b9da5cb9f2!8m2!3d-7.0051453!4d110.4381254"><i class="fa fa-map-marker"></i><span>{{ __('strings.semarang') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%9F%D0%B5%D0%BA%D0%B8%D0%BD,+%D0%9A%D0%B8%D1%82%D0%B0%D0%B9/data=!4m2!3m1!1s0x35f05296e7142cb9:0xb9625620af0fa98a?sa=X&ved=2ahUKEwjx4dW01YDsAhXpsYsKHRegCJ0Q8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.beijing') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%A5%D0%BE%D1%88%D0%B8%D0%BC%D0%B8%D0%BD,+%D0%92%D1%8C%D0%B5%D1%82%D0%BD%D0%B0%D0%BC/@10.7546664,106.415032,10z/data=!3m1!4b1!4m5!3m4!1s0x317529292e8d3dd1:0xf15f5aad773c112b!8m2!3d10.8230989!4d106.6296638"><i class="fa fa-map-marker"></i><span>{{ __('strings.ho_chi_minh') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%9C%D0%B5%D0%B4%D0%B0%D0%BD,+Medan+City,+%D0%A1%D0%B5%D0%B2%D0%B5%D1%80%D0%BD%D0%B0%D1%8F+%D0%A1%D1%83%D0%BC%D0%B0%D1%82%D1%80%D0%B0,+%D0%98%D0%BD%D0%B4%D0%BE%D0%BD%D0%B5%D0%B7%D0%B8%D1%8F/@3.6422756,98.5294067,11z/data=!3m1!4b1!4m5!3m4!1s0x303131cc1c3eb2fd:0x23d431c8a6908262!8m2!3d3.5951956!4d98.6722227"><i class="fa fa-map-marker"></i><span>{{ __('strings.medan') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%A1%D0%B5%D1%83%D0%BB,+%D0%AE%D0%B6%D0%BD%D0%B0%D1%8F+%D0%9A%D0%BE%D1%80%D0%B5%D1%8F/data=!4m2!3m1!1s0x357ca2012d5c39cf:0x7e11eca1405bf29b?sa=X&ved=2ahUKEwiByYrr1YDsAhWylYsKHRp8AuIQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.seoul') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%A1%D0%B8%D0%BD%D0%B3%D0%B0%D0%BF%D1%83%D1%80/data=!4m2!3m1!1s0x31da11238a8b9375:0x887869cf52abf5c4?sa=X&ved=2ahUKEwisuK7H2oDsAhVC_SoKHf90CFoQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.singapore') }}</span></a></li>
            </ul>
          </div><!-- /.locations-panel -->
          <div class="locations-panel">
            <div class="locations__panel-header">
              <h4 class="locations__panel-title">{{ __('strings.europe') }}</h4>
            </div><!-- /.locations-panel-header -->
            <ul class="list-unstyled">
              <li><a href="https://www.google.com/maps/place/%D0%90%D0%BC%D1%81%D1%82%D0%B5%D1%80%D0%B4%D0%B0%D0%BC,+%D0%9D%D0%B8%D0%B4%D0%B5%D1%80%D0%BB%D0%B0%D0%BD%D0%B4%D1%8B/data=!4m2!3m1!1s0x47c63fb5949a7755:0x6600fd4cb7c0af8d?sa=X&ved=2ahUKEwiZkfT21YDsAhXpk4sKHWJ9BfkQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.amsterdam') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%A4%D1%80%D0%B0%D0%BD%D0%BA%D1%84%D1%83%D1%80%D1%82-%D0%BD%D0%B0-%D0%9C%D0%B0%D0%B9%D0%BD%D0%B5,+%D0%93%D0%B5%D1%80%D0%BC%D0%B0%D0%BD%D0%B8%D1%8F/data=!4m2!3m1!1s0x47bd096f477096c5:0x422435029b0c600?sa=X&ved=2ahUKEwi647GD1oDsAhWRlosKHXMfDVQQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.frankfurt') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%9C%D0%B0%D0%B4%D1%80%D0%B8%D0%B4,+%D0%98%D1%81%D0%BF%D0%B0%D0%BD%D0%B8%D1%8F/@40.4378698,-3.8196207,11z/data=!3m1!4b1!4m5!3m4!1s0xd422997800a3c81:0xc436dec1618c2269!8m2!3d40.4167754!4d-3.7037902"><i class="fa fa-map-marker"></i><span>{{ __('strings.madrid') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/Orey/@38.7034053,-9.1769036,15z/data=!4m2!3m1!1s0x0:0x2b21ae83e2653706?sa=X&ved=2ahUKEwiTvZeb1oDsAhWmtYsKHWa4DoMQ_BIwE3oECBgQCA"><i class="fa fa-map-marker"></i><span>{{ __('strings.orey') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%90%D0%BD%D0%BA%D0%B0%D1%80%D0%B0,+%D0%A2%D1%83%D1%80%D1%86%D0%B8%D1%8F/data=!4m2!3m1!1s0x14d347d520732db1:0xbdc57b0c0842b8d?sa=X&ved=2ahUKEwiB7our1oDsAhWvtIsKHSL8BtEQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.ankara') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/Gaziemir%2F%D0%98%D0%B7%D0%BC%D0%B8%D1%80,+%D0%A2%D1%83%D1%80%D1%86%D0%B8%D1%8F/data=!4m2!3m1!1s0x14bbdfe83b08bd8f:0xf8881ad570ba143f?sa=X&ved=2ahUKEwi0yMS21oDsAhXhAhAIHfBAAdgQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.gaziemir') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%9C%D0%B8%D0%BB%D0%B0%D0%BD%D1%81%D0%BA%D0%B8%D0%B9+%D0%B0%D1%8D%D1%80%D0%BE%D0%BF%D0%BE%D1%80%D1%82+%D0%9C%D0%B0%D0%BB%D1%8C%D0%BF%D0%B5%D0%BD%D1%81%D0%B0/@45.6300625,8.7255307,15z/data=!4m2!3m1!1s0x0:0xa3f10a57a0c77efe?sa=X&ved=2ahUKEwjKrJDA1oDsAhUJxYsKHajHClMQ_BIwCnoECB4QCA"><i class="fa fa-map-marker"></i><span>{{ __('strings.malpensa') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%91%D0%B5%D0%BB%D0%B0%D1%80%D1%83%D1%81%D1%8C/data=!4m2!3m1!1s0x46da2584e2ad4881:0xa1d181ec8c10?sa=X&ved=2ahUKEwjTr5jN1oDsAhUXHHcKHR3BD9MQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.belarus') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%90%D0%BD%D1%82%D0%B2%D0%B5%D1%80%D0%BF%D0%B5%D0%BD,+%D0%91%D0%B5%D0%BB%D1%8C%D0%B3%D0%B8%D1%8F/data=!4m2!3m1!1s0x47c3f68ebfc3887d:0x3eaf448482a88ab8?sa=X&ved=2ahUKEwiSzPXW1oDsAhVilosKHd3pAHQQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.antwerp') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%93%D0%B0%D0%BC%D0%B1%D1%83%D1%80%D0%B3,+%D0%93%D0%B5%D1%80%D0%BC%D0%B0%D0%BD%D0%B8%D1%8F/data=!4m2!3m1!1s0x47b161837e1813b9:0x4263df27bd63aa0?sa=X&ved=2ahUKEwjb8b_g1oDsAhWsl4sKHbWjCT8Q8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.hamburg') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%9C%D0%B0%D0%BD%D1%87%D0%B5%D1%81%D1%82%D0%B5%D1%80,+%D0%92%D0%B5%D0%BB%D0%B8%D0%BA%D0%BE%D0%B1%D1%80%D0%B8%D1%82%D0%B0%D0%BD%D0%B8%D1%8F/@53.472225,-2.2935023,12z/data=!3m1!4b1!4m5!3m4!1s0x487a4d4c5226f5db:0xd9be143804fe6baa!8m2!3d53.4807593!4d-2.2426305"><i class="fa fa-map-marker"></i><span>{{ __('strings.manchester') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%A3%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D0%B0/data=!4m2!3m1!1s0x40d1d9c154700e8f:0x1068488f64010?sa=X&ved=2ahUKEwi4sNqc14DsAhUqi8MKHTYzCGYQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.ukraine') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%91%D0%B0%D1%80%D1%81%D0%B5%D0%BB%D0%BE%D0%BD%D0%B0,+%D0%98%D1%81%D0%BF%D0%B0%D0%BD%D0%B8%D1%8F/@41.3947688,2.0787279,12z/data=!3m1!4b1!4m5!3m4!1s0x12a49816718e30e5:0x44b0fb3d4f47660a!8m2!3d41.3850639!4d2.1734035"><i class="fa fa-map-marker"></i><span>{{ __('strings.barcelona') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%A1%D1%82%D0%B0%D0%BC%D0%B1%D1%83%D0%BB,+%D0%A2%D1%83%D1%80%D1%86%D0%B8%D1%8F/@41.0039643,28.4517462,9z/data=!3m1!4b1!4m5!3m4!1s0x14caa7040068086b:0xe1ccfe98bc01b0d0!8m2!3d41.0082376!4d28.9783589"><i class="fa fa-map-marker"></i><span>{{ __('strings.istanbul') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%9C%D0%B0%D1%80%D1%81%D0%B5%D0%BB%D1%8C,+%D0%A4%D1%80%D0%B0%D0%BD%D1%86%D0%B8%D1%8F/data=!4m2!3m1!1s0x12c9bf4344da5333:0x40819a5fd970220?sa=X&ved=2ahUKEwiGnvTB14DsAhWGAxAIHebYDRIQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.marseille') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%9F%D0%BE%D1%80%D1%82%D0%BB%D0%B5%D0%BD%D0%B4,+%D0%9E%D1%80%D0%B5%D0%B3%D0%BE%D0%BD,+%D0%A1%D0%A8%D0%90/data=!4m2!3m1!1s0x54950b0b7da97427:0x1c36b9e6f6d18591?sa=X&ved=2ahUKEwji9OTO14DsAhVFtIsKHeFlBCwQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.portland') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%91%D1%80%D1%8E%D1%81%D1%81%D0%B5%D0%BB%D1%8C%D1%81%D0%BA%D0%B8%D0%B9+%D1%81%D1%82%D0%BE%D0%BB%D0%B8%D1%87%D0%BD%D1%8B%D0%B9+%D1%80%D0%B5%D0%B3%D0%B8%D0%BE%D0%BD,+%D0%91%D0%B5%D0%BB%D1%8C%D0%B3%D0%B8%D1%8F/data=!4m2!3m1!1s0x47c3c486740f9fff:0x10099ab2f4c8030?sa=X&ved=2ahUKEwinlZHb14DsAhUilosKHZBIBrYQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.brussels') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%98%D0%B7%D0%BC%D0%B8%D1%80,+%D0%A2%D1%83%D1%80%D1%86%D0%B8%D1%8F/data=!4m2!3m1!1s0x14bbd862a762cacd:0x628cbba1a59ce8fe?sa=X&ved=2ahUKEwjbtePn14DsAhXQo4sKHUjPAfsQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.izmir') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%9C%D0%B5%D1%80%D1%81%D0%B8%D0%BD,+%D0%90%D0%BA%D0%B4%D0%B5%D0%BD%D0%B8%D0%B7%2F%D0%9C%D0%B5%D1%80%D1%81%D0%B8%D0%BD,+%D0%A2%D1%83%D1%80%D1%86%D0%B8%D1%8F/data=!4m2!3m1!1s0x1527f4a4c0be6e9f:0x4dbef2b1f81e7d77?sa=X&ved=2ahUKEwi06-X014DsAhXIAxAIHd-vDkYQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.mersin') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%A0%D0%B8%D0%BC,+%D0%98%D1%82%D0%B0%D0%BB%D0%B8%D1%8F/data=!4m2!3m1!1s0x132f6196f9928ebb:0xb90f770693656e38?sa=X&ved=2ahUKEwj818ri3IDsAhWJk4sKHasNDPEQ8gEwAHoECAwQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.rim') }}</span></a></li>
            </ul>
          </div><!-- /.locations-panel -->
          <div class="locations-panel">
            <div class="locations__panel-header">
              <h4 class="locations__panel-title">{{ __('strings.middle_east') }}</h4>
            </div><!-- /.locations-panel-header -->
            <ul class="list-unstyled">
              <li><a href="https://www.google.com/maps/place/%D0%9C%D0%B0%D1%81%D0%BA%D0%B0%D1%82,+%D0%9E%D0%BC%D0%B0%D0%BD/data=!4m2!3m1!1s0x3e91ffa8879aafc9:0xdb53876d0d79a72c?sa=X&ved=2ahUKEwjLnLmA2IDsAhWxtYsKHeRwC6UQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.muscat') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%98%D1%81%D0%BB%D0%B0%D0%BC%D0%B0%D0%B1%D0%B0%D0%B4,+%D0%90%D0%B9%D0%BB%D0%B0%D0%BC%D0%B0%D0%B1%D0%B0%D0%B4,+%D0%A4%D0%B5%D0%B4%D0%B5%D1%80%D0%B0%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F+%D1%81%D1%82%D0%BE%D0%BB%D0%B8%D1%87%D0%BD%D0%B0%D1%8F+%D1%82%D0%B5%D1%80%D1%80%D0%B8%D1%82%D0%BE%D1%80%D0%B8%D1%8F,+%D0%9F%D0%B0%D0%BA%D0%B8%D1%81%D1%82%D0%B0%D0%BD/data=!4m2!3m1!1s0x38dfbfd07891722f:0x6059515c3bdb02b6?sa=X&ved=2ahUKEwjhp4yL2IDsAhXhkYsKHUCyDxAQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.islamabad') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%A8%D0%B0%D1%80%D0%B4%D0%B6%D0%B0+-+%D0%9E%D0%B1%D1%8A%D0%B5%D0%B4%D0%B8%D0%BD%D0%B5%D0%BD%D0%BD%D1%8B%D0%B5+%D0%90%D1%80%D0%B0%D0%B1%D1%81%D0%BA%D0%B8%D0%B5+%D0%AD%D0%BC%D0%B8%D1%80%D0%B0%D1%82%D1%8B/@25.3174292,55.3705215,11z/data=!3m1!4b1!4m5!3m4!1s0x3e5f5f5fede7964b:0x2a830aa19c1f6d89!8m2!3d25.3462553!4d55.4209317"><i class="fa fa-map-marker"></i><span>{{ __('strings.sharjah') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%90%D0%B1%D1%83-%D0%94%D0%B0%D0%B1%D0%B8+-+%D0%9E%D0%B1%D1%8A%D0%B5%D0%B4%D0%B8%D0%BD%D0%B5%D0%BD%D0%BD%D1%8B%D0%B5+%D0%90%D1%80%D0%B0%D0%B1%D1%81%D0%BA%D0%B8%D0%B5+%D0%AD%D0%BC%D0%B8%D1%80%D0%B0%D1%82%D1%8B/data=!4m2!3m1!1s0x3e5e440f723ef2b9:0xc7cc2e9341971108?sa=X&ved=2ahUKEwjKpZem2IDsAhVTmMMKHbitDTUQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.abu_dhabi') }}</span></a></li><li><a href="#"><i class="fa fa-map-marker"></i><span>{{ __('strings.sharjah') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%9A%D0%B0%D0%B1%D1%83%D0%BB,+%D0%90%D1%84%D0%B3%D0%B0%D0%BD%D0%B8%D1%81%D1%82%D0%B0%D0%BD/@34.5533869,68.9175433,10z/data=!3m1!4b1!4m5!3m4!1s0x38d1694c3c1e6d49:0xebdf473578214429!8m2!3d34.5553494!4d69.207486"><i class="fa fa-map-marker"></i><span>{{ __('strings.kabul') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%91%D0%B5%D0%B9%D1%80%D1%83%D1%82,+%D0%9B%D0%B8%D0%B2%D0%B0%D0%BD/data=!4m2!3m1!1s0x151f17215880a78f:0x729182bae99836b4?sa=X&ved=2ahUKEwijo_HO2IDsAhVu-SoKHScRBo8Q8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.beirut') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%94%D0%BE%D1%85%D0%B0,+%D0%9A%D0%B0%D1%82%D0%B0%D1%80/data=!4m2!3m1!1s0x3e45c534ffdce87f:0x44d9319f78cfd4b1?sa=X&ved=2ahUKEwiurtja2IDsAhVTi8MKHVjCBLYQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.doha') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%A1%D1%83%D1%85%D0%B0%D1%80,+%D0%9E%D0%BC%D0%B0%D0%BD/data=!4m2!3m1!1s0x3e8b44d363b81221:0xde9a3eefa60fc03f?sa=X&ved=2ahUKEwjz5Lbm2IDsAhWjlYsKHcdaCRIQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.sohar') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%9A%D0%B0%D1%80%D0%B0%D1%87%D0%B8,+%D0%9A%D0%B0%D1%80%D0%B0%D1%87%D0%B8+%D0%A1%D0%B8%D1%82%D0%B8,+%D0%A1%D0%B8%D0%BD%D0%B4,+%D0%9F%D0%B0%D0%BA%D0%B8%D1%81%D1%82%D0%B0%D0%BD/@25.1921465,66.5949955,9z/data=!3m1!4b1!4m5!3m4!1s0x3eb33e06651d4bbf:0x9cf92f44555a0c23!8m2!3d24.8607343!4d67.0011364"><i class="fa fa-map-marker"></i><span>{{ __('strings.karachi') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%94%D0%B0%D0%BC%D0%BC%D0%B0%D0%BC+%D0%A1%D0%B0%D1%83%D0%B4%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F+%D0%90%D1%80%D0%B0%D0%B2%D0%B8%D1%8F/data=!4m2!3m1!1s0x3e361d32276b3403:0xefd901ec7a5e5676?sa=X&ved=2ahUKEwiKnLP92IDsAhXipIsKHbZjB44Q8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.dammam') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%9B%D0%B0%D1%85%D0%BE%D1%80,+%D0%9F%D0%B5%D0%BD%D0%B4%D0%B6%D0%B0%D0%B1,+%D0%9F%D0%B0%D0%BA%D0%B8%D1%81%D1%82%D0%B0%D0%BD/data=!4m2!3m1!1s0x39190483e58107d9:0xc23abe6ccc7e2462?sa=X&ved=2ahUKEwi1k4qI2YDsAhXts4sKHYHjCVwQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.lahore') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%94%D0%B6%D0%B5%D0%B4%D0%B4%D0%B0+%D0%A1%D0%B0%D1%83%D0%B4%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F+%D0%90%D1%80%D0%B0%D0%B2%D0%B8%D1%8F/data=!4m2!3m1!1s0x15c3d01fb1137e59:0xe059579737b118db?sa=X&ved=2ahUKEwjbmMST2YDsAhXll4sKHWw2CHcQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.jeddah') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%91%D0%B0%D1%85%D1%80%D0%B5%D0%B9%D0%BD/@25.9406805,50.3073847,10z/data=!3m1!4b1!4m5!3m4!1s0x3e48524e6a47a211:0x2e9450e2dbda1046!8m2!3d26.0667!4d50.5577"><i class="fa fa-map-marker"></i><span>{{ __('strings.bahrain') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%AD%D1%80-%D0%A0%D0%B8%D1%8F%D0%B4+%D0%A1%D0%B0%D1%83%D0%B4%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F+%D0%90%D1%80%D0%B0%D0%B2%D0%B8%D1%8F/data=!4m2!3m1!1s0x3e2f03890d489399:0xba974d1c98e79fd5?sa=X&ved=2ahUKEwiQj-2o2YDsAhUqxosKHTf7CtAQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.riyadh') }}</span></a></li>
              <li><a href="https://www.google.com/maps/place/%D0%94%D1%83%D0%B1%D0%B0%D0%B9+-+%D0%9E%D0%B1%D1%8A%D0%B5%D0%B4%D0%B8%D0%BD%D0%B5%D0%BD%D0%BD%D1%8B%D0%B5+%D0%90%D1%80%D0%B0%D0%B1%D1%81%D0%BA%D0%B8%D0%B5+%D0%AD%D0%BC%D0%B8%D1%80%D0%B0%D1%82%D1%8B/data=!4m2!3m1!1s0x3e5f43496ad9c645:0xbde66e5084295162?sa=X&ved=2ahUKEwjT3PXH3YDsAhUKkMMKHfEjCmAQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i><span>{{ __('strings.dubai') }}</span></a></li>
            </ul>
          </div><!-- /.locations-panel -->
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.locations -->

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
                      <li><b>{{ __('strings.tel1_head') }}</b>{{ __('strings.tel1') }}</li>      <!-- Üýtgeşme -->
                      <li><b>{{ __('strings.mail_head') }}</b>{{ __('strings.mail') }}</li>      <!-- Üýtgeşme -->
                      <li><b>{{ __('strings.address_head') }}</b>{{ __('strings.address') }}</li>      <!-- Üýtgeşme -->
                      <li><b>{{ __('strings.working_hours_head') }}</b>{{ __('strings.working_hours') }}</li>      <!-- Üýtgeşme -->
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
      <div id="map"><iframe src="https://yandex.com/map-widget/v1/?um=constructor%3A74553a0424c44ff7de68fb514bb294ca5bbf25c439c2bc8cc04f65f26d3f2c66&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe></div>
    </section><!-- /.YandexMap -->


@endsection