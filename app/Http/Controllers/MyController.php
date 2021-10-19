<?php

namespace App\Http\Controllers;
use App\Models\Biodata;
use App\Models\Barang;
use App\Models\Pembeli;
use App\Models\Pembelian;
use App\Models\Pesanan;
use App\Models\Suplier;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function latihan()
    {
        $result = "Latihan Controller";
        return view ('latihan',compact('result'));
    }

    public function biodatadiri()
    {
        $nama = "Mohammad Ridwan";
        $tempat = "bandung";
        $tgl = "09 Desember 20003";
        $umur = 18;
        $status = "Pelajar";
        return view('biodatadiri',compact('nama','tempat','tgl','umur','status'));
    }
    public function bio(){
    // menggambil semua data diri model Biodata
        $bio =Biodata::all();
        return view('biodata1',compact('bio'));
    }
    public function barang(){
    // menggambil semua data diri model Biodata
        $barang =Barang::all();
        return view('barang1',compact('barang'));
    }
    public function pesanan(){
    // menggambil semua data diri model Biodata
        $pesanan =Pesanan::all();
        return view('pesanan1',compact('pesanan'));
    }
    public function pembelian(){
    // menggambil semua data diri model Biodata
        $pembelian =Pembelian::all();
        return view('pembelian1',compact('pembelian'));
    }
    public function pembeli(){
    // menggambil semua data diri model Biodata
        $pembeli =Pembeli::all();
        return view('pembeli1',compact('pembeli'));
    }
    public function suplier(){
    // menggambil semua data diri model Biodata
        $suplier =Suplier::all();
        return view('suplier1',compact('suplier'));
    }
    public function barang2($id){
    // menggambil semua data diri model Biodata
        $barang =Barang::findOrFail($id);
        return view('barang2', compact('barang'));
    }
    public function pesanan2($id){
    // menggambil semua data diri model Biodata
        $pesanan =Pesanan::findOrFail($id);
        return view('pesanan2',compact('pesanan'));
    }
    public function pembelian2($id){
    // menggambil semua data diri model Biodata
        $pembelian =Pembelian::findOrFail($id);
        return view('pembelian2',compact('pembelian'));
    }
    public function pembeli2($id){
    // menggambil semua data diri model Biodata
        $pembeli =Pembeli::findOrFail($id);
        return view('pembeli2',compact('pembeli'));
    }
    public function suplier2($id){
    // menggambil semua data diri model Biodata
        $suplier =Suplier::findOrFail($id);
        return view('suplier2',compact('suplier'));
    }
}
