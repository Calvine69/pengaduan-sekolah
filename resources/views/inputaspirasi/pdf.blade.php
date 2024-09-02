<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1WuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="title text-center mb-5">
        <h2>Laporan Layanan Pengaduan Sekolah</h2>
        <h5>Jakarta Barat</h5>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>NISN</th>
                <th>Kategori</th>
                <th>Lokasi</th>
                <th>Keterangan</th>
                <th>Foto</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inputaspirasis as $key=>$inputaspirasi)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$inputaspirasi->nisn}}</td>
                <td>{{$inputaspirasi->kategori->keterangan}}</td>
                <td>{{$inputaspirasi->lokasi}}</td>
                <td>{{$inputaspirasi->keterangan}}</td>
                <td>{{$inputaspirasi->foto}}</td>
                <td>{{$inputaspirasi->aspirasi ? $inputaspirasi->aspirasi->status : "Menunggu" }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>