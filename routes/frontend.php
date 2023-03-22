<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\BlogController;

use App\Http\Controllers\FrontendController;

Route::get('/', [FrontendController::class, 'index'])->name('home.page');
//    About-us Routes
Route::get('/about-us', [\App\Http\Controllers\frontend\AboutUsController::class, 'about_us'])->name('about_us.page');
//    Services Routes
Route::get('/services', [FrontendController::class, 'services'])->name('services.page');
//    Gallery Routes
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery.page');
//    Blog Routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog.page');
//    Blog list Routes
Route::get('/blog-list/{id}', [BlogController::class, 'blog_details'])->name('blog_details.page');
//    Contact Us Routes
Route::get('/contact-us', [FrontendController::class, 'contact_us'])->name('contact_us.page');
//    Testimonial Routes
Route::get('/testimonial', [FrontendController::class, 'testimonial'])->name('testimonial.page');
//    Doctor List Routes
Route::get('/doctor-list', [\App\Http\Controllers\frontend\DoctorController::class, 'doctor_list'])->name('doctor_list.page');
//    Doctor Details Routes
Route::get('/doctor-details/{id}', [\App\Http\Controllers\frontend\DoctorController::class, 'doctor_details'])->name('doctor_details.page');
