<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class pesananTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesanan=[
            ['nama_pembeli'=>'udin','nama_barang'=>'spidol','qty'=>'1000','tgl_pesan'=>'2021-10-18'],
            ['nama_pembeli'=>'gonzales','nama_barang'=>'buku','qty'=>'1000','tgl_pesan'=>'2021-10-18'],
            ['nama_pembeli'=>'indah','nama_barang'=>'pensil','qty'=>'1000','tgl_pesan'=>'2021-10-18'],
            ['nama_pembeli'=>'kharmelita','nama_barang'=>'pensil warna','qty'=>'1000','tgl_pesan'=>'2021-10-18'],
            ['nama_pembeli'=>'beta','nama_barang'=>'penggaris','qty'=>'1000','tgl_pesan'=>'2021-10-18']

        ];
        DB::table('pesanan')->insert($pesanan);
    }
}
