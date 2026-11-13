@extends('layouts.app')
@section('title', 'Zonasi & Rak Gudang')

@section('content')
    <div class="tabel-toolbar">
        <div class="tambah-rak">
            <a href="{{ route('raks.create') }}" class="tombol-tambah">Tambah Rak</a>
        </div>
        <div class="search-box-tabel">
            <img src="{{ asset('Asset/search_icon_tabel.svg') }}" alt="search-table" class="search-icon-tabel">
            <input type="text" class="search-box-tabel-placeholder" placeholder="Cari di Tabel...">
        </div>
    </div>

    <table class="tabel-rak">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Zona</th>
                <th>No. Lorong</th>
                <th>Kode Rak</th>
                <th>Kapasitas</th>
                @if (auth()->user()->role === 'admin')
                    <th>Edit</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @forelse ($raks as $rak)
                <tr class="{{ $loop->iteration % 2 == 0 ? 'kolom-genap' : 'kolom-ganjil' }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $rak->nama_zona }}</td>
                    <td>{{ $rak->no_lorong }}</td>
                    <td>{{ $rak->kode_rak }}</td>
                    <td>{{ $rak->kapasitas_fisik }} Kg</td>

                    @if (auth()->user()->role === 'admin') {{-- ROLE --}}
                        <td>
                            <a href="{{ route('raks.edit', $rak) }}" class="tombol-edit">
                                <img src="{{ asset('Asset/Edit.svg') }}" alt="Edit" class="icon-aksi">
                            </a>

                            <form action="{{ route('raks.destroy', $rak) }}" method="POST" class="form-hapus"
                                  onsubmit="return confirm('Yakin ingin menghapus rak ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="tombol-hapus">
                                    <img src="{{ asset('Asset/Delete.svg') }}" alt="Delete" class="icon-aksi">
                                </button>
                            </form>
                        </td>
                    @endif
                </tr>
            @empty
                <tr>
                    <td colspan="{{ auth()->user()->role === 'admin' ? 6 : 5 }}">Belum ada rak.</td> {{-- ROLE --}}
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection