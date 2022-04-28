<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\storedata;
use App\Models\User;
use App\Repo\UsersInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
class UsersController extends Controller
{
    protected $users;

    public function __construct(UsersInterface $users)
    {
        $this->users = $users;
    }

    public function index()
    {
        return $this->users->index();
    }


    public function create()
    {
        return $this->users->create();
    }

    public function store(storedata $request)
    {
        return $this->users->store( $request);
    }

    public function edit($id)
    {
        return $this->users->edit($id);
    }

    public function update(storedata $request, $id)
    {
        // return $this->users->update( $request, $id);
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
            if($data->email != $request->email){
                $this->validate($request,[
                    'email' => ['required','unique:users'],
                ]);
                $data->email = $request->email;
            }
            $data->password = Hash::make($request->password);
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
        return $this->users->destroy($id);
    }
}

