<?php

namespace App\Exports;

use App\Order;
use App\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class OrdersExportView implements FromCollection, WithHeadings
{

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $user_id = auth()->user()->id;
        return DB::table('orders')->select(
            "order_id",
            "company",
            "name",
            "email",
            "phone",
            "type",
            "weight",
            "current_process",

            "pick_up_city",
            "pick_up_country",
            "pick_up_street",
            "pick_up_zip",
            "pick_up_lat",
            "pick_up_lon",

            "drop_off_city",
            "drop_off_country",
            "drop_off_street",
            "drop_off_zip",
            "drop_off_lat",
            "drop_off_lon",

            "current_address",
            "current_lat",
            "current_lon",
            'created_at',
            )->where('user_id', $user_id)->get();
        // $user = User::find($user_id);
        // return $user->orders;
    }

    public function headings() : array{
        return [
            "Order_id",
            "Company",
            "Name",
            "Email",
            "Phone",
            "Type",
            "Weight",
            "Current_process",

            "Pick_up_city",
            "Pick_up_country",
            "Pick_up_street",
            "Pick_up_zip",
            "Pick_up_lat",
            "Pick_up_lon",

            "Drop_off_city",
            "Drop_off_country",
            "Drop_off_street",
            "Drop_off_zip",
            "Drop_off_lat",
            "Drop_off_lon",

            "Current_address",
            "Current_lat",
            "Current_lon",
            'Created At',
        ];

    }
    
    // public function view(): View
    // {
    //     return view('orders.table',[
    //         'orders' => Order::all()
    //     ],
    // }
}
