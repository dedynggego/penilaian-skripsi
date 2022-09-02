@extends('layout.main1')

@section('judul')

@endsection

@section('isi')
<div class="card col-5 m-auto">

    <div class="card-header">
        <h3><strong> Tambah Data Ujian </strong></h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{url('/skripsi/store')}}" method="POST">
        @csrf
        <div class="card-body">

            <h6>Nama Mahasiswa</h6>
            <div class="form-group position-relative has-icon-right">
                <input type="text" class="form-control" id="name" placeholder="Masukkan Nama" , name="name" autocomplete="off" autofocus required>
                <div class="form-control-icon">
                    <i data-feather="user"></i>
                </div>
            </div>


            <h6>NPM</h6>
            <div class="form-group position-relative has-icon-right">
                <input type="text" class="form-control" id="npm" placeholder="Masukkan NPM" , name="npm" autocomplete="off" required>
                <div class="form-control-icon">
                    <i data-feather="hash"></i>
                </div>
            </div>


            <h6>Judul</h6>
            <div class="form-group position-relative has-icon-right">
                <input type="text" class="form-control" id="judul" placeholder="Masukkan Judul" , name="judul" autocomplete="off" required>
                <div class="form-control-icon">
                    <i data-feather="align-justify"></i>
                </div>
            </div>


            <h6>Tanggal</h6>
            <div class="form-group position-relative has-icon-right">
                <input type="text" class="form-control" id="tanggal" placeholder="dd-mm-yyyy" , name="tanggal" autocomplete="off" required>
            </div>


            <h6>Jam</h6>
            <div class="form-group position-relative has-icon-right">
                <input type="text" class="form-control" id="jam" placeholder="--:--" , name="jam" autocomplete="off" required>
            </div>


            <h6>Dosen Penilai</h6>
            <div class="form-group position-relative has-icon-right">
                <select class="choices form-select multiple-remove" multiple="multiple" data-placeholder="Pilih Dosen Pembimbing dan Penguji" name="tags[]" required>
                    @foreach ($dosen as $dos )
                    <option @if ($dos->level==2)
                        value="{{$dos->id}}"
                        @endif>
                        @if ($dos->level == 2)
                        {{$dos->name}}
                        @endif
                    </option>
                    @endforeach
                </select>
                <div class="form-control-icon">
                    <i data-feather="users"></i>
                </div>
            </div>

            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-success"><i data-feather="check-circle"></i> Simpan</button>
            </div>
    </form>
</div>
@endsection