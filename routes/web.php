<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CompanyController;
use App\Models\company;
use App\Models\Employee;
use Brian2694\Toastr\Facades\Toastr;
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

Route::get('/dashboard', function () {
    $company_details =Company::all();
    $employees=Employee::paginate(10);
    return view('dashboard',['company_details'=>$company_details,'employees'=>$employees]);
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::resource('employee',EmployeeController::class);
Route::resource('company',CompanyController::class);
Route::get('/edit',[EmployeeController::class,'editdata'])->name('editdata');
Route::get('/edit/save',[EmployeeController::class,'editdatasave'])->name('editdatasave');
Route::get('/delete',[EmployeeController::class,'delete'])->name('deleteEmployee');
Route::get('/table',[EmployeeController::class,'company_table'])->name('company_table');
Route::get('/editCompany',[CompanyController::class,'editCompany'])->name('editCompany');
Route::get('/editCompany/save',[CompanyController::class,'editCompanySave'])->name('editCompanySave');
Route::get('/dete',[CompanyController::class,'deleteCompany'])->name('deleteCompany');
