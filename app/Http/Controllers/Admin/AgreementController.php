<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAgreement;
use App\Models\Agreement;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AgreementController extends Controller
{

    public function index()
    {
        $agreements=Agreement::all();
        return view('Admin.agreements.index',compact('agreements'));
    }


    public function create()
    {
        return view('admin.agreements.create');
    }

    public function store( StoreAgreement $request)
    {
        try {
            $validated = $request->validated();
            $agreement = new Agreement();
            if($request->hasfile('image')){
                $file = $request->file('image');
                $ext  = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
                $file->move('uploads/agreement/', $filename);
                $agreement->image = $filename;
            }
            $agreement->agreement_title = ['en'=>$request->agreement_title_en ,'ar'=>$request->agreement_title];
            $agreement->desc = $request->desc;
            $agreement->status = $request->status==true?'1':'0';
            $agreement->save();
            toastr()->success(__('Agreement create successfully'));
            return redirect('agreements');
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function show($id)
    {
        // $Last_agrement = Agreement::find($id);
        // return view('site.pages.last_agre',compact('Last_agrement'));
    }


    public function edit($id)
    {
        $agreements = Agreement::findorfail($id);
        return view('Admin.agreements.edit',compact('agreements'));
    }


    public function update(StoreAgreement $request,$id)
    {
        try{
            $validated = $request->validated();
            $agreement = Agreement::findorfail($id);
            if($request->hasFile('image')){
                $path = 'uploads/agreement/' . $agreement->image;
                if(File::exists($path)){
                    File::delete($path);
                }
                $file = $request->file('image');
                $ext  = $file->getClientOriginalExtension();
                $filename = time() . '.' . $ext ;
                $file->move('uploads/agreement',$filename);
                $agreement->image = $filename;
            }
            $agreement->agreement_title = ['en'=>$request->agreement_title_en ,'ar'=>$request->agreement_title];
            $agreement->desc = $request->desc;
            $agreement->status = $request->status==true?'1':'0';
            $agreement->save();
            toastr()->success(__('Agreement update successfully'));
            return redirect()->route('agreements.index');
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function destroy($id)
    {
        try{
            $agreement = Agreement::find($id);
            if($agreement->image != 'default.jpg'){
                $path = 'uploads/agreement/' . $agreement->image;
                if(File::exists($path)){
                    File::delete($path);
                }
            }
            $agreement->delete();
            toastr()->error(__('Agreement delete successfully'));
            return redirect()->route('agreements.index');
        }catch (\Exception $e){
                return redirect()->back()->withErrors(['error' => $e->getMessage()]);
            }
    }
}
