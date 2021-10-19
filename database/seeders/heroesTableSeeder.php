<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;


class heroesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $heroes = [
            ['realname'=>'tony stark','heroname'=>'iron man','power'=>'laser','kindofpower'=>'armor bertenaga yang memberinya kekuatan dan daya tahan super, terbang, dan sederet senjata','gender'=>'laki-laki','height'=>'175cm','weight'=>'65kg','borndate'=>'29 Mei 1970'],
            ['realname'=>'Steve Rogers','heroname'=>'captain america','power'=>'kuat','kindofpower'=>'memlikiki badan yang kuat yang di hasilkan dari eksperimen','gender'=>'laki-laki','height'=>'183 cm','weight'=>'75kg','borndate'=>'4 Juli 1918'],
            ['realname'=>'Givanildo Vieira de Souza','heroname'=>'Hulk','power'=>'kuat','kindofpower'=>'memlikiki badan yang kuat yang di hasilkan dari eksperimen','gender'=>'laki-laki','height'=>'2,5 m','weight'=>'521 Kg','borndate'=>'25 Juli 1986'],
            ['realname'=>'Peter Parker','heroname'=>'spider man','power'=>'jaring laba-laba','kindofpower'=>'memlikiki kekuatan karna digigit oleh laba laba','gender'=>'laki-laki','height'=>'73 cm','weight'=>'70 Kg','borndate'=>'27 Juni 1975'],
            ['realname'=>'Melina Vostokoff','heroname'=>'Black Widow','power'=>'cerdas dan lincah','kindofpower'=>'cerdas dan lincah','gender'=>'perempuan','height'=>'73 cm','weight'=>'65 Kg','borndate'=>'1984'],
            ['realname'=>'T Challa','heroname'=>'Black Panther','power'=>'lincah dan cakar yang tajam','kindofpower'=>'lincah dan kekuatan nya hampur setara dengan black panther','gender'=>'laki-laki','height'=>'73 cm','weight'=>'75 Kg','borndate'=>'29 November 1976'],
            ['realname'=>'Kal-El','heroname'=>'super man','power'=>'kuat,terbang,laser dari mata','kindofpower'=>'memiliki badan yang kuat,bisa terbang,dan dampat mengeluarkan laser dari matanya','gender'=>'laki-laki','height'=>'73 cm','weight'=>'75 Kg','borndate'=>'38 Eorx 9998'],
            ['realname'=>'jaka','heroname'=>'jaka sembung','power'=>'mahir menggunakan golok','kindofpower'=>'mahir menggunakan kolok','gender'=>'laki-laki','height'=>'73 cm','weight'=>'75 Kg','borndate'=>'38 Eorx 9998'],
            ['realname'=>'Thor','heroname'=>'thor','power'=>'god','kindofpower'=>'memiliki kekuatan dari dewa yang di suport oleh senjatanya yaitu palu','gender'=>'laki-laki','height'=>'191 cm','weight'=>'78kg','borndate'=>'11 Agustus 1983'],
            ['realname'=>'wiro','heroname'=>'wiro sableng','power'=>'kuat','kindofpower'=>'memiliki kampak sebagas senjata utama','gender'=>'laki-laki','height'=>'171 cm','weight'=>'73kg','borndate'=>'11 Agustus 1983']
            ];
            // masukkan data ke database
            DB::table('heroes')->insert($heroes);
    }
}

