<?php

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
//admin
Route::group(['namespace' => 'App\Http\Livewire', 'middleware' => 'auth:web'], function () {
    Route::get('/admin', Admin\Dashboard\MainDashboardIndex::class)->name('admin.dashboard.index');
    //CollageRoute
    Route::group([], function () {
        Route::get('/collage', Admin\Collage\AdminCollageIndex::class)->name('admin.collage.index');
    });
    //SpecialtyRoute
    Route::group([], function () {
        Route::get('/specialty', Admin\Specialty\AdminSpecialtyIndex::class)->name('admin.specialty.index');
    });
    //ClassRoute
    Route::group([], function () {
        Route::get('/class', Admin\Room\AdminRoomIndex::class)->name('admin.room.index');
    });

    //StudentRoute
    Route::group([], function () {
        Route::get('/student-create', Admin\Student\AdminStudentCreate::class)->name('admin.student.create');
        Route::get('/student', Admin\Student\AdminStudentTable::class)->name('admin.student.table');
    });

    //IssueTypeRoute
    Route::group([], function () {
        Route::get('/issue-type', Admin\IssueType\AdminIssueTypeIndex::class)->name('admin.issue.index');
    });

    //IssueTypeRoute
    Route::group([], function () {
        Route::get('/Executive', Admin\Executive\AdminExecutiveTable::class)->name('admin.executive.index');
    });

    //TaskRoute
    Route::group([], function () {
        Route::get('/task', Admin\Task\AdminTaskManage::class)->name('admin.task.index');
        Route::get('/task/{id}', Admin\Task\AdminTaskDetails::class)->name('admin.task.details');
    });
});
Route::get('', App\Http\Livewire\Home\Index::class)->name('home.index');
Route::group(['prefix' => 'home'], function () {
    Route::get('/login', [\App\Http\Controllers\StudentController::class, 'index'])->name('home.login');
    Route::post('/login', [\App\Http\Controllers\StudentController::class, 'store'])->name('home.store.login');
    //student
    Route::group(['namespace' => 'App\Http\Livewire'], function () {
        Route::get('/upload-issue', Home\HomeIssueUpload::class)->name('home.issue.upload')->middleware('auth:student');
        Route::get('/tasks', Home\HomeTaskTable::class)->name('home.task.table')->middleware('auth:student');
    });
});

//executive
Route::group(['namespace' => 'App\Http\Livewire'], function () {
    Route::get('/login-executive', [\App\Http\Controllers\ExecutiveController::class, 'index'])->name('executive.login');
    Route::post('/login-executive', [\App\Http\Controllers\ExecutiveController::class, 'store'])->name('executive.store.login');
    Route::get('/executive-register', Home\ExecutiveRegister::class)->name('home.executive.register');
});
Route::group(['namespace' => 'App\Http\Livewire','middleware' => 'auth:executive'], function () {
    Route::get('/executive', Executive\ExecutiveIndex::class)->name('executive.index');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
