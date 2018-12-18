<!DOCTYPE html>
<html>
<head>
  <title>Cari Bencana</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/homeBnpb">STARK</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/homeBnpb">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Untuk BNPB
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/aktivitas">Cari Aktivitas</a>
          <a class="dropdown-item" href="/bencana">Cari Bencana</a>

    </ul>
</nav>
<!--tablebootstrap-->
<br/>
<br/>
<br/>
<br/>
<div class="container">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nama Bencana</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Jumlah Relawan Yang Dibutuhkan</th>
      <th scope="col">Deskripsi Bencana</th>
      <th scope="col">Lokasi Bencana</th>
      <th scope="col">Opsi</th>
    </tr>
    <tr>
      @foreach($bencana as $bencana)
      <td><a href="{{url('/bencana')}}/{{$bencana->id}}">{{$bencana->nama_bencana}}</a></td>
            <td>{{$bencana->tanggal}}</td>
      <td>{{$bencana->jumlah_relawan}}</td>
      <td>{{$bencana->deskripsi}}</td>
      <td>{{$bencana->lokasi_bencana}}</td>
      <td style="display:flex"><a class="btn btn-primary btn-sm" href="{{ route('bencana.edit',[$bencana->id])}}">Edit</a>
       <form action="{{ route('bencana.destroy',[$bencana->id]) }}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger btn-sm" style="margin-left:4px;">Hapus</button>
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