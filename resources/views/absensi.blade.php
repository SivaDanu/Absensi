<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h2>
            <a href="/kendali/tambahAbsensi">Isi Absen</a>
        </h2>
        Daftar Absensi Siswa Saat Ini : {{$dataabsensi->links()}}
        <table class="table table-bordered">
            <tr>
                <th>No : </th>
                <th>Nomor Absen : </th>
                <th>Nama : </th>
                <th>Kelas : </th>
                <th>Aksi : </th>
            </tr>
            <?php
                $nomor = 1;
            ?>
            @foreach ($dataabsensi as $isi)
                <tr>
                    <td>{{$nomor++}}</td>
                    <td>{{$isi->noabs}}</td>
                    <td>{{$isi->nama}}</td>
                    <td>{{$isi->kelas}}</td>
                    <td>
                        <a href="/kendali/editAbsensi/{{$isi->id}}">
                            <button class="btn btn-warning" title="edit data id : {{$isi->id}}">Edit</button>
                        </a>
                        <a href="/kendali/hapus/{{$isi->id}}">
                            <button class="btn btn-danger" title="hapus data id : {{$isi->id}}">Hapus</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
