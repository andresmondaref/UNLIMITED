<!DOCTYPE html>
<html>
<head>
	<title>Edit Bencana</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
     body{
      background-image: url("/images/wheel-2000.jpg");
     } 
    </style>
</head>
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
          <a class="dropdown-item" href="/aktivitas">Cari Aktivitas</a>
          <a class="dropdown-item" href="/bencana">Cari Bencana</a>

      <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Untuk BNPB
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/formAktivitas">Tambah Aktivitas</a>
                  <a class="dropdown-item" href="/formBencana">Tambah Bencana</a>

    </ul>
</nav>



    <div class="container">
<div class="form-group" >
  <form method="POST" action="{{ route('bencana.update',$bencana)}}">
   {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <br/>
    <br/>
    <br/>
    <input type="text" class="form-control" name="nama" value="{{$bencana->nama_bencana}}" placeholder="Nama Bencana" required autofocus>
  </div>

  <div>
    <input type="date" class="form-control" name="tanggal"  value="{{$bencana->tanggal}}" placeholder="Tanggal" required autofocus>
    <br/>
  </div>

   <div>
    <input type="text" class="form-control" name="jumlah_relawan"  value="{{$bencana->jumlah_relawan}}" placeholder="Jumlah Relawan Yang Dibutuhkan" required autofocus>
    <br/>
  </div>

 <div class="form-group">
    <textarea class="form-control" name="deskripsi" row="10" cols="20" required autofocus>{{$bencana->deskripsi}}</textarea>
  </div>

   <div class="form-group">
    <input type="text" class="form-control" name="lokasi_bencana" value="{{$bencana->lokasi_bencana}}" placeholder="Lokasi Bencana" required autofocus>
  </div>
  
  <div class="form-row ">
    <div class="form-groupcol-md-6">
  <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
</div>
    <div class="form-groupcol-md-6">
  <button class="btn btn-lg btn-primary btn-block" type="submit">Reset</button>
</div>
  </form>
</div>


   
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>