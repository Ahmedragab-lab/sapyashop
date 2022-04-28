<?php

namespace App\Repo;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class AdminsRepo implements AdminsInterface{
    public function index()
    {
        $Admins=Admin::orderBy('id', 'DESC')->get();
        return view('Admin.admins.index',compact('Admins'));


    }

    public function create()
    {
        return view('Admin.admins.create');
    }

    public function store( $request)
    {


        try{
            $data = new Admin();
            $data->name = $request->name;
            $data->email = $request->email;
            $data->password = Hash::make($request->password);
            $data->admin = $request->admin;
            $data->save();
            toastr()->success(__('Admin created successfully'));
            return redirect()->route('admins.index');

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
         }

    }

    public function edit($id)
    {
        $Admins=Admin::findorfail($id);
        return view('Admin.admins.edit',compact('Admins'));


    }

    public function update( $request)
    {

        try{

            $data = Admin::findorfail($request->id);
            $data->name = $request->name;
            $data->email = $request->email;
            $data->password = Hash::make($request->password);
            $data->admin = $request->admin;
            $data->update();
            toastr()->success(__('Admin Edited successfully'));
            return redirect()->route('admins.index');

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
         }

    }
    public function destroy($id)
    {

        try{

        // Admin::findorfail($id)->delete();
        Admin::destroy($id);
        toastr()->error(trans('messages.Delete'));
        return redirect()->route('admins.index');

     }
    catch (\Exception $e){
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
 }
}
