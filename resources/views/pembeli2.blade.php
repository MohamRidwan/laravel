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
            <table>
                <tr>

                    <td>ID Pembeli</td> <td>:</td><td> {{$pembeli->id}}</td>
                </tr>
                <tr>
                    <td>Nama pembeli</td> <td> :</td> <td>{{$pembeli->nama_pembeli}} </td>

                </tr>
                <tr>
                    <td>Jenis Kelamin</td> <td> :</td> <td>{{$pembeli->jns_kelamin}} </td>

                </tr>
                <tr>

                    <td>Alamat</td>  <td>:</td> <td>{{$pembeli->alamat}}</td>
                </tr>
                <tr>
                    <td>Kode Pos</td> <td> :</td> <td>{{$pembeli->kode_pos}} </td>

                </tr>
                <tr>
                    <td>Kota</td>  <td>:</td> <td>{{$pembeli->Kota}}</td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>  <td>:</td> <td>{{$pembeli->tgl_lahir}}</td>
                </tr>
            </table>
                <hr>
</body>
</html>
