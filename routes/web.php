<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// dd('abc');
Route::get('/', function () {
    $pageTitle = 'Dashboard';
    return view('admin/dashboard');
});
Route::get('/home', function () {
    return view('admin/page1');
});
Route::get('/add_product', function () {
    $pageTitle = 'Add Product';
    return view('admin/add_product');
});
Route::get('/product', function () {
    return view('admin/product');
});
Route::get('/customers', function () {
    return view('admin/customers');
});
Route::get('/customer_details', function () {
    return view('admin/customer_details');
});
Route::get('/order_details', function () {
    return view('admin/order_details');
});
Route::get('/order_tracking', function () {
    return view('admin/order_tracking');
});
Route::get('/lead_details', function () {
    return view('admin/lead_details');
});
Route::get('/reports', function () {
    return view('admin/reports');
});
Route::get('/report_details', function () {
    return view('admin/report_details');
});
Route::get('/add_contact', function () {
    return view('admin/add_contact');
});
Route::get('/create_new', function () {
    return view('admin/create_new');
});
Route::get('/project_list_view', function () {
    return view('admin/project_list_view');
});
Route::get('/project_card_view', function () {
    return view('admin/project_card_view');
});
Route::get('/project_board_view', function () {
    return view('admin/project_board_view');
});
Route::get('/project_todo_list', function () {
    return view('admin/project_todo_list');
});
Route::get('/project_detail', function () {
    return view('admin/project_detail');
});
Route::get('/pricing_column', function () {
    return view('admin/pricing_column');
});
Route::get('/pricing_grid', function () {
    return view('admin/pricing_grid');
});
Route::get('/notifications', function () {
    return view('admin/notifications');
});
Route::get('/chat', function () {
    return view('admin/chat');
});
Route::get('/create_event', function () {
    return view('admin/create_event');
});
Route::get('/event_detail', function () {
    return view('admin/event_detail');
});
Route::get('/social_profile', function () {
    return view('admin/social_profile');
});
Route::get('/social_settings', function () {
    return view('admin/social_settings');
});
Route::get('/faq_accordions', function () {
    return view('admin/faq_accordions');
});
Route::get('/faq_tab', function () {
    return view('admin/faq_tab');
});
Route::get('/add_new_property', function () {
    return view('admin/add_new_property');
});
Route::get('/add_room', function () {
    return view('admin/add_room');
});
Route::get('/room_listing', function () {
    return view('admin/room_listing');
});
Route::get('/search_room', function () {
    return view('admin/search_room');
});