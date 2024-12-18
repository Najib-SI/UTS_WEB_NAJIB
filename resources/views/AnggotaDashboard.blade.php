<!-- Najib
240101020146
SI503
Pemograman Berbasis Web -->

@extends('layouts.master')

@section('topbar')
    @include('part.topbar')
@endsection

@section('sidebar')
    @include('part.sidebar')
@endsection

@section('judul')
<div>
   <h2 style="color: #10487a;"> Selamat Datang, {{ Auth::user()->name }}</h2>
   <h4 style="color: #10487a;"> {{ $profile->prodi }}</h4>
   <h4 style="color: #10487a;"> {{ $profile->kelas }}</h4>
   <h4 style="color: #10487a;"> {{ $profile->mata_kuliah }}</h4>
</div>
@if ($profile->photoProfile != null)
                    <img src="{{ asset('/images/photoProfile/' . $profile->photoProfile) }}"
                        style="width:150px;height:150px;border-radius:100px; object-fit: cover;">
                @else
                <img src="{{ asset('template/img/boy.png') }}" style="width:100px;height:100px;border-radius:50px; object-fit: cover;">
        @endif
@endsection

@section('content')
<div class="row mb-3">
<div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100 bg-gradient-primary">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-sm font-weight-bold text-uppercase mb-1 text-light">Jumlah Buku</div>
                            <div class="text-sm text-light h5 mb-0 font-weight-bold">{{ $buku }}</div>
                            <div class="button mt-2"><a href="/buku" class="text-light">Lihat</a></div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-book fa-3x text-light"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100 bg-gradient-info">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-sm text-light font-weight-bold text-uppercase mb-1">Kategori</div>
                            <div class="text-sm text-light h5 mb-0 font-weight-bold">{{ $kategori }}</div>
                            <div class="button mt-2"><a href="/kategori" class="text-light">Lihat</a></div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-bookmark fa-3x text-light"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- New User Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100 bg-gradient-success">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-sm text-light font-weight-bold text-uppercase mb-1">Siswa</div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-light">{{ $user }}</div>
                            <div class="button mt-2"><a href="/siswa" class="text-light">Lihat</a></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-3x text-light"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100 bg-gradient-danger">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-sm text-light font-weight-bold text-uppercase mb-1" style="font-size:.8 rem;">Pinjaman Saat ini</div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-light">{{ $pinjamanUser }}</div>
                            <div class="button mt-2"><a href="/peminjaman" class="text-light">Lihat</a></div>
                        </div>
                        <div class="col-auto">
                        <i class="fa-solid fa-3x fa-book-bookmark text-light"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card bg-gradient-secondary">
    <div class="container">
        <h3 class="text-light"> <i class="fa-solid fa-circle-info text-light my-3"></i>  Informasi Aturan Peminjaman</h3>
        <ol class=text-light>
            <li class=text-light>Peminjaman buku dapat dilakukan maksimal selama 1 minggu.</li>
            <li class=text-light>Setiap siswa hanya diperbolehkan meminjam hingga 3 buku sekaligus.</li>
            <li class=text-light>Keterlambatan pengembalian akan dikenakan denda sebesar Rp15.000 per buku per minggu.</li>
            <li class=text-light>Untuk proses pengembalian, harap menghubungi petugas.</li>
        </ol>
    </div>
    </div>
@endsection
