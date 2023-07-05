<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::prefix('admin')->group(function () {
//     Route::get('users', function () {
//         // Matches The "/admin/users" URL
//     });
// });

Route::get('/', 'HomeController@home')->name("welcome");


Route::resource('orders', 'OrderController');

Route::get('/find', 'OrderController@find')->name("orders.find");

Route::get('/search', 'HomeController@search')->name("orders.search");

Route::get('/orders/{id}/current_process_of_goods', 'OrderController@current_process_of_goods');
Route::put('/orders/{id}/update_current_proccess_of_goods', 'OrderController@update_current_proccess_of_goods')->name('orders.current_process');;

Route::get('/orders/{id}/current_location', 'OrderController@current_location');
Route::put('/orders/{id}/update_current_location', 'OrderController@update_current_location')->name('orders.current_location');;

Route::get('/orders/{id}/shipment_position', 'OrderController@shipment_position');
Route::post('/orders/{id}/add_shipment_position', 'ShipmentPositionController@add_shipment_position')->name('orders.shipment_position');

Route::get('/orders/{id}/truck_status', 'OrderController@truck_status');
Route::post('/orders/{id}/add_truck_status', 'TruckStatusController@add_truck_status')->name('orders.truck_status');;

Route::get('/orders/{id}/export', 'OrderController@export');

Route::get('excel', 'OrderController@export_view');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('my_orders');

Route::get('/gallery', 'GalleryController@index')->name('gallery');

Route::get('lang/{locale}', 'HomeController@lang');

Route::get('/why_us', 'HomeController@why_us')->name('why_us');

Route::get('/reviews', 'ReviewController@index')->name('reviews');

Route::get('/global_locations', 'HomeController@global_locations')->name('global_locations');

Route::get('/air_Freight', 'StaffController@air_Freight')->name('air_Freight');
Route::get('/ocean_Freight', 'StaffController@ocean_Freight')->name('ocean_Freight');
Route::get('/road_Freight', 'StaffController@road_Freight')->name('road_Freight');
Route::get('/rail_Freight', 'StaffController@rail_Freight')->name('rail_Freight');

Route::get('/container_Freight', 'StaffController@container_Freight')->name('container_Freight');
Route::get('/warehousing', 'HomeController@warehousing')->name('warehousing');
Route::get('/customs_brokerage', 'HomeController@customs_brokerage')->name('customs_brokerage');

Route::get('/news', 'NewsController@index')->name('blog_classic');
Route::get('/news/{id}', 'NewsController@news_by_category')->name('news_by_category');

Route::get('/track_shipment', 'HomeController@track_shipment')->name('track_shipment');
Route::get('/contact_us', 'HomeController@contact_us')->name('contact_us');
Route::get('/services', 'HomeController@services')->name('services');
Route::get('/input', 'HomeController@input_page')->name('input_page');

Route::post('/request', 'RequestController@sendRequest')->name('request');;


Route::get('/events', 'EventController@index')->name('events');

Route::get('/marketing', 'MarketingController@index')->name('marketing');
Route::get('/marketing/search', 'MarketingController@search')->name('marketing.filter');

Route::get('/ship', 'ShipController@index')->name('ship');
Route::get('/tender', 'TenderController@index')->name('tender');

