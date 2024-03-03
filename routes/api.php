<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::group(['prefix' => 'post', 'middleware' => ['authorization']], function () {
    Route::post('', 'PostController@create');
        Route::group(['prefix' => '{post_id}'], function () {
            Route::get('validation', 'PostController@validatePost');
            Route::get('externalPost', 'PostController@postDataCreate');

        });
});


Route::group(['prefix' => 'user'], function () {
    Route::post('', 'UserController@create');

        Route::group(['prefix' => '{user_id}'], function () {
            Route::get('', 'UserController@getUser');
            Route::get('post', 'UserController@getPostsByUser');
            Route::get('post/last', 'UserController@getLastsPost');
            Route::get('post/oldest', 'UserController@getOldestPost');
            Route::post('role/{role_id}', 'UserController@assingRole');
        });
});

Route::group(['prefix' => 'role'], function () {
    Route::post('', 'RoleController@addRole');

});

Route::group(['prefix' => 'mechanic'], function () {
    Route::post('', 'MechanicController@create');
    Route::post('manual', 'MechanicController@createManual');
    Route::get('{id}/owner', 'MechanicController@getOwnerThroughCar');

});

Route::group(['prefix' => 'car'], function () {
    Route::post('', 'CarController@create');
    Route::post('manual', 'CarController@createManual');
    Route::get('{id}/car', 'CarController@getCar');
});

Route::post('owner', 'OwnerController@create');

Route::group(['prefix' => 'project'], function () {
    Route::post('', 'ProjectController@create');
    Route::get('{id}/deployments', 'ProjectController@getDeploymentsThroughEnvironment')->middleware('rolecreator');
});

Route::post('environment', 'EnvironmentController@create');

//Route::post('deployment', 'DeploymentController@create');
Route::post('deployment', function (\App\Models\Deployment $deployment) {
    return $deployment->create();
})->withTrashed();


Route::get('posts', 'PostController@postDataCreate2');



