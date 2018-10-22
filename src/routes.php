<?php      
    Route::post('serialize', 'Thangbeo\Menu\MenuController@serialize');
    Route::post('update-menu', 'Thangbeo\Menu\MenuController@updateMenu');

    Route::get('index','Thangbeo\Menu\MenuController@index');
    Route::get('index/{id}','Thangbeo\Menu\MenuController@show');
    Route::post('create','Thangbeo\Menu\MenuController@store');
    Route::get('edit/{id}','Thangbeo\Menu\MenuController@edit');
    Route::post('update/{id}','Thangbeo\Menu\MenuController@update');
    Route::get('delete/{id}','Thangbeo\Menu\MenuController@delete');



