<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CheckoutController extends Controller
{

    public function index()
    {
        $cartitems= Cart::where('user_id',Auth::id())->get();
        return view('site.pages.checkout',compact('cartitems'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();

        try
        {
            // $users = User::get();
            // foreach ($users as $user) {
            //     $ids[] = $user->id;
            // }
            // if(Order::whereNotIn('order_id',$ids )){
                // $order = Order::whereNotIn('order_id',$ids )->get();
                // $order = Order::where('order_id',Auth::id() )->exists();

                
            // $tracking_no=Order::select('tracking_no')->get();
            // // dd($tracking_no);
            // $exist = Order::whereNotIn('tracking_no',$tracking_no)->first();
            // if($exist){
            //     return redirect()->back()->with('status',"cart is empty");
            // }else
            // {
                $validator = Validator::make($request->all(),
                [
                    'phone'    => 'required|min:11|numeric',
                    'address1' => 'required|min:3|max:20|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
                    'address2' => 'required|min:3|max:20|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
                    'city'     => 'required|min:3|max:20|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
                    'country'  => 'required|min:3|max:20|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
                ]);
                if ($validator->fails())
                {
                    // return response()->json(['status'=>$validator->errors()->first()]);
                    return redirect()->back()->with('status',$validator->errors()->first());
                }
                // valiadtion
                if(Auth::user()->address1 == NULL){
                    $user = User::where('id',Auth::id())->first();
                    $user->fname = $request->fname;
                    $user->lname = $request->lname;
                    $user->phone = $request->phone;
                    $user->address1 = $request->address1;
                    $user->address2 = $request->address2;
                    $user->city = $request->city;
                    $user->country = $request->country;
                    $user->update();
                }
                $order = new Order();
                $order->order_id = Auth::id();
                $order->fname = $request->fname;
                $order->lname = $request->lname;
                $order->email = $request->email;
                $order->phone = $request->phone;
                $order->address1 = $request->address1;
                $order->address2 = $request->address2;
                $order->city = $request->city;
                $order->country = $request->country;
                $order->tracking_no = 'morasoft'.rand(1000000000, 9999999999);
                $order->save();
                $cartitems= Cart::where('user_id',Auth::id())->get();
                foreach($cartitems as $item){
                    OrderItem::create([
                        'order_id'=> $order->id,
                        'prod_id'=> $item->product_id,
                        'qty'=> $item->product_qty,
                        'price'=> $item->product->selling_price,
                        'priceqty'=>$item->sum,
                        'priceqtytax'=>$item->tax,
                        'total'=>$item->sum + $item->tax,
                    ]);
                    $product = Product::where('id',$item->product_id)->first();
                    $product->qty = $product->qty - $item->product_qty;
                    $product->update();
                }
                $cartitems= Cart::where('user_id',Auth::id())->get();
                Cart::destroy($cartitems);
                DB::commit();
                return redirect()->route('mycart.index')->with('status',"your order done");
            // }
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }


}
