<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lokasi;
use Illuminate\Support\Facades\DB;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $judul = "Dashboard Admin";
        $namaHalaman = "Halaman Lokasi";
        $lokasi = DB::table('lokasi')->latest()->paginate(5);
        return view('Dashboard.Lokasi.index', compact('judul', 'namaHalaman', 'lokasi'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $judul = "Dashboard Admin";
        $namaHalaman = "Tambah Lokasi Baru";
        return view('Dashboard.Lokasi.create', compact('judul', 'namaHalaman'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama_lokasi' => 'required'
        ]);

        $lokasi = new Lokasi;
        $lokasi->nama_lokasi = $request["nama_lokasi"];

        $lokasi->save();

        // Kasih notifikasi kalau proses tambah data berhasil
        notify()->success('Data Lokasi Berhasil ditambahkan ke dalam sistem...');

        return redirect('/admin/lokasi');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $judul = "Dashboard Admin";
        $namaHalaman = "Edit Lokasi";
        $lokasi = Lokasi::find($id);

        return view('Dashboard.Lokasi.edit', compact('judul', 'namaHalaman', 'lokasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nama_lokasi' => 'required'
        ]);

        $lokasi = Lokasi::find($id);
        $lokasi->nama_lokasi = $request["nama_lokasi"];

        $lokasi->save();

        // Kasih notifikasi kalau proses tambah data berhasil
        notify()->success('Data Lokasi Berhasil diupdate...');

        return redirect('/admin/lokasi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $lokasi = Lokasi::find($id);
        $lokasi->delete();

        // Kasih notifikasi kalau proses tambah data berhasil
        notify()->success('Data Lokasi Berhasil dihapus...');

        return redirect('/admin/lokasi');
    }
}
