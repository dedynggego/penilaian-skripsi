@extends('layout.main1')

@section('judul')

@endsection

@section('isi')
<div class="card card-danger  col-5 m-auto">
    <div class="card-header">
        <h3><strong> Tambah Data User/Dosen </strong></h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/dosen/store" method="POST">
        @csrf
        <div class="card-body">

            <h6>Nama Lengkap</h6>
            <div class="form-group position-relative has-icon-right">
                <input type="text" class="form-control" id="name" placeholder="Masukkan Nama" , name="name" required autocomplete="off" autofocus>
                <div class="form-control-icon">
                    <i data-feather="user"></i>
                </div>
            </div>


            <h6>NIDN</h6>
            <div class="form-group position-relative has-icon-right">
                <input type="text" class="form-control" id="nidn" placeholder="Masukkan NIDN" , name="nidn" autocomplete="off">
                <div class="form-control-icon">
                    <i data-feather="hash"></i>
                </div>
            </div>


            <h6>Email</h6>
            <div class="form-group position-relative has-icon-right">
                <input type="email" class="form-control" id="email" placeholder="Masukkan Email" , name="email" required autocomplete="off">
                <div class="form-control-icon">
                    <i data-feather="mail"></i>
                </div>
            </div>


            <h6>Username</h6>
            <div class="form-group position-relative has-icon-right">
                <input type="text" class="form-control" id="username" placeholder="Masukkan Username" , name="username" required autocomplete="off">
                <div class="form-control-icon">
                    <i data-feather="user-check"></i>
                </div>
            </div>

            <h6>Password</h6>
            <div class="form-group position-relative has-icon-right">
                <input type="password" class="form-control" id="password" placeholder="Masukkan Password" , name="password" required>
                <div class="form-control-icon">
                    <i data-feather="key"></i>
                </div>
            </div>

            <div class="form-group">
                <label for="level">Level</label>
                <select id="level" class="form-control custom-select" , name="level" required>
                    <option selected disabled>Pilih satu</option>
                    <option value=1>Admin</option>
                    <option value=2>Dosen</option>
                    <option value=3>Mahasiswa</option>
                </select>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-success"><i data-feather="check-circle"></i> Simpan</button>
            </div>
    </form>
</div>
@endsection