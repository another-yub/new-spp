@extends('main.input')

@section('input')
                <div class="container">
                    <div class="text-center mt-4">
                        <h4><b>Tambah Data</b></h4>
                    </div>
                    <form action="/siswa/simpan" method="POST">
                        @csrf
                        <div class="mb-1">
                            <a href="{{ url('/siswa') }}" class="btn btn-sm btn-secondary"><< kembali</a>

                        </div>
                    <div>
                        <label for="email">Email : </label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div>
                        <label for="password">Password : </label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <div>
                        <label for="nama">Nama : </label>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>
                    <div>
                        <label for="nis">Nis : </label>
                        <input type="text" name="nis" id="nis" class="form-control">
                    </div>
                    <div>
                        <label for="kelas">Kelas : </label>
                        <select name="kelas" class="form-select form-control" aria-label="Default select example">
                            <option selected>Pilih kelas</option>
                            @foreach ($allkelas as $kelas)
                            <option value="{{ $kelas->kelas }}">{{ $kelas->kelas }}</option>
                            @endforeach
                          </select>
                    </div>
                    <div>
                        <label for="jurusan">Jurusan : </label>
                        <select name="jurusan" class="form-select form-control" aria-label="Default select example">
                            <option selected>Pilih jurusan</option>
                            @foreach ($allkelas as $kelas)
                            <option value="{{ $kelas->kompetensi_keahlian }}">{{ $kelas->kompetensi_keahlian }}</option>
                            @endforeach
                          </select>
                    </div>
                    <div>
                        <label for="alamat">Alamat : </label>
                        <input type="text" name="alamat" id="alamat" class="form-control">
                    </div>
                    <div>
                        <label for="no_hp">Hp : </label>
                        <input type="number" name="no_hp" id="no_hp" class="form-control">
                    </div>  
                    <div class="mt-3 text-end">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>              
                </div>
            </form>
@endsection
