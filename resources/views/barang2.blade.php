<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center><h2>Data Barang</h2></center>

    <table>
        <tr>
            <td>Nama Barang</td> <td> :</td> <td>{{$barang->nama}} </td>

        </tr>
        <tr>
            <td>Varian</td> <td> :</td> <td>{{$barang->varian}} </td>

        </tr>
        <tr>

            <td>Harga Beli</td>  <td>:</td> <td>{{$barang->harga_beli}}</td>
        </tr>
        <tr>
           <td>Harga Jual</td>  <td>:</td> <td>{{$barang->harga_jual}}</td>
        </tr>

            </table>
            <hr>





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
