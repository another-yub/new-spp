@extends('main.input')

@section('input')
                <div class="container">
                    <div class="text-center mt-4">
                        <h4><b>Ubah Kelas</b></h4>
                    </div>
                    <form action="/kelas/update" method="POST">
                        @csrf
                        <div class="mb-1">
                            <a href="{{ url('/kelas') }}" class="btn btn-sm btn-secondary"><< kembali</a>

                        </div>
                        <input type="hidden" name="id" value="{{ $kelas->id }}">
                    <div>
                        <label for="kelas">Kelas : </label>
                        <input type="text" name="kelas" id="kelas" class="form-control" value="{{ $kelas->kelas }}">
                    </div>
                    <div>
                        <label for="kompetensi_keahlian">Kompetensi Keahlian : </label>
                        <input type="text" name="kompetensi_keahlian" id="kompetensi_keahlian" class="form-control" value="{{ $kelas->kompetensi_keahlian }}">
                    </div>
                    <div class="mt-3 text-end">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>              
                </div>
            </form>
@endsection
