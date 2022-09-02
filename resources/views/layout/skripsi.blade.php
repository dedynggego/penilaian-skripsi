@extends('layout.main1')

@section('judul')

@endsection

@section('isi')
@if ($message = Session::get('success'))
<div class="alert alert-light-success color-dark"><i data-feather="star"></i> {{$message}}</div>
@endif
@if ($message = Session::get('error'))
<div class="alert alert-light-danger color-danger"><i data-feather="x-octagon"></i> {{$message}}</div>
@endif



<div class="card">
    <div class="card-body">
        <h3 style="color: black;">
            <strong>Daftar Ujian Skripsi</strong>
        </h3>
        <br>
        @if (Auth::user()->id == 1)
        <a href="{{ url('skripsi/create') }}" class="btn btn-success btn-sm" title="Tambah Data Skripsi">
            <i data-feather="plus-circle"></i> Tambah Data
        </a>
        <a href="#" class="btn btn-primary btn-sm" title="Export to PDF" data-bs-toggle="modal" data-bs-target="#default">
            <i data-feather="printer"></i> Export PDF
        </a>
        @endif
    </div>

    <table id="table1" class="table table-responsive table-striped " style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th style="text-align: center;">Nama</th>
                <th style="text-align: center;">NPM</th>
                <th style="text-align: center;">Judul</th>
                <th style="text-align: center;">Total Nilai</th>
                <th style="text-align: center;">Nilai Huruf</th>
                <th style="text-align: center;">Dosen Penilai</th>
                <th style="text-align: center;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($skripsis as $item )
            <tr>
                <td style="color: black; vertical-align:middle;">{{$loop->iteration}}</td>
                <td style="color: black; vertical-align:middle;">{{$item-> nama_mahasiswa}}</td>
                <td style="color: black; vertical-align:middle;">{{$item->npm}}</td>
                <td style="color: black; vertical-align:middle;">{{$item->judul}}</td>
                <td style="text-align: center;  vertical-align:middle;">@if($item->nilai_huruf == 0)
                    <span class="badge bg-warning">Belum menyelesaikan penilaian</span>
                    @else
                    <span class="badge bg-success">{{number_format($item->total_nilai, 2, '.', '')}}</span>
                    @endif
                </td>
                <td style="text-align: center; vertical-align:middle;">@if($item->nilai_huruf == 0)
                    <span class="badge bg-warning">Belum menyelesaikan penilaian</span>
                    @else
                    <span class="badge bg-success">{{$item->nilai_huruf}}</span>
                    @endif
                </td>
                <td>
                    @foreach ($item->users as $i)
                    @if ($i->pivot->nilai > 0)
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span> {{$loop->iteration}}. {{$i->name}}</span>
                            <span class="badge bg-success badge-pill badge-round ml-1" title="Telah Dinilai"><img src="{{asset('/')}}dist1/img/check-circle.svg" alt="" srcset=""></span>
                        </li>
                        @else
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span> {{$loop->iteration}}. {{$i->name}}</span>
                            <span class="badge bg-warning badge-pill badge-round ml-1" title="Belum Dinilai"><img src="{{asset('/')}}dist1/img/alert-circle.svg" alt="" srcset=""></span>
                        </li>
                    </ul>
                    @endif

                    @endforeach
                </td>
                @foreach ( $item->users as $i )
                @if ($i->pivot->user_id == Auth::user()->id and $i->pivot->nilai==0)
                <td style="text-align: center; vertical-align:middle;">
                    <a href="{{ url('/skripsi-nilai/' . $item->id) }}" title="Beri Nilai" class="btn icon icon-left btn-warning"><img src="{{asset('/')}}dist1/img/edit.svg" alt="" srcset=""> Beri Nilai</a>
                </td>
                @elseif ($i->pivot->user_id == Auth::user()->id)
                <td style="text-align: center; vertical-align:middle;">
                    <a href="{{ url('/detail/' . $item->id) }}" title="Lihat Detail" class="btn icon icon-left btn-success"><img src="{{asset('/')}}dist1/img/eye.svg" alt="" srcset=""> Detail</a>
                </td>
                @endif
                @endforeach
                @if (Auth::user()->id==1)
                <td style="text-align: center; vertical-align:middle;">
                    <a href="{{ url('/detail/' . $item->id) }}" title="Detail"> <button class="btn icon btn-success"><img src="{{asset('/')}}dist1/img/eye.svg"></button></a>
                    <br><br>
                    <a href="{{ url('/skripsi/' . $item->id . '/edit') }}" title="Edit Data"><button class="btn icon btn-primary"><img src="{{asset('/')}}dist1/img/edit.svg"></button></a>
                    <br> <br>
                    <form method="POST" action="{{ url('/skripsi' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn icon btn-danger" title="Delete Data" onclick="return confirm('Anda yakin ingin menghapus data ini? | {{$item->judul}}')"><img src="{{asset('/')}}dist1/img/trash-2.svg" alt="" srcset=""></button>
                    </form>
                </td>
                @endif

            </tr>

            @endforeach
        </tbody>
    </table>

</div>

@endsection