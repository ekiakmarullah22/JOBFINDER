@extends('Template.master')

@section('content')
<div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{ asset('pekerjaan/'.$pekerjaan->gambar) }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>{{ $pekerjaan->nama_pekerjaan }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="job-post-company pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Left Content -->
                <div class="col-xl-7 col-lg-8">
                    <!-- job single -->
                    <div class="single-job-items mb-50">
                        <div class="job-items">
                            <div class="company-img company-img-details">
                                <a href="#"><img src="{{ asset('pekerjaan/'.$pekerjaan->gambar) }}" alt="" width="75" height="75"></a>
                            </div>
                            <div class="job-tittle">
                                <a href="#">
                                    <h4>{{ $pekerjaan->nama_pekerjaan }}</h4>
                                </a>
                                <ul>
                                    <li>{{ $pekerjaan->nama_perusahaan }}</li>
                                    <li><i class="fas fa-map-marker-alt"></i>{{$pekerjaan->lokasi->nama_lokasi}}</li>
                                    <li>{{ $pekerjaan->besaran_gaji }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                      <!-- job single End -->
                   
                    <div class="job-post-details">
                        <div class="post-details1 mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Deskripsi Pekerjaan</h4>
                            </div>
                            <p>{!! $pekerjaan->deskripsi !!}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection