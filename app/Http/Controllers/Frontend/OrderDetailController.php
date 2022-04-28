<?php

namespace App\Http\Controllers\Frontend;

use App\Events\PriceNotification;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserRate;
use App\Models\UserReqest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use Symfony\Component\HttpFoundation\Response;

class OrderDetailController extends Controller
{

    public function index()
    {
        //
    }

    public function order_details(Request $request)
    {
      $order_id = $request->input('orderid');
      $tax = $request->input('tax');
      $total = $request->input('total');

      $exist = OrderDetail::where('order_id',$order_id)->first();
      if($exist){
        return response()->json(['status'=> ' order Already submitted before']);
      }else{

          $order = new OrderDetail();
          $order->order_id =  $order_id;
          $order->tax =  $tax;
          $order->total =  $total;
          $order->save();
          return response()->json(['status'=> ' order submitted successfully']);
      }




    //   auth()->user()->notifications()->where('id', $id)->delete();
    //   Notification::where('data[order_no]',$order->order->order_no)->delete();
    // DB::table('notifications')->where('data->order_no',$order->order->order_no)->delete();
    //   $userReq = UserReqest::where('user_id',Auth::id())->get();
    //   UserReqest::destroy($userReq);
    //   return redirect()->route('front.index')->response()->json(['status'=> ' order submitted successfully']);
    }


    public function show($id)
    {
        $order_details = UserReqest::where('id',$id)->first();
        return view('site.pages.order-details',compact('order_details'));
    }


    public function showstep($id)
    {
        $order_step = OrderDetail::where('order_id',$id)->first();
        // $userrate = UserRate::where('id',$order_step)->first();
        return view('site.pages.order-steps',compact('order_step'));

    }


    // public function searchtrackstep(Request $request)
    // {
    //     $order_no = $request->input('order_no');
    //     $order = UserReqest::where('order_no',$order_no)->first();
    //     if($order){
    //         // return response()->json(['status'=>' ok']);
    //         $order_step = OrderDetail::where('order_id',$order->id)->first();
    //         return response()->view('site.pages.order-steps',compact('order_step'));
    //         // return Response::view('hello')->header('Content-Type', $type);
    //     }else{
    //         return response()->json(['status'=>' error']);
    //     }
    //     // dd($order_step);
    //     // $d = OrderDetail::where('order_id',)->first();
    //     // return view('site.pages.order-steps',compact('order_step'));
    //     // return response()->json(['status'=>$req->name . ' request submitted successfully'])
    // }
      public function searchtrackstep(Request $request)
        {
            $order_no = $request->input('order_no');
            $order = UserReqest::where('order_no',$order_no)->where('user_id',Auth::user()->id)->first();
            if($order){
                $order_step = OrderDetail::where('order_id',$order->id)->first();
                return response()->view('site.pages.order-step',compact('order_step'));
            }else{
                return redirect()->back()->with('status',"this number is wrong");
            }
            // dd($order_no);
            // return "hello";
        }

}
