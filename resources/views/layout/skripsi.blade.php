@extends('layout.main1')

@section('judul')
List Ujian Skripsi
@endsection

@section('isi')
@if ($message = Session::get('success'))
<div class="alert alert-light-success color-success"><i data-feather="star"></i> {{$message}}</div>
@endif

@if (Auth::user()->id == 1)
<a href="{{ url('skripsi/create') }}" class="btn btn-success btn-sm" title="Tambah Data Skripsi">
    <i data-feather="plus-circle"></i> Tambah Data
</a>
<br />
<br />
@endif


<table id="table1" class="table table-striped " style="width:100%">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Judul</th>
            <th>Total Nilai</th>
            <th>Nilai Huruf</th>
            <th>Dosen Penilai</th>
            <th>Aksi</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($skripsis as $item )
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item-> nama_mahasiswa}}</td>
            <td>{{$item->npm}}</td>
            <td>{{$item->judul}}</td>
            <td>{{$item->total_nilai}}</td>
            <td>{{$item->nilai_huruf}}</td>
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
            <td>
                <a href="{{ url('/skripsi-nilai/' . $item->id) }}" title="Beri Nilai" class="btn icon icon-left btn-warning"><i data-feather="edit-3"></i> Beri Nilai</a>
            </td>
            @endif
            @endforeach
            @if (Auth::user()->id==1)
            <td>
                <a href="{{ url('/skripsi/' . $item->id . '/edit') }}" title="Edit Data"><button class="btn icon btn-info"><i data-feather="edit"></i></button></a>
                <br> &nbsp;
                <form method="POST" action="{{ url('/skripsi' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn icon btn-danger" title="Delete Data" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i data-feather="trash-2"></i></button>
                </form>
            </td>
            @endif
        </tr>

        @endforeach
    </tbody>
</table>




@endsection