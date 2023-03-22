<?php

use Illuminate\Support\Facades\Route;



require base_path('routes/frontend.php');

Route::get('/admin/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('admin.login');
Route::get('/admin/logout-page', [\App\Http\Controllers\LoginController::class, 'logoutpage'])->name('admin.logout-page');
Route::get('/admin/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('admin.logout');
Route::get('/admin/register', [\App\Http\Controllers\RegisterController::class, 'index'])->name('admin.register');
Route::post('/admin/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('admin.login.form');
Route::post('/admin/register', [\App\Http\Controllers\RegisterController::class, 'store'])->name('admin.register.form');


Route::middleware(['auth'])->prefix('/admin')->group(function () {

//    Blog Routes
    Route::get('/dashboard', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('blog/post', [\App\Http\Controllers\PostController::class, 'index'])->name("post.index");
    Route::post('blog/store', [\App\Http\Controllers\PostController::class, 'store'])->name("post.store");
    Route::get('post/blog_list', [\App\Http\Controllers\PostController::class, 'blog_list'])->name('post.blog_list');
    Route::get('post/edit/{id}', [\App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
    Route::get('post/delete/{id}', [\App\Http\Controllers\PostController::class, 'destroy'])->name('post.delete');
    Route::put('post/update/{id}', [\App\Http\Controllers\PostController::class, 'update'])->name('post.update');

//    Testimonial Routes
    Route::post('testimonial-store', [\App\Http\Controllers\TestimonialController::class, 'store'])->name("testimonial.store");
    Route::get('testimonial-list', [\App\Http\Controllers\TestimonialController::class, 'testimonial_list'])->name('testimonial.list');
    Route::get('testimonial-edit-{id}', [\App\Http\Controllers\TestimonialController::class, 'edit'])->name('testimonial.edit');
    Route::get('testimonial-post', [\App\Http\Controllers\TestimonialController::class, 'index'])->name("testimonial.add");
    Route::get('testimonial-delete-{id}', [\App\Http\Controllers\TestimonialController::class, 'destroy'])->name('testimonial.delete');
    Route::put('testimonial-update-{id}', [\App\Http\Controllers\TestimonialController::class, 'update'])->name('testimonial.update');

//    Dr. Information Routes
    Route::get('doctor-post', [\App\Http\Controllers\DoctorDetailsController::class, 'index'])->name("doctor.add");
    Route::post('doctor-store', [\App\Http\Controllers\DoctorDetailsController::class, 'store'])->name("doctor.store");
    Route::get('doctor-list', [\App\Http\Controllers\DoctorDetailsController::class, 'doctor_list'])->name('doctor.list');
    Route::get('doctor-edit-{id}', [\App\Http\Controllers\DoctorDetailsController::class, 'edit'])->name('doctor.edit');
    Route::get('doctor-delete-{id}', [\App\Http\Controllers\DoctorDetailsController::class, 'destroy'])->name('doctor.delete');
    Route::put('doctor-update-{id}', [\App\Http\Controllers\DoctorDetailsController::class, 'update'])->name('doctor.update');


//    Dr. academic award Routes
    Route::get('doctor_academic_award-post', [\App\Http\Controllers\DoctorAcademicAwardController::class, 'index'])->name("doctor_academic_award.add");
    Route::get('doctor_academic_award-create-{id}', [\App\Http\Controllers\DoctorAcademicAwardController::class, 'create'])->name("doctor_academic_award.create");
    Route::post('doctor_academic_award-store', [\App\Http\Controllers\DoctorAcademicAwardController::class, 'store'])->name("doctor_academic_award.store");
    Route::get('doctor_academic_award-list-{id}', [\App\Http\Controllers\DoctorAcademicAwardController::class, 'doctor_academic_award_list'])->name('doctor_academic_award.list');
    Route::get('doctor_academic_award-edit-{id}', [\App\Http\Controllers\DoctorAcademicAwardController::class, 'edit'])->name('doctor_academic_award.edit');
    Route::get('doctor_academic_award-delete-{id}', [\App\Http\Controllers\DoctorAcademicAwardController::class, 'destroy'])->name('doctor_academic_award.delete');
    Route::put('doctor_academic_award-update-{id}', [\App\Http\Controllers\DoctorAcademicAwardController::class, 'update'])->name('doctor_academic_award.update');


//    Dr. academic qualification Routes
    Route::get('doctor_academic_qualification-post', [\App\Http\Controllers\DoctorAcademicQualificationController::class, 'index'])->name("doctor_academic_qualification.add");
    Route::get('doctor_academic_qualification-create-{id}', [\App\Http\Controllers\DoctorAcademicQualificationController::class, 'create'])->name("doctor_academic_qualification.create");
    Route::post('doctor_academic_qualification-store', [\App\Http\Controllers\DoctorAcademicQualificationController::class, 'store'])->name("doctor_academic_qualification.store");
    Route::get('doctor_academic_qualification-list-{id}', [\App\Http\Controllers\DoctorAcademicQualificationController::class, 'doctor_academic_qualification_list'])->name('doctor_academic_qualification.list');
    Route::get('doctor_academic_qualification-edit-{id}', [\App\Http\Controllers\DoctorAcademicQualificationController::class, 'edit'])->name('doctor_academic_qualification.edit');
    Route::get('doctor_academic_qualification-delete-{id}', [\App\Http\Controllers\DoctorAcademicQualificationController::class, 'destroy'])->name('doctor_academic_qualification.delete');
    Route::put('doctor_academic_qualification-update-{id}', [\App\Http\Controllers\DoctorAcademicQualificationController::class, 'update'])->name('doctor_academic_qualification.update');


//    Dr. activity presentation Routes
    Route::get('doctor_activity_and_presentation-post', [\App\Http\Controllers\DoctorActivityPresentationController::class, 'index'])->name("doctor_activity_and_presentation.add");
    Route::get('doctor_activity_and_presentation-create-{id}', [\App\Http\Controllers\DoctorActivityPresentationController::class, 'create'])->name("doctor_activity_and_presentation.create");
    Route::post('doctor_activity_and_presentation-store', [\App\Http\Controllers\DoctorActivityPresentationController::class, 'store'])->name("doctor_activity_and_presentation.store");
    Route::get('doctor_activity_and_presentation-list-{id}', [\App\Http\Controllers\DoctorActivityPresentationController::class, 'doctor_activity_and_presentation_list'])->name('doctor_activity_and_presentation.list');
    Route::get('doctor_activity_and_presentation-edit-{id}', [\App\Http\Controllers\DoctorActivityPresentationController::class, 'edit'])->name('doctor_activity_and_presentation.edit');
    Route::get('doctor_activity_and_presentation-delete-{id}', [\App\Http\Controllers\DoctorActivityPresentationController::class, 'destroy'])->name('doctor_activity_and_presentation.delete');
    Route::put('doctor_activity_and_presentation-update-{id}', [\App\Http\Controllers\DoctorActivityPresentationController::class, 'update'])->name('doctor_activity_and_presentation.update');


//    Contact us routes
    Route::get('contact_us-post', [\App\Http\Controllers\ContactusController::class, 'index'])->name("contact_us.add");
    Route::get('contact_us-post/create', [\App\Http\Controllers\ContactusController::class, 'create'])->name("contact_us.create");
    Route::post('contact_us-store', [\App\Http\Controllers\ContactusController::class, 'store'])->name("contact_us.store");
//    Route::get('contact_us-list', [\App\Http\Controllers\ContactusController::class, 'contact_us_list'])->name('contact_us.list');
    Route::get('contact_us-edit-{id}', [\App\Http\Controllers\ContactusController::class, 'edit'])->name('contact_us.edit');
    Route::get('contact_us-delete-{id}', [\App\Http\Controllers\ContactusController::class, 'destroy'])->name('contact_us.delete');
    Route::put('contact_us-update-{id}', [\App\Http\Controllers\ContactusController::class, 'update'])->name('contact_us.update');

//    Service routes
    Route::get('service-post', [\App\Http\Controllers\ServiceController::class, 'index'])->name("service.add");
    Route::post('service-store', [\App\Http\Controllers\ServiceController::class, 'store'])->name("service.store");
    Route::get('service-list', [\App\Http\Controllers\ServiceController::class, 'service_list'])->name('service.list');
    Route::get('service-edit-{id}', [\App\Http\Controllers\ServiceController::class, 'edit'])->name('service.edit');
    Route::get('service-delete-{id}', [\App\Http\Controllers\ServiceController::class, 'destroy'])->name('service.delete');
    Route::put('service-update-{id}', [\App\Http\Controllers\ServiceController::class, 'update'])->name('service.update');

//    Partner routes
    Route::get('partner-post', [\App\Http\Controllers\PartnerController::class, 'index'])->name("partner.add");
    Route::post('partner-store', [\App\Http\Controllers\PartnerController::class, 'store'])->name("partner.store");
    Route::get('partner-list', [\App\Http\Controllers\PartnerController::class, 'partner_list'])->name('partner.list');
    Route::get('partner-edit-{id}', [\App\Http\Controllers\PartnerController::class, 'edit'])->name('partner.edit');
    Route::get('partner-delete-{id}', [\App\Http\Controllers\PartnerController::class, 'destroy'])->name('partner.delete');
    Route::put('partner-update-{id}', [\App\Http\Controllers\PartnerController::class, 'update'])->name('partner.update');
});


