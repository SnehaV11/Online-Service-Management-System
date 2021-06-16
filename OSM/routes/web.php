<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RequesterController;
use App\Http\Controllers\PdfassetsController;
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

Route::group(['prefix' => 'basic-ui'], function(){
    Route::get('accordions', function () { return view('pages.basic-ui.accordions'); });
    Route::get('buttons', function () { return view('pages.basic-ui.buttons'); });
    Route::get('badges', function () { return view('pages.basic-ui.badges'); });
    Route::get('breadcrumbs', function () { return view('pages.basic-ui.breadcrumbs'); });
    Route::get('dropdowns', function () { return view('pages.basic-ui.dropdowns'); });
    Route::get('modals', function () { return view('pages.basic-ui.modals'); });
    Route::get('progress-bar', function () { return view('pages.basic-ui.progress-bar'); });
    Route::get('pagination', function () { return view('pages.basic-ui.pagination'); });
    Route::get('tabs', function () { return view('pages.basic-ui.tabs'); });
    Route::get('typography', function () { return view('pages.basic-ui.typography'); });
    Route::get('tooltips', function () { return view('pages.basic-ui.tooltips'); });
});

Route::group(['prefix' => 'advanced-ui'], function(){
    Route::get('dragula', function () { return view('pages.advanced-ui.dragula'); });
    Route::get('clipboard', function () { return view('pages.advanced-ui.clipboard'); });
    Route::get('context-menu', function () { return view('pages.advanced-ui.context-menu'); });
    Route::get('popups', function () { return view('pages.advanced-ui.popups'); });
    Route::get('sliders', function () { return view('pages.advanced-ui.sliders'); });
    Route::get('carousel', function () { return view('pages.advanced-ui.carousel'); });
    Route::get('loaders', function () { return view('pages.advanced-ui.loaders'); });
    Route::get('tree-view', function () { return view('pages.advanced-ui.tree-view'); });
});

Route::group(['prefix' => 'forms'], function(){
    Route::get('basic-elements', function () { return view('pages.forms.basic-elements'); });
    Route::get('advanced-elements', function () { return view('pages.forms.advanced-elements'); });
    Route::get('dropify', function () { return view('pages.forms.dropify'); });
    Route::get('form-validation', function () { return view('pages.forms.form-validation'); });
    Route::get('step-wizard', function () { return view('pages.forms.step-wizard'); });
    Route::get('wizard', function () { return view('pages.forms.wizard'); });
});

Route::group(['prefix' => 'editors'], function(){
    Route::get('text-editor', function () { return view('pages.editors.text-editor'); });
    Route::get('code-editor', function () { return view('pages.editors.code-editor'); });
});

Route::group(['prefix' => 'charts'], function(){
    Route::get('chartjs', function () { return view('pages.charts.chartjs'); });
    Route::get('morris', function () { return view('pages.charts.morris'); });
    Route::get('flot', function () { return view('pages.charts.flot'); });
    Route::get('google-charts', function () { return view('pages.charts.google-charts'); });
    Route::get('sparklinejs', function () { return view('pages.charts.sparklinejs'); });
    Route::get('c3-charts', function () { return view('pages.charts.c3-charts'); });
    Route::get('chartist', function () { return view('pages.charts.chartist'); });
    Route::get('justgage', function () { return view('pages.charts.justgage'); });
});

Route::group(['prefix' => 'tables'], function(){
    Route::get('basic-table', function () { return view('pages.tables.basic-table'); });
    Route::get('data-table', function () { return view('pages.tables.data-table'); });
    Route::get('js-grid', function () { return view('pages.tables.js-grid'); });
    Route::get('sortable-table', function () { return view('pages.tables.sortable-table'); });
});

Route::get('notifications', function () {
    return view('pages.notifications.index');
});

Route::group(['prefix' => 'icons'], function(){
    Route::get('material', function () { return view('pages.icons.material'); });
    Route::get('flag-icons', function () { return view('pages.icons.flag-icons'); });
    Route::get('font-awesome', function () { return view('pages.icons.font-awesome'); });
    Route::get('simple-line-icons', function () { return view('pages.icons.simple-line-icons'); });
    Route::get('themify', function () { return view('pages.icons.themify'); });
});

Route::group(['prefix' => 'maps'], function(){
    Route::get('vector-map', function () { return view('pages.maps.vector-map'); });
    Route::get('mapael', function () { return view('pages.maps.mapael'); });
    Route::get('google-maps', function () { return view('pages.maps.google-maps'); });
});

Route::group(['prefix' => 'user-pages'], function(){
    Route::get('login', function () { return view('pages.user-pages.login'); });
    Route::get('login-2', function () { return view('pages.user-pages.login-2'); });
    Route::get('multi-step-login', function () { return view('pages.user-pages.multi-step-login'); });
    Route::get('register', function () { return view('pages.user-pages.register'); });
    Route::get('register-2', function () { return view('pages.user-pages.register-2'); });
    Route::get('lock-screen', function () { return view('pages.user-pages.lock-screen'); });
});

Route::group(['prefix' => 'error-pages'], function(){
    Route::get('error-404', function () { return view('pages.error-pages.error-404'); });
    Route::get('error-500', function () { return view('pages.error-pages.error-500'); });
});

Route::group(['prefix' => 'general-pages'], function(){
    Route::get('blank-page', function () { return view('pages.general-pages.blank-page'); });
    Route::get('landing-page', function () { return view('pages.general-pages.landing-page'); });
    Route::get('profile', function () { return view('pages.general-pages.profile'); });
    Route::get('email-templates', function () { return view('pages.general-pages.email-templates'); });
    Route::get('faq', function () { return view('pages.general-pages.faq'); });
    Route::get('faq-2', function () { return view('pages.general-pages.faq-2'); });
    Route::get('news-grid', function () { return view('pages.general-pages.news-grid'); });
    Route::get('timeline', function () { return view('pages.general-pages.timeline'); });
    Route::get('search-results', function () { return view('pages.general-pages.search-results'); });
    Route::get('portfolio', function () { return view('pages.general-pages.portfolio'); });
    Route::get('user-listing', function () { return view('pages.general-pages.user-listing'); });
});

Route::group(['prefix' => 'ecommerce'], function(){
    Route::get('invoice', function () { return view('pages.ecommerce.invoice'); });
    Route::get('invoice-2', function () { return view('pages.ecommerce.invoice-2'); });
    Route::get('pricing', function () { return view('pages.ecommerce.pricing'); });
    Route::get('product-catalogue', function () { return view('pages.ecommerce.product-catalogue'); });
    Route::get('project-list', function () { return view('pages.ecommerce.project-list'); });
    Route::get('orders', function () { return view('pages.ecommerce.orders'); });
});



Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/admin_dashboard',[DashboardController::class,'admin_dashboard'])->name('admin_dashboard');

Route::get('requester/requester_dashboard',[RequesterController::class,'requester_dashboard'])->name('Requester_dashboard');


Route::group(['middleware'=>['auth']],function(){
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
});

Route::get('requester/request',[DashboardController::class,'request'])->name('request dashboard');
Route::post('requester/request',[DashboardController::class,'addRequest']);

Route::get('admin/view_technicians',[DashboardController::class,'view_technicians'])->name('view_technicians');
Route::get('admin/view_requester',[DashboardController::class,'view_requester'])->name('view_requester');
Route::get('/click_delete_requester/{id}',[DashboardController::class,'delete_requester'])->name('delete_requester');

Route::get('admin/add_technician',[DashboardController::class,'add_technician'])->name('add_technicians dashboard');
Route::post('admin/add_technician',[DashboardController::class,'add_technicians'])->name('add_technician');
Route::get('/click_delete_technician/{id}',[DashboardController::class,'delete_technician'])->name('delete_technician');
Route::get('/click_edit_technician/{id}',[DashboardController::class,'edit_technician'])->name('edit_technician');
Route::post('edit_technician',[DashboardController::class,'update_technician']);

Route::get('admin/view_assets',[DashboardController::class,'view_assets'])->name('view_assets');
Route::get('admin/add_asset',[DashboardController::class,'add_asset'])->name('add_assets dashboard');
Route::post('admin/add_asset',[DashboardController::class,'add_assets'])->name('add_asset');


Route::get('/click_delete_Product/{id}',[DashboardController::class,'delete_product'])->name('delete_product');
Route::get('/click_edit_assets/{id}',[DashboardController::class,'edit_assets'])->name('edit_assets');
Route::post('edit_assets',[DashboardController::class,'update_assets']);

Route::get('/click_sell_assets/{id}',[DashboardController::class,'add_customer'])->name('add_customer');
Route::post('/click_sell_assets/{id}',[DashboardController::class,'add_customers'])->name('add_customer');


Route::get('admin/assets_pdf', [PdfassetsController::class, 'generatePDF']);

Route::get('/click_customer_bill',[DashboardController::class,'customer_bill'])->name('customer_bill');
Route::post('/click_customer_bill',[DashboardController::class,'customer_bills'])->name('customer_bill');
Route::get('admin/print_invoice/{id}', [PdfassetsController::class, 'print_invoicePDF']);

Route::get('admin/view_request',[DashboardController::class,'view_request'])->name('view_request');
Route::get('/click_view_request/{id}',[DashboardController::class,'details_addtechnicians'])->name('details_addtechnicians');
Route::get('view_request_addtechnician',[DashboardController::class,'update_details']);
Route::post('/insert',[DashboardController::class,'insert_assignedwork']);

Route::get('requester/checkstatus',[RequesterController::class,'checkstatus'])->name('checkstatus dashboard');
Route::post('requester/checkstatus',[RequesterController::class,'reqcheckstatus']);
Route::get('requester/checkstatus',[RequesterController::class,'view_status'])->name('requester/checkstatus');

Route::get('requester/status', [RequesterController::class,'Request_status'])->name('requester/status');
Route::post('requester/status', [RequesterController::class,'Request_status'])->name('requester/status');

Route::get('admin/work_order',[DashboardController::class,'work_order'])->name('work_order');

Route::get('requester/request',[RequesterController::class,'request'])->name('requestdashboard');
Route::post('requester/request',[RequesterController::class,'addRequest'])->name('requeststore');

Route::get('requester/request_info',[RequesterController::class,'request_info'])->name('request_info');
Route::post('requester/request_info',[RequesterController::class,'request_info'])->name('request_info');


Route::get('admin/details_addtechnicians',array('as'=>'myform','uses'=>'App\Http\Controllers\DashboardController@myform'));
Route::get('/click_delete_request/{id}',[DashboardController::class,'delete_request'])->name('delete_request');

Route::get('admin/admin_dashboard',[DashboardController::class,'fetch_data_admin'])->name('fetch_data_admin');
Route::get('admin/requester_dashboard',[DashboardController::class,'fetch_data_requester'])->name('fetch_data_requester');

Route::get('requester/old_request',[RequesterController::class,'old_request'])->name('old_request');

Route::get('/auth/logout',[DashboardController::class,'logout'])->name('auth.logout');


require __DIR__.'/auth.php';
