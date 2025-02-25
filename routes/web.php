<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DeliverymanController;
use App\Http\Controllers\UserController;
use App\Models\Deliveryman;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('user.create');
});






Route::post('/register',[UserController::class,'registration'])->name('registration');
Route::get('/register',[UserController::class,'register'])->name("register");
Route::get('/login',[UserController::class,'login'])->name("login");
Route::post('/login',[UserController::class,"getConnected"])->name("connection");
Route::get('/deconnect',[UserController::class,'logout'])->name('deconection');

Route::middleware(["auth"])->group(function (){
    Route::get('client/update',[ClientController::class,'update'])->name('update');
    Route::put('client/update',[ClientController::class,'handleUpdate'])->name('update_client');
    Route::get('client/order',[ClientController::class,'order'])->name('order');
    Route::get('client/my_orderings',[ClientController::class,'my_orderings'])->name('my_orderings');
    Route::get('client/profile',[ClientController::class,"profile"])->name("dashboard_client");
    Route::post('client/order',[ClientController::class,'handleOrdering'])->name("ordering");
    Route::get('client/current_orderings',[ClientController::class,'current_orderings'])->name('current_orderings');

    Route::get('deliveryman/profile',[DeliverymanController::class,'profile'])->name('dashboard_deliveryman');
    Route::get('deliveryman/available_orders',[DeliverymanController::class,'index'])->name('available_orders');
    Route::get('deliveryman/update',[DeliverymanController::class,'update'])->name('update_D');
    Route::put('deliveryman/update',[DeliverymanController::class,'handleUpdate'])->name('update_deliveryman');
    Route::get('deliveryman/credit',[DeliverymanController::class,'rechargeMyAccount'])->name('recharge_credit');
    Route::get('deliveryman/delivery/history',[DeliverymanController::class,'historyDelivery'])->name('delivery_history');
    Route::get('deliveryman/takeOrder/{id}',[DeliverymanController::class,'takeAnOrder']);
    Route::get('deliveryman/deliverOrder/{id}',[DeliverymanController::class,'deliverAnOrder']);



    Route::get('/admin/allclient',[AdminController::class,'allClient'])->name('all_client');
    Route::get('/admin/client/{id}/block',[AdminController::class,'blockClient']);
    Route::get('/admin/client/{id}/unblock',[AdminController::class,'unblockClient']);
    Route::get('/admin/client/{id}/activate',[AdminController::class,'activateClient']);
    Route::get('/admin/client/{id}/desactivate',[AdminController::class,'desactivateClient']);
    Route::get('/admin/client/{id}/update',[AdminController::class,'updateClient']);
    
    
    Route::get('/admin/alldeliveryman',[AdminController::class,"allDeliveryman"])->name('all_deliveryman');
    Route::get('/admin/deliveryman/{id}/block',[AdminController::class,'blockDeliveryman']);
    Route::get('/admin/deliveryman/{id}/unblock',[AdminController::class,'unblockDeliveryman']);
    Route::get('/admin/deliveryman/{id}/activate',[AdminController::class,'activateDeliveryman']);
    Route::get('/admin/deliveryman/{id}/desactivate',[AdminController::class,'desactivateDeliveryman']);
    Route::get('/admin/deliveryman/{id}/update',[AdminController::class,'updateDeliveryman']);
    Route::put('/admin/deliveryman/{id}/update',[AdminController::class,'handleUpdateDeliveryman']);
    
    
    Route::get('/admin/allproduct',[AdminController::class,"allProduct"])->name('all_product');
    Route::get('/admin/product/{id}/detail',[AdminController::class ,'detailProduct']);
    Route::get('/admin/product/{id}/update',[AdminController::class,'updateProduct']);
    Route::put('/admin/product/{id}/update',[AdminController::class,'handleUpdateProduct']);
});


