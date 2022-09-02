@extends('layout.main1')

@section('judul')
DASHBOARD SISTEM PENILAIAN SKRIPSI TEKNIK INFORMATIKA
@endsection

@section('isi')

<div class="row">
    <div class="col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Belum Dinilai</div>
                        <div class="h3 mb-0 font-weight-bold text-gray-800">{{count($skripsi)}}</div>
                    </div>
                    <div class="col-auto">
                        <img src="{{asset('/')}}dist1/img/file-text.svg" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Total</div>
                        <div class="h3 mb-0 font-weight-bold text-gray-800">{{count($total_skripsi)}} </div>
                    </div>
                    <div class="col-auto">
                        <img src="{{asset('/')}}dist1/img/layers.svg" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="card">
    <table id="table1" class="table table-striped " style="width:100%">
        <thead>
            <tr>
                <th style="text-align: center;">#</th>
                <th style="text-align: center;">Waktu</th>
                <th style="text-align: center;">Nama</th>
                <th style="text-align: center;">NPM</th>
                <th style="text-align: center;">Judul</th>
                <th style="text-align: center;">Total Nilai</th>
                <th style="text-align: center;">Nilai Huruf</th>
                <th style="text-align: center;">Dosen Penilai</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($total_skripsi as $item )
            <tr>
                <td>{{$loop->iteration}}</td>
                <td style="color: black;">Tanggal: {{\Carbon\Carbon::parse($item->tanggal)->format('d-m-Y')}} <br>
                    Pukul: {{$item->jam}}
                </td>
                <td style="color: black;">{{$item-> nama_mahasiswa}}</td>
                <td style="color: black;">{{$item->npm}}</td>
                <td style="color: black;">{{$item->judul}}</td>
                <td style="text-align: center;">@if($item->nilai_huruf == 0)
                    <span class="badge bg-warning">Belum menyelesaikan penilaian</span>
                    @else
                    <span class="badge bg-success">{{number_format($item->total_nilai, 2, '.', '')}}</span>
                    @endif
                </td>
                <td style="text-align: center;">
                    @if($item->nilai_huruf == 0)
                    <span class="badge bg-warning">Belum menyelesaikan penilaian</span>
                    @else
                    <span class="badge bg-success">{{$item->nilai_huruf}}</span>
                    @endif
                </td>
                <td style="color: black;">
                    @foreach ($item->users as $i)
                    <ul class="list-group">
                        <span> {{$loop->iteration}}. {{$i->name}}</span>
                    </ul>

                    @endforeach
                </td>

            </tr>

            @endforeach
        </tbody>
    </table>
</div>

@endsection