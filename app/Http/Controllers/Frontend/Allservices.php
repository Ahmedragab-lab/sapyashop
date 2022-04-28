<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class Allservices extends Controller
{
     public function index(){
            $services = Service::all();
            return view('site.pages.allservices',compact('services'));
        }


       public function show($id){

        $service = Service::findorfail($id);

        return view('site.pages.service',compact('service'));
       }

       public function showlast($id){


         $Last_service = Service::find($id);
         $service = Service::orderBy('id','DESC')->get();

        return view('site.pages.Last_service',compact('service'));

    //return 'aaaaaaaaaaaa';
       }


}
  