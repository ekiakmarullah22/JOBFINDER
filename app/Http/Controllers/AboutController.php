<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return "HELLO";
        // arahkan ke folder About Index
        // ambil data
        $namaWebsite = "JobFinder";
        $about = About::latest()->first();

        return view('Dashboard.About.index', compact('namaWebsite', 'about'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //arahkan ke halaman dashboard about create
        $judul = "Dashboard Admin";
        $namaHalaman = "Halaman About";
        return view('Dashboard.About.create', compact('judul', 'namaHalaman'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //masukkan data ke dalam tabel about
        $request->validate([
            'judul' => 'required',
            'sub_judul' => 'required',
            'gambar' => 'required|image|mimes:jpg,jpeg,png',
            'deskripsi' => 'required'
        ]);

        // Ambil nama gambar dan pindahkan gambar dalam folder public/pekerjaan
        $namaFileGambar = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('about'), $namaFileGambar);

        $about = new About;
        $about->judul = $request["judul"];
        $about->sub_judul = $request["sub_judul"];
        $about->gambar = $namaFileGambar;
        $about->deskripsi = $request["deskripsi"];

        $about->save();

        // Kasih notifikasi kalau proses tambah data berhasil
        notify()->success('Data Tampilan Menu About Berhasil ditambahkan ke dalam sistem...');

        return redirect('/admin/about');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }
}
