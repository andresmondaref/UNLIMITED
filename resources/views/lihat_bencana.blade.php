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
</div>  </li>
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
      <th scope="col">Nama Relawan</th>
      <th>Email Relawan</th>
    </tr>
        </thead>
        <tbody>
          @foreach($bencana as $bencana)
          <tr>
            <td>{{$bencana->bencana['nama_bencana']}}</td>
            <td>{{$bencana->User['nama_depan']}} {{$bencana->User['nama_belakang']}}</td>
            <td>{{$bencana->User['email']}}</td>
          </tr>
          @endforeach
        </tbody>
</table>
</div>



</body>
</html>