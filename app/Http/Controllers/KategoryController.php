<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use Illuminate\Support\Facades\DB;

class KategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //arahkan ket view index/kategori
        $judul = "Dashboard Admin";
        $namaHalaman = "Halaman Kategori";
        $kategori = DB::table('kategori')->latest()->paginate(5);
        return view('Dashboard.Kategori.index', compact('judul', 'namaHalaman', 'kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $judul = "Dashboard Admin";
        $namaHalaman = "Tambah Lowongan Pekerjaan Baru";
        return view('Dashboard.Kategori.create', compact('judul', 'namaHalaman'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama_kategori' => 'required'
        ]);

        $kategori = new Kategori;
        $kategori->nama_kategori = $request["nama_kategori"];

        $kategori->save();

        // Kasih notifikasi kalau proses tambah data berhasil
        notify()->success('Data Kategori Berhasil ditambahkan ke dalam sistem...');

        return redirect('/admin/kategori');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $judul = "Dashboard Admin";
        $namaHalaman = "Tambah Lowongan Pekerjaan Baru";
        $kategori = Kategori::find($id);

        return view('Dashboard.Kategori.edit', compact('judul', 'namaHalaman', 'kategori'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nama_kategori' => 'required'
        ]);

        $kategori = Kategori::find($id);
        $kategori->nama_kategori = $request["nama_kategori"];

        $kategori->save();

        // Kasih notifikasi kalau proses tambah data berhasil
        notify()->success('Data Kategori Berhasil diupdate...');

        return redirect('/admin/kategori');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $kategori = Kategori::find($id);
        $kategori->delete();

        // Kasih notifikasi kalau proses tambah data berhasil
        notify()->success('Data Kategori Berhasil dihapus...');

        return redirect('/admin/kategori');
    }
}
