<?php

namespace App\Http\Controllers\back_end;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Foods;
use App\Models\HeroSection;
use App\Models\TopOffer;
use App\Models\Story;
use App\Models\SpecialDish;

class BackendController extends Controller
{
	/*
		*************
		******* Hero Section Controller start *******
		*************
	*/
	public function heroSection(){
		return view('admin.backend.hero-section.index');
	}

	public function createHeroSection(){
		return view('admin.backend.hero-section.create');
	}

	public function storeHeroSection(Request $request){
		$validated = $request->validate([
			'text' => ['required', 'string', 'max:100'],
			'title' => ['required', 'string', 'max:100'],
			'photo' => ['required', 'image', 'mimes:jpg,jpeg,png,gif', 'max:5120'],
			'description' => ['required', 'string', 'max:250'],
		]);

		$photo = $request->file('photo');
		$photo_name_gen = hexdec(uniqid()).'.'.$photo->getClientOriginalExtension();
		$photo_path = 'upload/hero/';
		$photo->move(public_path($photo_path), $photo_name_gen);
		$photo_done = $photo_path.$photo_name_gen;

		HeroSection::insert([
			'text' => $validated['text'],
			'title' => $validated['title'],
			'description' => $validated['description'],
			'photo' => $photo_done
		]);

		return redirect()->route('heroSection');
	}


	public function deleteHeroSection($id){
		heroSection::find($id)->delete();
		return redirect()->route('heroSection');
	}

	public function editHeroSection($id){
		$content = HeroSection::find($id);
		return view('admin.backend.hero-section.edit', compact('content'));
	}

	public function updateHeroSection(Request $request){
		$heroId = $request->id;
		$hero = HeroSection::findOrFail($heroId);

		if($request->file('photo')){
			$old_image = HeroSection::find($heroId)->photo;

			if($old_image && file_exists(public_path($old_image))){
				unlink(public_path($old_image));
			}

			$photo = $request->file('photo');
			$photo_name_gen = hexdec(uniqid()).'.'.$photo->getClientOriginalExtension();
			$photo->move(public_path('upload/hero/'), $photo_name_gen);
			$save_photo_url = 'upload/hero/'.$photo_name_gen;

			HeroSection::find($heroId)->update([
				'photo' => $save_photo_url,
			]);

			return redirect()->route('heroSection');
		}
		else{
			HeroSection::find($heroId)->update([
				'text' => $request->text,
				'title' =>$request->title,
				'description' => $request->description
			]);

			return redirect()->route('heroSection');
		}
	}
	/*
		*************
		******* Hero Section Controller end *******
		*************
	*/ 


	/*
		*************
		******* Offer Section Controller end *******
		*************
	*/ 
	public function offers(){
		return view('admin.backend.offer.index');
	}

	public function createOffer(){
		return view('admin.backend.offer.create');
	}

	public function storeOffer(Request $request){
		$validated = $request->validate([
			'photo' => ['required', 'image', 'mimes:jpg,jpeg,png,gif', 'max:5120'],
			'offercategory' => ['required', 'string', 'max:100'],
			'menu' => ['required', 'string', 'max:100']
		]);

		$photo = $request->file('photo');
		$photo_name_gen = hexdec(uniqid()).'.'.$photo->getClientOriginalExtension();
		$photo_path = 'upload/offer/';
		$photo->move(public_path($photo_path), $photo_name_gen);
		$photo_done = $photo_path.$photo_name_gen;

		TopOffer::insert([
			'photo' => $photo_done,
			'foodcategory' => $validated['offercategory'],
			'menu' => $validated['menu'],
		]);

		return redirect()->route('offers');
	}

	public function deleteOffer($id){
		TopOffer::find($id)->delete();
		return redirect()->route('offers');
	}

	public function editOffer($id){
		$offer = TopOffer::find($id);
		return view('admin.backend.offer.edit', compact('offer'));
	}

	public function updateOffer(Request $request){
		$offerId = $request->id;
		$offer = TopOffer::findOrFail($offerId);


		if($request->file('photo')){
			$old_photo = TopOffer::find($offerId)->photo;

			if($old_photo && file_exists(public_path($old_photo))){
				unlink(public_path($old_photo));
			}

			$photo = $request->file('photo');
			$photo_name_gen = hexdec(uniqid()).'.'.$photo->getClientOriginalExtension();
			$photo_path = 'upload/offer/';
			$photo->move(public_path('upload/offer/'), $photo_name_gen);
			$photo_save_url = 'upload/offer/'.$photo_name_gen;

			TopOffer::find($offerId)->update([
				'photo' => $photo_save_url
			]);
			return redirect()->route('offers');
		}
		else{
			TopOffer::find($offerId)->update([
				'foodcategory' => $request->offercategory,
				'menu' => $request->menu
			]);

			return redirect()->route('offers');
		}

	}
	/*
		*************
		******* Offer Section Controller end *******
		*************
	*/ 


	/*
		*************
		******* Food Menu Section end *******
		*************
	*/ 
  public function allFood(){
		return view('admin.backend.foods.index');
	}

	public function createFood(){
		return view('admin.backend.foods.create');
	}

	public function storeFood(Request $request){

		// ********* start validating the data *********
		$validated = $request->validate([
			'foodName' => ['required', 'string', 'max:100'],
			'foodImg' => ['required', 'image', 'mimes:jpg,jpeg,png,gif', 'max:5120'],
			'foodQuantity' => ['required', 'integer', 'min:1'],
			'foodPrice' => ['required', 'numeric', 'min:0'],
			'foodDesc' => ['required', 'string', 'max:255'],
		]);
		// ********* end validating the data *********


		// ********* start gettin the image url *********
		$photo = $request->file('foodImg');
		$photo_name_gen = hexdec(uniqid()).'.'.$photo->getClientOriginalExtension();
		$photo_path = 'upload/food/';
		$photo->move(public_path($photo_path), $photo_name_gen);
		$photo_done = $photo_path.$photo_name_gen;
		// ********* end gettin the image url *********

		// ********* start inserting the data  *********
		Foods::insert([
			// to insert the data in the table, we need the table col names\
			'name'=>$validated['foodName'],
			'description'=>$validated['foodDesc'],
			'slug'=>strtolower(str_replace(' ', '-', $request->foodName)),
			'quantity'=>$validated['foodQuantity'],
			'price'=>$validated['foodPrice'],
			'photo'=>$photo_done
		]);
		// ********* end inserting the data  *********
		 
		return redirect()->route('allFoods');
	}

	// ********* start deleting the data  *********
	public function deleteFood($id){
		Foods::find($id)->delete();
		return redirect()->route('allFoods');
	}
	// ********* end deleting the data  *********

	// ********* start editting the data  *********
	public function editFood($id){
		$food = Foods::find($id);
		return view('admin.backend.foods.edit', compact('food'));
	}
	// ********* end editting the data  *********

	// ********* start updating the data  *********
	public function updateFood(Request $request){
		$foodId = $request->id;
		$food = Foods::findOrFail($foodId);

		if($request->file('updateFoodImg')){
			$old_image = Foods::find($foodId)->photo;

			if($old_image && file_exists(public_path($old_image))){
				unlink(public_path($old_image));
			}

			$photo = $request->file('updateFoodImg');
			$photo_name_gen = hexdec(uniqid()).'.'.$photo->getClientOriginalExtension();
			$photo->move(public_path('upload/food/'), $photo_name_gen);
			$save_photo_url = 'upload/food/'.$photo_name_gen;

			Foods::find($foodId)->update([
				'name' => $request->updateFoodName,
				'description' => $request->updateFoodDesc,
				'slug' => strtolower(str_replace(' ', '-', $request->updateFoodName)),
				'quantity' => $request->updateFoodQuantity,
				'price' => $request->updateFoodPrice,
				'photo'=>$save_photo_url,
				
			]);
			return redirect()->route('allFoods');
		}
		
		else{
			Foods::find($foodId)->update([
				'name' => $request->updateFoodName,
				'description' => $request->updateFoodDesc,
				'slug' => strtolower(str_replace(' ', '-', $request->updateFoodName)),
				'quantity' => $request->updateFoodQuantity,
				'price' => $request->updateFoodPrice,
			]);

			return redirect()->route('allFoods');
		}
	}
	// ********* end updating the data  *********

	/*
		*************
		******* Food Menu Section end *******
		*************
	*/ 


	/*
		*************
		******* Story Section start *******
		*************
	*/ 
	public function story(){
		return view('admin.backend.story.index');
	}

	public function createStory(){
		return view('admin.backend.story.create');
	}

	public function storeStory(Request $request){
		$validated = $request->validate([
			'title' => ['required', 'string', 'max:100'],
			'description' => ['required', 'string', 'max:250'],
			'phone' => ['required', 'string', 'min:1'],
			'photo1' => ['required', 'image', 'mimes:jpg,jpeg,png,gif', 'max:5120'],
			'photo2' => ['required', 'image', 'mimes:jpg,jpeg,png,gif', 'max:5120'],
		]);

		// ======= photo 1  ======
		$photo1 = $request->file('photo1');
		$photo_name_gen = hexdec(uniqid()).'.'.$photo1->getClientOriginalExtension();
		$photo_path = 'upload/story/';
		$photo1->move(public_path($photo_path), $photo_name_gen);
		$photo_done1 = $photo_path.$photo_name_gen;

		// ======= photo 2  ======
		$photo2 = $request->file('photo2');
		$photo_name_gen = hexdec(uniqid()).'.'.$photo2->getClientOriginalExtension();
		$photo_path = 'upload/story/';
		$photo2->move(public_path($photo_path), $photo_name_gen);
		$photo_done2 = $photo_path.$photo_name_gen;

		Story::insert([
			'title' => $validated['title'],
			'description' => $validated['description'],
			'phone' => $validated['phone'],
			'photo1' => $photo_done1,
			'photo2' => $photo_done2,
		]);

		return redirect()->route('story');
	}

	public function editStory($id){
		$story = Story::find($id);
		return view('admin.backend.story.edit', compact('story'));
	}

	public function deleteStory($id){
		Story::find($id)->delete();
		return redirect()->route('story');
	}

	public function updateStory(Request $request){
		$storyId = $request->id;
		$story = Story::findOrFail($storyId);

		if($request->file('photo1')){
			$old_photo1 = Story::find($storyId)->photo1;

			if($old_photo1 && file_exists(public_path($old_photo1))){
				unlink(public_path($old_photo1));
			}

			$photo1 = $request->file('photo1');
			$photo1_name_gen = hexdec(uniqid()).'.'.$photo1->getClientOriginalExtension();
			$photo1->move(public_path('upload/story/'), $photo1_name_gen);
			$save_photo1_url = 'upload/story/'.$photo1_name_gen;

			Story::find($storyId)->update([
				'title' => $request->title,
				'description' => $request->description,
				'phone' => $request->phone,
				'photo1' => $save_photo1_url,
			]);

			return redirect()->route('story');
		}

		if($request->file('photo2')){
			$old_photo2 = Story::find($storyId)->photo2;

			if($old_photo2 && file_exists(public_path($old_photo2))){
				unlink(public_path($old_photo2));
			}

			$photo2 = $request->file('photo2');
			$photo2_name_gen = hexdec(uniqid()).'.'.$photo2->getClientOriginalExtension();
			$photo2->move(public_path('upload/story/'), $photo2_name_gen);
			$save_photo2_url = 'upload/story/'.$photo2_name_gen;

			Story::find($storyId)->update([
				'title' => $request->title,
				'description' => $request->description,
				'phone' => $request->phone,
				'photo2' => $save_photo2_url,
			]);

			return redirect()->route('story');
		}
		else{
			Story::find($storyId)->update([
				'title' => $request->title,
				'description' => $request-> description,
				'phone' => $request->phone,
			]);

			return redirect()->route('story');
		}
	}
	/*
		*************
		******* Story Section end *******
		*************
	*/ 


	/*
		*************
		******* Special-Dishes Section start *******
		*************
	*/ 
	public function specialDishes(){
		return view('admin.backend.special-dishes.index');
	}

	public function createSpecialDishes(){
		return view('admin.backend.special-dishes.create');
	}

	public function storeSpecialDishes(Request $request){
		$validated = $request->validate([
			'title' => ['required', 'string', 'max:100'],
			'new_price' => ['required', 'numeric', 'max:100'],
			'old_price' => ['required', 'numeric', 'max:100'],
			'description' => ['required', 'string', 'max:250'],
			'photo' => ['required', 'image', 'mimes:jpg,jpeg,png,gif', 'max:5120'],
		]);

		$photo = $request->file('photo');
		$photo_name_gen = hexdec(uniqid()).'.'.$photo->getClientOriginalExtension();
		$photo_path = 'upload/special-dishes/';
		$photo->move(public_path($photo_path), $photo_name_gen);
		$photo_done = $photo_path.$photo_name_gen;

		SpecialDish::create([
			'title' => $validated['title'],
			'new_price' => $validated['new_price'],
			'old_price' => $validated['old_price'],
			'description' => $validated['description'],
			'photo' => $photo_done,
		]);

		return redirect()->route('specialDishes');
	}

	public function editSpecialDishes($id){
		$special_dish = SpecialDish::find($id);
		return view('admin.backend.special-dishes.edit', compact('special_dish'));
	}

	public function updateSpecialDishes(Request $request){
		$special_dish_id = $request->id;
		$special_dish = SpecialDish::findOrFail($special_dish_id);

		if($request->file('photo')){
			$old_photo = SpecialDish::find($special_dish_id)->photo;

			if($old_photo && file_exists(public_path($old_photo))){
				unlink(public_path($old_photo));
			}

			$photo = $request->file('photo');
			$photo_name_gen = hexdec(uniqid()).'.'.$photo->getClientOriginalExtension();
			$photo->move(public_path('upload/special-dishes/'), $photo_name_gen);
			$save_photo_url = 'upload/special-dishes/'.$photo_name_gen;


			SpecialDish::find($special_dish_id)->update([
				'title' => $request->title,
				'description' => $request->description,
				'old_price' => $request->old_price,
				'new_price' => $request->new_price,
				'photo' => $save_photo_url,
			]);
			return redirect()->route('specialDishes');
		}
		else{
			SpecialDish::find($special_dish_id)->update([
				'title' => $request->title,
				'description' => $request->description,
				'old_price' => $request->old_price,
				'new_price' => $request->new_price,
			]);
			return redirect()->route('specialDishes');
		}
	}

	public function deleteSpecialDishes($id){
		SpecialDish::find($id)->delete();
		return redirect()->route('specialDishes');
	}
	/*
		*************
		******* Special-Dishes Section end *******
		*************
	*/ 
}
