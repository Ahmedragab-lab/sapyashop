<?php

namespace App\Http\Controllers\Admin;
use App\Models\tracking_step;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrackingstepsController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tracking_steps = tracking_step::all();

        return view('Admin.tracking_steps.index', compact('tracking_steps'));
    }


    public function create()
    {
     $lastId = tracking_step::pluck('id')->last();
     $lastId == 0 ? $track_no_new = 1 : $track_no_new= $lastId + 1 ;
     return view('Admin.tracking_steps.create',compact('track_no_new'));

    }


    public function store(Request $request)
    {
        tracking_step::create([
            'track_no'=>$request->order_no,
            'track_name'=>$request->track_name,
            'date'=>$request->date,
        ]);
        session()->flash('Add', 'tracking_step Add successfully');
        return redirect('/tracking_steps');
    }

    public function edit( $id)
    {

        $tracking_steps = tracking_step::findOrFail($id);
        return view('Admin.tracking_steps.edit',compact('tracking_steps'));
    }


    public function update(Request $request,$id)
    {

        $tracking_step = tracking_step::findOrFail($id);

        $tracking_step->update([
            'track_no' => $request->track_no,
            'track_name' => $request->track_name,
            'date' => $request->date,

        ]);

        session()->flash('Edit', '  tracking_step updated successfully  ');
         return redirect('/tracking_steps');
    }



    public function destroy($id)
    {
        tracking_step::destroy($id);
        session()->flash('delete',' tracking_step delete successfully ');
        return redirect('/tracking_steps');
    }
}


