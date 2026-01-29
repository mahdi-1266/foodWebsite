<?php

namespace App\Http\Controllers\front_end;
use App\Http\Controllers\Controller;
use App\Models\AllFoodMenu;
use App\Models\Form;
use App\Models\CustomerInformation;
use App\Models\OrderItem;


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
    /*
      اگر درخواست آیتمی وجود نداشت، آرایه خالی در نظر بگیر و ایتم های که بیشتر از 0 است را نگهدار
      ها است items نماینده $item هر
    */
    $cart = collect($request->items ?? [])->filter(fn ($item) => $item['qty'] > 0);

    $cart->transform(function ($item, $id) {
      $food = AllFoodMenu::findOrFail($id);

      return[
        'food_id' => $food->id,
        'name' => $food->name,
        'price' => $food->price,
        'qty' => $item['qty'],
        'total' => $item['qty'] * $food->price,
      ];
      // $item['name'] = $food->name;
      // $item['price'] = $food->price;
      // $item['total'] = $item['qty'] * $item['price'];
      // return $item;
    });

    /*
      $item['price']: نام های است که ما ان را برای ایتم پاس مکنیم
      $item['total']: نام های است که ما ان را برای ایتم پاس مکنیم
      در اخر
      [
        1 => ['qty' => 2, 'price' => 150, 'total' => 300],
        2 => ['qty' => 1, 'price' => 200, 'total' => 200],
      ]
    */

    session(['cart' => $cart]);

    return redirect()->route('order.show');
  }

  public function showOrder(){
    $cart = session('cart', collect());
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
      'phone' => ['required', 'string', 'max:20'],
      'delivery_date' => ['required', 'date'],
      'delivery_time' => ['required', 'date_format:H:i'],
      'delivery_address' => ['required', 'string', 'max:300'],
    ]);

    // $customer = CustomerInformation::create($validated);
    $customer = CustomerInformation::create([
      'name' => $validated['name'],
      'email' => $validated['email'],
      'phone' => $validated['phone'],
      'delivery_date' => $validated['delivery_date'],
      'delivery_time' => $validated['delivery_time'],
      'delivery_address' => $validated['delivery_address'],
    ]);


    // Save cart items into order_items
    $cart = session('cart', []);
    // dd(session('cart'));
    // dd($cart->toArray());


    foreach($cart as $item){
      OrderItem::create([
        'customer_info_id' => $customer->id,
        'food_name' => $item['name'],
        'food_price' => $item['price'],
        'food_qty' => $item['qty'],
        'total_price' => $item['total'],
      ]);
    }
    // Clear the cart after storing the order
    session()->forget('cart');

    return redirect()->route('purchase')->with('success', 'Order placed!');
    // return redirect()->route('invoice', $customer->id);
  }
  /* ********** Custoer info Section end ********** */


  /* ********** Order View Section start ********** */
  public function invoice($id){

    // Fetch the order with its related items
    $order = CustomerInformation::with('items')->findOrFail($id);

    // dd(
    //   $order->toArray(),
    //   $order->items->toArray()
    // );

    return view('admin.backend.customer-info.invoice', compact('order'));
  }

  public function deleteCustomerInfo($id){
    CustomerInformation::find($id)->delete();
    return redirect()->route('customer-info');
  }
  /* ********** Order View Section end ********** */
}