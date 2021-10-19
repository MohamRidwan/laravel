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
    <table>
    <tr>

        <td>ID pembelian</td> <td>:</td><td> {{$pembelian->id}}</td>
    </tr>
    <tr>
        <td>Nama Barang</td> <td> :</td> <td>{{$pembelian->nama_barang}} </td>

    </tr>
    <tr>
        <td>Nama Suplier</td> <td> :</td> <td>{{$pembelian->nama_suplier}} </td>

    </tr>
    <tr>

        <td>Qty</td>  <td>:</td> <td>{{$pembelian->qty}}</td>
    </tr>
    <tr>
        <td>Tanggal</td>  <td>:</td> <td>{{$pembelian->tgl}}</td>
    </tr>
</table>
<hr>

</body>
</html>
