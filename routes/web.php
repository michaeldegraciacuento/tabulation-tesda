<?php

Auth::routes();

Route::redirect('/','/login');

Route::group(['middleware' => ['auth']],function() { 

    Route::get('/dashboard','DashboardController@index')->name('dashboard.index');

    Route::group(['middleware' => ['role:admin|Judge']],function() { 

        Route::group(['middleware' => ['role:admin|Judge']],function() { 
            Route::resource('users','UsersController'); 
            Route::resource('program','ProgramController');
            Route::resource('qualification','QualificationController');   
            Route::resource('institution','InstitutionControlle'); 
            Route::resource('contestant','ContestantController'); 
            Route::get('/contestantShow/{tti_id}/{quali_id}','ContestantController@contestantShow');          
        });
    });  
    Route::get('/colors', function () {     return view('dashboard.colors'); });
        Route::get('/typography', function () { return view('dashboard.typography'); });
        Route::get('/charts', function () {     return view('dashboard.charts'); });
        Route::get('/widgets', function () {    return view('dashboard.widgets'); });
        Route::get('/404', function () {        return view('dashboard.404'); });
        Route::get('/500', function () {        return view('dashboard.500'); });
        Route::prefix('base')->group(function () {  
        Route::get('/breadcrumb', function(){   return view('dashboard.base.breadcrumb'); });
        Route::get('/cards', function(){        return view('dashboard.base.cards'); });
        Route::get('/carousel', function(){     return view('dashboard.base.carousel'); });
        Route::get('/collapse', function(){     return view('dashboard.base.collapse'); });

        Route::get('/forms', function(){        return view('dashboard.base.forms'); });
        Route::get('/jumbotron', function(){    return view('dashboard.base.jumbotron'); });
        Route::get('/list-group', function(){   return view('dashboard.base.list-group'); });
        Route::get('/navs', function(){         return view('dashboard.base.navs'); });

        Route::get('/pagination', function(){   return view('dashboard.base.pagination'); });
        Route::get('/popovers', function(){     return view('dashboard.base.popovers'); });
        Route::get('/progress', function(){     return view('dashboard.base.progress'); });
        Route::get('/scrollspy', function(){    return view('dashboard.base.scrollspy'); });

        Route::get('/switches', function(){     return view('dashboard.base.switches'); });
        Route::get('/tables', function () {     return view('dashboard.base.tables'); });
        Route::get('/tabs', function () {       return view('dashboard.base.tabs'); });
        Route::get('/tooltips', function () {   return view('dashboard.base.tooltips'); });
    });
    Route::prefix('buttons')->group(function () {  
        Route::get('/buttons', function(){          return view('dashboard.buttons.buttons'); });
        Route::get('/button-group', function(){     return view('dashboard.buttons.button-group'); });
        Route::get('/dropdowns', function(){        return view('dashboard.buttons.dropdowns'); });
        Route::get('/brand-buttons', function(){    return view('dashboard.buttons.brand-buttons'); });
    });
    Route::prefix('icon')->group(function () {  // word: "icons" - not working as part of adress
        Route::get('/coreui-icons', function(){         return view('dashboard.icons.coreui-icons'); });
        Route::get('/flags', function(){                return view('dashboard.icons.flags'); });
        Route::get('/brands', function(){               return view('dashboard.icons.brands'); });
    });
    Route::prefix('notifications')->group(function () {  
        Route::get('/alerts', function(){   return view('dashboard.notifications.alerts'); });
        Route::get('/badge', function(){    return view('dashboard.notifications.badge'); });
        Route::get('/modals', function(){   return view('dashboard.notifications.modals'); });
    });  
});