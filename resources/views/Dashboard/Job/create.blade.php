@extends('Template.masterDashboard')

@section('judul')
    Halaman Tambah Pekerjaan Baru
@endsection

@section('namaHalaman')
<h1>{{ $namaHalaman }}</h1>
@endsection

@push('style')
    <link rel="stylesheet" href="{{ asset('amsify/css/amsify.suggestags.css') }}">
@endpush

@push('script')
<script src="{{ asset('amsify/js/jquery.amsify.suggestags.js') }}"></script>
<script>
    $('input[name="tag"]').amsifySuggestags({
	tagLimit: 3
    });
</script>
@endpush

@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <form action="/admin/job/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <label for="nama_pekerjaan" class="col-md-4 col-form-label">{{ __('Nama Pekerjaan') }}</label>
                    <input id="nama_pekerjaan" type="text" class="form-control @error('nama_pekerjaan') is-invalid @enderror" name="nama_pekerjaan" value="{{ old('nama_pekerjaan') }}" autocomplete="name">

                    @error('nama_pekerjaan')
                    <div class="alert alert-danger alert-dismissible fade show my-2" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @enderror
                </div>

                <div class="col-lg-6">
                    <label for="besaran_gaji" class="col-md-4 col-form-label">{{ __('Besaran Gaji') }}</label>
                    <input id="besaran_gaji" type="text" class="form-control @error('besaran_gaji') is-invalid @enderror" name="besaran_gaji" value="{{ old('besaran_gaji') }}" autocomplete="besaran_gaji">

                    @error('besaran_gaji')
                    <div class="alert alert-danger alert-dismissible fade show my-2" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @enderror
                </div>

                <div class="col-lg-6">
                    <label for="nama_perusahaan" class="col-md-4 col-form-label">{{ __('Nama Perusahaan') }}</label>
                    <input id="nama_perusahaan" type="text" class="form-control @error('nama_perusahaan') is-invalid @enderror" name="nama_perusahaan" value="{{ old('nama_perusahaan') }}" autocomplete="nama_perusahaan">

                    @error('nama_perusahaan')
                    <div class="alert alert-danger alert-dismissible fade show my-2" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @enderror
                </div>

                <div class="col-lg-6">
                    <label for="durasi_lamaran" class="col-md-4 col-form-label">{{ __('Durasi Lamaran') }}</label>
                    <input id="durasi_lamaran" type="text" class="form-control @error('durasi_lamaran') is-invalid @enderror" name="durasi_lamaran" value="{{ old('durasi_lamaran') }}" autocomplete="durasi_lamaran">

                    @error('durasi_lamaran')
                    <div class="alert alert-danger alert-dismissible fade show my-2" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @enderror
                </div>

                <div class="col-lg-12">
                    <label for="gambar" class="col-md-4 col-form-label">{{ __('Cover Pekerjaan') }}</label>
                    <input class="form-control" type="file" id="gambar" name="gambar">

                    @error('gambar')
                    <div class="alert alert-danger alert-dismissible fade show my-2" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @enderror
                </div>

                <div class="col-lg-6">
                    <label for="lokasi_id" class="col-md-4 col-form-label">{{ __('Lokasi Pekerjaan') }}</label>
                    <select class="form-select form-select mb-3" aria-label=".form-select-lg example" name="lokasi_id">
                        <option selected disabled>Pilih Lokasi Pekerjaan</option>
                        @forelse ($lokasi as $item)
                            <option value="{{ $item->id }}">{{ $item->nama_lokasi }}</option>
                        @empty
                            <option value="">Data Lokasi Kosong...</option>
                        @endforelse
                    </select>

                    @error('lokasi_id')
                    <div class="alert alert-danger alert-dismissible fade show my-2" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @enderror
                </div>

                <div class="col-lg-6">
                    <label for="kategori_id" class="col-md-4 col-form-label">{{ __('Kategori Pekerjaan') }}</label>
                    <select class="form-select form-select mb-3" aria-label=".form-select-lg example" name="kategori_id">
                        <option selected disabled>Pilih Kategori Pekerjaan</option>
                        @forelse ($kategori as $item)
                            <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                        @empty
                            <option value="">Data Kategori Kosong...</option>
                        @endforelse
                    </select>

                    @error('kategori_id')
                    <div class="alert alert-danger alert-dismissible fade show my-2" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @enderror
                </div>

                <div class="col-lg-12">
                    <label for="tag" class="col-md-4 col-form-label">{{ __('Tag Pekerjaan') }}</label>
                    <input id="tag" type="text" class="form-control mb-3 @error('tag') is-invalid @enderror" name="tag" value="{{ old('tag') }}" autocomplete="tag">

                    @error('tag')
                    <div class="alert alert-danger alert-dismissible fade show my-2" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @enderror
                </div>

                <div class="col-lg-12 mb-3">
                    <label for="deskripsi" class="col-md-4 col-form-label">{{ __('Deskripsi Pekerjaan') }}</label>
                    <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control" id="text-area"></textarea>

                    @error('deskripsi')
                    <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @enderror
                </div>
                
            </div>
            <button type="submit" class="btn btn-primary" style="background-color: #5D87FF !important;">Submit<i class="ti ti-brand-telegram mx-2"></i></button>
          </form>
    </div>
</div>
@endsection

@push('script')
<script src="https://cdn.tiny.cloud/1/ipgxuvhcxjpgeqpq0yt3d944bfy9em041d6o0fyz5aijin20/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
    selector : "textarea",
    content_css: 'writer',
    theme: "silver",
    plugins: [ 'table powerpaste',
               'lists media',
               'paste' ],
    toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify',
    })
</script>
@endpush