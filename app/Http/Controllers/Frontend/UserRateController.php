<?php

namespace App\Http\Controllers\Frontend;

use App\Models\UserRate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
class UserRateController extends Controller
{

    public function addrate(Request $request)
    {
        // $order_id = $request->order_id;
        $user_id = $request->user_id;
        $service_id = $request->service_id;
        $validator = Validator::make($request->all(),
        [
           'rate' => 'required',
           'sms'  => 'required|min:5|max:250|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
        ]);
        if ($validator->fails())
        {
            return redirect()->back()->with('status',$validator->errors()->first());
        }
        $exist = UserRate::where('user_id',$user_id)->where('service_id',$service_id)->first();
        if($exist){
            $exist->star = $request->rate;
            $exist->sms = $request->sms;
            $exist->update();
            return redirect()->back()->with('status',"thank you your rate updated successfully");
        }else{
            $rate = new UserRate();
            // $rate->order_id = $order_id;
            $rate->user_id = $user_id;
            $rate->service_id = $service_id;
            $rate->star = $request->rate;
            $rate->sms = $request->sms;
            $rate->save();
            return redirect()->back()->with('status',"thank you");
        }
    }


}
