<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>

            <td>ID Suplier</td> <td>:</td><td> {{$id}}</td>
        </tr>
        <tr>
            <td>Nama Suplier</td> <td> :</td> <td>{{$nama}} </td>

        </tr>
        <tr>

            <td>No Telephone</td>  <td>:</td> <td>{{$tlp}}</td>
        </tr>
        <tr>
           <td>Alamat</td>  <td>:</td> <td>{{$alamat}}</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><a href="pembayaran"><button>Pembayaran</button> </a><br>
                <a href="barang"><button>Barang</button></a><br>
                <a href="suplier"><button>Suplier</button></a><br>
                <a href="pembeli"><button>Pembeli</button></a></td>

        </tr>


            </table>
</body>
</html>
