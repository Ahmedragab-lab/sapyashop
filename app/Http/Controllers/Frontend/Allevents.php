<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;

use Illuminate\Http\Request;

class Allevents extends Controller
{
    public function index(){
        $events = Event::all();
        return view('site.pages.allevents',compact('events'));
       }

    public function show($id)
    {
        $Last_event = Event::find($id);
        // $events = Event::all();
        $events =Event::where('status','1')->orderBy('id','DESC')->get();


        return view('site.pages.last_Event',compact('Last_event','events'));
    }


}
