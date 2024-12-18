@extends('layouts.master')

@section('sidebar')
    @include('part.sidebar')
@endsection

@section('topbar')
    @include('part.topbar')
@endsection

@section('judul')
    <h1 style="color: #10487a;">Edit Buku</h1>
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold" style="color: #10487a;">Form Edit Buku</h6>
        </div>
        <div class="card-body">
            <form action="/buku/{{ $buku->id }}" method="post"enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group mb-3">
                    <label for="Judul"class="font-weight-bold" style="color: #10487a;"> Judul Buku</label>
                    <input type="text" name="judul" class="form-control" value="{{ old('judul', $buku->judul) }}">
                </div>

                @error('judul')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group mb-3">
                    <label for="kode_buku"class="font-weight-bold" style="color: #10487a;"> Kode Buku</label>
                    <input type="text" name="kode_buku" class="form-control" value="{{ old('kode_buku',$buku->kode_buku) }}">
                </div>

                @error('kode_buku')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group mb-3">
                    <label for="kategori" class="font-weight-bold" style="color: #10487a;">Kategori</label>
                    <select class="form-control" name="kategori_buku[]" id="multiselect" multiple="multiple">
                        @forelse ($kategori as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @empty
                            tidak ada kategori
                        @endforelse

                    </select>
                </div>

                @error('kategori')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group mb-3">
                    <label for="pengarang" class="font-weight-bold" style="color: #10487a;">Pengarang</label>
                    <input type="text" name="pengarang" class="form-control"
                        value="{{ old('pengarang', $buku->pengarang) }}">
                </div>

                @error('pengarang')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group mb-3">
                    <label for="penerbit" class="font-weight-bold" style="color: #10487a;">Penerbit</label>
                    <input type="text" name="penerbit" class="form-control"
                        value="{{ old('penerbit', $buku->penerbit) }}">
                </div>

                @error('penerbit')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group mb-3">
                    <label for="tahun_terbit"class="font-weight-bold" style="color: #10487a;">Tahun Terbit</label>
                    <input type="text" name="tahun_terbit"
                        value="{{ old('tahun_terbit', $buku->tahun_terbit) }}"class="form-control">
                </div>

                @error('tahun_terbit')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group mb-3">
                    <label for="deskripsi"class="font-weight-bold" style="color: #10487a;">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" rows="2">{{ old('deskripsi', $buku->deskripsi) }}</textarea>
                </div>

                @error('deskripsi')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="photoProfile" class="text-md font-weight-bold" style="color: #10487a;">Tambah Sampul Buku</label>
                    <div class="custom-file">
                        <input type="file" name="gambar" id="gambar"
                            value="{{ old('gambar') }}">{{ old('gambar') }}
                    </div>
                </div>

                @error('gambar')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="d-flex justify-content-end">
                    <a href="/buku" class="btn btn-danger mx-2">Kembali</a>
                    <button type="submit" class="btn px-3" style="background-color: #10487a; color: #fff; border: none;">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        $('#multiselect').select2({
            allowClear: true
        });
    </script>
@endsection
