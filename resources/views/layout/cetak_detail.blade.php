<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>
        Laporan
    </title>
</head>

<body>
    
    <table>
        <thead>
            <tr>
                <th style="width: 10% ;"><img src="/home/deding/webapp/public/dist1/img/unmus.svg" style="width:200px;height:140px;"></th>
                <th style="width: 60%;"> <strong> DAFTAR NILAI UJIAN SKRIPSI <br>JURUSAN TEKNIK INFORMATIKA <br> FAKULTAS TEKNIK UNIVERSITAS MUSAMUS </strong></th>
            </tr>
        </thead> 
    </table>
    <div class="card">
        <div class="card-body">

            <table>
                <tbody>
                    <tr>
                        <td style="color: black;">Nama Mahasiswa</td>
                        <th scope="row" style="color: black;">: {{$skripsi->nama_mahasiswa}}</th>
                    </tr>
                    <tr>
                        <td style="color: black;">NPM</td>
                        <th scope="row" style="color: black">: {{$skripsi->npm}}</th>
                    </tr>
                    <tr>
                        <td style="color: black;">Judul</td>
                        <th scope="row" style="color: black">: {{$skripsi->judul}}</th>

                    </tr>
                </tbody>
            </table>
            <br>
            <br>
            @foreach ($detail as $item )
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="color: black;">Dosen Penilai</th>
                        <th style="color: black;">Nilai</th>
                        <th style="color: black;">Tanda Tangan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($item->users as $i )
                    <tr>
                        <td style="color: black;">{{$i->name}}</td>
                        <td style="color: black;">{{$i->pivot->nilai}}</td>
                        <td style="color: black;"></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endforeach

            <table class="w-auto small">
                <thead>
                    <tr>
                        <th style="width: 60%;"> Merauke, ........................... 2022 <strong> <br>Ketua Sidang, <br> <br><br><br><br>(........................................................................) </strong></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>