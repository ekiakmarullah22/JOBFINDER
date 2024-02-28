<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pekerjaan;
use App\Models\Kategori;
use App\Models\Lokasi;

class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //ARAHKAN KE FOLDER FRONTEND INDEX
        $namaWebsite = "JobFinder";
        $pekerjaan = Pekerjaan::with(['lokasi', 'kategori'])->latest()->paginate(5);
        $lokasi = Lokasi::latest()->get();
        return view ('FrontEnd.index', ['namaWebsite' => $namaWebsite, 'pekerjaan' => $pekerjaan, 'lokasi' => $lokasi]);
    }

    public function jobListing() {
        $namaWebsite = "JobFinder";
        $pekerjaan = Pekerjaan::with(['lokasi', 'kategori'])->latest()->paginate(5);
        $kategori = Kategori::all();
        $lokasi = Lokasi::all();
        $count = Pekerjaan::count();

        return view('FrontEnd.all',['namaWebsite' => $namaWebsite, 'pekerjaan' => $pekerjaan, 'kategori' => $kategori, 'lokasi' => $lokasi, 'count' => $count]);
    }

    public function searchJob(Request $request) {
        // return "HELLO";
        $namaWebsite = "JobFinder";
        // tangkap request cari
        $search = $request["search"];
        // ambil data pekerjaan sesuai pencarian data
        $pekerjaan = Pekerjaan::with(['lokasi', 'kategori'])->where('nama_pekerjaan', 'LIKE', "%".$search."%")->paginate(5);
        $count = Pekerjaan::where('nama_pekerjaan', 'LIKE', "%".$search."%")->count();

        return view('FrontEnd.cari', compact('pekerjaan', 'count', 'namaWebsite'));

    }

    public function jobByKategori(string $id) {
        //cocokkan data pekerjaan berdasarkan kategori_id
        $namaWebsite = "JobFinder";
        $kategori = Kategori::all();
        $lokasi = Lokasi::all();
        $pekerjaan = Pekerjaan::where('kategori_id', $id)->latest()->paginate(5);
        $count = Pekerjaan::count();

        // arahkan ke blade frontEnd Kategori
        return view('FrontEnd.kategori', ['namaWebsite' => $namaWebsite, 'pekerjaan' => $pekerjaan, 'count' => $count, 'kategori' => $kategori, 'lokasi' => $lokasi]);
    }

    public function jobByLokasi(string $id) {
        //cocokkan data pekerjaan berdasarkan kategori_id
        $namaWebsite = "JobFinder";
        $kategori = Kategori::all();
        $lokasi = Lokasi::all();
        $pekerjaan = Pekerjaan::where('lokasi_id', $id)->latest()->paginate(5);
        $count = Pekerjaan::count();

        // arahkan ke blade frontEnd Kategori
        return view('FrontEnd.lokasi', ['namaWebsite' => $namaWebsite, 'pekerjaan' => $pekerjaan, 'count' => $count, 'kategori' => $kategori, 'lokasi' => $lokasi]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     //
    // }

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
    // public function edit(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    // {
    //     //
    // }
}
