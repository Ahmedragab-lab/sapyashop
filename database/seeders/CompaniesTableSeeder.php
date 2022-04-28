<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->delete();
        $comps = new Company();
        $comps->name = ['en'=>'MoraSoft Company','ar'=>'شركة مورا سوفت'];
        $comps->desc = ' شركة مورا سوفت شركة مورا سوفت شركة مورا سوفت شركة مورا سوفت شركة مورا سوفت شركة مورا سوفت';
        $comps->email = 'ahyjab@gmail.com';
        $comps->phone = '00972595842240';
        $comps->address = 'palestine - gaza';

        $comps->save();

    //    DB::table('companies')->insert([
        // Company ::truncate();
        // DB::table('companies')->insert([
       // $companies = [
        //     [
        //         'name' => ['ar'=>' شركة مورا سوفت' , 'en'=>'MoraSoft Company'],
        //         'desc' =>  'شركة رائدة في مجال تعليم البرمجيات ،  شركة رائدة في مجال تعليم البرمجيات ،  شركة رائدة في مجال تعليم البرمجيات  شركة رائدة في مجال تعليم البرمجيات  شركة رائدة في مجال تعليم البرمجيات  شركة رائدة في مجال تعليم البرمجيات  شركة رائدة في مجال تعليم البرمجيات',
        //         'email' => 'ahyjab@gmail.com',
        //         'Phone' => '00972595842240',
        //         'address' => 'palestine - gaza',

        //     ],

        //     [
        //         'name' => ['ar'=>' شركة مورا سوفت' , 'en'=>'MoraSoft Company'],
        //         'desc' =>  'شركة رائدة في مجال تعليم البرمجيات ،  شركة رائدة في مجال تعليم البرمجيات ،  شركة رائدة في مجال تعليم البرمجيات  شركة رائدة في مجال تعليم البرمجيات  شركة رائدة في مجال تعليم البرمجيات  شركة رائدة في مجال تعليم البرمجيات  شركة رائدة في مجال تعليم البرمجيات',
        //         'email' => 'ahyjab@gmail.com',
        //         'Phone' => '00972595842240',
        //         'address' => 'palestine - gaza',

        //     ],
        //     [
        //         'name' => ['ar'=>' شركة مورا سوفت' , 'en'=>'MoraSoft Company'],
        //         'desc' =>  'شركة رائدة في مجال تعليم البرمجيات ،  شركة رائدة في مجال تعليم البرمجيات ،  شركة رائدة في مجال تعليم البرمجيات  شركة رائدة في مجال تعليم البرمجيات  شركة رائدة في مجال تعليم البرمجيات  شركة رائدة في مجال تعليم البرمجيات  شركة رائدة في مجال تعليم البرمجيات',
        //         'email' => 'ahyjab@gmail.com',
        //         'Phone' => '00972595842240',
        //         'address' => 'palestine - gaza',

        //     ],



        // ]);
        // Company:: insert($companies);

    }
}
