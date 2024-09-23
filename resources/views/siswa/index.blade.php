@extends('main.navbar')
@section('content')
    
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Siswa
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/siswa/">home</a>
          <a class="dropdown-item" href="/bayar">bayar</a>
          <a class="dropdown-item" href="#">Something else here</a>
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
<h1 class="mb-5"><b>Data Siswa</b></h1>
<div id="deks2"><a href="{{ url('/siswa/tambah') }}"><font color="white">Tambah Siswa</font></a></div>
</div>
<form action="">
<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4 search-box mt-2">
            <input type="search" class="form-control" placeholder="Cari berdasarkan nama, nis, atau kelas.....">
            
        </div>
    </div>
    <div class="text-center container mt-1">
    <button type="submit" class="btn btn-primary btn-sm circle">Cari</button>
    <button type="reset" class="btn btn-secondary btn-sm circle">Batal</button></div>
</div>
</form>

<div class="container mt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th><b>NO</b></th>
                            <th><b>Wali Murid</b></th>
                            <th><b>Nama</b></th>
                            <th><b>NISN</b></th>
                            <th><b>Kelas</b></th>
                            <th><b>Jurusan</b></th>
                            <th><b>Total Biaya</b></th>
                            <th><b>Aksi</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Siti Badriah</td>
                            <td>Lutfi Aditya</td>
                            <td>00129192</td>
                            <td>12</td>
                            <td>RPL</td>
                            <td>25.900.000</td>
                            <td>
                                <a href="" class="btn btn-success btn-sm">ubah</a>
                                <a href="" class="btn btn-danger btn-sm">hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

@endsection