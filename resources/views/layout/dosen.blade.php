@extends('layout.main1')

@section('judul')

@endsection

@section('isi')
@if ($message = Session::get('success'))
<div class="alert alert-light-success color-success"><i data-feather="star"></i> {{$message}}</div>
@endif

<div class="card">
    <div class="card-body">
        <h3 style="color: black;">
            <strong>Kelola Data Dosen</strong>
        </h3>
        <br>
        @if (Auth::user()->id == 1)
        <a href="{{ url('dosen/create') }}" class="btn btn-success btn-sm" title="Tambah Data Skripsi">
            <i data-feather="plus-circle"></i> Tambah Data
        </a>
        @endif
    </div>
    <table id="table1" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIDN</th>
                <th>Email</th>
                <th>Username</th>
                <th>Aksi</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($dosens as $item )
            @if ($item->level == 2)
            <tr>
                <td style="color: black;">{{$item-> name}}</td>
                <td style="color: black;">{{$item->nidn}}</td>
                <td style="color: black;">{{$item->email}}</td>
                <td style="color: black;">{{$item->username}}</td>
                <td>
                    <!-- <a href="{{ url('/dosen/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> -->
                    <a href="{{ url('/dosen/' . $item->id . '/edit') }}" title="Edit Data"><button class="btn btn-primary btn-sm"><img src="{{asset('/')}}dist1/img/edit.svg" alt="" srcset=""> Edit</button></a>

                    <form method="POST" action="{{ url('/dosen' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Data" onclick="return confirm('Confirm delete?')"><img src="{{asset('/')}}dist1/img/trash-2.svg" alt="" srcset=""> Delete</button>
                    </form>
                </td>
            </tr>

            @endif
            @endforeach
        </tbody>
    </table>
</div>

@endsection