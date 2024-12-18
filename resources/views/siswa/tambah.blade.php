@extends('layouts.master')

@section('sidebar')
    @include('part.sidebar')
@endsection

@section('topbar')
    @include('part.topbar')
@endsection

@section('judul')
    <h1 style="color: #10487a;">Tambah Siswa</h1>
@endsection

@section('content')
<form action="/siswa" method="post">
    @csrf

    <div class="card pb-5">
        <div class="form-group mx-4 my-2">
            <label for="nama" class="text-md font-weight-bold mt-2" style="color: #10487a;">Nama Lengkap</label>
            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
        </div>

        @error('name')
            <div class="alert-danger"> {{ $message }}</div>
        @enderror

        <div class="form-group mx-4 my-2">
            <label for="npm" class="text-md font-weight-bold" style="color: #10487a;">NIM</label>
            <input type="text" id="npm" class="form-control @error('npm') is-invalid @enderror" name="npm" value="{{ old('npm') }}">
        </div>

        @error('npm')
        <div class="alert-danger"> {{ $message }}</div>
        @enderror

        <div class="form-group mx-4 my-2">
            <label for="nama" class="text-md font-weight-bold" style="color: #10487a;">Program Studi</label>
            <input type="text" id="prodi" class="form-control @error('prodi') is-invalid @enderror" name="prodi" value="{{ old('prodi') }}">
        </div>

        @error('prodi')
            <div class="alert-danger mx-2"> {{ $message }}</div>
        @enderror

        <div class="form-group mx-4 my-2">
            <label for="nama" class="text-md font-weight-bold" style="color: #10487a;">Kelas</label>
            <input type="text" id="kelas" class="form-control @error('kelas') is-invalid @enderror" name="kelas" value="{{ old('kelas') }}">
        </div>

        @error('kelas')
            <div class="alert-danger mx-2"> {{ $message }}</div>
        @enderror

        <div class="form-group mx-4 my-2">
            <label for="nama" class="text-md font-weight-bold" style="color: #10487a;">Mata Kuliah</label>
            <input type="text" id="mata_kuliah" class="form-control @error('mata_kuliah') is-invalid @enderror" name="mata_kuliah" value="{{ old('mata_kuliah') }}">
        </div>

        @error('mata_kuliah')
            <div class="alert-danger mx-2"> {{ $message }}</div>
        @enderror

        <div class="form-group mx-4 my-2">
            <label for="nama" class="text-md font-weight-bold" style="color: #10487a;">Alamat</label>
            <input type="text" id="alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}">
        </div>

        @error('alamat')
            <div class="alert-danger"> {{ $message }}</div>
        @enderror

        <div class="form-group mx-4 my-2">
            <label for="nama" class="text-md font-weight-bold" style="color: #10487a;">Nomor Telepon</label>
            <input type="text" id="alamat" class="form-control @error('noTelp') is-invalid @enderror" name="noTelp" value="{{ old('noTelp') }}">
        </div>

        @error('noTelp')
            <div class="alert-danger"> {{ $message }}</div>
        @enderror

        <div class="form-group mx-4 my-2">
            <label for="email" class="text-md font-weight-bold" style="color: #10487a;">Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
        </div>

        @error('email')
            <div class="alert-danger"> {{ $message }}</div>
        @enderror

        <div class="form-group mx-4 my-2">
            <label for="password" class="text-md font-weight-bold" style="color: #10487a;">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">
        </div>

        @error('password')
            <div class="alert-danger"> {{ $message }}</div>
        @enderror


        <div class="button-save d-flex justify-content-end">
            <button type="submit" class="btn mt-4 mx-4 px-5 py-1" style="background-color: #10487a; color: #fff; border: none;">Simpan</button>
        </form>
        </div>
    </div>
@endsection
