@extends('Template.master')

@section('hero')
<div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Hasil Pencarian Pekerjaan</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="job-listing-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <!-- Left content -->
            <!-- Right content -->
            <div class="col-xl-9 col-lg-9 col-md-8">
                <!-- Featured_job_start -->
                <section class="featured-job-area">
                    <div class="container">
                        <!-- Count of Job list Start -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="count-job mb-35">
                                    <span>{{ $count }} Pekerjaan Tersedia</span>
                                    <!-- Select job items start -->
                                    <!--  Select job items End-->
                                </div>
                            </div>
                        </div>
                        <!-- Count of Job list End -->
                        <!-- single-job-content -->
                        @forelse ($pekerjaan as $item)
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="/job/{{ $item->id }}"><img src="{{ asset('pekerjaan/'.$item->gambar) }}" alt="" width="85" height="85"></a>
                                </div>
                                <div class="job-tittle job-tittle2">
                                    <a href="/job/{{ $item->id }}">
                                        <h4>{{ $item->nama_pekerjaan }}</h4>
                                    </a>
                                    <ul>
                                        <li>{{ $item->nama_perusahaan }}</li>
                                        <li><a href="/lokasi/{{ $item->lokasi->id }}" style="color:#808080 !important" title="Pekerjaan Berdasarkan Lokasi"><i class="fas fa-map-marker-alt"></i>{{ $item->lokasi->nama_lokasi }}</a></li>
                                        <li>{{ $item->besaran_gaji }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link items-link2 f-right">
                                <a href="/kategori/{{ $item->kategori->id }}">{{ $item->kategori->nama_kategori }}</a>
                                <span>{{ $item->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                        @empty
                            <h4>Data pekerjaan tidak ditemukan...</h4>
                        @endforelse
                        
                        {{ $pekerjaan->links() }}
                    </div>
                </section>
                <!-- Featured_job_end -->
            </div>
        </div>
    </div>
</div>
@endsection