<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\feedback;

use Illuminate\Http\Request;

class Allfeedback extends Controller
{
   public function index(){
    $feedbacks = Feedback::all();

    return view('site.pages.feedback',compact('feedbacks'));
   }
   public function show($id){
    $feedbacks = Feedback::findorfail($id);
    return view('site.pages.feedback',compact('feedbacks'));
   }

}
