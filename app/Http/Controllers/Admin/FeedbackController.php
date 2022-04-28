<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks = Feedback::all();
        return view('admin.feedback.index',compact('feedbacks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servs=Service::all();
        $clients = User::all();
        return view('admin.feedback.create',compact('servs','clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $feedback = new Feedback();
            $feedback->user_id = $request->client_id;
            $feedback->serv_id = $request->serv_id;
            $feedback->feedback = $request->feedback;
            $feedback->save();
            toastr()->success(__('feedback create successfully'));
            return redirect()->route('feedbacks.index');
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feedback = Feedback::findorfail($id);
        $servs=Service::all();
        $clients = User::all();
        return view('admin.feedback.edit',compact('servs','clients','feedback'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $feedback = Feedback::findorfail($id);
            $feedback->user_id = $request->client_id;
            $feedback->serv_id = $request->serv_id;
            $feedback->feedback = $request->feedback;
            $feedback->update();
            toastr()->success(__('feedback updated successfully'));
            return redirect()->route('feedbacks.index');
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $feedback = Feedback::findorfail($id);
            $feedback->delete();
            toastr()->error(__('feedback deleted successfully'));
            return redirect()->route('feedbacks.index');
        }catch (\Exception $e){
                return redirect()->back()->withErrors(['error' => $e->getMessage()]);
            }
    }
}
