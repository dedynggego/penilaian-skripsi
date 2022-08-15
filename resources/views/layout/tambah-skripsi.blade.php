@extends('layout.main1')

@section('judul')
Tambah Data Skripsi
@endsection

@section('isi')
<div class="card card-danger  col-5 m-auto">
    <div class="card-header">

    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{url('/skripsi/store')}}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Nama Mahasiswa</label>
                <input type="text" class="form-control" id="name" placeholder="Masukkan Nama" , name="name">
            </div>
            <div class="form-group">
                <label for="npm">NPM</label>
                <input type="text" class="form-control" id="nidn" placeholder="Masukkan NPM" , name="npm">
            </div>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="nidn" placeholder="Masukkan Judul" , name="judul">
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="text" class="form-control" id="nidn" placeholder="Masukkan Tanggal" , name="tanggal">
            </div>
            <div class="form-group">
                <label for="jam">Jam</label>
                <input type="text" class="form-control" id="nidn" placeholder="Masukkan Jam" , name="jam">
            </div>

            <div class="form-group">
                <label>Dosen Penilai</label>
                    <select class="choices form-select multiple-remove" multiple="multiple" data-placeholder="Pilih Dosen Pembimbing dan Penguji" name="tags[]">
                        @foreach ($dosen as $dos )
                        <option value="{{$dos->id}}">{{$dos->name}}</option>
                        @endforeach
                    </select>
            </div>

            
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-success"><i data-feather="check-circle"></i>  Simpan</button>
            </div>
    </form>
</div>
@endsection