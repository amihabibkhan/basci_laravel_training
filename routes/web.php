<?php

use App\Http\Controllers\FirstController;
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

Route::get('/', [FirstController::class, 'index'])->name('index');
Route::get('/member_list', [FirstController::class, 'memberList'])->name('memberList');
Route::post('/create_member', [FirstController::class, 'createMember'])->name('createMember');

Route::get('/delete_member/{id}', [FirstController::class, 'deleteMember'])->name('deleteMember');
Route::get('/view_member/{id}', [FirstController::class, 'viewMember'])->name('viewMember');
Route::get('/update_member/{id}', [FirstController::class, 'updateMember'])->name('updateMember');
Route::post('/update_member', [FirstController::class, 'updateMemberFormSubmit'])->name('updateMemberFormSubmit');























