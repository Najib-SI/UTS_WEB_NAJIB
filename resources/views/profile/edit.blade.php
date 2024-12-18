@extends('layouts.master')

@section('sidebar')
    @include('part.sidebar')
@endsection

@section('topbar')
    @include('part.topbar')
@endsection

@section('judul')
    <h1 style="color: #10487a;">Edit Profile</h1>
@endsection

@section('content')
    <form action="/profile/{{$profile->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="card pb-5">
            <div class="form-group mx-4 my-2">
                <label for="nama" class="text-md font-weight-bold mt-2" style="color: #10487a;">Nama Lengkap</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $profile->user->name) }}">
            </div>

            @error('name')
                <div class="alert-danger"> {{ $message }}</div>
            @enderror

            <div class="form-group mx-4 my-2">
                <label for="npm" class="text-md font-weight-bold" style="color: #10487a;">Nomor Induk Mahasiswa</label>
                <input type="text" name="npm" class="form-control" value="{{ old('npm', $profile->npm) }}">
            </div>

            @error('npm')
                <div class="alert-danger"> {{ $message }}</div>
            @enderror

            <div class="form-group mx-4 my-2">
                <label for="nama" class="text-md font-weight-bold" style="color: #10487a;">Program Studi</label>
                <input type="text" name="prodi"class="form-control" value="{{ old('prodi', $profile->prodi) }}">
            </div>

            @error('prodi')
                <div class="alert-danger mx-2"> {{ $message }}</div>
            @enderror

            <div class="form-group mx-4 my-2">
                <label for="nama" class="text-md font-weight-bold" style="color: #10487a;">Kelas</label>
                <input type="text" name="kelas"class="form-control" value="{{ old('kelas', $profile->kelas) }}">
            </div>

            @error('kelas')
                <div class="alert-danger mx-2"> {{ $message }}</div>
            @enderror

            <div class="form-group mx-4 my-2">
                <label for="nama" class="text-md font-weight-bold" style="color: #10487a;">Mata Kuliah</label>
                <input type="text" name="mata_kuliah"class="form-control" value="{{ old('mata_kuliah', $profile->mata_kuliah) }}">
            </div>

            @error('mata_kuliah')
                <div class="alert-danger mx-2"> {{ $message }}</div>
            @enderror

            <div class="form-group mx-4 my-2">
                <label for="nama" class="text-md font-weight-bold" style="color: #10487a;">Alamat</label>
                <input type="text" name="alamat"class="form-control" value="{{ old('alamat', $profile->alamat) }}">
            </div>

            @error('alamat')
                <div class="alert-danger"> {{ $message }}</div>
            @enderror

            <div class="form-group mx-4 my-2">
                <label for="nama" class="text-md font-weight-bold" style="color: #10487a;">Nomor Telepon</label>
                <input type="text" name="noTelp" class="form-control" value="{{ old('noTelp', $profile->noTelp) }}">
            </div>

            @error('noTelp')
                <div class="alert-danger"> {{ $message }}</div>
            @enderror

            <div class="form-group mx-4 my-2">
                <label for="photoProfile" class="text-md font-weight-bold" style="color: #10487a;">Tambah Photo Profile</label>
                <div class="custom-file">
                    <input type="file" name="photoProfile" id="photoProfile"
                        value="{{ old('photoProfile', $profile->photoProfile) }}">
                </div>
            </div>

            @error('photoProfile')
                <div class="alert-danger"> {{ $message }}</div>
            @enderror

            <div class="button-save d-flex justify-content-end">
                <a href="/profile" class="btn btn-danger mt-4 py-1 px-4">Batal</a>
                <button type="submit"class="btn mt-4 mx-2 px-5 py-1" style="background-color: #10487a; color: #fff; border: none;">Simpan</button>
    </form>
    </div>
    </div>
@endsection
