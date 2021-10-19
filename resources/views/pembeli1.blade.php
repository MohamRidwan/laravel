<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center><h2>Data Pembeli</h2></center>
    @foreach ($pembeli as $item)
    <table>
        <tr>

            <td>ID Pembeli</td> <td>:</td><td> {{$item->id}}</td>
        </tr>
        <tr>
            <td>Nama pembeli</td> <td> :</td> <td>{{$item->nama_pembeli}} </td>

        </tr>
        <tr>
            <td>Jenis Kelamin</td> <td> :</td> <td>{{$item->jns_kelamin}} </td>

        </tr>
        <tr>

            <td>Alamat</td>  <td>:</td> <td>{{$item->alamat}}</td>
        </tr>
        <tr>
            <td>Kode Pos</td> <td> :</td> <td>{{$item->kode_pos}} </td>

        </tr>
        <tr>
            <td>Kota</td>  <td>:</td> <td>{{$item->Kota}}</td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>  <td>:</td> <td>{{$item->tgl_lahir}}</td>
        </tr>
    </table>
    <hr>
        @endforeach
        <table>

            <tr>
                <td></td>
                <td></td>
                <td><a href="pembelian1"><button>Pembelian</button> </a>
                    <a href="barang1"><button>Barang</button></a>
                    <a href="pesanan1"><button>Pesanan</button></a>
            <a href="suplier1"><button>Suplier</button></a>
            <a href="pembeli1"><button>Pembeli</button></a></td>
                </tr>
            </table>

</body>
</html>
