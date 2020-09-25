<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
Route::resource('admin',Controllers\AdminController::class);
Route::resource('admin.userList',Controllers\UserListController::class);
Route::resource('admin.doctorList', Controllers\DoctorListController::class);
Route::resource('admin.subPlan',Controllers\SubplanController::class);
Route::resource('admin.addStaff',Controllers\AddStaffController::class);
Route::resource('admin.subscriptions',Controllers\SubscriptionController::class);
Route::resource('admin.forum',Controllers\AdminForumController::class);
Route::resource('admin.forum.comment',Controllers\AdminCommentController::class);
Route::resource('admin.feedback',Controllers\FeedbackController::class);
Route::get('userList/{userList}/delete/{id}',[Controllers\UserListController::class,'delete'])->name('userList.delete');
Route::put('/admin/{admin}/doctorList/{doctorList}/ban/{id}',[Controllers\DoctorListController::class,'ban'])->name('doctorList.ban');
Route::put('/admin/{admin}/doctorList/{doctorList}/valid/{id}',[Controllers\DoctorListController::class,'valid'])->name('doctorList.valid');
Route::get('admin/{admin}/subReport/generate',[Controllers\SubscriptionController::class,'gen'])->name('admin.subReport.gen');
Route::get('admin/{admin}/report/generate',[Controllers\FeedbackController::class,'gen'])->name('admin.report.gen');
