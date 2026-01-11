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
	Route::get('show-food/{slug}');
});

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


	// ============ Offer section Route start ============
	Route::controller(BackendController::class)->group(function(){
		Route::get('/story', 'story')->name('story');
		Route::get('/create-story', 'createStory')->name('story.create');
		Route::post('/store-story', 'storeStory')->name('story.store');
		Route::get('/delete-story/{id}', 'deleteStory')->name('story.delete');
		Route::get('/edit-story/{id}', 'editStory')->name('story.edit');
		Route::post('/update-story', 'updateStory')->name('story.update');
	});
	// ============ Offer section Route end ============


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


});



Route::get('/user-dashboard', [UserDashboardController::class, 'userDashboard'])->name('user.dashboard');
