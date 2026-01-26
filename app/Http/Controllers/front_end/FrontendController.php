<?php

namespace App\Http\Controllers\front_end;
use App\Http\Controllers\Controller;
use App\Models\AllFoodMenu;
use App\Models\Form;
use App\Models\CustomerInformation;


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


	/* ********** store menu food start ********** */

  // $menu = AllFoodMenu::get()->firstOrFail();

  public function cartFood(Request $request){
    $cart = collect($request->items ?? [])->filter(fn ($item) => $item['qty'] > 0);

    $cart->transform(function ($item, $id) {
      $food = AllFoodMenu::findOrFail($id);
      $item['price'] = $food->price;
      $item['total'] = $item['qty'] * $item['price'];
      return $item;
    });

    session(['cart' => $cart]);

    return redirect()->route('order.show');
  }

  public function showOrder(){
    $cart = session('cart', []);
    return view('frontend.showFood', compact('cart'));
  }


	/* ********** store menu food end ********** */

  /* ********** Pruchase Section end ********* */
  public function purchase(){
    return view('frontend.purchase');
  }
  /* ********** Pruchase Section end ********** */


  /* ********** All Menu Section end ********** */
  public function all_foods_menu(){
    return view('frontend.allMenu');
  }
  /* ********** All Menu Section end ********** */


  /* ********** Custoer info Section start ********** */
  public function customerInfo(){
    return view('admin.backend.customer-info.index');
  }

  public function storeCustomerInfo(Request $request){
    $validated = $request->validate([
      'name' => ['required', 'string', 'max:50'],
      'email' => ['required', 'string', 'max:50'],
      'phone' => ['required', 'numeric', 'max:20'],
      'delivery_date' => ['required', 'date'],
      'delivery_time' => ['required', 'date_format:H:i:s'],
      'delivery_address	' => ['required', 'string', 'max:300'],
    ]);

    CustomerInformation::create([
      'name' => $validated['name'],
      'email' => $validated['email'],
      'phone' => $validated['phone'],
      'delivery_date' => $validated['delivery_date'],
      'delivery_time' => $validated['delivery_time'],
      'delivery_address' => $validated['delivery_address'],
    ]);

    return view('frontend.showFood');
  }
  /* ********** Custoer info Section end ********** */
}