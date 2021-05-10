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
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Edit Absensi</h3>
                </div>
                <div class="modal-body">
                    @foreach ($absensinya as $isi)
                        <form action="/kendali/updateAbsensi">
                            <div class="form-group">
                                ID :
                                <input type="" name="id" id="" class="form-control" value="{{$isi->id}}">
                            </div>
                            <div class="form-group">
                                No Absen :
                                <input type="text" name="noabs" id="" class="form-control" value="{{$isi->noabs}}">
                            </div>
                            <div class="form-group">
                                Nama :
                                <input type="text" name="nama" id="" class="form-control" value="{{$isi->nama}}">
                            </div>
                            <div class="form-group">
                               Kelas :
                                <select name="kelas" id="" value="">
                                   <option value="{{$isi->kelas}}">{{$isi->kelas}}</option>
                                   <option value="X">X</option>
                                   <option value="XI">XI</option>
                                   <option value="XII">XII</option>
                                </select>
                            </div>
                            @endforeach
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Simpan</button>
                        </form>
                                    <a href="/">
                                        <button class="btn btn-primary">Absensi</button>
                                    </a>
                            </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
