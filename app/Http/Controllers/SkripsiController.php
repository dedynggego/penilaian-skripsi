<?php

namespace App\Http\Controllers;

use App\Models\Skripsi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

use Barryvdh\DomPDF\Facade\Pdf;
use Exception;
use Illuminate\Support\Carbon;
use PhpParser\Node\Stmt\TryCatch;

class SkripsiController extends Controller
{
    public function index()
    {
        // $skripsis = Skripsi::with('users')->get();
        $skripsis = Skripsi::orderBy('id', 'desc')->get();

        $user = Auth::user();
        // $test = User::with('pages')->get();

        return view('layout.skripsi')->with([
            'skripsis' => $skripsis,
            'user' => $user,
        ]);
    }

    public function create()
    {
        $skripsis = Skripsi::all();
        $user = Auth::user();
        $dosen = User::all();
        return view('layout.tambah-skripsi')->with([
            'user' => $user,
            'skripsis' => $skripsis,
            'dosen' => $dosen,
        ]);
    }

    public function store(Request $request)
    {
        $skripsi = new Skripsi;
        $tgl = Carbon::parse($request->tanggal)->format('Y-m-d');
        $skripsi->nama_mahasiswa = $request->name;
        $skripsi->npm = $request->npm;
        $skripsi->judul = $request->judul;
        $skripsi->tanggal = $tgl;
        $skripsi->jam = $request->jam;
        $skripsi->save();
        $skripsi->users()->attach($request->tags);
        return redirect('skripsi')->with(['success' => 'Data berhasil disimpan.']);
        // dd(Auth::user()->id);

    }

    public function edit($id)
    {

        $skripsi = Skripsi::with('users')->findOrFail($id);
        $dosen = User::get(['id', 'name']);
        $user = Auth::user();
        return view('layout.edit_skripsi')->with([
            'dosen' => $dosen,
            'user' => $user,
            'skripsi' => $skripsi,
        ]);
    }

    public function update(Request $request, $id)
    {

        //code...
        $skripsi = Skripsi::findOrFail($id);
        $tgl = Carbon::parse($request->tanggal)->format('Y-m-d');
        $skripsi->nama_mahasiswa = $request->name;
        $skripsi->npm = $request->npm;
        $skripsi->judul = $request->judul;
        $skripsi->tanggal = $tgl;
        $skripsi->jam = $request->jam;
        $skripsi->total_nilai = 0;
        $skripsi->nilai_huruf = 0;
        $skripsi->status = 0;

        if (count($request->tags) < 5) {
            return redirect('skripsi')->with('error', 'Gagal, Dosen penilai harus berjumlah 5 orang');
        } else {
            $skripsi->users()->sync(
                [
                    $skripsi->id =>
                    ['user_id' => $request->tags[0]], // Masukkan 5 Dosen
                    ['user_id' => $request->tags[1]],
                    ['user_id' => $request->tags[2]],
                    ['user_id' => $request->tags[3]],
                    ['user_id' => $request->tags[4]],
                ]
            );
            $skripsi->save();
            return redirect('skripsi')->with('success', 'Data berhasil diperbaharui');
        }
    }

    public function destroy($id)
    {
        $skripsi = Skripsi::find($id);
        $skripsi->delete();
        return redirect('skripsi')->with('success', 'Data berhasil dihapus.');
    }

    public function formPenilaian($id)
    {
        $user = Auth::user();
        $skripsi = Skripsi::find($id);

        return view('layout.penilaian')->with([
            'user' => $user,
            'skripsi' => $skripsi,
        ]);
    }

    public function storeNilai(Request $request, $id)
    {
        $user = Auth::user();
        $skripsi = Skripsi::findOrFail($id); //id skripsi $id
        $nilai = Skripsi::where('id', $id)->value('total_nilai');
        $status = Skripsi::where('id', $id)->value('status');

        $sistematika_penyusunan = ((($request->a1 + $request->b1 + $request->c1 + $request->d1) / 4) * 0.05) * 20;
        $teknik_pembuatan = ((($request->a2 + $request->b2) / 2) * 0.05) * 20;
        $jumlah_materi = ((($request->a3 + $request->b3) / 2) * 0.05) * 20;
        $mutu_materi = ((($request->a4 + $request->b4 + $request->c4 + ($request->d4 * 2) + $request->e4 + $request->f4 + $request->g4) / 8) * 0.1) * 20;
        $sikap = ((($request->a5 + $request->b5 + $request->c5 + $request->d5 + $request->e5 + $request->f5) / 6) * 0.1) * 20;
        $penguasaan_materi = ((($request->a6 + $request->b6 + ($request->c6 * 2)) / 4) * 0.35) * 20;
        $peralatan_a = ((($request->aa7 + $request->ab7 + ($request->ac7 * 2)) / 4) * 0.3) * 20;
        $peralatan_b = ((($request->ba7 + ($request->bb6 * 2)) / 3) * 0.25) * 20;

        $total_nilai = $sistematika_penyusunan + $teknik_pembuatan + $jumlah_materi + $mutu_materi + $sikap + $penguasaan_materi + $peralatan_a;

        // TERBARU
        try {
            //code...
            $skripsi->users()->updateExistingPivot(

                $user->id,
                [
                    'nilai' => $total_nilai,
                ]
            );

            $nilai_baru = $nilai + $total_nilai;

            // if ($status == 2) {
            //     $nilai_baru = $nilai_baru / 3; //Bagi dengan 5
            //     if ($nilai_baru > 90) { //Perbaiki grade nilai
            //         $skripsi->nilai_huruf = 'A';
            //     } elseif ($nilai_baru >= 80) {
            //         $skripsi->nilai_huruf = 'B';
            //     } elseif ($nilai_baru >= 70) {
            //         $skripsi->nilai_huruf = 'C';
            //     } else {
            //         $skripsi->nilai_huruf = 'D';
            //     }

            //     $skripsi->total_nilai = $nilai_baru;
            //     $skripsi->status = $status + 1;
            //     $skripsi->save();
            // } elseif($status == 3){
            //     $nilai_baru = $nilai_baru / 4; //Bagi dengan 5
            //     if ($nilai_baru > 90) { //Perbaiki grade nilai
            //         $skripsi->nilai_huruf = 'A';
            //     } elseif ($nilai_baru >= 80) {
            //         $skripsi->nilai_huruf = 'B';
            //     } elseif ($nilai_baru >= 70) {
            //         $skripsi->nilai_huruf = 'C';
            //     } else {
            //         $skripsi->nilai_huruf = 'D';
            //     }

            //     $skripsi->total_nilai = $nilai_baru;
            //     $skripsi->status = $status + 1;
            //     $skripsi->save();
            // }
            if ($status == 4) { //jika status == 4
                $nilai_baru = $nilai_baru / 5; //Bagi dengan 5
                if ($nilai_baru >= 80) { //Perbaiki grade nilai
                    $skripsi->nilai_huruf = 'A';
                } elseif ($nilai_baru >= 70) {
                    $skripsi->nilai_huruf = 'B';
                } elseif ($nilai_baru >= 60) {
                    $skripsi->nilai_huruf = 'C';
                } else {
                    $skripsi->nilai_huruf = 'E';
                }

                $skripsi->total_nilai = $nilai_baru;
                $skripsi->status = $status + 1;
                $skripsi->save();
            } else {
                $skripsi->total_nilai = $nilai_baru;
                $skripsi->status = $status + 1;
                $skripsi->save();
            }

            return redirect('skripsi')->with([
                'success', 'Berhasil memberikan nilai'
            ]);
        } catch (\Throwable $th) {
            return redirect('skripsi-nilai/' . $id)->with([
                'error', 'Berhasil memberikan nilai'
            ]);
        }
    }

    public function cetak($dari, $sampai)
    {
        // dd($dari, $sampai);
        $cetak = Skripsi::whereBetween('tanggal', [Carbon::parse($dari)->format('Y-m-d'), Carbon::parse($sampai)->format('Y-m-d')])->get();

        $tgl_dari = $dari;
        $tgl_sampai = $sampai;
        $nama = 'Laporan ' . $tgl_dari . '-' . $tgl_sampai . '.pdf';

        $pdf = Pdf::loadView('layout.cetak_skripsi', compact('cetak', 'tgl_dari', 'tgl_sampai'))->setPaper('a4', 'landscape');
        return $pdf->download($nama);
    }

    public function detail($id)
    {
        $user = Auth::user();
        $skripsi = Skripsi::with('users')->findOrFail($id);
        $detail = Skripsi::where('id', $id)->get();
        // $dosen = User::get(['id', 'name']);

        // dd($skripsi);
        return view('layout.detail_penilaian')->with([
            'user' => $user,
            'skripsi' => $skripsi,
            'detail' => $detail,
            // 'dosen'=>$dosen,
        ]);
    }

    public function cetakDetail($id)
    {
        $skripsi = Skripsi::with('users')->findOrFail($id);
        $detail = Skripsi::where('id', $id)->get();

        $nama = 'Laporan Detail.pdf';
        $pdf = Pdf::loadView('layout.cetak_detail', compact('skripsi', 'detail'))->setPaper('a4', 'potrait');
        return $pdf->stream();
    }
}
