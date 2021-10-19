<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class suplierTableSeeder extends Seeder
{
    /**
     * Run the database .
     *
     * @return void
     */
    public function run()
    {
        $suplier =[
            ['nama'=>'aldi','alamat'=>'bandung','kode_pos'=>'40123','kota'=>'bandung'],
            ['nama'=>'jojo','alamat'=>'jakarta','kode_pos'=>'40123','kota'=>'jakarta'],
            ['nama'=>'kenji','alamat'=>'semarang','kode_pos'=>'40123','kota'=>'semarang'],
            ['nama'=>'dani','alamat'=>'medan','kode_pos'=>'40123','kota'=>'medan'],
            ['nama'=>'gani','alamat'=>'papua','kode_pos'=>'40123','kota'=>'papua']
        ];
        DB::table('suplier')->insert($suplier);
    }
}
