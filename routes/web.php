<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('tentang');
});

Route::get('profile', function () {
    $nama = "ridwan";
    return view('profile',compact('nama'));
});

Route::get('biodata', function () {
    $nama = "ridwan";
    $umur = "18 tahun";
    $alamat = "bandung";
    $cita = "tentara";
    $hobi = "olah raga";
    return view('biodata',compact('nama','umur','alamat','cita','hobi'));
});

Route::get('barang', function () {
    $id = "1";
    $nama = "hp";
    $harga = 1000000;
    $stok = 150;
    return view('barang',compact('id','nama','harga','stok'));
});
Route::get('pembayaran', function () {
    $id = "01";
    $tgl = "14-Oktober-2021";
    $byr = 1000000;
    return view('pembayaran',compact('id','tgl','byr'));
});
Route::get('suplier', function () {
    $id = "011";
    $nama = "Usep";
    $tlp = "083128746821";
    $alamat = "cibau";

    return view('suplier',compact('id','nama','tlp','alamat'));
});
Route::get('pembeli', function () {
    $id = "120";
    $nama = "santi";
    $jk = "Perempuan";
    $tlp = "083123456789";
    $alamat = "ciharedang";
    return view('pembeli',compact('id','nama','jk','tlp','alamat'));
});
Route::get('transaksi', function () {
    $id = "99";
    $suplier = "Usep";
    $barang = "hp";
    $tgl = "14-Oktober-2021";
    $ket = "Terimakasih sudah bertransaksi bersama kami";
    return view('transaksi',compact('id','suplier','barang','tgl','ket'));
});

// Route basic
Route::get('about', function () {
return "<h1>Hello</h1>"
. "<br>Selamat Datang DI Web App Saya"
. "<br>Laravel Emang Keren";
});

Route::get('profil', function () {
$nama = "Mohammad Ridwan";
    return "<h1>Nama Saya $nama</h1>";
});

Route::get('post/{halaman?}', function ($a = 1) {

    return view ('post',['posting' => $a]);
});

Route::get('book',function(){
$books=[
    ['id' => 1, 'title' => 'belajar laravel itu mudah'],
    ['id' => 2, 'title' => 'belajar baca huruf hijaiyyah'],
    ['id' => 3, 'title' => 'belajar baca aksara sunda'],
];
return view('book', compact('books'));
});

Route::get('komik',function(){
    $juduls = [
        ['id' => 1, 'judul' => 'naruto shipuden','sinopsis' => 'film','bahasa' => 'jepang','nama' => ['nama1' => "Naruto",
                                                            'nama2' => "Sakura",
                                                            'nama3' => "Sasuke"]],
        ['id' => 2, 'judul' => 'spongebob','sinopsis' => 'film','bahasa' => 'inggris','nama' => [  'nama1' => "Spongebob",
                                                        'nama2' => "jerry",
                                                        'nama3' => "patrik"]],
        ['id' => 3, 'judul' => 'Upin & Ipin','sinopsis' => 'film','bahasa' => 'melayu','nama' => [ 'nama1' => "Upin",
                                                           'nama2' => "Ipin",
                                                           'nama3' => "Memey"]],
        ['id' => 4, 'judul' => 'smackdown','sinopsis' => 'film','bahasa' => 'inggris','nama' => [ 'nama1' => "Kane",
                                                       'nama2' => "Rey Mistreyo",
                                                       'nama3' => "Tajiri"]],
        ['id' => 5, 'judul' => 'avengers','sinopsis' => 'film','bahasa' => 'inggris','nama' => [ 'nama1' => "Iron Man",
                                                      'nama2' => "Hulk",
                                                      'nama3' => "Capten Amerika"]]
    ];

return view('komik', compact('juduls'));
});

Route::get('post', function () {

    return "<h1>Halaman Post 1</h1>";
});

// route parameter
Route::get('post/{id}', function ($a) {

    return "<h1>Halaman Post ke $a</h1>";
});

// buatlah route "Biodata" Parameter
// nama,umur,&alamat
Route::get('bio/{nama}/{umur}/{alamat}', function ($nama,$umur,$alamat) {

    return "<h3>Biodata</h3>"
    . "Nama  $nama <br>"
    . "Umur   $umur <br>"
    . "Alamat  : $alamat";
});


// Tugas membuat route makanan,minuman,cemilan menggunakan optional parameter
Route::get('lapar/{makanan?}/{minuman?}/{cemilan?}', function ($makanan = null,$minuman = null,$cemilan = null) {
    if ($makanan == null && $minuman == null && $cemilan == null) {
        $sa = "Anda Tidak Pesan, Silahkan Pulang";
    }
            if ($makanan != null ) {
            $sa = "Pesanan <br>"
            . "Makanan : $makanan <br>";
        }
        if ($makanan != null && $minuman != null ) {
            $sa = "Pesanan <br>"
            . "Makanan : $makanan <br>"
            . "Minuman : $minuman <br>";
        }

        if ($makanan != null && $minuman != null && $cemilan != null) {
            $sa = "Pesanan <br>"
            . "Makanan : $makanan <br>"
            . "Minuman : $minuman <br>"
            . "Cemilan : $cemilan";
}

    return "$sa";
});

Route::get('testpost', function() {
    $query = App\models\Post::all();
    return view('test-post',compact('query'));
    });

Route::get('testmodel', function() {
    $query = App\models\Post::all();
    return $query;
    });

Route::get('testmodel1', function() {
    $query = App\models\Post::find(1);
    return $query;
    });
Route::get('testmodel2', function() {
    $query = App\models\Post::where('title','like','%cepat nikah%')->get();
    return $query;
    });

// route voew
    Route::get('beranda', function() {
        $html = "<h1>Mohammad Ridwan</h1>";
    return view('beranda',compact('html'));
    });


    // route controller
    Route::get('latihan-controller',
    [MyController::class,'latihan']);

    Route::get('biodata-saya',
    [MyController::class,'biodatadiri']);

    Route::get('bio',
    [MyController::class,'bio'], );

    // Tugas
    Route::get('barang1',
    [MyController::class,'barang'], );

    Route::get('pesanan1',
    [MyController::class,'pesanan'], );

    Route::get('pembelian1',
    [MyController::class,'pembelian'], );

    Route::get('pembeli1',
    [MyController::class,'pembeli'], );

    Route::get('suplier1',
    [MyController::class,'suplier'], );

    Route::get('barang1/{id}',
    [MyController::class,'barang2'] );
    Route::get('pesanan1/{id}',
    [MyController::class,'pesanan2'] );
    Route::get('pembelian1/{id}',
    [MyController::class,'pembelian2'] );
    Route::get('pembeli1/{id}',
    [MyController::class,'pembeli2'] );
    Route::get('suplier1/{id}',
    [MyController::class,'suplier2'] );


