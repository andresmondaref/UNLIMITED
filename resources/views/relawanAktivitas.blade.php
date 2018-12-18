<!DOCTYPE html>
<html>
<head>
  <title>STARK</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/home">STARK</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Untuk Relawan
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/relawanAktivitas">Cari Aktivitas</a>
          <a class="dropdown-item" href="/relawanBencana">Cari Bencana</a>

    </ul>

</nav>
<br/>
<br/>
<br/>
<br/>
<div class="container">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nama Kegiatan</th>
      <th scope="col">Jenis Kegiatan</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Deskripsi Kegiatan</th>
      <th scope="col">Lokasi Kegiatan</th>
      <th scope="col">Opsi
      </th>
    </tr>
    <tr>
<!-- <br>
<div class="table">
<table border="1">
  <thead>
    <tr>
      <th>Nama Kegiatan</th>
      <th>Jenis</th>
      <th>Tanggal</th>
      <th>Deskripsi</th>
      <th>Lokasi</th>
      <th>Opsi</th>
    </tr>
    <tr> -->
      @foreach($aktivitas as $aktivitas)
      <td>{{$aktivitas->nama_kegiatan}}</td>
      <td>{{$aktivitas->jenis_kegiatan}}</td>
      <td>{{$aktivitas->tanggal}}</td>
      <td>{{$aktivitas->deskripsi_kegiatan}}</td>
      <td>{{$aktivitas->lokasi_kegiatan}}</td>
      <td>
       <form action="{{ route('daftaraktivitas') }}" method="post">
                  {{ csrf_field() }}
                  <input type="hidden" name="aktivitas_id" value="{{$aktivitas->id}}">
                  <button type="submit" class="btn btn-primary btn-sm" style="margin-left:4px;">DAFTAR</button>
                </form></td>
    </tr>
  </thead>
  @endforeach
  </thead>
  <tbody>
    
  </tbody>
</table>
</div>



</div><br>

</body>
</html>