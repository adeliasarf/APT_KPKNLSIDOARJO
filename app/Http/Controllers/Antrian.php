<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Antrian extends Controller
{
    public function index()
    {
        // Ambil nilai antrian dari session atau set ke 0 jika tidak ada
        $antri_umum = session('antri_umum', 0);
        $antri_lelang = session('antri_lelang', 0);
        $antri_bphtb = session('antri_bphtb', 0);
        $antri_skpt = session('antri_skpt', 0);

        // Menampilkan data antrian di view (semua dimulai dari 0)
        return view('antrian', [
            'antri_umum' => $antri_umum,
            'antri_lelang' => $antri_lelang,
            'antri_bphtb' => $antri_bphtb,
            'antri_skpt' => $antri_skpt,
        ]);
    }

    public function antri_umum()
    {
        // Mengambil nilai antrian dari session atau set 0 jika tidak ada
        $antri_umum = session('antri_umum', 0);

        // Menambahkan 1 ke antrian
        $antri_umum++;

        // Menyimpan kembali nilai antrian ke session
        session(['antri_umum' => $antri_umum]);

        // Mengembalikan response dalam format JSON
        return response()->json([
            'antri_umum' => $antri_umum,
        ]);
    }

    public function antri_lelang()
    {
        // Mengambil nilai antrian dari session atau set 0 jika tidak ada
        $antri_lelang = session('antri_lelang', 0);

        // Menambahkan 1 ke antrian
        $antri_lelang++;

        // Menyimpan kembali nilai antrian ke session
        session(['antri_lelang' => $antri_lelang]);

        return response()->json([
            'antri_lelang' => $antri_lelang,
        ]);
    }

    public function antri_bphtb()
    {
        // Mengambil nilai antrian dari session atau set 0 jika tidak ada
        $antri_bphtb = session('antri_bphtb', 0);

        // Menambahkan 1 ke antrian
        $antri_bphtb++;

        // Menyimpan kembali nilai antrian ke session
        session(['antri_bphtb' => $antri_bphtb]);

        return response()->json([
            'antri_bphtb' => $antri_bphtb,
        ]);
    }

    public function antri_skpt()
    {
        // Mengambil nilai antrian dari session atau set 0 jika tidak ada
        $antri_skpt = session('antri_skpt', 0);

        // Menambahkan 1 ke antrian
        $antri_skpt++;

        // Menyimpan kembali nilai antrian ke session
        session(['antri_skpt' => $antri_skpt]);

        return response()->json([
            'antri_skpt' => $antri_skpt,
        ]);
    }

    public function resetAntrian($layanan)
    {
        // Reset nilai antrian untuk layanan tertentu
        if ($layanan === 'umum') {
            session(['antri_umum' => 0]);
        } elseif ($layanan === 'lelang') {
            session(['antri_lelang' => 0]);
        } elseif ($layanan === 'bphtb') {
            session(['antri_bphtb' => 0]);
        } elseif ($layanan === 'skpt') {
            session(['antri_skpt' => 0]);
        }

        // Kembalikan response JSON
        return response()->json([
            'status' => 'success',
        ]);
    }
}
