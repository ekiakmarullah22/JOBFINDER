@extends('Template.masterDashboard')

@section('judul')
    Halaman Lokasi
    <br>
    <a class="btn btn-primary btn-sm my-3" href="/admin/lokasi/create">
        <span>
          <i class="ti ti-circle-plus"></i>
        </span>
        <span class="hide-menu">Tambah Lokasi Baru</span>
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
          <h6 class="fw-semibold mb-0">Nama Lokasi</h6>
        </th>
        <th class="border-bottom-0">
          <h6 class="fw-semibold mb-0">Aksi</h6>
        </th>
      </tr>
    </thead>
    <tbody>
      @forelse ($lokasi as $key=>$value)
      {{-- @dd($value->kategori->nama_kategori) --}}
      <tr>
        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $key+1 }}</h6></td>
        <td class="border-bottom-0">
            <h6 class="fw-semibold mb-1">{{ $value->nama_lokasi }}</h6>                          
        </td>
        <td class="d-flex justify-content-center align-items-center">
          <a href="/admin/lokasi/{{ $value->id }}" class="btn btn-primary mx-2">Edit</a>
          <form action="/admin/lokasi/delete/{{ $value->id }}" method="POST">
          @csrf
          @method('DELETE')
          <input type="submit" value="Delete" class="btn btn-danger mx-2" style="background: #FA896B !important;">
        </form>
        </td>
      </tr> 
      @empty
          <h4>Data Lokasi Belum Tersedia...</h4>
      @endforelse                     
    </tbody>
  </table>
  {{ $lokasi->links() }}
</div>
@endsection