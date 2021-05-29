<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\Backend\Setup\StudentController;
use App\Http\Controllers\Backend\Setup\YearController;
use App\Http\Controllers\Backend\Setup\GroupController;
use App\Http\Controllers\Backend\Setup\ShiftController;
use App\Http\Controllers\Backend\Setup\FeeController;
use App\Http\Controllers\Backend\Setup\ExamTypeController;
use App\Http\Controllers\Backend\Setup\SubjectsController;
use App\Http\Controllers\Backend\Setup\DesignationController;
use App\Http\Controllers\Backend\Setup\FeeCategoryAmount;
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
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('users')->group(function(){

Route::get('', [App\Http\Controllers\Backend\UserController::class, 'index'])->name('view.user');
Route::get('add', [App\Http\Controllers\Backend\UserController::class, 'add'])->name('add.user');
Route::post('store', [App\Http\Controllers\Backend\UserController::class, 'store'])->name('user.store');
Route::post('/update/{id}', [App\Http\Controllers\Backend\UserController::class, 'update'])->name('users.update');
Route::get('/edit/{id}', [App\Http\Controllers\Backend\UserController::class, 'edit'])->name('edit.user');
Route::get('/delete/{id}', [App\Http\Controllers\Backend\UserController::class, 'delete'])->name('delete.user');
});
Route::prefix('profiles')->group(function(){
Route::get('/view', [App\Http\Controllers\Backend\ProfileController::class, 'view'])->name('view.profiles');
Route::post('store', [App\Http\Controllers\Backend\ProfileController::class, 'update'])->name('profiles.update');
Route::get('/edit',[App\Http\Controllers\Backend\ProfileController::class, 'edit'])->name('edit.profiles');
Route::get('/password/view',[App\Http\Controllers\Backend\ProfileController::class, 'password'])->name('password.profiles.view');
Route::post('/password/update',[App\Http\Controllers\Backend\ProfileController::class, 'passwordUpdate'])->name('password.profiles.update');
  
});



// student 
Route::resource('setup/student/class/view', StudentController::class);

// // student year
Route::prefix('profiles')->group(function(){
	Route::get('/student/year/view', [YearController::class, 'view'])->name('setup.student.year.view');
	Route::get('/student/year/add', [YearController::class, 'add'])->name('setup.student.year.add');
	Route::post('/student/year/store', [YearController::class, 'store'])->name('setup.student.year.store');
	Route::get('/student/year/edit/{id}', [YearController::class, 'edit'])->name('setup.student.year.edit');
	Route::post('/student/year/update/{id}', [YearController::class, 'update'])->name('setup.student.year.update');
	Route::post('/student/year/delete', [YearController::class, 'delete'])->name('setup.student.year.delete');
  
});
 // student group
Route::prefix('group')->group(function(){
	Route::get('/student/group/view', [GroupController::class, 'view'])->name('setup.student.group.view');
	Route::get('/student/group/add', [GroupController::class, 'add'])->name('setup.student.group.add');
	Route::post('/student/group/store', [GroupController::class, 'store'])->name('setup.student.group.store');
	Route::get('/student/group/edit/{id}', [GroupController::class, 'edit'])->name('setup.student.group.edit');
	Route::post('/student/group/update/{id}', [GroupController::class, 'update'])->name('setup.student.group.update');
	Route::post('/student/group/delete', [GroupController::class, 'delete'])->name('setup.student.group.delete');
});
 // student shift
Route::prefix('shift')->group(function(){
	Route::get('/student/shift/view', [ShiftController::class, 'view'])->name('setup.student.shift.view');
	Route::get('/student/shift/add', [ShiftController::class, 'add'])->name('setup.student.shift.add');
	Route::post('/student/shift/store', [ShiftController::class, 'store'])->name('setup.student.shift.store');
	Route::get('/student/shift/edit/{id}', [ShiftController::class, 'edit'])->name('setup.student.shift.edit');
	Route::post('/student/shift/update/{id}', [ShiftController::class, 'update'])->name('setup.student.shift.update');
	Route::post('/student/shift/delete', [ShiftController::class, 'delete'])->name('setup.student.shift.delete');
});

// student fee
Route::prefix('fee')->group(function(){
	Route::get('/student/fee/view', [FeeController::class, 'view'])->name('setup.student.fee.view');
	Route::get('/student/fee/add', [FeeController::class, 'add'])->name('setup.student.fee.add');
	Route::post('/student/fee/store', [FeeController::class, 'store'])->name('setup.student.fee.store');
	Route::get('/student/fee/edit/{id}', [FeeController::class, 'edit'])->name('setup.student.fee.edit');
	Route::post('/student/fee/update/{id}', [FeeController::class, 'update'])->name('setup.student.fee.update');
	Route::post('/student/fee/delete', [FeeController::class, 'delete'])->name('setup.student.fee.delete');
});
// student examtype
Route::resource('exam-type', ExamTypeController::class);
// subjects 
Route::resource('subjects', SubjectsController::class);
// designation 
Route::resource('designation',DesignationController::class);
// designation 
Route::resource('feeamount',FeeCategoryAmount::class);