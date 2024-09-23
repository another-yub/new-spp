@extends('main.navbar')
@section('content')

       <!-- START FORM -->
       <div class="container d-flex">
        <form action='' method='post'>
            @csrf
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <div class="mb-3 row">
                    <label for="wali-murid" class="col-sm-2 col-form-label">Wali Murid</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='wali-murid' id="wali-murid">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='nama' id="nama">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nisn" class="col-sm-2 col-form-label">Nisn</label>
                    <div class="col sm-10">
                        <input type="number" name="nisn" id="nisn" class="form-control">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='jurusan' id="jurusan">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="jurusan" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
                </div>
            </div>
        </form>
            <!-- AKHIR FORM -->    
       </div>
@endsection