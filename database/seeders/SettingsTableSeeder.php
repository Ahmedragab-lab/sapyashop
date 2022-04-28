<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->delete();
        $settings = new Setting();

        $settings->comp_name= ['en'=>'MoraSoft','ar'=>'مورا سوفت'];
        $settings->about = ['en'=>'Mora Soft Company for transportation and shipping services in various ways.. The company is at your service around the time','ar'=>'شركة مورا سوفت لخدمات النقل والشحن بمختلف الطرق .. تعمل الشركة على خدمتك على مدر '];
        $settings->phone1 = '+ 970 595 842 240';
        $settings->phone2 = '+ 972 595 842 240';
        $settings->country = ['en'=>'Saudi Arabia','ar'=>'المملكة العربية السعودية '];
        $settings->city = ['en'=>'Exit 14, Omar Bin Abdulaziz Road, Riyadh','ar'=>' مخرج 14 , طريق عمر بن عبدالعزيز , الرياض'];
        $settings->email = 'admin@morasoft.net';
        $settings->websiteLink =  'https://www.morasoft.net';
        $settings->FBLink =  'https://www.facebook.com';
        $settings->LinLink = 'https://ae.linkedin.com';
        $settings->YoutubeLink =  'https://www.youtube.com';
        $settings->map = 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d27231.420735041746!2d34.41045893742996!3d31.443660285671744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2s!4v1638996252818!5m2!1sar!2s';

        $settings->image= '1.png';
        $settings->save();



        // $data = [


        //     ['key' => 'comp_name', 'value' => 'MoraSoft Company'],
        //     ['key' => 'about', 'value' => 'شركة مورا سوفت لخدمات النقل والشحن بمختلف الطرق .. تعمل الشركة على خدمتك على مدار الساعة ونقل شحناتك وتوصيلها عبر أأمن الطرق وافضل الاسعار'],
        //     ['key' => 'country', 'value' => 'المملكة العربية السعودية'],
        //     ['key' => 'city', 'value' => 'مخرج 14 , طريق عمر بن عبدالعزيز , الرياض'],
        //     ['key' => 'phone1', 'value' => '+ 0500699206'],
        //     ['key' => 'phone2', 'value' => '+ 0560032681'],
        //     ['key' => 'email', 'value' => 'admin@morasoft.net'],
        //     ['key' => 'websiteLink', 'value' => 'www.morasoft.net'],
        //     ['key' => 'FBLink', 'value' => 'www.morasoft.net'],
        //     ['key' => 'LinLink', 'value' => 'www.morasoft.net'],
        //     ['key' => 'YoutubeLink', 'value' => 'www.morasoft.net'],
        //     ['key' => 'logo', 'value' => '1.jpg'],
        // ];

        // DB::table('settings')->insert($data);


    }

}
