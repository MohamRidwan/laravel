<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center><h2>Data Pembelian</h2></center>
    @foreach ($pembelian as $item)

    <table>
        <tr>

            <td>ID pembelian</td> <td>:</td><td> {{$item->id}}</td>
        </tr>
        <tr>
            <td>Nama Barang</td> <td> :</td> <td>{{$item->nama_barang}} </td>

        </tr>
        <tr>
            <td>Nama Suplier</td> <td> :</td> <td>{{$item->nama_suplier}} </td>

        </tr>
        <tr>

            <td>Qty</td>  <td>:</td> <td>{{$item->qty}}</td>
        </tr>
        <tr>
            <td>Tanggal</td>  <td>:</td> <td>{{$item->tgl}}</td>
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
