<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEvent;
use Illuminate\Support\Facades\File;



use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events=Event::all();
        return view('Admin.events.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     *
     */
    public function store(StoreEvent $request )
    {
        try {
            $validated = $request->validated();
            $event = new Event();
            if($request->hasfile('image')){
                $file = $request->file('image');
                $ext  = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
                $file->move('uploads/event/', $filename);
                $event->image = $filename;
            }
            $event->event_title = ['en'=>$request->event_title_en ,'ar'=>$request->event_title];
            $event->desc = $request->desc;
            $event->limit = $request->limit;
            $event->status = $request->status==true?'1':'0';
            $event->save();
            toastr()->success(__('events create successfully'));
            return redirect('events');
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events= Event::find($id);
        return view('admin.events.edit',compact('events'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEvent $request, $id)
    {

        try{
            $validated = $request->validated();
            $event = Event::find($id);
            if($request->hasFile('image')){
                $path = 'uploads/event/' . $event->image;
                if(File::exists($path)){
                    File::delete($path);
                }
                $file = $request->file('image');
                $ext  = $file->getClientOriginalExtension();
                $filename = time() . '.' . $ext ;
                $file->move('uploads/serv',$filename);
                $event->image = $filename;
            }
            $event->event_title = ['en'=>$request->event_title_en ,'ar'=>$request->event_title];
            $event->desc = $request->desc;
            $event->limit = $request->limit;
            $event->status = $request->status==true?'1':'0';
            $event->update();
            toastr()->success(__('Event update successfully'));
            return redirect()->route('events.index');
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $event = Event::find($id);
            if($event->image != 'default.jpg'){
                $path = 'uploads/event/' . $event->image;
                if(File::exists($path)){
                    File::delete($path);
                }
            }
            $event->delete();
            toastr()->error(__('Event delete successfully'));
            return redirect()->route('events.index');
        }catch (\Exception $e){
                return redirect()->back()->withErrors(['error' => $e->getMessage()]);
            }
        }
    }

