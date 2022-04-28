<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
            [
                'fname' => 'ahmed',
                'lname' => 'ragab',
                'email' => 'ahmed@gmail.com',
                'password' => bcrypt('258258258'),
                'phone' => '01021493036',
                'address1' => 'Cairo',
                'address2' => 'Hurghada',
                'city' => 'Cairo',
                'country' => 'Egypt',
                'image'=>'wolf.jpg',
            ],
            [
                'fname' => 'mohmed',
                'lname' => 'ragab',
                'email' => 'mohmed@gmail.com',
                'password' => bcrypt('258258258'),
                'phone' => '01021493036',
                'address1' => 'Cairo',
                'address2' => 'Hurghada',
                'city' => 'Cairo',
                'country' => 'Egypt',
                'image'=>'img_3.png',
            ],
            [
                'fname' => 'dina',
                'lname' => 'salem',
                'email' => 'dina@gmail.com',
                'password' => bcrypt('123456'),
                'phone' => '01021493036',
                'address1' => 'palestine',
                'address2' => 'gaza',
                'city' => 'Gaza',
                'country' => 'palestine',
                'image'=>'img_5.jpg',
            ],
            [
                'fname' => 'Noha',
                'lname' => 'ragab',
                'email' => 'Noha@gmail.com',
                'password' => bcrypt('258258258'),
                'phone' => '01021493036',
                'address1' => 'Cairo',
                'address2' => 'Hurghada',
                'city' => 'Cairo',
                'country' => 'Egypt',
                'image'=>'img_6.jpg',
            ],
        ]);
    }
}
