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
            <td>Nama Pembeli</td> <td> :</td> <td>{{$item->nama}} </td>

        </tr>
        <tr>

            <td>Jenis Kelamin</td>  <td>:</td> <td>{{$item->jk}}</td>
        </tr>
        <tr>
            <td>No Telephone</td>  <td>:</td> <td>{{$item->tlp}}</td>
        </tr>
        <tr>
           <td>Alamat</td>  <td>:</td> <td>{{$item->alamat}}</td>
        </tr>
        @endforeach
        <tr>
            <td></td>
            <td></td>
            <td><a href="pembayaran"><button>Pembayaran</button> </a><br>
                <a href="barang"><button>Barang</button></a><br>
                <a href="suplier"><button>Suplier</button></a><br>
                <a href="transaksi"><button>transaksi</button></a><br>
                <a href="pembeli"><button>Pembeli</button></a></td>

        </tr>


            </table>
</body>
</html>
