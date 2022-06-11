<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;

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

Route::get('/', function () {
    return view('welcome');
});

//'middleware' => 'auth'でログイン済み
//'prefix' => 'contact'で/contact/をまとめる
// Route::middleware(['auth', 'second'])->group(function () {

// });
Route::prefix('contact')->group(function () {
    Route::get('index'       ,[ContactFormController::class, 'index']  )->name('contact.index'  );
    Route::get('create'      ,[ContactFormController::class, 'create'] )->name('contact.create' );
    Route::post('store'      ,[ContactFormController::class, 'store']  )->name('contact.store'  );
    Route::get('show/{id}'   ,[ContactFormController::class, 'show']   )->name('contact.show'   );
    Route::get('edit/{id}'   ,[ContactFormController::class, 'edit']   )->name('contact.edit'   );
    Route::post('update/{id}',[ContactFormController::class, 'update'] )->name('contact.update' );
    Route::get('destroy/{id}',[ContactFormController::class, 'destroy'])->name('contact.destroy');

});
// Route::group(['prefix' => 'contact','middleware' => 'auth'],function (){

// });


