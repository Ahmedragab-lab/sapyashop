<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Agreement;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Event;
use App\Models\Feedback;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\navbar_details;
use App\Models\Product;
use App\Models\Setting;
use Dotenv\Validator;

class FrontendController extends Controller
{



    public function index()
    {
        $Last_agreement=Agreement::orderBy('id','DESC')->first();
        $Last_event=Event::orderBy('id','DESC')->first();

        $Last_comp=Company::orderBy('id','DESC')->first();
        $Last_product=Product::orderBy('id','DESC')->first();

        $settings = Setting::get();


        // $allevents = Event::orderBy('id','DESC')->get();

        // $events=Event::all()->last();
         $Last_service = Service::orderBy('id','DESC')->first();
        // $servs = Service::orderBy('id','DESC')->limit(4)->get();
        // $allservices = Service::orderBy('id','DESC')->get();
        // $Last_comp=Company::orderBy('id','DESC')->first();
        // $allevents = Event::orderBy('id','DESC')->get();
        // $Last_product=Product::orderBy('id','DESC')->first();
        return view('/front',compact('Last_agreement','Last_event','Last_service','settings'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $product = Product::find($id);
        return view('site.pages.product-details',compact('product'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }


    // public function contact()
    // {
    //     return view('frontend.contact');
    // }

    // public function do_contact(Request $request)
    // {
        // $validation = Validator::make($request->all(), [
        //     'name'      => 'required',
        //     'email'     => 'required|email',
        //     'mobile'    => 'nullable|numeric',
        //     'title'     => 'required|min:5',
        //     'message'   => 'required|min:10',
        // ]);
        // if ($validation->fails()){
        //     return redirect()->back()->withErrors($validation)->withInput();
        // }

    //     $data['name']       = $request->name;
    //     $data['title']      = $request->title;
    //     $data['phone']      = $request->phone;
    //     $data['email']      = $request->email;
    //     $data['message']    = $request->message;

    //     Contact::create($data);

    //     return redirect()->back()->with([
    //         'message' => 'Message sent successfully',
    //         'alert-type' => 'success'
    //     ]);

    // }



}
