@extends('layout.main1')

@section('judul')
Tambah Data User/Dosen
@endsection

@section('isi')
<div class="card card-danger  col-5 m-auto" >
    <div class="card-header">

    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/dosen/store" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" placeholder="Masukkan Nama" , name="name" required>
            </div>
            <div class="form-group">
                <label for="nidn">NIDN</label>
                <input type="text" class="form-control" id="nidn" placeholder="Masukkan NIDN" , name="nidn">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan Email" , name="email" required>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Masukkan Username" , name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Masukkan Password" , name="password" required>
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