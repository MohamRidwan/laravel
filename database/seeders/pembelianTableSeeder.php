<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class pembelianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $pembelian = [
           ['nama_barang'=>'spidol','nama_suplier'=>'aldi','qty'=>'1000','tgl'=>'2021-10-18'],
           ['nama_barang'=>'buku','nama_suplier'=>'jojo','qty'=>'1000','tgl'=>'2021-10-18'],
           ['nama_barang'=>'pensil','nama_suplier'=>'kenji','qty'=>'1000','tgl'=>'2021-10-18'],
           ['nama_barang'=>'pensil warna','nama_suplier'=>'dani','qty'=>'1000','tgl'=>'2021-10-18'],
           ['nama_barang'=>'penggaris','nama_suplier'=>'gani','qty'=>'1000','tgl'=>'2021-10-18']
       ];
       DB::table('pembelian')->insert($pembelian);
    }
}
