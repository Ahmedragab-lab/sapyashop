<?php

namespace App\Http\Controllers\Admin;

use App\Events\PriceNotification;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Order;
use App\Models\User;
use App\Models\Usernoti;
use App\Models\UserReqest;
use App\Notifications\AdminPrice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = UserReqest::orderBy('id','DESC')->get();
        return view('Admin.orders.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'price'=>'required|numeric',
        ]);
        try
        {
            $order_price = UserReqest::findorfail($id);
            $order_price->price = $request->price;
            $order_price->save();

            $user = User::where('id',$order_price->user_id)->get();
            $userrequest = UserReqest::latest()->first();
            Notification::send($user,new AdminPrice($userrequest));

            $u = User::where('id',$order_price->user_id)->get();

            $data=[
                'user_id'=>$u,
                'price'=>$order_price->price,
              ];

              $noti = new Usernoti();
              $noti->user_id = Auth::user()->id;
              $noti->price = $order_price->price;
              $noti->save();

              event(new PriceNotification($noti));
            //   event(new PriceNotification($userrequest));


            toastr()->success(__('price added successfully'));
            return redirect()->route('orders.index');
        }catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        try{
            $section = UserReqest::find($id);
            $section->delete();
            toastr()->error(__('section delete successfully'));
            return redirect()->route('orders.index');
        }catch (\Exception $e){
                return redirect()->back()->withErrors(['error' => $e->getMessage()]);
            }
    }
}

