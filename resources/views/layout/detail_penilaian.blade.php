@extends('layout.main1')

@section('judul')

@endsection

@section('isi')
@if ($message = Session::get('error'))
<div class="alert alert-light-danger color-danger"><i data-feather="x-octagon"></i> {{$message}}</div>
@endif
<div class="row justify-content-md-center">
    <div class="card" style="width:auto ;">
        <div class="card-title">
            <div class="container">
                <div class="row">
                    <div class="col-auto">
                        <img src="{{asset('/')}}dist1/img/unmus.svg" style="width:200px;height:140px;">
                    </div>
                    <div class="col-auto">
                        <h5 style="color:black ;"> <br><br>DAFTAR NILAI UJIAN SKRIPSI <br>JURUSAN TEKNIK INFORMATIKA <br> FAKULTAS TEKNIK UNIVERSITAS MUSAMUS </h5>
                    </div>
                    <span class="border border-dark"></span>
                </div>
            </div>
        </div>
        <div class="card-body">
       
            <table class="table">
                <tbody>
                    <tr>
                        <td style="color: black;">Nama Mahasiswa</td>
                        <th scope="row" style="color: black;">: {{$skripsi->nama_mahasiswa}}</th>
                    </tr>
                    <tr>
                        <td style="color: black;">NPM</td>
                        <th scope="row" style="color: black">: {{$skripsi->npm}}</th>
                    </tr>
                    <tr>
                        <td style="color: black;">Judul</td>
                        <th scope="row" style="color: black">: {{$skripsi->judul}}</th>

                    </tr>
                </tbody>
            </table>
            <br>
            <br>
            @foreach ($detail as $item )
            <table class="table">
                <thead>
                    <tr>
                        <th style="color: black;">Dosen Penilai</th>
                        <th style="color: black;">Nilai</th>
                        <th style="color: black;">Tanda Tangan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($item->users as $i )
                    <tr>
                        <td style="color: black;">{{$i->name}}</td>
                        <td style="color: black;">{{$i->pivot->nilai}}</td>
                        <td style="color: black;"></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endforeach

            <div class="container">
                <div class="row">
                    <div class="col-8">

                    </div>
                    <div class="col-auto">
                        <H6 style="color:black ;">Merauke, ........................... 2022 <strong> <br>Ketua Sidang, <br> <br><br><br><br>(........................................................................) <br><br></H6>
                    </div>
                </div>
            </div>
            @if($user->level ==1)
            <a href="{{url('skripsi/detail/' . $skripsi->id)}}" class="btn btn-primary btn-sm" target="_blank">
                <i data-feather="printer"></i> Cetak
            </a>
            @endif
        </div>
    </div>
</div>
@endsection