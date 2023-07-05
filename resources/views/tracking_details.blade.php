@extends('layouts.app')

@section('content')

<section id="page-title" class="page-title bg-overlay bg-parallax">
    <div class="bg-img"><img src="{{env('APP_URL')}}/images/page-titles/6.jpg" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('welcome') }}">{{ __('strings.home') }}</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ __('strings.tracking_result') }}</li>
            </ol>
          </nav>
          <h1 class="pagetitle__heading">{{ __('strings.tracking_result') }}</h1>
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.page-title -->

<!-- ========================
     All data for tracking 
  =========================== -->
  @if (!Auth::guest())
        @if (Auth::user()->id == $order->user_id)
          <div class="container">
            <div class="row mt-30 ml-20 mr-20 text-center">    
              <div class="col-sm-12 col-md-12 col-lg-3">
                <a href="/orders/{{$order->id}}/current_process_of_goods" class="btn btn__primary btn__hover3">
                  <span>{{ __('strings.process_of_order') }}</span></a>
              </div><!-- /.col-lg-12 -->
              <div class="col-sm-12 col-md-12 col-lg-3">
                <a href="/orders/{{$order->id}}/shipment_position" class="btn btn__primary btn__hover3">
                  <span>{{ __('strings.position_of_shipment') }}</span></a>
              </div><!-- /.col-lg-12 -->
              <div class="col-sm-12 col-md-12 col-lg-3">
                <a href="/orders/{{$order->id}}/truck_status" class="btn btn__primary btn__hover3">
                  <span>{{ __('strings.status_of_delivery') }}</span></a>
              </div><!-- /.col-lg-12 -->
              <div class="col-sm-12 col-md-12 col-lg-3">
                  <a href="/orders/{{$order->id}}/current_location" class="btn btn__primary btn__hover3">
                  <span>{{ __('strings.current_location') }}</span></a>
              </div><!-- /.col-lg-12 -->
              
            </div>
          </div>
          
        @endif
        
    @endif
  
  <div class="row mt-30">    
    <div class="col-sm-12 col-md-12 col-lg-12">
    <h2 class="heading-title text-center">{{ __('strings.tracking_details') }}</h2><!--  Header: [end] --> 
    </div><!-- /.col-lg-12 -->
  </div>
  <div class="row mb-30">
    <div class="col-sm-12 col-md-12 col-lg-6 table">
      <h5 class="text-center">{{ __('strings.about_company') }}</h5>
      <p class="text-center"><b>{{ __('strings.about_company_name') }}&nbsp</b> {{$order->company}}</p>
      <p class="text-center"><b>{{ __('strings.about_company_person') }}&nbsp</b> {{$order->name}}</p>
      <p class="text-center"><b>{{ __('strings.about_company_mail') }}&nbsp</b>{{$order->email}}</p>
      <p class="text-center"><b>{{ __('strings.about_company_tel') }}&nbsp</b>{{$order->phone}}</p>
      <div class="divider__theme divider__sm mb-30"></div>
    </div><!-- /.col-lg-16 -->
    <div class="col-sm-12 col-md-12 col-lg-6 table">
      <h5 class="text-center">{{ __('strings.about_delivery') }}</h5>
      <p class="text-center"><b>{{ __('strings.about_delivery_from') }}&nbsp</b> {{$order->pick_up_country}}, {{$order->pick_up_city}}, {{$order->pick_up_street}}</p>
      <p class="text-center"><b>{{ __('strings.about_delivery_to') }}&nbsp</b>{{$order->drop_off_country}}, {{$order->drop_off_city}}, {{$order->drop_off_street}}</p>
      <p class="text-center"><b>{{ __('strings.about_delivery_freight') }}&nbsp</b>{{$order->type}}</p>
      <div class="divider__theme divider__sm mb-30"></div>
    </div><!-- /.col-lg-6 --> 
  </div><!-- /.row -->
  <div class="row mb-30 ml-20 mr-20">
    <div class="col-sm-12 col-md-12 col-lg-12">
      <h5 class="text-center bg-theme color-white">{{ __('strings.current_process_of_order') }}&nbsp<b>{{$order->order_id}}</b></h5>
     </div><!-- /.col-lg-12 --> 
  </div><!-- /.row -->


   <!-- ========================
    Icons and table
  ========================== -->

  <section id="fancyboxLayout2" class="fancybox-layout2 pb-60">
    <div class="container">
      <div class="row">
        <!-- fancybox item #1 -->
        <div class="col-sm-12 col-md-6 col-lg-3 text-center">
          <div class="fancybox-item">
            <div class="fancybox__icon">
              <span style="font-size: {{$order->current_process === "In factory" ? '100px':'80px'}}; color:{{$order->current_process === "In factory" ? '#2bb673':'rgba(63, 163, 26, 0.37)'}} ">
                <i class="fas fa-boxes"></i>
              </span>
            </div><!-- /.fancybox-icon -->
            <div class="fancybox__content">
              <h4 class="fancybox__title">{{ __('strings.in_factory') }}</h4>
              @if ($order->current_process === "In factory")
                <p class="fancybox__desc">{{ __('strings.current_process_now') }}</p>
              @endif
            </div><!-- /.fancybox-content -->
          </div><!-- /.fancybox-item -->
        </div><!-- /.col-lg-3 -->
        <!-- fancybox item #2 -->
        <div class="col-sm-12 col-md-6 col-lg-3 text-center">
          <div class="fancybox-item">
            <div class="fancybox__icon">
              <span style="font-size: {{$order->current_process === "Collected" ? '100px':'80px'}};  color:{{$order->current_process === "Collected" ? '#2bb673':'rgba(63, 163, 26, 0.37)'}} ">
                <i class="fas fa-truck-loading"></i>
              </span>
            </div><!-- /.fancybox-icon -->
            <div class="fancybox__content">
              <h4 class="fancybox__title">{{ __('strings.collected') }}</h4>
              @if ($order->current_process === "Collected")
                <p class="fancybox__desc">{{ __('strings.current_process_now') }}</p>
              @endif
            </div><!-- /.fancybox-content -->
          </div><!-- /.fancybox-item -->
        </div><!-- /.col-lg-3 -->
        <!-- fancybox item #3 -->
        <div class="col-sm-12 col-md-6 col-lg-3 text-center">
          <div class="fancybox-item">
            <div class="fancybox__icon">
              <span style="font-size: {{$order->current_process === "Transporting" ? '100px':'80px'}}; color:{{$order->current_process === "Transporting" ? '#2bb673':'rgba(63, 163, 26, 0.37)'}} ">
                <i class="fas fa-truck-moving"></i>
               </span>
            </div><!-- /.fancybox-icon -->
            <div class="fancybox__content">
              <h4 class="fancybox__title">{{ __('strings.transporting') }}</h4>
              @if ($order->current_process === "Transporting")
                <p class="fancybox__desc">{{ __('strings.current_process_now') }}</p>
              @endif
            </div><!-- /.fancybox-content -->
          </div><!-- /.fancybox-item -->
        </div><!-- /.col-lg-3 -->
        <div class="col-sm-12 col-md-6 col-lg-3 text-center">
          <div class="fancybox-item">
            <div class="fancybox__icon">
              <span style="font-size: {{$order->current_process === "Delivered" ? '100px':'80px'}}; color:{{$order->current_process === "Delivered" ? '#2bb673':'rgba(63, 163, 26, 0.37)'}} ">
                <i class="fas fa-calendar-check"></i>
               </span>
            </div><!-- /.fancybox-icon -->
            <div class="fancybox__content">
              <h4 class="fancybox__title">{{ __('strings.delivered') }}</h4>
              @if ($order->current_process === "Delivered")
                <p class="fancybox__desc">{{ __('strings.current_process_now') }}</p>
              @endif
            </div><!-- /.fancybox-content -->
          </div><!-- /.fancybox-item -->
        </div><!-- /.col-lg-3 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.fancybox Layout2 -->
  
  <div class="row mb-30 ml-20 mr-20">
    @if (count($shipments) >0)
      <div class="col-sm-12 col-md-12 col-lg-8 table">
      <table>
        <colgroup>
        <col width="50%">
        <col width="50%">
        </colgroup>
        <thead>
          <tr>
            <th>{{ __('strings.tracking_result_t_d') }}</th>
            <th>{{ __('strings.position_of_shipment') }}</th>
          </tr>
        </thead>
        <tbody>
          <ul class="list-group">
               @foreach ($shipments as $item)
               <tr>
                <td>{{Carbon\Carbon::parse($item->created_at)->format('d-m-Y ') }}</td>
                <td>{{$item->position}}</td>
              </tr>
               @endforeach
  
          </ul>
        </tbody>
        </table>
      </div><!-- /.col-lg-8 -->
    @endif

    
    @if (count($statuses) >0)
      <div class="col-sm-12 col-md-12 col-lg-4 table ">
        <table>
            <colgroup>
              <col width="50%">
              <col width="50%">
            </colgroup>
          <thead>
            <tr>
              <th>{{ __('strings.tracking_result_t_d') }}</th>
              <th>{{ __('strings.status_of_delivery_da') }}</th>
            </tr>
          </thead>
            <tbody>
              @foreach ($statuses as $item)
              <tr>
                <td>{{Carbon\Carbon::parse($item->created_at)->format('d-m-Y ') }}</td>
                <td>{{$item->status}}</td>
              </tr>
              @endforeach
                
            </tbody>
        </table> 
      </div><!-- /.col-lg-4 -->
    @endif 
  </div><!-- /.row -->

  <div class="row mb-30 ml-20 mr-20">
    <div id="mapyan"class="col-sm-12 col-md-12 col-lg-12 mymapyan"></div><!-- /.col-lg-12 -->
  </div><!-- /.row -->
  {{-- <div class="row mb-30 ml-20 mr-20">
    <div class="col-sm-12 col-md-12 col-lg-12">
      <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated active" role="progressbar"
        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:50%">
        {{ __('strings.accomplishment_progress') }} 
        </div>
      </div>
    </div><!-- /.col-lg-12-->
  </div><!-- /.row --> --}}
  @if ($order->type !== "Ocean freight")
    <div id="progress_view">
      <div class="row mb-30">
        <div class="col-sm-12 col-md-12 col-lg-12 text-center thank">
          <div class="title">{{ __('strings.accomplishment_progress') }}</div>
        </div>
      </div>
      <div class="row mb-30">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <div class="progress ml-20 mr-20">
            <div class="progress-bar progress-bar-striped progress-bar-animated active" role="progressbar" style="line-height: 35px;"
            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%">
            {{-- <p>50%<p> --}}
              <div id="mybar">
                
              </div>
            {{-- Accomplishment of Delivery Progress --}}
            </div>
          </div>
        </div><!-- /.col-lg-12-->
      </div><!-- /.row -->
    </div>
  @endif
  @if ($order->current_process === "Delivered")
  <div class="row mb-30">
    <div class="col-sm-12 col-md-12 col-lg-12 text-center thank">
      <h4>{{ __('strings.delivered_offloaded') }}</h4>
      {{Carbon\Carbon::parse($order->delivered_at)->format('d-m-Y h:m') }} - {{$order->drop_off_country}}, {{$order->drop_off_city}}
      
      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
    <div class="row mb-30"> 
      <div class="col-sm-12 col-md-12 col-lg-12 text-center">
        <h5 class="thank">{{ __('strings.thanking') }}</h5>
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
  @endif
  

  <script src="https://api-maps.yandex.ru/2.1/?apikey=5a01ea29-4f62-40f8-82e6-d80bded3b428&lang=en_US" type="text/javascript"></script>
  <script src="https://kit.fontawesome.com/d45a2ab536.js" crossorigin="anonymous"></script>
  
  
  <script>
     var from = [{!!  json_encode((float) $order->pick_up_lat) !!}, {!!  json_encode((float) $order->pick_up_lon) !!}];
      
      var to = [{!!  json_encode((float) $order->drop_off_lat) !!}, {!!  json_encode((float) $order->drop_off_lon) !!}];

      var current = [{!!  json_encode((float) $order->current_lat) !!}, {!!  json_encode((float) $order->current_lon) !!}];

      if(JSON.stringify(to)==JSON.stringify(current)){
        var delivered = true;
      }
      // console.log(JSON.stringify(current));

        
        ymaps.ready(init);
        function init(){
            var myMap = new ymaps.Map("mapyan", {
              
                center: [55.76, 37.64],
                zoom: 4
            });
            myCollection = new ymaps.GeoObjectCollection(),
            // Создаем массив с данными.
                // myPoints = [
                //     { coords: [51.230569, 6.787428], text: 'Germany Dusseldorf' },
                //     { coords: [52.858248, 27.701393], text: 'Luggage is now going through Belarus' },
                //     { coords: [39.194141, 59.178550], text: 'Turkmenistan' },
                // ];

                myPoints = [
                    { coords: from},
                    { coords: to},
                ];

                // console.log(myPoints);
                // console.log(newPoints);
                

            // Заполняем коллекцию данными.
            // for (var i = 0, l = myPoints.length; i < l; i++) {
            //     var point = myPoints[i];
            //     myCollection.add(new ymaps.Placemark(
            //       // preset: 'islands#redIcon',
            //         point.coords, {
            //             balloonContentBody: point.text
            //         },
            //         , {
            //               preset: 'islands#redIcon'
            //           }
            //     ));
            // }
            myCollection.add(new ymaps.Placemark(from, {}, {
                preset: 'islands#redIcon'
            }));

            myCollection.add(new ymaps.Placemark(to, {}, {
                preset: 'islands#redIcon'
            }));

            if(JSON.stringify(current) !== "[0,0]"){
              myCollection.add(new ymaps.Placemark(current, {}, {
                  preset: 'islands#darkgreenIcon'
              }));
            }else{
              console.log("no current");
            }
            

            // Добавляем коллекцию меток на карту.
            myMap.geoObjects.add(myCollection);

            // Создаем экземпляр класса ymaps.control.SearchControl
            var mySearchControl = new ymaps.control.SearchControl({
                options: {
                    // Заменяем стандартный провайдер данных (геокодер) нашим собственным.
                    provider: new CustomSearchProvider(myPoints),
                    // Не будем показывать еще одну метку при выборе результата поиска,
                    // т.к. метки коллекции myCollection уже добавлены на карту.
                    noPlacemark: true,
                    resultsPerPage: 5
                }});

            // Добавляем контрол в верхний правый угол,
            myMap.controls
                .add(mySearchControl, { float: 'right' });
        }


        // Провайдер данных для элемента управления ymaps.control.SearchControl.
        // Осуществляет поиск геообъектов в по массиву points.
        // Реализует интерфейс IGeocodeProvider.
        function CustomSearchProvider(points) {
            this.points = points;
        }

        // Провайдер ищет по полю text стандартным методом String.ptototype.indexOf.
        CustomSearchProvider.prototype.geocode = function (request, options) {
            var deferred = new ymaps.vow.defer(),
                geoObjects = new ymaps.GeoObjectCollection(),
            // Сколько результатов нужно пропустить.
                offset = options.skip || 0,
            // Количество возвращаемых результатов.
                limit = options.results || 20;
                
            var points = [];
            // Ищем в свойстве text каждого элемента массива.
            for (var i = 0, l = this.points.length; i < l; i++) {
                var point = this.points[i];
                if (point.text.toLowerCase().indexOf(request.toLowerCase()) != -1) {
                    points.push(point);
                }
            }
            // При формировании ответа можно учитывать offset и limit.
            points = points.splice(offset, limit);
            // Добавляем точки в результирующую коллекцию.
            for (var i = 0, l = points.length; i < l; i++) {
                var point = points[i],
                    coords = point.coords,
                            text = point.text;

                geoObjects.add(new ymaps.Placemark(coords, {
                    name: text + ' name',
                    description: text + ' description',
                    balloonContentBody: '<p>' + text + '</p>',
                    boundedBy: [coords, coords]
                }));
            }

            deferred.resolve({
                // Геообъекты поисковой выдачи.
                geoObjects: geoObjects,
                // Метаинформация ответа.
                metaData: {
                    geocoder: {
                        // Строка обработанного запроса.
                        request: request,
                        // Количество найденных результатов.
                        found: geoObjects.getLength(),
                        // Количество возвращенных результатов.
                        results: limit,
                        // Количество пропущенных результатов.
                        skip: offset
                    }
                }
            });

            // Возвращаем объект-обещание.
            return deferred.promise();
        };

        var totalDistance = {!!  json_encode($order->distance) !!};
        var distance_to_current = {!!  json_encode($order->distance_to_current) !!};
        var percent = distance_to_current/totalDistance*100;
    


        var bars = document.getElementsByClassName("progress-bar");
        
        
        if(percent>100){
          document.getElementById("progress_view").style.display = 'none';
        }else{
          if(delivered){
          bars[0].style.width = 100+"%";
          document.getElementById("mybar").textContent = "100" + "%" ;
          }else{
            bars[0].style.width = percent+"%";
            document.getElementById("mybar").textContent = Math.floor(percent) + "%" ;
          }
        }
        
  </script>


  @endsection