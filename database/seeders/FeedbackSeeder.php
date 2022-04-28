<?php

namespace Database\Seeders;

use App\Models\Feedback;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feedback')->delete();
        $feedback = new Feedback();
        $feedback->user_id = User::all()->random()->id;
        $feedback->serv_id = Service::all()->random()->id;
        $feedback->feedback = 'nice people and very good services thank you so much wolf company ';
        $feedback->save();
        $feedback = new Feedback();
        $feedback->user_id = User::all()->random()->id;
        $feedback->serv_id = Service::all()->random()->id;
        $feedback->feedback = 'mora soft welcome to everyone ';
        $feedback->save();
        $feedback = new Feedback();
        $feedback->user_id = User::all()->random()->id;
        $feedback->serv_id = Service::all()->random()->id;
        $feedback->feedback = 'good services and i am happy to join to ur channel ';
        $feedback->save();
        $feedback = new Feedback();
        $feedback->user_id = User::all()->random()->id;
        $feedback->serv_id = Service::all()->random()->id;
        $feedback->feedback = 'nice people and very good services thank you so much wolf company ';
        $feedback->save();
        $feedback = new Feedback();
        $feedback->user_id = User::all()->random()->id;
        $feedback->serv_id = Service::all()->random()->id;
        $feedback->feedback = 'nice people and very good services thank you so much wolf company ';
        $feedback->save();
        $feedback = new Feedback();
        $feedback->user_id = User::all()->random()->id;
        $feedback->serv_id = Service::all()->random()->id;
        $feedback->feedback = 'nice people and very good services thank you so much wolf company ';
        $feedback->save();
    }
}
