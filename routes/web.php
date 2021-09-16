<?php



Route::redirect('/home', 'login');
Route::get('/', App\Http\Livewire\Home::class)->name('home')->middleware('auth');


Route::group(['middleware'=>'guest'],function () {
// Login Page
Route::get('/login', App\Http\Livewire\login::class)->name('login');

//Regiter Page
Route::get('/register', App\Http\Livewire\Regitser::class)->name('Regitser');
    
});


//Logout Page
Route::get('/logout', App\Http\Livewire\logout::class)->name('logout');


// Employees page
Route::get('/logout', App\Http\Livewire\logout::class)->name('logout');
