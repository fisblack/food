<?php

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
Route::group(['middleware' => ['web']], function () {
    // Website
    Route::get('/', function () {
        return view('home');
    });

    Route::match(['put', 'patch'], 'example/{id}/restore', [
        'as' => 'example.restore', 'uses' => 'Website\ExampleController@restore'
    ]);

    // eCommerce
    Route::group(['prefix' => 'e-commerce', 'as' => 'e-commerce.'], function () {
        Route::resource('example', 'Ecommerce\ExampleController');
    });

    // BackOffice
    Route::group(['prefix' => 'back-office', 'as' => 'back-office.'], function () {
        Route::get('/', function () {
            return view('welcome');
        });
        Route::group(['prefix' => 'ui', 'as' => 'ui.'], function () {
            Route::get('/', 'BackOffice\BackOfficeUIController@index');
            Route::get('/icon', 'BackOffice\BackOfficeUIController@icon');
            Route::get('/input', 'BackOffice\BackOfficeUIController@input');
            Route::get('/select', 'BackOffice\BackOfficeUIController@select');
            Route::get('/dropdown', 'BackOffice\BackOfficeUIController@dropdown');
            Route::get('/tab', 'BackOffice\BackOfficeUIController@tab');
            Route::get('/pagination', 'BackOffice\BackOfficeUIController@pagination');
            Route::get('/image', 'BackOffice\BackOfficeUIController@image');
        });

        Route::group(['prefix' => 'settings', 'as' => 'settings.'], function () {
            Route::resource('example', 'BackOffice\Settings\ExampleController');
            Route::match(['put', 'patch'], 'example/{id}/restore', [
                'as' => 'example.restore', 'uses' => 'BackOffice\Settings\ExampleController@restore'
            ]);
            Route::delete('example', 'BackOffice\Settings\ExampleController@deletes');
            Route::get('example/image', 'BackOffice\Settings\ExampleController@getImage');
            Route::get('example/report', 'BackOffice\Settings\ExampleController@report');
            Route::post('example/authorisation', 'BackOffice\Settings\ExampleController@authorisation');
            Route::delete('example/authorisation', 'BackOffice\Settings\ExampleController@deAuthorisation');



        });
    });
    //newroute
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('blackoffice', function () { return view('back-office.settings.index'); });
    Route::resource('gismapsource', 'BackOffice\Settings\GisMapSourceController');
    Route::resource('zoning', 'BackOffice\Settings\ZonIngController');
    Route::resource('category', 'BackOffice\Settings\CategoryController');
    Route::resource('static', 'BackOffice\Settings\StaticController');
    Route::resource('marketbenchmark', 'BackOffice\Settings\MarketbenchmarkController');
    Route::resource('marketplace', 'BackOffice\Settings\MarketplaceController');
    Route::resource('content', 'BackOffice\Settings\ContentController');
    Route::resource('general', 'BackOffice\Settings\GeneralController');
    Route::get('user', function() {
        return view('back-office.settings.user.index');
    });

    //
});
