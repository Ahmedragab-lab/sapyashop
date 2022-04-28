<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSetting;
use App\Http\Traits\AttachFilesTrait;
use App\Models\Setting;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Spatie\Valuestore\Valuestore;



class SettingController extends Controller
{

      use AttachFilesTrait;

    public function index(){

        // $collection = Setting::all();
        // $setting['setting'] = $collection->flatMap(function ($collection) {
        //     return [$collection->key => $collection->value];
        // });
        //  return view('Admin.setting.index', $setting);

        $settings = Setting::all();

        return view('Admin.setting.index',compact('settings'));

           // return 'aaaaaaaaaaa';
    }


    public function edit($id)
    {
        $settings = Setting::findorfail($id);
        return view('Admin.setting.edit',compact('settings'));
    }


    public function update(Request $request , $id ){

        try{
            $settings = Setting::findorfail($id);
            if($request->hasFile('image')){
                $path = 'uploads/settings/'. $settings->image;
                if(File::exists($path)){
                    File::delete($path);
                }
                $file = $request->file('image');
                $ext  = $file->getClientOriginalExtension();
                $filename = time() . '.' . $ext ;
                $file->move('uploads/settings',$filename);
                $settings->image = $filename;
            }
            $settings->comp_name = ['en'=>$request->comp_name_en ,'ar'=>$request->comp_name];
            $settings->about =  ['en'=>$request->about_en ,'ar'=>$request->about];
            $settings->phone1 = $request->phone1;
            $settings->phone2 = $request->phone2;
            $settings->country =  ['en'=>$request->country_en ,'ar'=>$request->country];
            $settings->city =  ['en'=>$request->city_en ,'ar'=>$request->city];
            $settings->email = $request->email;
            $settings->websiteLink = $request->websiteLink;
            $settings->FBLink = $request->FBLink;
            $settings->LinLink = $request->LinLink;
            $settings->YoutubeLink = $request->YoutubeLink;
            $settings->map = $request->map;
            $settings->update();

            toastr()->success(trans('messages.Update'));
            return back();
        }
        catch (\Exception $e){

            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
            // $info = $request->except('_token', '_method', 'logo');
            // foreach ($info as $key=> $value){
            //     Setting::where('key', $key)->update(['value' => $value]);
            // }




//            $key = array_keys($info);
//            $value = array_values($info);
//            for($i =0; $i<count($info);$i++){
//                Setting::where('key', $key[$i])->update(['value' => $value[$i]]);
//            }

            // if($request->hasFile('logo')) {
            //     $logo_name = $request->file('logo')->getClientOriginalName();
            //     Setting::where('key', 'logo')->update(['value' => $logo_name]);
            //     $this->uploadFile($request,'logo','logo');
            // }

            // toastr()->success(trans('messages.Update'));
            // return back();
        // }
        // catch (\Exception $e){

        //     return redirect()->back()->with(['error' => $e->getMessage()]);
        // }

    // }
        //https://github.com/spatie/valuestore
        // يأتي ينشئ ملف
        // config->settings.json
        // طريقة استدعائها في صفحات الفرونت
        // {!! getSettingsOf('comp_name') !!}

    // private function generateCache()
    // {
    //     $settings = Valuestore::make(config_path('settings.json'));
    //     Setting::all()->each(function ($item) use ($settings) {
    //         $settings->put($item->key, $item->value);
    //     });
    // }

}
