@extends('layout.main1')

@section('judul')

@endsection

@section('isi')
<div class="card  col-5 m-auto">
    <div class="card-body">
        <h3 style="color: black;">
            <strong>Edit Data Skripsi</strong>
        </h3>
    </div>

    <form action="{{url('/skripsi/' . $skripsi->id)}}" method="POST">

        @method('PUT')
        @csrf
        <div class="card-body">

            <h6>Nama Mahasiswa</h6>
            <div class="form-group position-relative has-icon-right">
                <input type="text" class="form-control" id="name" placeholder="Masukkan Nama" , name="name" autocomplete="off" value="{{$skripsi->nama_mahasiswa}}" autofocus required>
                <div class="form-control-icon">
                    <i data-feather="user"></i>
                </div>
            </div>

            <h6>NPM</h6>
            <div class="form-group position-relative has-icon-right">
                <input type="text" class="form-control" id="npm" placeholder="Masukkan NPM" , name="npm" autocomplete="off" value="{{$skripsi->npm}}" required>
                <div class="form-control-icon">
                    <i data-feather="hash"></i>
                </div>
            </div>

            <h6>Judul</h6>
            <div class="form-group position-relative has-icon-right">
                <input type="text" class="form-control" id="judul" placeholder="Masukkan Judul" , name="judul" autocomplete="off" value="{{$skripsi->judul}}" required>
                <div class="form-control-icon">
                    <i data-feather="align-justify"></i>
                </div>
            </div>

            <h6>Tanggal</h6>
            <div class="form-group position-relative has-icon-right">
                <input type="text" class="form-control" id="tanggal" placeholder="Masukkan Tanggal" , name="tanggal" autocomplete="off" value="{{\Carbon\Carbon::parse($skripsi->tanggal)->format('d-m-Y')}}" required>
            </div>

            <h6>Jam</h6>
            <div class="form-group position-relative has-icon-right">
                <input type="text" class="form-control" id="jam" placeholder="Masukkan Jam" , name="jam" autocomplete="off" value="{{$skripsi->jam}}" required>
            </div>

            <div class="form-group">
                <label>Dosen Penilai</label>
                <select class="choices form-select multiple-remove" multiple="multiple" data-placeholder="Pilih Dosen Pembimbing dan Penguji" name="tags[]">
                    @foreach ($dosen as $dos )
                    <option value="{{$dos->id}}" @foreach ($skripsi->users as $s )
                        @if (in_array($dos->id, old('tags',[$s->id]))) selected @endif @endforeach>{{$dos->name}}</option>
                    @endforeach
                </select>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-success"><i data-feather="check-circle"></i> Update</button>
            </div>
        </div>
    </form>
</div>
@endsection