@extends('Template.masterDashboard')

@section('judul')
    Halaman Pengaturan Data FrontEnd Website Menu About
@endsection

@section('namaHalaman')
<h1>{{ $namaHalaman }}</h1>
@endsection

@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <form action="/admin/about/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <label for="judul" class="col-md-4 col-form-label">{{ __('Judul') }}</label>
                    <input id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" autocomplete="judul">

                    @error('judul')
                    <div class="alert alert-danger alert-dismissible fade show my-2" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @enderror
                </div>

                <div class="col-lg-6">
                    <label for="sub_judul" class="col-md-4 col-form-label">{{ __('Sub Judul') }}</label>
                    <input id="sub_judul" type="text" class="form-control @error('sub_judul') is-invalid @enderror" name="sub_judul" value="{{ old('sub_judul') }}" autocomplete="sub_judul">

                    @error('sub_judul')
                    <div class="alert alert-danger alert-dismissible fade show my-2" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @enderror
                </div>

                <div class="col-lg-12">
                    <label for="gambar" class="col-md-4 col-form-label">{{ __('Gambar Banner') }}</label>
                    <input class="form-control" type="file" id="gambar" name="gambar">

                    @error('gambar')
                    <div class="alert alert-danger alert-dismissible fade show my-2" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @enderror
                </div>

                <div class="col-lg-12 mb-3">
                    <label for="deskripsi" class="col-md-4 col-form-label">{{ __('Deskripsi') }}</label>
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