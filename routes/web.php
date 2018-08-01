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

Route::redirect('/restaurants/', '/', 301);
Route::get('/', function () {
    return "This will show all my restaurants";
});

Route::match(['get', 'post'], '/restaurant/new/', function () {
    return "This page will be for making a new restaurant";
});

Route::match(['get', 'post'], '/restaurant/{restaurant_id}/edit/', function ($restaurant_id) {
    return "This page will be for editing restaurant " . $restaurant_id;
});

Route::match(['get', 'post'], '/restaurant/{restaurant_id}/delete/', function ($restaurant_id) {
    return "This page will be for deleting restaurant " . $restaurant_id;
});

Route::get('/restaurant/{restaurant_id}/menu/', function ($restaurant_id) {
    return "This page will show the menu for restaurant " . $restaurant_id;
});

Route::match(['get', 'post'], '/restaurant/{restaurant_id}/menu/new/', function ($restaurant_id) {
    return "This page is for making a new menu item for restaurant " . $restaurant_id;
});

Route::match(['get', 'post'], '/restaurant/{restaurant_id}/menu/{menu_id}/edit/', function ($restaurant_id, $menu_id) {
    return "This pages is for editing menu item " . $menu_id . " for restaurant " . $restaurant_id;
});

Route::match(['get', 'post'], '/restaurant/{restaurant_id}/menu/{menu_id}/delete/', function ($restaurant_id, $menu_id) {
    return "This page will be for deleting menu item " . $menu_id . " from restaurant " . $restaurant_id;
});