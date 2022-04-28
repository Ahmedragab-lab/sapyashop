<?php

namespace App\Repo;

use App\Models\Company;
use Illuminate\Support\Facades\Hash;


class CompaniesRepo implements CompaniesInterface{


    public function index()
    {
        $companies = Company::orderBy('id', 'DESC')->get();
        return view('Admin.companies.index',compact('companies'));
    }

    public function create()
    {
         return view('Admin.companies.create');
    }

    public function store( $request)
    {
        try{
            $companies = new company();

            $companies->name = ['en' => $request->name_en, 'ar' => $request->name_ar];
            $companies->desc = $request->desc;
            $companies->email = $request->email;
            $companies->phone = $request->phone;
            $companies->address = $request->address;

            $companies->save();
            toastr()->success(__(' create successfully'));
            return redirect()->route('companies.index');
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

              //  }
    }

    public function edit($id)
    {
        $companies=company::findOrFail($id);

        return view('Admin.companies.edit',compact('companies'));

    }

    public function update( $request)
    {

               try{

                // $validated = $request->validated();
                 $companies = Company::findorfail($request->id);

                 $companies->name = ['en' => $request->name_en, 'ar' => $request->name_ar];
                 $companies->desc = $request->desc;
                 $companies->email = $request->email;
                 $companies->phone = $request->phone;
                 $companies->address = $request->address;
                 $companies->save();

                 toastr()->success(__(' Updated successfully'));
                 return redirect()->route('companies.index');
             }


         catch (\Exception $e){
             return redirect()->back()->withErrors(['error' => $e->getMessage()]);
         }


    }
    public function destroy($id)
    {


        Company::findOrFail($id)->delete();
        // Company::destroy($request->id);
        toastr()->error(trans('messages.Delete'));

        return redirect()->route('companies.index');
    }
 }
