<?php

namespace App\Repo;

use App\Models\Gender;
use App\Models\Service;
use App\Models\Speacialization;
use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class ServicesRepo implements ServicesInterface{
    public function index()
    {
        $services = Service::orderBy('id', 'DESC')->get();
        return view('admin.services.index',compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store( $request)
    {
        try {
            $validated = $request->validated();
            $serv = new Service();
            if($request->hasfile('image')){
                $file = $request->file('image');
                $ext  = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
                $file->move('uploads/serv/', $filename);
                $serv->image = $filename;
            }
            $serv->serve_name = ['en'=>$request->serve_name_en ,'ar'=>$request->serve_name];
            $serv->desc = $request->desc;
            $serv->status = $request->status==true?'1':'0';
            $serv->save();
            toastr()->success(__('services create successfully'));
            return redirect()->route('services.index');
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function edit($id)
    {
        $serv = Service::findorfail($id);
        return view('admin.services.edit',compact('serv'));
    }
    public function update( $request, $id)
    {
        try{
            $validated = $request->validated();
            $serv = Service::findorfail($id);
            if($request->hasFile('image')){
                $path = 'uploads/serv/' . $serv->image;
                if(File::exists($path)){
                    File::delete($path);
                }
                $file = $request->file('image');
                $ext  = $file->getClientOriginalExtension();
                $filename = time() . '.' . $ext ;
                $file->move('uploads/serv',$filename);
                $serv->image = $filename;
            }
            $serv->serve_name = ['en'=>$request->serve_name_en ,'ar'=>$request->serve_name];
            $serv->desc = $request->desc;
            $serv->status = $request->status==true?'1':'0';
            $serv->update();
            toastr()->success(__('services update successfully'));
            return redirect()->route('services.index');
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function destroy($id)
    {
        try{
            $serv = Service::findorfail($id);
            if($serv->image != 'default.jpg'){
                $path = 'uploads/serv/' . $serv->image;
                if(File::exists($path)){
                    File::delete($path);
                }
            }
            $serv->delete();
            toastr()->error(__('services delete successfully'));
            return redirect()->route('services.index');
        }catch (\Exception $e){
                return redirect()->back()->withErrors(['error' => $e->getMessage()]);
            }
        }



        // public function show_last($id)
        // {
        //     $Last_service = service::find($id);
        //     return view('site.pages.Last_service',compact('service'));
        // }

 }
