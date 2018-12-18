<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Tambah Bencana</title>
    <style>
     body{
      background-image: url("/images/wheel-2000.jpg");
     } 
    </style>
  </head>
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
          Untuk Relawan
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/aktivitas">Cari Aktivitas</a>
          <a class="dropdown-item" href="/bencana">Cari Bencana</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Untuk BNPB
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/formAktivitas">Tambah Aktivitas</a>
          <a class="dropdown-item" href="/formRelawan">Tambah Bencana</a>
        </div>
      </li>
    </ul>

  </div>
</nav>

<!--form-->
<form method="post" action="{{route('bencana.store')}}">
  {{ csrf_field() }}
<div class="container">
<div class="form-group">
    <br/>
    <br/>
    <br/>
    <input type="text" class="form-control" name="nama" value="" placeholder="Nama Bencana" required autofocus>

  </div>
    <div class="form-group">
    <input type="date" id="tanggal" class="form-control" name="tanggal" required>
  </div>

 
  <div class="form-group">
    <input type="text" class="form-control" name="jumlah_relawan" row="10" placeholder="Jumlah Relawan" required autofocus>
  </div>
<div class="form-group">
    <textarea class="form-control" name="deskripsi" placeholder="Deskripsi Kegiatan" required autofocus>
  </textarea>
    </div>
 <div class="form-group">
    <input type="text" class="form-control" name="lokasi_bencana" row="10" placeholder="Lokasi Bencana" required autofocus>
  </div>
  <div class="form-row ">
    <div class="form-groupcol-md-6">
  <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
</div>
    <div class="form-groupcol-md-6">
  <button class="btn btn-lg btn-primary btn-block" type="submit">Reset</button>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
</html>