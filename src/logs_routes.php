<?php
Route::group([
    'middleware' => ['web', \crocodicstudio\crudbooster\CBCoreModule\middlewares\CBSuperadmin::class],
    'prefix' => cbAdminPath(),
    'namespace' => cbModulesNS('LogsModule'),
], function () {
    $ctrl = 'AdminLogsController';
    Route::get('logs/', $ctrl.'@getIndex')->name($ctrl.'GetIndex');
    Route::get('logs/data-query', $ctrl.'@getDataQuery')->name($ctrl.'GetDataQuery');
    Route::get('logs/data-table', $ctrl.'@getDataTable')->name($ctrl.'GetDataTable');
    Route::get('logs/data-modal-datatable/{one?}', $ctrl.'@getDataModalDatatable')->name($ctrl.'GetDataModalDatatable');
    Route::get('logs/update-single/{one?}', $ctrl.'@getUpdateSingle')->name($ctrl.'GetUpdateSingle');
    Route::get('logs/delete/{id?}', $ctrl.'@getDelete')->name($ctrl.'GetDelete');
    Route::get('logs/detail/{id?}', $ctrl.'@getDetail')->name($ctrl.'GetDetail');
    Route::post('logs/find-data/{one?}', $ctrl.'@postFindData')->name($ctrl.'PostFindData');
    Route::post('logs/action-selected/{one?}', $ctrl.'@postActionSelected')->name($ctrl.'PostActionSelected');

});
