<?php
		// if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
		// 	error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
		// }

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
//Auth::routes(['verify'=>true]);

// use Illuminate\Routing\Route;

Auth::routes(['verify'=>true]);

		Route::get('/home', 'HomeController@index')->middleware('verified')->name('home');
		Route::get('/',function(){return view('/home');})->middleware('verified');
		// Route::get('/home',function(){return view('/layout.homescreen');})->middleware('verified');

		Route::get('/login', 'AuthController@getLogin')->name('login')->middleware('guest');
		Route::post('/login','AuthController@postLogin')->middleware('guest');
		Route::get('/register', 'AuthController@getRegister')->name('register');
		Route::post('/register','AuthController@postRegister');
		Route::get('/logout', 'AuthController@logout')->middleware('guest');


		Route::group(['middleware' => 'auth'], function () {
		    Route::get('password', 'ProfileController@changepass')->name('password.change');
		    Route::put('password', 'ProfileController@updatepass')->name('password.update');
			Route::patch('/user/edit/{user}', 'ProfileController@update')->middleware('verified');
			Route::get('/profile/{user}', 'ProfileController@show')->middleware('verified');
		});

// Homescreen
		Route::get('/homescreen', 'HomescreenController@index')->middleware('verified');
		Route::get('/SOP', 'HomescreenController@showsop')->middleware('verified');
		Route::get('/grafikdefect', 'HomescreenController@showdefect')->middleware('verified');
		Route::get('/grafiklistrikunit', 'HomescreenController@showlistrikunit')->middleware('verified');
		Route::get('/schedule', 'ScheduleController@index')->middleware('verified');
		Route::post('/schedule/add', 'ScheduleController@store')->middleware('verified');
		Route::post('/schedule/cari', 'ScheduleController@cari')->middleware('verified');
		Route::post('/testlogbook/add', 'BeritaacaraController@store')->middleware('verified');
    //



Route::group(['middleware' => ['role:Finance-Acounting|Admin','verified']], function () {
  //   	Route::get('/kwhunit', 'KwhmeterunitsController@index');
		// Route::post('/kwhunit', 'KwhmeterunitsController@search');
		// //Route::get('/kwhunit/add', 'KwhmeterunitsController@create');
		// Route::get('/kwhunit/add/{kwhmeterunit}', 'KwhmeterunitsController@show');
		// //Route::post('/kwhunit/add', 'KwhmeterunitsController@store');
		// //Route::get('/kwhunit/edit/{kwhmeterunit}', 'KwhmeterunitsController@edit');
		// //Route::post('/kwhunit/edit/{kwhmeterunit}', 'KwhmeterunitsController@update');
		// //Route::delete('/kwhunit/delete/{kwhmeterunit}', 'KwhmeterunitsController@destroy');
		// Route::post('/kwhunit/export', 'KwhmeterunitsController@export');
		// Route::post('/kwhunit/cari', 'KwhmeterunitsController@cari');
});
Route::group(['middleware' => ['role:User|Admin','verified']], function () {
    //
});
Route::group(['middleware' => ['role:TR|Eng-spv|Admin','verified']], function () {
    //
});



Route::get('/esp', 'Espcontroller@index');
Route::get('/esplampu', 'Espcontroller@show');
Route::patch('/esp/update/{esp}', 'Espcontroller@update');
Route::patch('/esp/updates/{esp}', 'Espcontroller@updates');
Route::post('/esp/edit/{esp}', 'Espcontroller@edit');
Route::get('/grafikesp', 'Espcontroller@showgrafik');
Route::get('/carda', 'FanController@indexcarda');


// role teknisi, spv, fa, admin, admin-ga
	Route::group(['middleware' => ['verified','role:Eng-teknisi|Eng-spv|Admin|Finance-Acounting|Admin-GA']], function () {
    //genset
		Route::get('/genset', 'GensetController@index')->middleware('verified')->name('genset.index');
		Route::get('/genset/edit/{genset}', 'GensetController@edit')->middleware('auth');
		Route::post('/genset/add', 'GensetController@store')->middleware('verified')->name('genset.store');
		Route::delete('/genset/delete/{genset}', 'GensetController@destroy')->middleware('verified');
		Route::get('/genset/export', 'GensetController@export')->middleware('verified')->name('genset.export');

		Route::get('/pmgenset', 'GensetController@indexpm')->name('pmgenset.index')->middleware('verified');
		Route::get('/pmgenset/edit/{pmgenset}', 'GensetController@editpm')->middleware('auth');
		Route::get('/pmgenset/pdf/{pmgenset}', 'GensetController@exportpdf');
		Route::get('/pmgenset/xlsx/{pmgenset}', 'GensetController@exportxlsx');
		Route::post('/pmgenset/add', 'GensetController@storepm')->name('pmgenset.store')->middleware('verified');
		Route::delete('/pmgenset/delete/{pmgenset}', 'GensetController@destroypm')->middleware('verified');

//amr
		Route::get('/amr', 'AmrsController@index')->name('amr.index');
		Route::post('/amr/add', 'AmrsController@store')->name('amr.store');
		Route::get('/amr/edit/{amr}', 'AmrsController@edit');
		Route::patch('/amr/edit/{amr}', 'AmrsController@update');
		Route::delete('/amr/delete/{amr}', 'AmrsController@destroy');
		Route::get('/amr/export', 'AmrsController@export')->name('amr.export');

//pdam
		Route::get('/pdam', 'PdamsController@index')->name('pdam.index');
		Route::post('/pdam/filter', 'PdamsController@search');
		Route::get('/pdam/add', 'PdamsController@create');
	Route::post('/pdam/add', 'PdamsController@store')->name('pdam.store');
		Route::get('/pdam/edit/{pdam}', 'PdamsController@edit');
		Route::post('/pdam/edit/{pdam}', 'PdamsController@update');
		Route::delete('/pdam/delete/{pdam}', 'PdamsController@destroy');
		Route::get('/pdam/export', 'PdamsController@export')->name('pdam.export');

//transfer pump
		Route::get('/transferpump', 'TransferpumpsController@index')->name('transferpump.index');
		Route::post('/transferpump/add', 'TransferpumpsController@store')->name('transferpump.store');
		Route::get('/transferpump/edit/{transferpump}', 'TransferpumpsController@edit');
		Route::delete('/transferpump/delete/{transferpump}', 'TransferpumpsController@destroy');
		Route::get('transferpump/export','TransferpumpsController@export')->name('transferpump.export');

//booster pump
		Route::get('/boosterpump', 'BoosterpumpsController@index')->name('boosterpump.index');
		Route::post('/boosterpump/add', 'BoosterpumpsController@store')->name('boosterpump.store');
		Route::get('/boosterpump/edit/{boosterpump}', 'BoosterpumpsController@edit');
		Route::post('/boosterpump/edit/{boosterpump}', 'BoosterpumpsController@update');
		Route::delete('/boosterpump/delete/{boosterpump}', 'BoosterpumpsController@destroy');
		Route::get('/boosterpump/export', 'BoosterpumpsController@export')->name('boosterpump.export');

//pompa sumpit
		Route::get('/sumpitpump', 'SumpitpumpsController@index')->name('sumpitpump.index');
		Route::get('/sumpitpump/edit/{sumpitpump}', 'SumpitpumpsController@edit');
		Route::get('/sumpitpump/export', 'SumpitpumpsController@export')->name('sumpitpump.export');
		Route::post('/sumpitpump/add', 'SumpitpumpsController@store')->name('sumpitpump.store');
		Route::delete('/sumpitpump/delete/{sumpitpump}', 'SumpitpumpsController@destroy');

//fire pump
		Route::get('/firepump', 'FirepumpsController@index')->name('firepump.index');
		Route::get('/firepump/edit/{firepump}', 'FirepumpsController@edit');
		Route::get('/firepump/view/{firepump}', 'FirepumpsController@show');
		Route::post('/firepump/add', 'FirepumpsController@store')->name('firepump.store');
		Route::get('/firepump/export', 'FirepumpsController@export')->name('firepump.export');
        Route::delete('/firepump/delete/{firepump}', 'FirepumpsController@destroy');

		Route::get('/pmfirepump', 'FirepumpsController@indexpm')->name('pmfirepump.index');
		Route::get('/pmfirepump/edit/{pmfirepumps}', 'FirepumpsController@editpm');
        Route::get('/pmfirepump/pdf/{pmfirepumps}', 'FirepumpsController@exportpdf');
		Route::get('/pmfirepump/xlsx/{pmfirepumps}', 'FirepumpsController@exportxlsx');
		Route::post('/pmfirepump/add', 'FirepumpsController@storepm')->name('pmfirepump.store');
		Route::delete('/pmfirepump/delete/{pmfirepumps}', 'FirepumpsController@destroypm');

//logbook
		Route::get('/logbook', 'LogbooksController@index')->name('logbook.index');
		Route::get('/logbook/edit/{logbook}', 'LogbooksController@edit');
		Route::post('/logbook/add', 'LogbooksController@store')->name('logbook.store');
		Route::get('/logbook/export', 'LogbooksController@export')->name('logbook.export');
		Route::delete('/logbook/delete/{logbook}', 'LogbooksController@destroy');

//water meter unit
		Route::get('/watermeterunit/edit/{watermeterunit}', 'WatermeterunitsController@edit');
		Route::post('/watermeterunit/add', 'WatermeterunitsController@store')->name('watermeterunit.store');
		Route::post('/watermeterunit/edit/{watermeterunit}', 'WatermeterunitsController@update');
		Route::get('/watermeterunit/view/{watermeterunit}', 'WatermeterunitsController@show')->name('watermeterunit.view');
		Route::delete('/watermeterunit/delete/{watermeterunit}', 'WatermeterunitsController@destroy');
		Route::get('/watermeterunit/export', 'WatermeterunitsController@export')->name('watermeterunit.export');
		Route::get('/watermeterunit', 'WatermeterunitsController@index')->name('watermeterunit.index');

//kwh unit
		Route::get('/kwhunit', 'KwhmeterunitsController@index')->name('kwhunit.index');
		Route::get('/kwhunit/view/{kwhmeterunit}', 'KwhmeterunitsController@show');
		Route::get('/kwhunit/edit/{kwhmeterunit}', 'KwhmeterunitsController@edit');
		Route::get('/kwhunit/export', 'KwhmeterunitsController@export')->name('kwhunit.export');
		Route::post('/kwhunit/add', 'KwhmeterunitsController@store')->name('kwhunit.store');
		Route::post('/kwhunit/edit/{kwhmeterunit}', 'KwhmeterunitsController@update')->name('kwhunit.update');
		Route::delete('/kwhunit/delete/{kwhmeterunit}', 'KwhmeterunitsController@destroy');

		Route::get('/kwhcomersile', 'KwhmeterunitsController@indexcomersile')->name('kwhcomersile.index');
		Route::get('/kwhcomersile/add', 'KwhmeterunitsController@createcomersile');
		Route::get('/kwhcomersile/view/{kwhcomersile}', 'KwhmeterunitsController@showcomersile');
		Route::post('/kwhcomersile/add', 'KwhmeterunitsController@storecomersile')->name('kwhcomersile.store');
		Route::get('/kwhcomersile/edit/{kwhcomersile}', 'KwhmeterunitsController@editcomersile');
		Route::delete('/kwhcomersile/delete/{kwhcomersile}', 'KwhmeterunitsController@destroycomersile');
		Route::get('/kwhcomersile/export', 'KwhmeterunitsController@exportcomersile')->name('kwhcomersile.export');

//powerhouse
		Route::get('/powerhouse', 'PowerHousesController@index')->name('powerhouse.index');
		Route::post('/powerhouse/add', 'PowerHousesController@store')->name('powerhouse.store');
		Route::get('/powerhouse/edit/{powerHouse}', 'PowerHousesController@edit');
		Route::get('/powerhouse/export', 'PowerHousesController@export')->name('powerhouse.export');
		Route::delete('/powerhouse/delete/{powerHouse}', 'PowerHousesController@destroy');

		Route::get('/pmpanel', 'PowerHousesController@indexpm')->name('pmpanel.index');
		Route::get('/pmpanel/tower', 'PowerHousesController@tower');
		Route::get('/pmpanel/lantai/{pmpanel}', 'PowerHousesController@lantai');
		Route::get('/pmpanel/room/{pmpanel}', 'PowerHousesController@room');
		Route::get('/pmpanel/panel_name/{pmpanel}', 'PowerHousesController@panel_name');
		Route::get('/pmpanel/edit/{pmpanel}', 'PowerHousesController@editpm');
		Route::post('/pmpanel/export', 'PowerHousesController@exportpm');
		Route::post('/pmpanel/add', 'PowerHousesController@storepm')->name('pmpanel.store');
		Route::delete('/pmpanel/delete/{pmpanel}', 'PowerHousesController@destroypm');

//stp
		Route::get('/stp', 'StpController@index')->name('stp.index');
		Route::post('/stp/add', 'StpController@store')->name('stp.store');
		Route::get('/stp/edit/{stp}', 'StpController@edit');
		Route::get('/stp/export', 'StpController@export')->name('stp.export');
        Route::delete('/stp/delete/{stp}','StpController@destroy');

		Route::get('/pmstp', 'StpController@indexpm');
		Route::post('/pmstp', 'StpController@fillter');
		Route::post('/pmstp/view/{pmstp}', 'StpController@showpm');
		Route::post('/pmstp/edit/{pmstp}', 'StpController@editpm');
		Route::patch('/pmstp/edit/{pmstp}', 'StpController@updatepm');
		Route::post('/pmstp/export', 'StpController@exportpm');
		Route::post('/pmstp/add', 'StpController@storepm');
		Route::get('/pmstp/add', 'StpController@createpm');
		Route::delete('/pmstp/delete/{pmstp}', 'StpController@destroypm');

//pm pompa
		Route::get('/pmpompa', 'PmpompaController@indexpm');
		Route::post('/pmpompa', 'PmpompaController@fillter');
		Route::post('/pmpompa/view/{pmpompa}', 'PmpompaController@showpm');
		Route::post('/pmpompa/edit/{pmpompa}', 'PmpompaController@editpm');
		Route::patch('/pmpompa/edit/{pmpompa}', 'PmpompaController@updatepm');
		Route::post('/pmpompa/export', 'PmpompaController@exportpm');
		Route::post('/pmpompa/add', 'PmpompaController@storepm');
		Route::get('/pmpompa/add', 'PmpompaController@createpm');
		Route::delete('/pmpompa/delete/{pmpompa}', 'PmpompaController@destroypm');

//pmgondola
		Route::get('/gondola', 'PmgondolaController@indexpm')->name('gondola.index');
		Route::get('/gondola/edit/{pmgondola}', 'PmgondolaController@editpm');
		Route::get('/gondola/pdf/{pmgondola}', 'PmgondolaController@exportpdf')->name('gondola.pdf');
		Route::get('/gondola/xlsx/{pmgondola}', 'PmgondolaController@exportexcel');
		Route::post('/gondola/add', 'PmgondolaController@storepm')->name('gondola.store');
		Route::delete('/gondola/delete/{pmgondola}', 'PmgondolaController@destroypm');
//pmac
		Route::get('/ac', 'PmacController@indexpm')->name('pmac.index');
		Route::get('/ac/tower', 'PmacController@indextower');
		Route::get('/ac/lantai/{pmac}', 'PmacController@indexlantai');
		Route::get('/ac/lokasi', 'PmacController@indexlokasi');
		Route::get('/ac/item/{pmac}', 'PmacController@indexitem');
		Route::get('/ac/edit/{pmac}', 'PmacController@editpm');
		Route::get('/ac/pdf/{pmac}', 'PmacController@exportpdf')->name('pmac.pdf');
		Route::get('/ac/xlsx/{pmac}', 'PmacController@exportexcel');
		Route::post('/ac/add', 'PmacController@storepm')->name('pmac.store');
		Route::delete('/ac/delete/{pmac}', 'PmacController@destroypm');

//pmfirealarm
		Route::get('/pmfirealarm', 'FirealarmController@indexpm')->name('pmfirealarm.index');
        Route::get('/pmfirealarm/tower', 'FirealarmController@tower');
		Route::get('/pmfirealarm/lantai/{firealarm}', 'FirealarmController@lantai');
		Route::get('/pmfirealarm/edit/{firealarm}', 'FirealarmController@editpm');
		Route::get('/pmfirealarm/pdf/{firealarm}', 'FirealarmController@exportpdf');
		Route::get('/pmfirealarm/xlsx/{firealarm}', 'FirealarmController@exportexcel');
		Route::post('/pmfirealarm/add', 'FirealarmController@storepm')->name('pmfirealarm.store');
		Route::delete('/pmfirealarm/delete/{firealarm}', 'FirealarmController@destroypm');

//pm clean water tank
		Route::get('/cwt', 'PmcleanWaterTankController@indexpm')->name('cwt.index');
		Route::get('/cwt/edit/{cwt}', 'PmcleanWaterTankController@editpm');
		Route::get('/cwt/pdf/{cwt}', 'PmcleanWaterTankController@exportpdf');
		Route::get('/cwt/xlsx/{cwt}', 'PmcleanWaterTankController@exportxlsx');
		Route::post('/cwt/add', 'PmcleanWaterTankController@storepm')->name('cwt.store');
		Route::delete('/cwt/delete/{cwt}', 'PmcleanWaterTankController@destroypm');

//pm rooftank
		Route::get('/rooftank', 'RooftankController@indexpm');
		Route::post('/rooftank', 'RooftankController@fillter');
		Route::post('/rooftank/view/{rooftank}', 'RooftankController@showpm');
		Route::post('/rooftank/edit/{rooftank}', 'RooftankController@editpm');
		Route::patch('/rooftank/edit/{rooftank}', 'RooftankController@updatepm');
		Route::post('/rooftank/export', 'RooftankController@exportpm');
		Route::post('/rooftank/add', 'RooftankController@storepm');
		Route::get('/rooftank/add', 'RooftankController@createpm');
		Route::delete('/rooftank/delete/{rooftank}', 'RooftankController@destroypm');

//pm box hydrant
		Route::get('/hydrant', 'HydrantboxController@indexpm')->name('hydrant.index');
        Route::get('/hydrant/tower', 'HydrantboxController@tower');
		Route::get('/hydrant/lantai/{hydrant}', 'HydrantboxController@lantai');
		Route::get('/hydrant/type/{hydrant}', 'HydrantboxController@type');
		Route::get('/hydrant/edit/{hydrantbox}', 'HydrantboxController@editpm');
		Route::get('/hydrant/pdf/{hydrantbox}', 'HydrantboxController@exportpdf')->name('hydrant.pdf');
		Route::get('/hydrant/xlsx/{hydrantbox}', 'HydrantboxController@exportexcel');
		Route::post('/hydrant/add', 'HydrantboxController@storepm')->name('hydrant.store');
		Route::delete('/hydrant/delete/{hydrantbox}', 'HydrantboxController@destroypm');

//pm toilet
		Route::get('/toilet', 'ToiletController@indexpm');
		Route::post('/toilet', 'ToiletController@fillter');
		Route::post('/toilet/view/{toilet}', 'ToiletController@showpm');
		Route::post('/toilet/edit/{toilet}', 'ToiletController@editpm');
		Route::patch('/toilet/edit/{toilet}', 'ToiletController@updatepm');
		Route::post('/toilet/export', 'ToiletController@exportpm');
		Route::post('/toilet/add', 'ToiletController@storepm');
		Route::get('/toilet/add', 'ToiletController@createpm');
		Route::delete('/toilet/delete/{toilet}', 'ToiletController@destroypm');

//pm ef & if
		Route::get('/fan', 'FanController@indexpm')->name('fan.index');
		Route::get('/fan/tower', 'FanController@tower');
		Route::get('/fan/lantai/{fan}', 'FanController@lantai');
		Route::get('/fan/type/{fan}', 'FanController@type');
		Route::get('/fan/edit/{fan}', 'FanController@editpm');
        Route::get('/fan/pdf/{fan}', 'FanController@exportpdf')->name('fan.pdf');
		Route::get('/fan/xlsx/{fan}', 'FanController@exportexcel');
		Route::post('/fan/add', 'FanController@storepm')->name('fan.store');
		Route::delete('/fan/delete/{fan}', 'FanController@destroypm');
	});

//role eng-spv dan admin
Route::group(['middleware' => ['role:Eng-spv|Admin','verified']], function () {
		Route::get('/beritaacara', 'BeritaacaraController@index');

});


//role admin
Route::group(['middleware' => ['verified','role:Admin']], function () {
		    Route::get('users', 'ProfileController@index');
			Route::post('/user/update/{user}', 'ProfileController@edituser');
		    // Route::match(['get', 'post'],'/user/update/{user}', 'ProfileController@edituser');
		    Route::delete('/users/delete/{user}', 'ProfileController@destroy');
			Route::patch('/user/update/{User}', 'ProfileController@updateuser');

	//setting role
			Route::get('/rolepreset', 'RolepermissionController@indexrole');
			Route::get('/permissionpreset', 'RolepermissionController@indexpermission');
			Route::post('/rolepreset/add', 'RolepermissionController@storeRole');
			Route::post('/permissionpreset/add', 'RolepermissionController@storePermission');
			Route::patch('/rolepreset/edit/{role}', 'RolepermissionController@updateRole');
		    Route::delete('/rolepreset/delete/{role}', 'RolepermissionController@destroy');
	//data
			Route::get('/data',function(){return view('/management_data.data');})->middleware('verified');

	//tower
			Route::get('/towers', 'TowersController@index')->name('towers.index');
            Route::get('/towers/edit/{towers}', 'TowersController@edit');
            Route::post('/towers/add', 'TowersController@store')->name('towers.store');
			Route::patch('/towers/edit/{towers}', 'TowersController@update');
		    Route::delete('/towers/delete/{towers}', 'TowersController@destroy');

	//public area
		    Route::get('/rooms', 'PublicareaController@index')->name('rooms.index');
			Route::post('/rooms/add', 'PublicareaController@store')->name('rooms.store');
		    Route::delete('/rooms/delete/{public}', 'PublicareaController@destroy');

    //equipment
            Route::get('/equipment', 'EquipmentController@index');
			Route::post('/equipment/add', 'EquipmentController@store');
			Route::patch('/equipment/edit/{equipment}', 'EquipmentController@update');
		    Route::delete('/equipment/delete/{equipment}', 'EquipmentController@destroy');
	//building data
			Route::get('/building-data', 'BuildingController@index');
	//equipment
			Route::get('/floor', 'FloorController@index')->name('floor.index');
            Route::get('/floor/edit/{floor}', 'FloorController@edit');
			Route::post('/floor/add', 'FloorController@store')->name('floor.store');
			Route::delete('/floor/delete/{floor}', 'FloorController@destroy');
		});


        //     //ini create equipment
        //     //ini unit_ac
        //     $table->increments('id');
        //     $table->string('name');
        //     $table->integer('room_id')->unsigned();
        //     $table->timestamps();
        //     $table->foreign('room_id')->references('id')->on('rooms');

        // Schema::create('panel_names', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('name');
        //     $table->integer('room_id')->unsigned();
        //     $table->timestamps();
        //     $table->foreign('room_id')->references('id')->on('rooms');
        // });
