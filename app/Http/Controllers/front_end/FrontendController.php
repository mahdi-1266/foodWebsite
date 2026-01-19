<?php

namespace App\Http\Controllers\front_end;
use App\Http\Controllers\Controller;
use App\Models\Form;
use App\Models\Foods;


use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
      return view('frontend.index');
    }

	public function form(){
	    return view('admin.backend.form.index');
	}

	public function storeForm(Request $request){
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'phone' => ['required', 'string', 'max:20'],
            'message' => ['required', 'string', 'max:300'],
            'customer_qty' => ['required', 'integer', 'min:1'],
            'reservation_date' => ['required', 'date'],
            'time' => ['required', 'date_format:H:i:s'],
        ]);

        Form::create([
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'customer_qty' => $validated['customer_qty'],
            'date' => $validated['reservation_date'],
            'time' => $validated['time'],
            'description' => $validated['message'],
        ]);

	    return view('frontend.index');
	}

	public function deleteForm($id){
        Form::find($id)->delete();
        return redirect()->route('form');
	}


	/* **********
	order start
	********** */
  public function show_menu_food($slug){
    $food = Foods::get()->where('slug', $slug)->firstOrFail();
		return view('frontend.showFood', compact('food'));
  }
	/* **********
	order end
	********** */
}
