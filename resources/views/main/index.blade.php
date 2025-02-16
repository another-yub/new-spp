@extends('main.navbar')
@section('content')

<div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Siswa
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/siswa">siswa</a>
          <a class="dropdown-item" href="/kelas">kelas</a>
          <a class="dropdown-item" href="/bayar">bayar</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Matriks
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Tunggakan</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Laporan
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expand="false">
        Pengaturan
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a href="#" class="dropdown-item">action</a>
        <a href="#" class="dropdown-item">another action</a>
        <a href="#" class="dropdown-item">something else here</a>
    </div>
    </li>
    <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expand="false">
            Utilitas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a href="#" class="dropdown-item">action</a>
            <a href="#" class="dropdwon-item">another action</a>
            <a href="#" class="dropdown-item">something else here</a>
        </div>
    </li>
    <li class="nav-item">
        <a href="" class="nav-link" id="logout">logout</a>
    </li>
    </ul>
  </div>
</nav>

<div class="text-center mt-3">
<h1><b>Dashboard</b></h1>
<div id="deks2"><font color="white">Tahun Aktif 2024/2025</font></div>
</div>
<form action="/search" method="GET">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 search-box mt-2">
                <input name="search" type="text" class="form-control" placeholder="Cari berdasarkan nama, nis, atau kelas....." autofocus>         
            </div>
        </div>
        <div class="text-center container mt-1">
        <button type="submit" class="btn btn-primary btn-sm circle">Cari</button>
        <button type="reset" class="btn btn-secondary btn-sm circle">Batal</button></div>
    </div>
    </form>

    <div class="container mt-3">
        @if (Session::has('error'))
        <div class="alert alert-danger">Pencarian gagal</div>
        @endif
    </div>
<!-- grid column -->
<div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th><b>Total</b></th>
                            <th><b>Lunas</b></th>
                            <th><b>Sisa</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @forelse ($alldata as $data)
                           <td class="black">{{ $data->total }}</td>  
                            <td class="green">{{ $data->lunas }}</td>
                            <td class="red">{{ $data->sisa }}</td>     
                            @empty
                            <div class="alert alert-success">
                                Data masih kosong
                            </div>
                            @endforelse
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Siswa Aktif</th>
                            <th>Siswa Keluar</th>
                            <th>Semua Siswa Lulus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @forelse ($alldata as $data)
                            <td class="black">{{ $data->siswa_aktif }}</td>
                            <td class="green">{{ $data->siswa_keluar }}</td>
                            <td class="red">{{ $data->siswa_lulus }}</td>
                            @empty
                            <div class="alert alert-success">
                                Data masih kosong
                            </div>
                                
                            @endforelse
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="em1 container mt-1 form-control">
        <b id="testing">Total pembayaran hari in</b>
        
        <font id="totalpembayaran">0</font>
    </div>
    <div class="container mt-2 form-control">
        <a href="#"><h6>Data Pembayaran Hari Ini    </h6></a>

    </div>

    @endsection