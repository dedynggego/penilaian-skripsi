@extends('layout.main1')

@section('judul')
Kelola Data Dosen
@endsection

@section('isi')
@if ($message = Session::get('success'))
<div class="alert alert-light-success color-success"><i data-feather="star"></i> {{$message}}</div>
@endif


<a href="{{url('dosen/create')}}" class="btn btn-success btn-sm" title="Add New Student">
    <i data-feather="plus-circle"></i> Tambah Data
</a>
<br />
<br />

<table id="table1" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>NIDN</th>
            <th>Email</th>
            <th>Username</th>
            <th>Aksi</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($dosens as $item )
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item-> name}}</td>
            <td>{{$item->nidn}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->username}}</td>
            <td>
                <!-- <a href="{{ url('/dosen/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> -->
                <a href="{{ url('/dosen/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                <form method="POST" action="{{ url('/dosen' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                </form>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>

@endsection