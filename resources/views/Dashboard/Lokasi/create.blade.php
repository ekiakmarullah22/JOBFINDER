@extends('Template.masterDashboard')

@section('judul')
    Halaman Tambah Lokasi Baru
@endsection

@section('namaHalaman')
<h1>{{ $namaHalaman }}</h1>
@endsection

@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <form action="/admin/lokasi/store" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-8 mb-3">
                    <label for="nama_lokasi" class="col-md-4 col-form-label">{{ __('Nama Lokasi') }}</label>
                    <input id="nama_lokasi" type="text" class="form-control @error('nama_lokasi') is-invalid @enderror" name="nama_lokasi" value="{{ old('nama_lokasi') }}" autocomplete="nama_lokasi">

                    @error('nama_lokasi')
                    <div class="alert alert-danger alert-dismissible fade show my-2" role="alert">
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
      selector: 'textarea',
      plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
      ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
    });
  </script>
@endpush