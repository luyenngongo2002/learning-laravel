<?php

use App\Http\Controllers\CarController;

use Illuminate\Support\Facades\Route;
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
Route::resource('cars', CarController::class);

// // Router tương đương với 7 router 
// Route::get('cars', [CarController::class, 'index']-> name('cars.index'));
// Route::get('cars/create ', [CarController::class, 'create]);
// Route::post('cars ', [CarController::class, 'store]);
// Route::get('cars/{car}  ', [CarController::class, 'show]);
// Route::put('cars/{car}  ', [CarController::class, 'update]);
// Route::get('cars/{car}/edit ', [CarController::class, 'edit']);
// Route::delete('cars/{car}  ', [CarController::class, 'destroy]);
//
// Route::get('GPTBN', function () {
//     return view('GPTBN');
// });

// Route::post('GPTBN', function(Request $request){
//     $a = $request->input('a');
//     $b = $request->input('b');
//     if ($a == 0) 
//         if ($b == 0) 
//             $kq = "Vo so nghiem";
//         else $kq = "Vo nghiem";
//      else $kq ="Phuong trinh cos nghiem x=: ".-$b/$a;
//     else $kq = round(-$b/$a,2); //làm tròn 2 số
//     return view('GPTBN', compact('a', 'b', 'kq'));

// })->name('GPTBN.post');
// Route::post('/GPTBN', [GPTBNController::class,'giaPTBN']);
// Route::get('/GPTBN', [GPTBNController::class, 'giaPTBN']);

// Route::get('sum', function () {
//     return view('sum');
// });
// Route::post('sum', [SUMController::class, 'sum']);

