<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PDProgramController;
use App\Http\Controllers\UserController;

use App\Http\Middleware\PreventBackHistory;
use App\Http\Middleware\AuthenticatedUser;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/category', function () {
    return view('category');
});
Route::get('/objectives', function () {
    return view('objectives');
});
Route::get('/office', function () {
    return view('office');
});
Route::get('/pm', function () {
    return view('program_management');
});
Route::get('/pd', function () {
    return view('programdesign');
});
Route::get('/rs', function () {
    return view('resourcespeaker');
});
Route::get('/role', function () {
    return view('role');
});
Route::get('/stand', function () {
    return view('standard');
});
Route::get('/td', function () {
    return view('targetdomain');
});
//login 
// Route Group (w/ PreventBackHistory Middleware)
// Route Group (w/ PreventBackHistory Middleware)
Route::middleware([PreventBackHistory::class])->group(function () {

    // Login
    Route::get('/login', [AuthController::class, 'loginForm'])->name('auth.loginForm');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');


    // Route Group (w/ AuthenticatedUser Middleware)
    Route::middleware([AuthenticatedUser::class])->group(function () {

//Program Provider Profile
Route::get('/pd-program/provider-profile', [PDProgramController::class, 'create'])->name('pd_program.provider_profile');
Route::post('/pd_program/store', [PDProgramController::class, 'store'])->name('pd_program.store');
//Program Profile
Route::get('/pd-program/program_profile', [PDProgramController::class, 'ProgramProfile'])->name('pd_program.program_profile');
Route::post('/pd-program/profile/store', [PDProgramController::class, 'storeProgramProfile'])->name('pd_program.profile.store');
//Program Design
Route::get('/pd-program/program_design', [PDProgramController::class, 'ProgramDesign'])->name('pd_program.program_design');
Route::post('/pd-program/design/store', [PDProgramController::class, 'storeProgramDesign'])->name('pd_program.design.store');
//Management Team
Route::get('/pd-program/management_team', [PDProgramController::class, 'ManagementTeam'])->name('pd_program.management_team');
Route::post('/pd-program/management/store', [PDProgramController::class, 'storeManagementTeam'])->name('pd_program.management.store');
//Monitoring and Evaluation
Route::get('/pd-program/monitor_and_evaluate', [PDProgramController::class, 'MonitorEvaluate'])->name('pd_program.monitoring_and_evaluation');
Route::post('/pd-program/monitor_and_evaluate/store', [PDProgramController::class, 'storeMonitorEvaluate'])->name('pd_program.monitor_and_evaluate.store');
//Program_form view
Route::get('/pd-program/program_form', [PDProgramController::class, 'ProgramForm'])->name('pd_program.program_form');
Route::post('/pd-program/program_form/store', [PDProgramController::class, 'storeProgramForm'])->name('pd_program.program_form.store');
//Export PDF
Route::get('/pd-program/export-pdf', [PDProgramController::class, 'exportPdf'])->name('pd_program.pdf');

Route::get('/id', function () {
    return view('instructional_design');
});

});
});