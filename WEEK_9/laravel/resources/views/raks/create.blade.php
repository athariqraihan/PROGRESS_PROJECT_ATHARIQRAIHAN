@extends('layouts.app')
@section('title', 'Form Tambah Rak')

@section('content')
    <div class="form-input"> 
        <div class="form-header">
            <h2>FORM TAMBAH RAK</h2>
        </div>

        <form action="{{ route('raks.store') }}" method="POST" class="form-body">
            @csrf

            <label for="nama_zona">Nama Zona</label>
            <select name="nama_zona" id="nama_zona">
                <option value="">Pilih Zona</option>
                @foreach (['A', 'B', 'C', 'D'] as $zona)
                    <option value="{{ $zona }}" {{ old('nama_zona') == $zona ? 'selected' : '' }}>Zona {{ $zona }}</option>
                @endforeach
            </select>
            @error('nama_zona')
                <span class="pesan-error">{{ $message }}</span>
            @enderror

            <label for="no_lorong">Lorong</label>
            <select name="no_lorong" id="no_lorong">
                <option value="">Pilih Lorong</option>
                @foreach (['L-01', 'L-02', 'L-03', 'L-04'] as $lorong)
                    <option value="{{ $lorong }}" {{ old('no_lorong') == $lorong ? 'selected' : '' }}>{{ $lorong }}</option>
                @endforeach
            </select>
            @error('no_lorong')
                <span class="pesan-error">{{ $message }}</span>
            @enderror

            <label for="kode_rak">Kode Rak</label>
            <select name="kode_rak" id="kode_rak">
                <option value="">Pilih Rak</option>
                @foreach (['R-01', 'R-02', 'R-03', 'R-04'] as $kode)
                    <option value="{{ $kode }}" {{ old('kode_rak') == $kode ? 'selected' : '' }}>{{ $kode }}</option>
                @endforeach
            </select>
            @error('kode_rak')
                <span class="pesan-error">{{ $message }}</span>
            @enderror

            <label for="kapasitas_fisik">Kapasitas</label>
            <small>Cth: 1000 Kg</small>
            <input type="number" id="kapasitas_fisik" name="kapasitas_fisik"
                   value="{{ old('kapasitas_fisik') }}" placeholder="Input Kapasitas Fisik">
            @error('kapasitas_fisik')
                <span class="pesan-error">{{ $message }}</span>
            @enderror

            <div class="form-action">
                <a href="{{ route('raks.index') }}" class="tombol-batal">Batal</a>
                <button type="submit" class="tombol-simpan">Simpan</button>
            </div>
        </form>
    </div>
@endsection
