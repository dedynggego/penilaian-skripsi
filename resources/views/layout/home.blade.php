@extends('layout.main1')

@section('judul')
    SISTEM PENILAIAN SKRIPSI
@endsection

@section('isi')
<div class="card">
    <div class="card-header">
       <h3 class="card-title" style="color: black; font-weight: 800;">Hai, {{ $user->name}}.</h3>
    </div>
    <div class="card-body">
        <marquee>
    <h3 class="card-title" style="color: black;"><br>Selamat datang di Sistem Penilaian Skripsi Jurusan Teknik Informatika Universitas Musamus.</h3></marquee>
    </div>
</div>
@endsection
