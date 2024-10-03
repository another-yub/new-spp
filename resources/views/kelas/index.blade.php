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
          <a class="dropdown-item" href="/siswa">home</a>
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
<h1 class="mb-5"><b>Data Kelas</b></h1>
<div id="deks2"><a href="{{ url('/kelas/tambah') }}"><font color="white">Tambah Kelas</font></a></div>
</div>
<form action="/siswa/search" method="GET">
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
  @if (Session::has('success'))
 <div class="alert alert-success">Data berhasil di tambahkan</div>
  @elseif(Session::has('error'))
  <div class="alert alert-dager">Data gagal di tambahkan</div>
  @elseif (Session::has('successubah'))
  <div class="alert alert-success">Data berhasil di ubah</div>
  @elseif (Session::has('errorubah'))
  <div class="alert alert-danger">Data gagal di ubah</div>
  @elseif (Session::has('successdelete'))
  <div class="alert alert-success">Data berhasil di hapus</div>
  @elseif (Session::has('errordelete'))
  <div class="alert alert-danger">Data gagal di hapus</div>
  @endif



                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th><b>NO</b></th>
                            <th><b>Kelas</b></th>
                            <th><b>Kompetensi Keahlian</b></th>
                            <th><b>Aksi</b></th>
                        </tr>
                    </thead>
                    <tbody>
                          @php
                              $i = 1;
                          @endphp
                          @forelse ($datakelas as $kelas)
                          <tr>
                              <td>{{ $i }}</td>
                              <td>{{ $kelas->kelas }}</td>
                              <td>{{ $kelas->kompetensi_keahlian }}</td>
                              <td>
                              <a href='{{ url("kelas/edit/$kelas->id") }}' class="btn btn-success btn-sm">ubah</a>
                              <a href='{{ url("kelas/delete/$kelas->id") }}' class="btn btn-danger btn-sm">hapus</a>
                              </td>
                              @php
                              $i++;
                             @endphp
                          @empty
                          <div class="alert alert-success">Data masih kosong</div>                              
                          @endforelse
                        </tr>
                    </tbody>
                </table>
                {{ $datakelas->links() }}
            </div>
@endsection