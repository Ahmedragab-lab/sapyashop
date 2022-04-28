<?php

namespace Database\Seeders;

use App\Models\Agreement;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgreementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agreements')->delete();
        $agrrement = new Agreement();
        $agrrement->agreement_title = ['en'=>'A big agreement occured between X and Y company ','ar'=>'اتفاقيه هامه'];
        $agrrement->image = 'default.jpg';
        $agrrement->desc = 'يوجد لدينا اتفاقيات متعدده';
        $agrrement->status = 1;
        $agrrement->save();
    }
}
