<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //arahkan ke folder Dashboard/index
        $judul = "Dashboard Admin";
        $namaHalaman = "Dashboard";

        // Laravel Chart
        $chart_options = [
            'chart_title' => 'Jumlah view Loker',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Pekerjaan',
            'group_by_field' => 'created_at',
            'group_by_period' => 'day',
            'chart_type' => 'bar',
        ];

        $chart1 = new LaravelChart($chart_options);

        return view('Dashboard.index', compact('judul', 'namaHalaman', 'chart1'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
