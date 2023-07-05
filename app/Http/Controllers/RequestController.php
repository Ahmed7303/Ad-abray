<?php

namespace App\Http\Controllers;

use App\Request;

use Illuminate\Http\Request as Req;

class RequestController extends Controller
{

    public function sendRequest(Req $request)
    {
        $this->validate($request, [
            'company' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'description' => 'required',
            
        ]);
        
        $req = new Request();
    
        $req->company = $request->input('company');
        $req->name = $request->input('name');
        $req->email = $request->input('email');
        $req->phone = $request->input('phone');
        $req->description = $request->input('description');
        $req->save();

        return redirect('/contact_us')->with('success', trans('strings.req_sent'));   
    }
   
}
