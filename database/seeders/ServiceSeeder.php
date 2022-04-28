<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->delete();
        $serv = new Service();
        $serv->serve_name = ['en' => 'warehousing', 'ar' => 'نقل برى'];
        $serv->image = 'default_1.jpg';
        $serv->desc = 'Al Roshd shipping team is distinguished by providing in targeted logistics services that include reducing procedures, saving time and unifying the parties in evolved in the shipment. and that is through the proper selection of the best shipping methods with the lowest cost and the fastest time in a way that suits the size and type of goods.
        Al Roshd company has an electronic system that connects it with the customs network, shipping lines, our agents abroad and our customers.';
        $serv->status = 1;
        $serv->save();
        $serv = new Service();
        $serv->serve_name = ['en' => 'Air Freight', 'ar' => 'نقل جوى'];
        $serv->image = 'default_2.jpeg';
        $serv->desc = 'Al Roshd shipping team is distinguished by providing in targeted logistics services that include reducing procedures, saving time and unifying the parties in evolved in the shipment. and that is through the proper selection of the best shipping methods with the lowest cost and the fastest time in a way that suits the size and type of goods.
        Al Roshd company has an electronic system that connects it with the customs network, shipping lines, our agents abroad and our customers.';
        $serv->status = 1;
        $serv->save();
        $serv = new Service();
        $serv->serve_name = ['en' => 'Ocean Freight', 'ar' => 'نقل بحرى'];
        $serv->image = 'default_3.jpg';
        $serv->desc = 'Al Roshd shipping team is distinguished by providing in targeted logistics services that include reducing procedures, saving time and unifying the parties in evolved in the shipment. and that is through the proper selection of the best shipping methods with the lowest cost and the fastest time in a way that suits the size and type of goods.
        Al Roshd company has an electronic system that connects it with the customs network, shipping lines, our agents abroad and our customers.';
        $serv->status = 1;
        $serv->save();
    }
}
