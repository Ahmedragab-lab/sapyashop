<?php

namespace App\Http\Controllers\Frontend;

use App\Events\EmailNotification;
use App\Http\Controllers\Controller;
use App\Models\contact;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class ContactController extends Controller
{

    public function index()
    {

        $contacts = contact::all();


        return view('site.pages.contact',compact('contacts'));
    }

    public function contact(Request $request)
    {
        // $this->validate($request, [ 'sms' => 'required' ]);

       $userid = $request->input('userid');
       $name = $request->input('name');
       $sms = $request->input('sms');
       // $this->validate($request, [ 'sms' => 'required' ]);
       $validator = Validator::make($request->all(), ['sms' => 'required|min:5|max:250|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/']);
       if ($validator->fails())
       {
           return response()->json(['status'=>$validator->errors()->first()]);
        //    return response()->json(['error'=>'error']);
       }
       $contact = new Contact();
       $contact->user_id = $userid;
       $contact->name = $name;
       $contact->sms =$sms;
       $contact->save();

       $data=[
         'user_id'=>$userid,
         'sms'=>$sms,
       ];
       event(new EmailNotification($contact));
       return response()->json(['status'=> ' Email submitted successfully']);

    }



}
