
  <div class="row mb-30">
    <div class="col-sm-12 col-md-12 col-lg-6 table">
      <h5 class="text-center">{{ __('strings.about_company') }}</h5>
      <p class="text-center"><b>{{ __('strings.about_company_name') }} </b> {{$order->company}}</p>
      <p class="text-center"><b>{{ __('strings.about_company_person') }} </b> {{$order->name}}</p>
      <p class="text-center"><b>{{ __('strings.about_company_mail') }} </b>{{$order->email}}</p>
      <p class="text-center"><b>{{ __('strings.about_company_tel') }} </b>{{$order->phone}}</p>
      <div class="divider__theme divider__sm mb-30"></div>
    </div><!-- /.col-lg-16 -->
    <div class="col-sm-12 col-md-12 col-lg-6 table">
      <h5 class="text-center">{{ __('strings.about_delivery') }}</h5>
      <p class="text-center"><b>{{ __('strings.about_delivery_from') }} </b> {{$order->pick_up_country}}, {{$order->pick_up_city}}, {{$order->pick_up_street}}</p>
      <p class="text-center"><b>{{ __('strings.about_delivery_to') }} </b>{{$order->drop_off_country}}, {{$order->drop_off_city}}, {{$order->drop_off_street}}</p>
      <p class="text-center"><b>{{ __('strings.about_delivery_freight') }} </b>{{$order->type}}</p>
      <div class="divider__theme divider__sm mb-30"></div>
    </div><!-- /.col-lg-6 --> 
  </div><!-- /.row -->
  <div class="row mb-30 ml-20 mr-20">
    <div class="col-sm-12 col-md-12 col-lg-12">
      <h5 class="text-center bg-theme color-white">{{ __('strings.current_process_of_order') }} <b>{{$order->order_id}}</b></h5>
     </div><!-- /.col-lg-12 --> 
  </div><!-- /.row -->


   <!-- ========================
    Icons and table
  ========================== -->

 
  
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

  