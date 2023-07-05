<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('user', 'UserCrudController');
    Route::crud('newscategory', 'NewsCategoryCrudController');
    Route::crud('news', 'NewsCrudController');
    Route::crud('gallery', 'GalleryCrudController');
    Route::crud('office', 'OfficeCrudController');
    
    Route::get('/dashboard', 'DashboardController@dashboard')->name('admin_dashboard');
    Route::crud('staff', 'StaffCrudController');
    Route::crud('review', 'ReviewCrudController');
    Route::crud('event', 'EventCrudController');
    Route::crud('marketing', 'MarketingCrudController');
    Route::crud('ship-repair', 'ShipRepairCrudController');
    Route::crud('experience', 'ExperienceCrudController');
    Route::crud('certificate', 'CertificateCrudController');
    Route::crud('company', 'CompanyCrudController');
    Route::crud('ship-service', 'ShipServiceCrudController');
    Route::crud('ship-video', 'ShipVideoCrudController');
    Route::crud('client', 'ClientCrudController');
    Route::crud('service', 'ServiceCrudController');
    Route::crud('testimonal', 'TestimonalCrudController');
    Route::crud('slider', 'SliderCrudController');
    Route::crud('servicing', 'ServicingCrudController');
    Route::crud('contact-link', 'ContactLinkCrudController');
    Route::crud('licenses', 'LicensesCrudController');
    Route::crud('statistics', 'StatisticsCrudController');
    Route::crud('diagram', 'DiagramCrudController');
    Route::crud('border', 'BorderCrudController');
    Route::crud('border-item', 'BorderItemCrudController');
}); // this should be the absolute last line of this file