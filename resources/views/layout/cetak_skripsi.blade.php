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
        </thead> <br>
        <tbody>
            <tr>
                <td>Dari Tanggal: <br>
                    Sampai Tanggal:
                </td>
                <td>{{$tgl_dari}} <br>
                    {{$tgl_sampai}}
                </td>
            </tr>
        </tbody>
    </table>
    <br>

    <table class="table w-auto small table-bordered" style="width:100%">
        <thead>
            <tr>
                <!-- <th>No</th> -->
                <th>Tanggal</th>
                <th style="text-align: center;">Nama</th>
                <th style="text-align: center;">NPM</th>
                <th style="text-align: center;">Judul</th>
                <th style="text-align: center;">Total Nilai</th>
                <th style="text-align: center;">Nilai Huruf</th>
                <th style="text-align: center;">Dosen Penilai</th>


            </tr>
        </thead>
        <tbody>

            @foreach ($cetak as $item )
            <tr>
                <!-- <td>{{$loop->iteration}}</td> -->
                <td>{{\Carbon\Carbon::parse($item->tanggal)->format('d-m-Y')}}</td>
                <td>{{$item-> nama_mahasiswa}}</td>
                <td>{{$item->npm}}</td>
                <td>{{$item->judul}}</td>
                <td style="text-align: center;">@if ($item->nilai_huruf==0)
                    Belum dinilai
                    @else
                    {{number_format($item->total_nilai, 2, '.', '')}}
                    @endif
                </td>
                <td style="text-align: center;">@if ($item->nilai_huruf==0)
                    Belum dinilai
                    @else
                    {{$item->nilai_huruf}}
                    @endif
                </td>
                <td>
                    @foreach ($item->users as $i)
                        <span> {{$loop->iteration}}. {{$i->name}}</span><br>
                    @endforeach
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
    <br>
    <table class="w-auto small">
        <thead>
            <tr>
                <th style="width: 60%;"> Merauke ......................... 2022 <strong> <br>Ketua Sidang, <br> <br><br><br><br>(........................................................................) </strong></th>
            </tr>
        </thead>
    </table>

   

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>