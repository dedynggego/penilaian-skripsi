@extends('layout.main1')

@section('judul')
Form Penilaian
@endsection

@section('isi')
@if ($message = Session::get('error'))
<div class="alert alert-light-danger color-danger"><i data-feather="x-octagon"></i> {{$message}}</div>
@endif
<table class="table">
    <tbody>
        <tr>
            <td>Nama Mahasiswa</td>
            <th scope="row" style="color: black;">{{$skripsi->nama_mahasiswa}}</th>
        </tr>
        <tr>
            <td>NPM</td>
            <th scope="row" style="color: black">{{$skripsi->npm}}</th>
        </tr>
        <tr>
            <td>Judul</td>
            <th scope="row" style="color: black">{{$skripsi->judul}}</th>

        </tr>
    </tbody>
</table>
<br>

<form action="{{url('skripsi-nilai-store/' .$skripsi->id)}}" method="POST">
    @csrf
    @method('PUT')
    <!-- KOMPONEN 1 -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">1. Sistematika Penulisan (bobot 5%)</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">

                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">a. Pendahuluan</h5>
                                </div>
                                <div class="col-md-auto">

                                    <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning">
                                                <input class="form-check-input" type="radio" name="a1" id="radioDanger1" value=1 required>
                                                <label class="form-check-label" for="Danger">1
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning">
                                                <input class="form-check-input" type="radio" name="a1" id="radioDanger2" value=2>
                                                <label class="form-check-label" for="radioDanger2">2
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="a1" id="radioDanger4" value=4>
                                                <label class="form-check-label" for="radioDanger4">4
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="a1" id="radioDanger5" value=5>
                                                <label class="form-check-label" for="radioDanger5">5
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">b. Teori Penunjang</h5>
                                </div>
                                <div class="col-md-auto">

                                    <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="b1" id="radioDanger1" value=1 required>
                                                <label class="form-check-label" for="Danger">1
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning">
                                                <input class="form-check-input" type="radio" name="b1" id="radioDanger2" value=2>
                                                <label class="form-check-label" for="radioDanger2">2
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="b1" id="radioDanger4" value=4>
                                                <label class="form-check-label" for="radioDanger4">4
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="b1" id="radioDanger5" value="5">
                                                <label class="form-check-label" for="radioDanger5">5
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">c. Pembahasan</h5>
                                </div>
                                <div class="col-md-auto">

                                    <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="c1" id="radioDanger1" value="1" required>
                                                <label class="form-check-label" for="Danger">1
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning">
                                                <input class="form-check-input" type="radio" name="c1" id="radioDanger2" value="2">
                                                <label class="form-check-label" for="radioDanger2">2
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="c1" id="radioDanger4" value="4">
                                                <label class="form-check-label" for="radioDanger4">4
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="c1" id="radioDanger5" value="5">
                                                <label class="form-check-label" for="radioDanger5">5
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">d. Penutup</h5>
                                </div>
                                <div class="col-md-auto">

                                    <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="d1" id="radioDanger1" value="1" required>
                                                <label class="form-check-label" for="Danger">1
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning">
                                                <input class="form-check-input" type="radio" name="d1" id="radioDanger2" value="2">
                                                <label class="form-check-label" for="radioDanger2">2
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="d1" id="radioDanger4" value="4">
                                                <label class="form-check-label" for="radioDanger4">4
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="d1" id="radioDanger5" value="5">
                                                <label class="form-check-label" for="radioDanger5">5
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- KOMPONEN 2 -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">2. Teknik Pembuatan (bobot 5%)</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">

                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">a. Pengetikan/Penulisan</h5>
                                </div>
                                <div class="col-md-auto">

                                    <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="a2" id="radioDanger1" value="1" required>
                                                <label class="form-check-label" for="Danger">1
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning">
                                                <input class="form-check-input" type="radio" name="a2" id="radioDanger2" value="2">
                                                <label class="form-check-label" for="radioDanger2">2
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="a2" id="radioDanger4" value="4">
                                                <label class="form-check-label" for="radioDanger4">4
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="a2" id="radioDanger5" value="5">
                                                <label class="form-check-label" for="radioDanger5">5
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">b. Gambar Ilustrasi</h5>
                                </div>
                                <div class="col-md-auto">
                                    <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="b2" id="radioDanger1" value="1" required>
                                                <label class="form-check-label" for="Danger">1
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning">
                                                <input class="form-check-input" type="radio" name="b2" id="radioDanger2" value="2">
                                                <label class="form-check-label" for="radioDanger2">2
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="b2" id="radioDanger4" value="4">
                                                <label class="form-check-label" for="radioDanger4">4
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="b2" id="radioDanger5" value="5">
                                                <label class="form-check-label" for="radioDanger5">5
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- KOMPONEN 3 -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">3. Jumlah Materi (bobot 5%)</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">

                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">a. Teori Penunjang</h5>
                                </div>
                                <div class="col-md-auto">

                                    <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="a3" id="radioDanger1" value="1" required>
                                                <label class="form-check-label" for="Danger">1
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning">
                                                <input class="form-check-input" type="radio" name="a3" id="radioDanger2" value="2">
                                                <label class="form-check-label" for="radioDanger2">2
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="a3" id="radioDanger4" value="4">
                                                <label class="form-check-label" for="radioDanger4">4
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="a3" id="radioDanger5" value="5">
                                                <label class="form-check-label" for="radioDanger5">5
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">b. Pembahasan Materi</h5>
                                </div>
                                <div class="col-md-auto">

                                    <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="b3" id="radioDanger1" value="1" required>
                                                <label class="form-check-label" for="Danger">1
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning">
                                                <input class="form-check-input" type="radio" name="b3" id="radioDanger2" value="2">
                                                <label class="form-check-label" for="radioDanger2">2
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="b3" id="radioDanger4" value="4">
                                                <label class="form-check-label" for="radioDanger4">4
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="b3" id="radioDanger5" value="5">
                                                <label class="form-check-label" for="radioDanger5">5
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- KOMPONEN 4 -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">4. Mutu Materi (bobot 10%)</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">

                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">a. Bahasa</h5>
                                </div>
                                <div class="col-md-auto">

                                    <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="a4" id="radioDanger1" value="1" required>
                                                <label class="form-check-label" for="Danger">1
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning">
                                                <input class="form-check-input" type="radio" name="a4" id="radioDanger2" value="2">
                                                <label class="form-check-label" for="radioDanger2">2
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="a4" id="radioDanger4" value="4">
                                                <label class="form-check-label" for="radioDanger4">4
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="a4" id="radioDanger5" value="5">
                                                <label class="form-check-label" for="radioDanger5">5
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">b. Teori/Rumus</h5>
                                </div>
                                <div class="col-md-auto">

                                    <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="b4" id="radioDanger1" value="1" required>
                                                <label class="form-check-label" for="Danger">1
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning">
                                                <input class="form-check-input" type="radio" name="b4" id="radioDanger2" value="2">
                                                <label class="form-check-label" for="radioDanger2">2
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="b4" id="radioDanger4" value="4">
                                                <label class="form-check-label" for="radioDanger4">4
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="b4" id="radioDanger5" value="5">
                                                <label class="form-check-label" for="radioDanger5">5
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">c. Data Teknis</h5>
                                </div>
                                <div class="col-md-auto">

                                    <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="c4" id="radioDanger1" value="1" required>
                                                <label class="form-check-label" for="Danger">1
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning">
                                                <input class="form-check-input" type="radio" name="c4" id="radioDanger2" value="2">
                                                <label class="form-check-label" for="radioDanger2">2
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="c4" id="radioDanger4" value="4">
                                                <label class="form-check-label" for="radioDanger4">4
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="c4" id="radioDanger5" value="5">
                                                <label class="form-check-label" for="radioDanger5">5
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">d. Perhitungan/Analisa</h5>
                                </div>
                                <div class="col-md-auto">

                                    <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="d4" id="radioDanger1" value="1" required>
                                                <label class="form-check-label" for="Danger">1
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning">
                                                <input class="form-check-input" type="radio" name="d4" id="radioDanger2" value="2">
                                                <label class="form-check-label" for="radioDanger2">2
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="d4" id="radioDanger4" value="4">
                                                <label class="form-check-label" for="radioDanger4">4
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="d4" id="radioDanger5" value="5">
                                                <label class="form-check-label" for="radioDanger5">5
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">e. Gambar Kerja</h5>
                                </div>
                                <div class="col-md-auto">

                                    <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="e4" id="radioDanger1" value="1" required>
                                                <label class="form-check-label" for="Danger">1
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning">
                                                <input class="form-check-input" type="radio" name="e4" id="radioDanger2" value="2">
                                                <label class="form-check-label" for="radioDanger2">2
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="e4" id="radioDanger4" value="4">
                                                <label class="form-check-label" for="radioDanger4">4
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="e4" id="radioDanger5" value="5">
                                                <label class="form-check-label" for="radioDanger5">5
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">f. Pembahasan</h5>
                                </div>
                                <div class="col-md-auto">

                                    <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="f4" id="radioDanger1" value="1" required>
                                                <label class="form-check-label" for="Danger">1
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning">
                                                <input class="form-check-input" type="radio" name="f4" id="radioDanger2" value="2">
                                                <label class="form-check-label" for="radioDanger2">2
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="f4" id="radioDanger4" value="4">
                                                <label class="form-check-label" for="radioDanger4">4
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="f4" id="radioDanger5" value="5">
                                                <label class="form-check-label" for="radioDanger5">5
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">g. Kesimpulan/Saran</h5>
                                </div>
                                <div class="col-md-auto">

                                    <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="g4" id="radioDanger1" value="1" required>
                                                <label class="form-check-label" for="Danger">1
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning">
                                                <input class="form-check-input" type="radio" name="g4" id="radioDanger2" value="2">
                                                <label class="form-check-label" for="radioDanger2">2
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="g4" id="radioDanger4" value="4">
                                                <label class="form-check-label" for="radioDanger4">4
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="g4" id="radioDanger5" value="5">
                                                <label class="form-check-label" for="radioDanger5">5
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- KOMPONEN  5-->
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">5. Sikap (bobot 10%)</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">

                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">a. Kerapian</h5>
                                </div>
                                <div class="col-md-auto">

                                    <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="a5" id="radioDanger1" value="1" required>
                                                <label class="form-check-label" for="Danger">1
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning">
                                                <input class="form-check-input" type="radio" name="a5" id="radioDanger2" value="2">
                                                <label class="form-check-label" for="radioDanger2">2
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="a5" id="radioDanger4" value="4">
                                                <label class="form-check-label" for="radioDanger4">4
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="a5" id="radioDanger5" value="5">
                                                <label class="form-check-label" for="radioDanger5">5
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">b. Ketegasan</h5>
                                </div>
                                <div class="col-md-auto">

                                    <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="b5" id="radioDanger1" value="1" required>
                                                <label class="form-check-label" for="Danger">1
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning">
                                                <input class="form-check-input" type="radio" name="b5" id="radioDanger2" value="2">
                                                <label class="form-check-label" for="radioDanger2">2
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="b5" id="radioDanger4" value="4">
                                                <label class="form-check-label" for="radioDanger4">4
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="b5" id="radioDanger5" value="5">
                                                <label class="form-check-label" for="radioDanger5">5
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">c. Penampilan</h5>
                                </div>
                                <div class="col-md-auto">

                                    <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="c5" id="radioDanger1" value="1" required>
                                                <label class="form-check-label" for="Danger">1
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning">
                                                <input class="form-check-input" type="radio" name="c5" id="radioDanger2" value="2">
                                                <label class="form-check-label" for="radioDanger2">2
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="c5" id="radioDanger4" value="4">
                                                <label class="form-check-label" for="radioDanger4">4
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="c5" id="radioDanger5" value="5">
                                                <label class="form-check-label" for="radioDanger5">5
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">d. Teknis Penyampaian</h5>
                                </div>
                                <div class="col-md-auto">

                                    <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="d5" id="radioDanger1" value="1" required>
                                                <label class="form-check-label" for="Danger">1
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning">
                                                <input class="form-check-input" type="radio" name="d5" id="radioDanger2" value="2">
                                                <label class="form-check-label" for="radioDanger2">2
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="d5" id="radioDanger4" value="4">
                                                <label class="form-check-label" for="radioDanger4">4
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="d5" id="radioDanger5" value="5">
                                                <label class="form-check-label" for="radioDanger5">5
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">e. Kreatifitas</h5>
                                </div>
                                <div class="col-md-auto">

                                    <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="e5" id="radioDanger1" value="1" required>
                                                <label class="form-check-label" for="Danger">1
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning">
                                                <input class="form-check-input" type="radio" name="e5" id="radioDanger2" value="2">
                                                <label class="form-check-label" for="radioDanger2">2
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="e5" id="radioDanger4" value="4">
                                                <label class="form-check-label" for="radioDanger4">4
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="e5" id="radioDanger5" value="5">
                                                <label class="form-check-label" for="radioDanger5">5
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">f. Mempertahankan Argumentasi Logis</h5>
                                </div>
                                <div class="col-md-auto">

                                    <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="f5" id="radioDanger1" value="1" required>
                                                <label class="form-check-label" for="Danger">1
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning">
                                                <input class="form-check-input" type="radio" name="f5" id="radioDanger2" value="2">
                                                <label class="form-check-label" for="radioDanger2">2
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="f5" id="radioDanger4" value="4">
                                                <label class="form-check-label" for="radioDanger4">4
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="f5" id="radioDanger5" value="5">
                                                <label class="form-check-label" for="radioDanger5">5
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- KOMPONEN 6 -->

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">6. Penguasaan Materi (bobot 35%)</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">

                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">a. Kebenaran Jawaban</h5>
                                </div>
                                <div class="col-md-auto">

                                    <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="a6" id="radioDanger1" value="1" required>
                                                <label class="form-check-label" for="Danger">1
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning">
                                                <input class="form-check-input" type="radio" name="a6" id="radioDanger2" value="2">
                                                <label class="form-check-label" for="radioDanger2">2
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="a6" id="radioDanger4" value="4">
                                                <label class="form-check-label" for="radioDanger4">4
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="a6" id="radioDanger5" value="5">
                                                <label class="form-check-label" for="radioDanger5">5
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">b. Penguasaan Teori Pendukung</h5>
                                </div>
                                <div class="col-md-auto">

                                    <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="b6" id="radioDanger1" value="1" required>
                                                <label class="form-check-label" for="Danger">1
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning">
                                                <input class="form-check-input" type="radio" name="b6" id="radioDanger2" value="2">
                                                <label class="form-check-label" for="radioDanger2">2
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="b6" id="radioDanger4" value="4">
                                                <label class="form-check-label" for="radioDanger4">4
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="b6" id="radioDanger5" value="5">
                                                <label class="form-check-label" for="radioDanger5">5
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">c. Penguasaan Materi Pokok</h5>
                                </div>
                                <div class="col-md-auto">

                                    <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="c6" id="radioDanger1" value="1" required>
                                                <label class="form-check-label" for="Danger">1
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning">
                                                <input class="form-check-input" type="radio" name="c6" id="radioDanger2" value="2">
                                                <label class="form-check-label" for="radioDanger2">2
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="c6" id="radioDanger4" value="4">
                                                <label class="form-check-label" for="radioDanger4">4
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="c6" id="radioDanger5" value="5">
                                                <label class="form-check-label" for="radioDanger5">5
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- KOMPONEN 7 -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">7a. Peralatan (bobot 30%)<strong>*)</strong></h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">

                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">a. Kinerja Alat</h5>
                                </div>
                                <div class="col-md-auto">

                                    <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="aa7" id="radioDanger1" value="1" required>
                                                <label class="form-check-label" for="Danger">1
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning">
                                                <input class="form-check-input" type="radio" name="aa7" id="radioDanger2" value="2">
                                                <label class="form-check-label" for="radioDanger2">2
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="aa7" id="radioDanger4" value="4">
                                                <label class="form-check-label" for="radioDanger4">4
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="aa7" id="radioDanger5" value="5">
                                                <label class="form-check-label" for="radioDanger5">5
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">b. Kerapian Pembuatan Alat</h5>
                                </div>
                                <div class="col-md-auto">

                                    <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="ab7" id="radioDanger1" value="1" required>
                                                <label class="form-check-label" for="Danger">1
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning">
                                                <input class="form-check-input" type="radio" name="ab7" id="radioDanger2" value="2">
                                                <label class="form-check-label" for="radioDanger2">2
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="ab7" id="radioDanger4" value="4">
                                                <label class="form-check-label" for="radioDanger4">4
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="ab7" id="radioDanger5" value="5">
                                                <label class="form-check-label" for="radioDanger5">5
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">c. Ketepatan/Ketelitian Alat</h5>
                                </div>
                                <div class="col-md-auto">

                                    <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="ac7" id="radioDanger1" value="1" required>
                                                <label class="form-check-label" for="Danger">1
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning">
                                                <input class="form-check-input" type="radio" name="ac7" id="radioDanger2" value="2">
                                                <label class="form-check-label" for="radioDanger2">2
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="ac7" id="radioDanger4" value="4">
                                                <label class="form-check-label" for="radioDanger4">4
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="ac7" id="radioDanger5" value="5">
                                                <label class="form-check-label" for="radioDanger5">5
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <span><strong>*) </strong>Bila skripsi adalah Membuat Alat</span>
                        </div>
                    </div>
                </div>

                <!-- KOMPONEN 7B -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">7b. Tinjauan/Studi Kelayakan (bobot 25%)<strong>**)</strong></h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">

                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">a. Metode Analisa</h5>
                                </div>
                                <div class="col-md-auto">

                                    <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="ba7" id="radioDanger1" value="1">
                                                <label class="form-check-label" for="Danger">1
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning">
                                                <input class="form-check-input" type="radio" name="ba7" id="radioDanger2" value="2">
                                                <label class="form-check-label" for="radioDanger2">2
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="ba7" id="radioDanger4" value="4">
                                                <label class="form-check-label" for="radioDanger4">4
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="ba7" id="radioDanger5" value="5">
                                                <label class="form-check-label" for="radioDanger5">5
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">b. Hasil Analisa</h5>
                                </div>
                                <div class="col-md-auto">

                                    <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="bb7" id="radioDanger1" value="1">
                                                <label class="form-check-label" for="Danger">1
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning">
                                                <input class="form-check-input" type="radio" name="bb7" id="radioDanger2" value="2">
                                                <label class="form-check-label" for="radioDanger2">2
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="bb7" id="radioDanger4" value="4">
                                                <label class="form-check-label" for="radioDanger4">4
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-warning ">
                                                <input class="form-check-input" type="radio" name="bb7" id="radioDanger5" value="5">
                                                <label class="form-check-label" for="radioDanger5">5
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <span><strong>**) </strong>Bila skripsi adalah Tinjauan/Studi Kelayakan</span>
                        </div>
                    </div>
                </div>

                <div class="card">
                <div class="card-header">
                        <h4 class="card-title">Status Penilai</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-auto">

                                    <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-success">
                                                <input class="form-check-input" type="radio" name="status-penilai" id="radioDanger1" value="pembimbing" required>
                                                <label class="form-check-label" for="Danger">Pembimbing
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check form-check-success">
                                                <input class="form-check-input" type="radio" name="status-penilai" id="radioDanger2" value="penguji">
                                                <label class="form-check-label" for="radioDanger2">Penguji
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>


        </div>
    </section>

    @if ($skripsi->users->find($user->id)->pivot->nilai == 0)
    <div class="col d-flex justify-content-end">
        <button type="submit" class="btn btn-success me-1 mb-1"><i data-feather="check-circle"></i> Beri Nilai</button>
    </div>
    @endif

</form>







@endsection