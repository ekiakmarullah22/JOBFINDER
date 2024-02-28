@extends('Template.masterDashboard')

@section('judul')
    Halaman Job
    <br>
    <a class="btn btn-primary btn-sm my-3" href="/admin/job/create">
        <span>
          <i class="ti ti-circle-plus"></i>
        </span>
        <span class="hide-menu">Tambah Job Baru</span>
    </a>
    <hr>
@endsection

@section('namaHalaman')
<h1>{{ $namaHalaman }}</h1>
@endsection

@section('content')
<div class="table-responsive">
  <table class="table text-nowrap mb-0 align-middle mb-3">
    <thead class="text-dark fs-4">
      <tr>
        <th class="border-bottom-0">
          <h6 class="fw-semibold mb-0">#</h6>
        </th>
        <th class="border-bottom-0">
          <h6 class="fw-semibold mb-0">Nama Pekerjaan</h6>
        </th>
        <th class="border-bottom-0">
          <h6 class="fw-semibold mb-0">Lokasi</h6>
        </th>
        <th class="border-bottom-0">
          <h6 class="fw-semibold mb-0">Kategori</h6>
        </th>
        <th class="border-bottom-0">
          <h6 class="fw-semibold mb-0">Aksi</h6>
        </th>
      </tr>
    </thead>
    <tbody>
      @forelse ($pekerjaan as $key=>$value)
      {{-- @dd($value->kategori->nama_kategori) --}}
      <tr>
        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $key+1 }}</h6></td>
        <td class="border-bottom-0">
            <h6 class="fw-semibold mb-1">{{ $value->nama_pekerjaan }}</h6>
            @forelse (explode(',',$value->tag) as $item)
            @if ($item)
            <span class="badge badge-primary fw-normal" style="background-color: #007bff !important; color:#FFFFFF !important;">#{{ $item }}</span> 
            @endif
            @empty
            <span class="fw-normal">Data tag tidak ditemukan...</span>
            @endforelse                          
        </td>
        <td class="border-bottom-0">
          <p class="mb-0 fw-normal">{{ $value->lokasi->nama_lokasi }}</p>
        </td>
        <td class="border-bottom-0">
          <p class="mb-0 fw-normal">{{ $value->kategori->nama_kategori }}</p>
        </td>
        <td class="d-flex justify-content-center align-items-center">
          <a href="/job/{{ $value->id }}" class="btn btn-info mx-2">Detail</a>
          <a href="/admin/job/{{ $value->id }}" class="btn btn-primary mx-2">Edit</a>
          <form action="/admin/job/delete/{{ $value->id }}" method="POST">
          @csrf
          @method('DELETE')
          <input type="submit" value="Delete" class="btn btn-danger mx-2" style="background: #FA896B !important;">
        </form>
        </td>
      </tr> 
      @empty
          <h4>Data Informasi Lowongan Belum Tersedia...</h4>
      @endforelse                     
    </tbody>
  </table>
  {{ $pekerjaan->links() }}
</div>
@endsection