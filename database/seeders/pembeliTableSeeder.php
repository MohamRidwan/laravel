<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class pembeliTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $pembeli =[
           ['nama'=>'udin','jns_kelamin'=>'liki-laki','alamat'=>'bandung','kode_pos'=>'40123','Kota'=>'bandung','tgl_lahir'=>'1998-08-08'],
           ['nama'=>'gonzales','jns_kelamin'=>'liki-laki','alamat'=>'jakarta','kode_pos'=>'40898','Kota'=>'jakarta','tgl_lahir'=>'1998-09-09'],
           ['nama'=>'indah','jns_kelamin'=>'perempuan','alamat'=>'semarang','kode_pos'=>'41238','Kota'=>'semarang','tgl_lahir'=>'1998-10-10'],
           ['nama'=>'kharmelita','jns_kelamin'=>'perempuan','alamat'=>'medan','kode_pos'=>'42111','Kota'=>'medan','tgl_lahir'=>'1998-11-11'],
           ['nama'=>'beta','jns_kelamin'=>'laki-laki','alamat'=>'papua','kode_pos'=>'43221','Kota'=>'papua','tgl_lahir'=>'1998-12-12']
       ];
       DB::table('pembeli')->insert($pembeli);
    }
}
