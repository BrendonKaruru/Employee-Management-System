<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';



Route::get('/employees', \App\Livewire\Employees\Index::class)->name('employees.index');
Route::get('/employees/create', \App\Livewire\Employees\Create::class)->name('employees.create');
Route::get('/employees/show/{employee}', \App\Livewire\Employees\Show::class)->name('employees.show');
Route::get('/employees/update/{employee}', \App\Livewire\Employees\Edit::class)->name('employees.edit');



Route::get('/departments', \App\Livewire\Departments\Index::class)->name('departments.index');
Route::get('/departments/create', \App\Livewire\Departments\Create::class)->name('departments.create');
Route::get('/departments/show/{department}', \App\Livewire\Departments\Show::class)->name('departments.show');
Route::get('/departments/update/{department}', \App\Livewire\Departments\Edit::class)->name('departments.edit');


Route::get('/projects', \App\Livewire\Projects\Index::class)->name('projects.index');
Route::get('/projects/create', \App\Livewire\Projects\Create::class)->name('projects.create');
Route::get('/projects/show/{project}', \App\Livewire\Projects\Show::class)->name('projects.show');
Route::get('/projects/update/{project}', \App\Livewire\Projects\Edit::class)->name('projects.edit');
