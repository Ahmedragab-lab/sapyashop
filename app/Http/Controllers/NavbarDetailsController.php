<?php

namespace App\Http\Controllers;

use App\Models\navbar_details;
use Illuminate\Http\Request;

class NavbarDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nav=navbar_details::all();
        return view('Admin.dashbord_forms.navbar_data',compact('nav'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required|unique:customers|max:255',

        // ],[

        //     'cus_name.required' =>'يرجي ادخال اسم ',
        //     'cus_phone.required' =>'يرجي ادخال الهاتف ',
        //     'cus_phone.unique' =>'الهاتف مسجل مسبقا',
        // ]);


        try {
            $nav = new navbar_details();
            $nav->name = ['en' => $request->Name_en, 'ar' => $request->Name];
            $nav->route_name = $request->route_name;
            $nav->save();
            return redirect()->route('nav_data.index');
        }

        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\navbar_details  $navbar_details
     * @return \Illuminate\Http\Response
     */
    public function show(navbar_details $navbar_details)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\navbar_details  $navbar_details
     * @return \Illuminate\Http\Response
     */
    public function edit(navbar_details $navbar_details)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\navbar_details  $navbar_details
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, navbar_details $navbar_details)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\navbar_details  $navbar_details
     * @return \Illuminate\Http\Response
     */
    public function destroy(navbar_details $navbar_details)
    {
        //
    }
}
