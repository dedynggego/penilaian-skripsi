@extends('layout.main1')

@section('judul')

@endsection

@section('isi')
<div class="card card-danger  col-5 m-auto">
    <div class="card-header">
        <h3><strong> Edit Data User/Dosen </strong></h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{url('/dosen/' . $dosen->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="card-body">

            <h6>Nama Lengkap</h6>
            <div class="form-group position-relative has-icon-right">
                <input type="text" class="form-control" id="name" placeholder="Masukkan Nama" , name="name" required value="{{$dosen->name}}">
                <div class="form-control-icon">
                    <i data-feather="user"></i>
                </div>
            </div>


            <h6>NIDN</h6>
            <div class="form-group position-relative has-icon-right">
                <input type="text" class="form-control" id="nidn" placeholder="Masukkan NIDN" , name="nidn" value="{{$dosen->nidn}}">
                <div class="form-control-icon">
                    <i data-feather="hash"></i>
                </div>
            </div>


            <h6>Email</h6>
            <div class="form-group position-relative has-icon-right">
                <input type="email" class="form-control" id="email" placeholder="Masukkan Email" , name="email" required value="{{$dosen->email}}">
                <div class="form-control-icon">
                    <i data-feather="mail"></i>
                </div>
            </div>


            <h6>Username</h6>
            <div class="form-group position-relative has-icon-right">
                <input type="text" class="form-control" id="username" placeholder="Masukkan Username" , name="username" required value="{{$dosen->username}}">
                <div class="form-control-icon">
                    <i data-feather="user-check"></i>
                </div>
            </div>

            <div class="form-group">
                <label for="level">Level</label>
                <select id="level" class="form-control custom-select" , name="level" required>
                    <option selected disabled>Pilih satu</option>
                    <option value="{{$dosen->level}}" @if ($dosen->level == 1)
                        selected
                    @endif>Admin</option>
                    <option value="{{$dosen->level}}" @if ($dosen->level == 2)
                        selected
                    @endif>Dosen</option>
                    <option value="{{$dosen->level}}" @if ($dosen->level == 3)
                        selected
                    @endif>Mahasiswa</option>
                </select>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-success"><i data-feather="check-circle"></i> Simpan</button>
            </div>
    </form>
</div>
@endsection