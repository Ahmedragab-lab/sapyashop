<?php

namespace App\Repo;

use App\Models\Gender;
use App\Models\Service;
use App\Models\Speacialization;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class UsersRepo implements UsersInterface{
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->get();
        return view('Admin.users.index',compact('users'));
    }

    public function create()
    {
        return view('Admin.users.create');
    }

    public function store( $request)
    {

         try{
                $data = new User();
                if($request->hasfile('image')){
                    $file = $request->file('image');
                    $ext  = $file->getClientOriginalExtension();
                    $filename = time().'.'.$ext;
                    $file->move('uploads/user-img/', $filename);
                    $data->image = $filename;
                }
                $data->fname = $request->fname;
                $data->lname = $request->lname;
                $data->email = $request->email;
                $data->password = Hash::make($request->password);
                $data->status = $request->status;
                $data->phone = $request->phone;
                $data->address1 = $request->address1;
                $data->save();
                toastr()->success(__('user create successfully'));
                return redirect()->route('users.index');

            } catch (\Exception $e) {
                return redirect()->back()->withErrors(['error' => $e->getMessage()]);
             }
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('Admin.users.edit',compact('user'));
    }

    public function update( $request, $id)
    {
        try{
            $data = User::findorfail($id);

            if($request->hasFile('image')){
                $path = 'uploads/user-img/' . $data->image;
                if(File::exists($path)){
                    File::delete($path);
                }
                $file = $request->file('image');
                $ext  = $file->getClientOriginalExtension();
                $filename = time() . '.' . $ext ;
                $file->move('uploads/user-img',$filename);
                $data->image = $filename;
            }

            $data->fname = $request->fname;
            $data->lname = $request->lname;
            $data->email = $request->email;
            $data->password = Hash::make($request->password);
            // $data->password = Hash::make($request->password)?'':'password';

            $data->status = $request->status;
            $data->phone = $request->phone;
            $data->address1 = $request->address1;
            $data->update();
            toastr()->success(__('user update successfully'));
            return redirect()->route('users.index');

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
         }
    }
    public function destroy($id)
    {
        try{
            $data = User::findorfail($id);
            if($data->image != 'default.jpg'){
                $path = 'uploads/user-img/' . $data->image;
                if(File::exists($path)){
                    File::delete($path);
                }
            }
            $data->delete();
            toastr()->error(__('user delete successfully'));
            return redirect()->route('users.index');
        }catch (\Exception $e){
                return redirect()->back()->withErrors(['error' => $e->getMessage()]);
            }
    }
 }
