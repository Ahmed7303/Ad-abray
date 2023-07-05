@extends('layouts.app')

@section('content')

<section id="page-title" class="page-title bg-overlay bg-parallax">
    <div class="bg-img"><img src="images/page-titles/6.jpg" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('welcome') }}">{{ __('strings.home') }}</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ __('strings.my_orders') }}</li>
            </ol>
          </nav>
          <h1 class="pagetitle__heading">{{ __('strings.my_orders') }}</h1>
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.page-title -->

  <!-- ======================
    List of Orders
  ========================= -->
  
  <section id="listOfOrders" class="list-orders">
    <div class="container">
      <div class="row">
        @if (session('success'))
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="alert alert-success" role="alert">
              {{session('success')}}
            </div>
            <div class=" divider__theme divider__sm mb-30"></div>
          </div><!-- /.col-lg-12 -->
        @endif
      
      </div><!-- /.row -->
      <div class="row ml-20 mr-20">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <div class=" divider__theme divider__sm mb-30"></div>
          <div class="container">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <h2>{{ __('strings.my_orders') }}</h2>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-2 mt-5">
                              <a href="/excel" class="btn btn__secondary btn__block"><i class="fas fa-file-excel"></i><span>{{ __('strings.export_excel') }}</span></a>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-2 mt-5">
                                <a href="/orders/create" class="btn btn__secondary btn__block"><i class="fas fa-plus-circle"></i><span>{{ __('strings.add_new') }}</span></a>				
                            </div>
                            {{-- <form action="{{route('orders.search')}}" method="get">
                              
                              
                          </form> --}}
                          <div class="col-sm-12 col-md-12 col-lg-2 mt-10">
                            <form action="{{route('orders.search')}}" method="get">
                              <div class="search-box">
                                <input type="text"  name="search" class="form-control-1" placeholder="{{ __('strings.search') }}">
                                <a href="#" onclick="$(this).closest('form').submit();"><i class="fas fa-search"></i></a>
                                
                                {{-- <i class="fas fa-search"></i>  --}}
                              </div>
                            </form>
                          </div>
                          
                            
                        </div>
                    </div>

                    @if(count($orders) > 0)
                            @include('orders.table', $orders)
                            {{ $orders->links() }}
                        @else
                            {{-- <p>{{ __('strings.no_order') }}</p> --}}
                            <h4 class="text-center" style="margin-top: 50px">{{ __('strings.no_orders') }}</h4>
                     @endif

                     {{-- {{ $orders->links() }} --}}
          
                    {{-- <div class="clearfix">
                        <div class="hint-text">Showing <b>10</b> out of <b>10</b> entries</div>
                        <ul class="pagination">
                            <li class="page-item disabled"><a href="#">{{ __('strings.prev') }}</a></li>
                            <li class="page-item active"><a href="#" class="page-link">1</a></li>
                            <li class="page-item"><a href="#" class="page-link">{{ __('strings.next') }}</a></li>
                        </ul>
                    </div>  --}}
                </div>
            </div>        
        </div>
        </div>
      </div><!-- /.col-lg-12 -->
    </div>
  </section>
  <script src="https://kit.fontawesome.com/d45a2ab536.js" crossorigin="anonymous"></script>

@endsection