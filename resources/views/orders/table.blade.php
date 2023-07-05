<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>NO:</th>
            <th style="width:100px">ID</th>						
            <th>{{ __('strings.pick_up_address') }}</th>
            <th>{{ __('strings.drop_off_ddress') }}</th>
            <th>{{ __('strings.date_created') }}</th>
            <th>{{ __('strings.date_accomplished') }}</th>
            <th>{{ __('strings.status') }}</th>
            <th>{{ __('strings.action') }}</th>
        </tr>
    </thead>
    <tbody>
        
        @foreach($orders as $order)
            <tr>
                <td>{{ $loop->index+1 }}</td>
                <td><a href="/orders/{{$order->id}}"> {{$order->order_id}}</a></td>
                <td>{{$order->pick_up_country}}, {{$order->pick_up_city}}</td>  
                <td>{{$order->drop_off_country}}, {{$order->drop_off_city}}</td>   
                <td>{{Carbon\Carbon::parse($order->created_at)->format('d/m/Y') }}</td>  
                <td>
                    @if ($order->delivered_at)
                        {{Carbon\Carbon::parse($order->delivered_at)->format('d/m/Y') }}    
                        @else
                        --//--//--
                    @endif
                    
                </td>                  
                <td> {{$order->current_process}}</td>
                <td>
                    <a href="/orders/{{$order->id}}/edit" class="settings" title="{{ __('strings.settings_m') }}" data-toggle="tooltip"><i class="fas fa-pencil-alt"></i></a>
                    
                    
                    {!!Form::open(['action' => ['OrderController@destroy', $order->id], 'method' => 'order', 'class' => 'pull-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}

                    <a href="#" onclick="$(this).closest('form').submit();" class="delete" title="{{ __('english.delete_m') }}" data-toggle="tooltip"><i class="fas fa-trash-alt"></i></a>
                
                    {!! Form::close() !!}

                </td>
            </tr>

            {{-- <td>
                {!!Form::open(['action' => ['OrderController@destroy', $order->id], 'method' => 'order', 'class' => 'pull-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
            </td> --}}
            
        @endforeach
    </tbody>
</table>