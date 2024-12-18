@extends('layouts.master')

@section('sidebar')
    @include('part.sidebar')
@endsection

@section('topbar')
    @include('part.topbar')
@endsection

@section('content')
    <div class="card">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold" style="color: #10487a;">Profile</h4>
        </div>
        <div class="row">
            <div class="col-auto ml-5 mr-5 my-4">
                @if ($profile->photoProfile != null)
                    <img src="{{ asset('/images/photoProfile/' . $profile->photoProfile) }}"
                        style="width:150px;height:150px;border-radius:100px; object-fit: cover;">
                @else
                    <img src="{{ asset('template/img/boy.png') }}" style="width:100px;height:100px;border-radius:50px; object-fit: cover;">
                @endif
            </div>
            <div class="col-auto mx-4">
                <div class="form-group mb-3">
                    <label for="nama" style="color: #10487a;" class="text-lg font-weight-bold">Nama Lengkap</label>
                    <h4>{{ $profile->user->name }}</h4>
                </div>

                <div class="form-group mb-3">
                    <label for="npm" style="color: #10487a;" class="text-lg font-weight-bold">Nomor Induk Mahasiswa</label>
                    <h4>{{ $profile->npm }}</h4>
                </div>

                <div class="form-group mb-3">
                    <label for="prodi" style="color: #10487a;" class="text-lg font-weight-bold">Program Studi</label>
                    <h4>{{ $profile->prodi }}</h4>
                </div>

                <div class="form-group mb-3">
                    <label for="kelas" style="color: #10487a;" class="text-lg font-weight-bold">Kelas</label>
                    <h4>{{ $profile->kelas }}</h4>
                </div>

                <div class="form-group mb-3">
                    <label for="mata_kuliah" style="color: #10487a;" class="text-lg font-weight-bold">Mata Kuliah</label>
                    <h4>{{ $profile->mata_kuliah }}</h4>
                </div>

                <div class="form-group mb-3">
                    <label for="prodi" style="color: #10487a;" class="text-lg font-weight-bold">Alamat</label>
                    <h4>{{ $profile->alamat }}</h4>
                </div>

                <div class="form-group mb-3">
                    <label for="prodi" style="color: #10487a;" class="text-lg font-weight-bold">Nomor Telephone</label>
                    <h4>{{ $profile->noTelp }}</h4>
                </div>

            </div>
        </div>
        <div class="edit d-flex justify-content-end my-4 mx-4">
            <a href="/profile/{{ $profile->id }}/edit" class="btn px-5" style="background-color: #10487a; color: #fff; border: none;">Edit Profile</a>
        </div>
    </div>
@endsection
