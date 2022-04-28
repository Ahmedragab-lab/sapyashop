<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserReqest;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('user_reqests')->delete();
        // $order = new UserReqest();
        // $order->name = Str::random(2);
        // $order->email = Str::random(2).'@gmail.com';
        // $order->address = Str::random(2);
        // $order->user_id = Str::random();
        // $order->service_id = Str::random();
        // $order->sms= Str::random(2);
        // $order->price = '5000';
        // $order->save();
    }
}
