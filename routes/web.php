<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\back_end\BackendController;
use App\Http\Controllers\front_end\FrontendController;


Route::get('/', function () {
		return view('welcome');
});

Route::get('/dashboard', function () {
		return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
		Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
		Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
		Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// *********** it is the frontend controller route ***********
Route::controller(FrontendController::class)->group(function(){
	Route::get('/', 'home');
});

// ============ Form Route Start ============
Route::controller(FrontendController::class)->group(function () {
  Route::get('/form', 'form')->name('form');
  Route::get('/create-form', 'createform')->name('form.create');
  Route::post('/store-form', 'storeForm')->name('form.store');
  Route::get('/delete-form/{id}', 'deleteForm')->name('form.delete');
});
// ============ Form Route End ============

// ============ Purchase Route Start ============
Route::controller(FrontendController::class)->group(function(){
  Route::get('/purchase', 'purchase')->name('purchase');
});
// ============ Purchase Route End ============

// ============ All menu Route Start ============
Route::controller(FrontendController::class)->group(function(){
  Route::get('all-foods-menu', 'all_foods_menu')->name('all_foods_menu');
});
// ============ All menu Route End ============

// ============ All foods Route Start ============
Route::controller(FrontendController::class)->group(function(){
  Route::post('/cart-food', 'cartFood')->name('cart-food');
  Route::get('/order-food', 'showOrder')->name('order.show');
});
// ============ All foods Route End ============

// ============ Customer Info Route Start ============
Route::controller(FrontendController::class)->group(function(){
  Route::get('/customer-info', 'customerInfo')->name('customer-info');
  Route::post('/store-customer-info', 'storeCustomerInfo')->name('store-customer-info');
  Route::get('/delete-customer-info/{id}', 'deleteCustomerInfo')->name('delete-customer-info');
  Route::get('/invoice/{id}', 'invoice')->name('invoice');
});
// ============ Customer Info Route End ============


// backend controller to controll the admin dashboard
Route::middleware(['auth', 'roles:admin'])->group(function () {
	Route::get('/admin-dashboard', [AdminDashboardController::class, 'adminDashboard'])->name('admin.dashboard');

	// ============ Hero section Route Start ============
	Route::controller(BackendController::class)->group(function(){
		Route::get('/hero-section', 'heroSection')->name('heroSection');
		Route::get('/create-hero-section', 'createHeroSection')->name('create.hero.section');
		Route::post('/store-hero-section', 'storeHeroSection')->name('store.hero.section');
		Route::get('/delete-hero-section/{id}', 'deleteHeroSection')->name('delete.hero.section');
		Route::get('/edit-hero-section/{id}', 'editHeroSection')->name('edit.hero.section');
		Route::post('/update-hero-section', 'updateHeroSection')->name('update.hero.section');
	});
	// ============ Hero section Route end ============


	// ============ Top offer section Route start ============
	Route::controller(BackendController::class)->group(function(){
		Route::get('/offers', 'offers')->name('offers');
		Route::get('/create-offer', 'createOffer')->name('offers.create');
		Route::post('/store-offer', 'storeOffer')->name('offers.store');
		Route::get('/delete-offer/{id}', 'deleteOffer')->name('offers.delete');
		Route::get('/edit-offer/{id}', 'editOffer')->name('offers.edit');
		Route::post('/update-offer', 'updateOffer')->name('offers.update');
	});
	// ============ Top offer section Route end ============


	// ============ Story section Route start ============
	Route::controller(BackendController::class)->group(function(){
		Route::get('/story', 'story')->name('story');
		Route::get('/create-story', 'createStory')->name('story.create');
		Route::post('/store-story', 'storeStory')->name('story.store');
		Route::get('/delete-story/{id}', 'deleteStory')->name('story.delete');
		Route::get('/edit-story/{id}', 'editStory')->name('story.edit');
		Route::post('/update-story', 'updateStory')->name('story.update');
	});
	// ============ Story section Route end ============


	// ============ special dishes section Route start ============
	Route::controller(BackendController::class)->group(function(){
		Route::get('/special-dishes', 'specialDishes')->name('specialDishes');
		Route::get('/create-special-dishes', 'createSpecialDishes')->name('special-dishes.create');
		Route::post('/store-special-dishes', 'storeSpecialDishes')->name('special-dishes.store');
		Route::get('/delete-special-dishes/{id}', 'deleteSpecialDishes')->name('special-dishes.delete');
		Route::get('/edit-special-dishes/{id}', 'editSpecialDishes')->name('special-dishes.edit');
		Route::post('/update-special-dishes', 'updateSpecialDishes')->name('special-dishes.update');
	});
	// ============ special dishes section Route end ============


	// ============ Food Menu Route Start ============
	Route::controller(BackendController::class)->group(function () {
		Route::get('/all-foods', 'allFood')->name('allFoods');
		Route::get('/create-food', 'createFood')->name('food.create');
		Route::post('/store-food', 'storeFood')->name('food.store');
		Route::get('/delete-food/{id}', 'deleteFood')->name('food.delete');
		Route::get('/edit-food/{id}', 'editFood')->name('food.edit');
		Route::post('/update-food', 'updateFood')->name('food.update');
	});
	// ============ Food Menu Route End ============

	// ============ Choose us Route Start ============
	Route::controller(BackendController::class)->group(function () {
		Route::get('/all-choice', 'allchoice')->name('allChoice');
		Route::get('/create-choice', 'createChoice')->name('choice.create');
		Route::post('/store-choice', 'storeChoice')->name('choice.store');
		Route::get('/delete-choice/{id}', 'deleteChoice')->name('choice.delete');
		Route::get('/edit-choice/{id}', 'editChoice')->name('choice.edit');
		Route::post('/update-choice', 'updateChoice')->name('choice.update');
	});
	// ============ Choose us Route End ============

	// ============ Event Route Start ============
	Route::controller(BackendController::class)->group(function(){
		Route::get('/all-event', 'allEvent')->name('allevent');
		Route::get('/create-event', 'createEvent')->name('event.create');
		Route::post('/store-event', 'storeEvent')->name('event.store');
		Route::get('/delete-event/{id}', 'deleteEvent')->name('event.delete');
		Route::get('/edit-event/{id}', 'editEvent')->name('event.edit');
		Route::post('/update-event', 'updateEvent')->name('event.update');
	});
	// ============ Event Route End ============

  // ============ Testimonial Route Start ============
	Route::controller(BackendController::class)->group(function(){
    Route::get('/testimonial', 'testimonial')->name('testimonial');
    Route::get('/create-testimonial', 'createTestimonial')->name('create.testimonial');
    Route::post('/store-testimonial', 'storeTestimonial')->name('store.testimonial');
    Route::get('/delete-testimonial/{id}', 'deleteTestimonial')->name('delete.testimonial');
    Route::get('/edit-testimonial/{id}', 'editTestimonial')->name('edit.testimonial');
    Route::post('/update-testimonial', 'updateTestimonial')->name('update.testimonial');
	});
	// ============ Testimonial Route End ============

	// ============ All menu Route Start ============
  Route::controller(BackendController::class)->group(function(){
    Route::get('/all-menu', 'allMenu')->name('all-menu');
    Route::get('/create-all-menu', 'createAllMenu')->name('create-all-menu');
    Route::post('/store-all-menu', 'storeAllMenu')->name('store-all-menu');
    Route::get('/delete-all-menu/{id}', 'deleteAllMenu')->name('delete-all-menu');
    Route::get('/edit-all-menu/{id}', 'editAllMenu')->name('edit-all-menu');
    Route::post('/update-all-menu', 'updateAllMenu')->name('update-all-menu');
  });
	// ============ All menu Route End ============

  Route::controller(BackendController::class)->group(function(){
    Route::get('/admin/logout', 'AdminLogout')->name('admin.logout');
  });

  Route::controller(BackendController::class)->group(function(){
    Route::get('/notifications', 'notification')->name('notification');
  });
});

Route::get('/user-dashboard', [UserDashboardController::class, 'userDashboard'])->name('user.dashboard');
