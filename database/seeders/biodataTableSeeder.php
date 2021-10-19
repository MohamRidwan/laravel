<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class biodataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bio = [
            ['name'=>'Mohammad Ridwan','gender'=>'male','bornDate'=>'2003-09-12','weight'=>'53','height'=>'170'],
            ['name'=>'Lestari','gender'=>'female','bornDate'=>'1999-09-09','weight'=>'50','height'=>'170']
        ];
        DB::table('biodatas')->insert($bio);
    }
}
