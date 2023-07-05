@extends('layouts.app')

@section('content')

   <!-- ========================
       page title 
    =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
      <div class="bg-img"><img src="{{env('APP_URL')}}/images/page-titles/6.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">{{ __('strings.home') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ __('strings.current_process') }}</li>
              </ol>
            </nav>
            <h1 class="pagetitle__heading">{{ __('strings.current_process') }}</h1>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <section id="requestQuote" class="request-quote">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <form class="request-quote-form" action="{{route('orders.current_process',['id' => $order->id])}}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}  
              {{ method_field('PUT') }}

              <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <h5 class="form__title">{{ __('strings.current_process_goods') }}</h5>
                    <div class="divider__line divider__theme divider__sm mb-30"></div>
                  </div><!-- /.col-lg-12 -->
                  <div class="col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap">
                    <div class="form-group input-radio mr-30">
                      <label class="label-radio">{{ __('strings.in_factory') }}
                        <input type="radio" value="In factory" name="radioGroup2" @if ($order->current_process === "In factory")checked @endif>

                        <span class="radio-indicator"></span>
                      </label>
                    </div>
                    <div class="form-group input-radio mr-30">
                      <label class="label-radio">{{ __('strings.collected') }}
                        <input type="radio" value="Collected" name="radioGroup2" @if ($order->current_process === "Collected")checked @endif>

                        <span class="radio-indicator"></span>
                      </label>
                    </div>
                    <div class="form-group input-radio mr-30">
                      <label class="label-radio">{{ __('strings.transporting') }}
                        <input type="radio" value="Transporting" name="radioGroup2" @if ($order->current_process === "Transporting")checked @endif>

                        <span class="radio-indicator"></span>
                      </label>
                    </div>
                    <div class="form-group input-radio">
                      <label class="label-radio">{{ __('strings.delivered') }}
                        <input type="radio" value="Delivered" name="radioGroup2" @if ($order->current_process === "Delivered")checked @endif>

                        <span class="radio-indicator"></span>
                      </label>
                    </div>
                  </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <button type="submit" class="btn btn__secondary btn__block">{{ __('strings.save_changes') }}</button>
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
            </form>
            
           
      
          </form>

          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Input page -->
      
@endsection