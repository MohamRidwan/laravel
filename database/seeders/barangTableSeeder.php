<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class barangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang=[
            ['nama'=>'spidol','varian'=>'warna hitam','harga_beli'=>'5000','harga_jual'=>'7000'],
            ['nama'=>'buku','varian'=>'30 lembar','harga_beli'=>'2500','harga_jual'=>'3000'],
            ['nama'=>'pensil','varian'=>'pensil tulis','harga_beli'=>'2500','harga_jual'=>'3000'],
            ['nama'=>'pensil warna','varian'=>'warna warni','harga_beli'=>'20000','harga_jual'=>'23000'],
            ['nama'=>'penggaris','varian'=>'panjang 30 cm','harga_beli'=>'1500','harga_jual'=>'2000']
        ];
        DB::table('barang')->insert($barang);
    }
}
