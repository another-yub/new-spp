@extends('main.input')

@section('input')
                <div class="container">
                    <div class="text-center mt-4">
                        <h4><b>Tambah Kelas</b></h4>
                    </div>
                    <form action="/kelas/simpan" method="POST">
                        @csrf
                        <div class="mb-1">
                            <a href="{{ url('/kelas') }}" class="btn btn-sm btn-secondary"><< kembali</a>

                        </div>
                    <div>
                        <label for="kelas">Kelas : </label>
                        <input type="text" name="kelas" id="kelas" class="form-control" required>
                    </div>
                    <div>
                        <label for="kompetensi_keahlian">Kompetensi Keahlian : </label>
                        <input type="text" name="kompetensi_keahlian" id="kompetensi_keahlian" class="form-control" required>
                    </div>
                    <div class="mt-3 text-end">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>              
                </div>
            </form>
@endsection
