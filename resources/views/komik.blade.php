<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($juduls as $a)
    id : {{$a['id']}} <br>
    judul : {{$a['judul']}} <br>
    sinopsis : {{$a['sinopsis']}} <br>
    bahasa : {{$a['bahasa']}} <br>
    aktor :
    @foreach ($a['nama'] as $nama)
    <li> {{$nama}} <br></li>

   @endforeach
<hr>
    @endforeach
</body>
</html>
