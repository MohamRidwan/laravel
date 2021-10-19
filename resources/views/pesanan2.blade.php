<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center><h2>Data Pesanan</h2></center>
    <table>
        <tr>

            <td>ID Pesanan</td> <td>:</td><td> {{$id}}</td>
        </tr>
        <tr>
            <td>Nama Pembeli</td> <td> :</td> <td>{{$nama_pembeli}} </td>

        </tr>
        <tr>
            <td>Nama Barang</td> <td> :</td> <td>{{$nama_barang}} </td>

        </tr>
        <tr>

            <td>Qty</td>  <td>:</td> <td>{{$qty}}</td>
        </tr>
        <tr>
            <td>tanggal Pesan</td>  <td>:</td> <td>{{$tgl_pesan}}</td>
        </tr>
    </table>
    <hr>
</body>
</html>
