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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/test', function () {
//     return view('test');
// });
// Route::get('/crop_image','CropImageController@index');
// Route::post('/crop_image_test','CropImageController@action_test')->name('crop_action_test');

// Route::get('/image_upload', 'AjaxImageUploadController@index');

// Route::post('/image_upload/action', 'AjaxImageUploadController@action')->name('ajax_upload.action');

Route::get('/','ToolController@getPageCropImage');

//Route::get('/','HomeController@index');

Route::post('/crop_image_test','CropImageController@action_test')->name('crop_action_test');


Route::prefix('tools')->group(function () {
    Route::get('/download_video_url','ToolController@getPageDownloadVideo')->name('download_video_url');

    Route::get('/crop_image','ToolController@getPageCropImage')->name('crop_image');
    Route::post('/action_crop_image','ToolController@actionCropImage')->name('action_crop_image');
});

