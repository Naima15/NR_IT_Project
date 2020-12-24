<?php

use App\Http\Livewire\HomeComponent;
//use App\Http\Livewire\Course-detailsComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\CoursesComponent;
use App\Http\Livewire\TeacherComponent;
use App\Http\Livewire\GalleryComponent;
use App\Http\Livewire\SeminarComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\ StudentworkComponent;
use App\Http\Livewire\SeminarsComponent;
use App\Http\Livewire\CoursessComponent;
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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', HomeComponent::class);

Route::get('/about',AboutComponent::class);

Route::get('/courses',CoursesComponent::class);

Route::get('/Teacher',TeacherComponent::class);

Route::get('/Studentwork',StudentworkComponent::class);

Route::get('/gallery',GalleryComponent::class);

Route::get('/seminar',SeminarComponent::class);

Route::get('/contact',ContactComponent::class);

Route::get('/seminars',SeminarsComponent::class);

Route::get('/coursess',CoursessComponent::class);

//Route::get('/index',IndexComponent::class);

//Route::get('/contact',ContactComponent::class);