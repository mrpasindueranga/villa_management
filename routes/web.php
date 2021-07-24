<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MemberController;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth'])->group(function (){
    // Custom Routes
    // Route::get('/inbox/multi', [InboxController::class, 'form_multi'])->name('inbox.form_multi');
    // Route::get('/inbox/bulk', [InboxController::class, 'form_bulk'])->name('inbox.form_bulk');
    // Route::post('/inbox/single', [InboxController::class, 'send_single'])->name('inbox.send_single');
    // Route::post('/inbox/multi', [InboxController::class, 'send_multi'])->name('inbox.send_multi');
    // Route::post('/inbox/bulk', [InboxController::class, 'send_bulk'])->name('inbox.send_bulk');


    // // Resource Routes
    // Route::resource('contact', ContactController::class);
    Route::resource('dashboard', DashboardController::class);
    // // Route::resource('group', GroupController::class);
    // Route::resource('inbox', InboxController::class);
    // Route::resource('outbox', OutboxController::class);
    // Route::resource('apidocs', APIController::class);
    
});

Route::middleware(['auth'])->group(function (){
    // Custom Routes


    // // Resource Routes
    Route::resource('member', MemberController::class);
    
});

require __DIR__.'/auth.php';
