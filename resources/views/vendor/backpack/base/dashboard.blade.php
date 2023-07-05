@extends(backpack_view('blank'))

@php
    $widgets['before_content'][] = [
        'type'        => 'jumbotron',
        'heading'     => "Welcome",
        'content'     => "Here you can see the list of requests",
        // 'button_link' => backpack_url('logout'),
        // 'button_text' => trans('backpack::base.logout'),
    ];
@endphp

@section('content')

    <div class="box-body" style="">

        <table class="table table-bordered" style="display: block;
        overflow-x: scroll;">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Company</th>
                <th>Description</th>
            </tr>
            </thead>
            <tbody>
            @if(!empty($requests))
            @foreach($requests as $req)
                <tr>

                    <td><div style="display: block; ">{{$req->name}}</div></td>
                    <td><div>{{$req->email}}</div></td>
                    <td><div>{{$req->phone}}</div></td>
                    <td><div>{{$req->company}}</div></td>

                    
                    <td><div >{{$req->description}}</div></td>
                </tr>
            @endforeach
            
                @endif
            </tbody>
        </table>
        
        {{$requests->links("pagination")}}
    </div>
@endsection