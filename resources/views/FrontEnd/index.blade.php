{{-- extends ke folder template > master --}}
@extends('Template.master')

@section('hero')
<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="slider-active">
        <div class="single-slider slider-height d-flex align-items-center" data-background="{{ asset('TEMPLATE/assets/img/hero/h1_hero.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-9 col-md-10">
                        <div class="hero__caption">
                            <h1>Find the most exciting startup jobs</h1>
                        </div>
                    </div>
                </div>
                <!-- Search Box -->
                <div class="row">
                    <div class="col-xl-8">
                        <!-- form -->
                        <form action="/cari" class="search-box" method="GET">
                            <div class="input-form">
                                <input type="text" placeholder="Job Tittle or keyword" name="search">
                            </div>
                            <div class="select-form">
                                <div class="select-itms">
                                    <select name="select" id="select1">
                                        <option disabled selected>Pilih Lokasi Pekerjaan</option>
                                        @forelse ($lokasi as $item)
                                        <option value="$item->id" style="z-index:9999 !important;">{{ $item->nama_lokasi }}</option>
                                        @empty
                                            <h4>Data lokasi tidak ada...</h4>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="search-form">
                                <input type="submit" value="Find Job" class="btn btn-danger" style="padding: 2.2rem 3.2rem !important;">
                            </div>	
                        </form>	
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('service')
<div class="our-services section-pad-t30">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <span>FEATURED TOURS Packages</span>
                    <h2>Browse Top Categories </h2>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-contnet-center">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="single-services text-center mb-30">
                    <div class="services-ion">
                        <span class="flaticon-tour"></span>
                    </div>
                    <div class="services-cap">
                       <h5><a href="/job_listing">Design & Creative</a></h5>
                        <span>(653)</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="single-services text-center mb-30">
                    <div class="services-ion">
                        <span class="flaticon-cms"></span>
                    </div>
                    <div class="services-cap">
                       <h5><a href="/job_listing">Design & Development</a></h5>
                        <span>(658)</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="single-services text-center mb-30">
                    <div class="services-ion">
                        <span class="flaticon-report"></span>
                    </div>
                    <div class="services-cap">
                       <h5><a href="/job_listing">Sales & Marketing</a></h5>
                        <span>(658)</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="single-services text-center mb-30">
                    <div class="services-ion">
                        <span class="flaticon-app"></span>
                    </div>
                    <div class="services-cap">
                       <h5><a href="/job_listing">Mobile Application</a></h5>
                        <span>(658)</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="single-services text-center mb-30">
                    <div class="services-ion">
                        <span class="flaticon-helmet"></span>
                    </div>
                    <div class="services-cap">
                       <h5><a href="/job_listing">Construction</a></h5>
                        <span>(658)</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="single-services text-center mb-30">
                    <div class="services-ion">
                        <span class="flaticon-high-tech"></span>
                    </div>
                    <div class="services-cap">
                       <h5><a href="/job_listing">Information Technology</a></h5>
                        <span>(658)</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="single-services text-center mb-30">
                    <div class="services-ion">
                        <span class="flaticon-real-estate"></span>
                    </div>
                    <div class="services-cap">
                       <h5><a href="/job_listing">Real Estate</a></h5>
                        <span>(658)</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="single-services text-center mb-30">
                    <div class="services-ion">
                        <span class="flaticon-content"></span>
                    </div>
                    <div class="services-cap">
                       <h5><a href="/job_listing">Content Writer</a></h5>
                        <span>(658)</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- More Btn -->
        <!-- Section Button -->
        <div class="row">
            <div class="col-lg-12">
                <div class="browse-btn2 text-center mt-50">
                    <a href="/job_listing" class="border-btn2">Browse All Sectors</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('online')
<div class="online-cv cv-bg section-overly pt-90 pb-120"  data-background="{{ asset('TEMPLATE/assets/img/gallery/cv_bg.jpg')}}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="cv-caption text-center">
                    <p class="pera1">FEATURED TOURS Packages</p>
                    <p class="pera2"> Make a Difference with Your Online Resume!</p>
                    <a href="#" class="border-btn2 border-btn4">Upload your cv</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('job')
<section class="featured-job-area feature-padding">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <span>Recent Job</span>
                    <h2>Featured Jobs</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <!-- single-job-content -->
                @forelse ($pekerjaan as $item)
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="/job/{{ $item->id }}"><img src="{{ asset('pekerjaan/'.$item->gambar)}}" alt="" width="125" height="125"></a>
                        </div>
                        <div class="job-tittle">
                            <a href="/job/{{ $item->id }}"><h4>{{ $item->nama_pekerjaan }}</h4></a>
                            <ul>
                                <li>{{ $item->nama_perusahaan }}</li>
                                <li><i class="fas fa-map-marker-alt"></i>{{ $item->lokasi->nama_lokasi }}</li>
                                <li>{{ $item->besaran_gaji }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="items-link f-right">
                        <a href="/job/{{ $item->id }}">{{ $item->kategori->nama_kategori }}</a>
                        <span>{{ $item->created_at->diffForHumans(); }}</span>
                    </div>
                </div>
                @empty
                    <h4>Data Pekerjaan Tidak ditemukan...</h4>
                @endforelse
                {{ $pekerjaan->links() }}
            </div>
        </div>
    </div>
</section>
@endsection

@section('how')
<div class="apply-process-area apply-bg pt-150 pb-150" data-background="{{ asset('TEMPLATE/assets/img/gallery/how-applybg.png')}}">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle white-text text-center">
                    <span>Apply process</span>
                    <h2> How it works</h2>
                </div>
            </div>
        </div>
        <!-- Apply Process Caption -->
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-process text-center mb-30">
                    <div class="process-ion">
                        <span class="flaticon-search"></span>
                    </div>
                    <div class="process-cap">
                       <h5>1. Search a job</h5>
                       <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-process text-center mb-30">
                    <div class="process-ion">
                        <span class="flaticon-curriculum-vitae"></span>
                    </div>
                    <div class="process-cap">
                       <h5>2. Apply for job</h5>
                       <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-process text-center mb-30">
                    <div class="process-ion">
                        <span class="flaticon-tour"></span>
                    </div>
                    <div class="process-cap">
                       <h5>3. Get your job</h5>
                       <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                    </div>
                </div>
            </div>
        </div>
     </div>
</div>
@endsection

@section('testi')
<div class="testimonial-area testimonial-padding">
    <div class="container">
        <!-- Testimonial contents -->
        <div class="row d-flex justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-10">
                <div class="h1-testimonial-active dot-style">
                    <!-- Single Testimonial -->
                    <div class="single-testimonial text-center">
                        <!-- Testimonial Content -->
                        <div class="testimonial-caption ">
                            <!-- founder -->
                            <div class="testimonial-founder  ">
                                <div class="founder-img mb-30">
                                    <img src="{{ asset('TEMPLATE/assets/img/testmonial/testimonial-founder.png')}}" alt="">
                                    <span>Margaret Lawson</span>
                                    <p>Creative Director</p>
                                </div>
                            </div>
                            <div class="testimonial-top-cap">
                                <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Testimonial -->
                    <div class="single-testimonial text-center">
                        <!-- Testimonial Content -->
                        <div class="testimonial-caption ">
                            <!-- founder -->
                            <div class="testimonial-founder  ">
                                <div class="founder-img mb-30">
                                    <img src="{{ asset('TEMPLATE/assets/img/testmonial/testimonial-founder.png')}}" alt="">
                                    <span>Margaret Lawson</span>
                                    <p>Creative Director</p>
                                </div>
                            </div>
                            <div class="testimonial-top-cap">
                                <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Testimonial -->
                    <div class="single-testimonial text-center">
                        <!-- Testimonial Content -->
                        <div class="testimonial-caption ">
                            <!-- founder -->
                            <div class="testimonial-founder  ">
                                <div class="founder-img mb-30">
                                    <img src="{{ asset('TEMPLATE/assets/img/testmonial/testimonial-founder.png')}}" alt="">
                                    <span>Margaret Lawson</span>
                                    <p>Creative Director</p>
                                </div>
                            </div>
                            <div class="testimonial-top-cap">
                                <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('support')
<div class="support-company-area support-padding fix">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="right-caption">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2">
                        <span>What we are doing</span>
                        <h2>24k Talented people are getting Jobs</h2>
                    </div>
                    <div class="support-caption">
                        <p class="pera-top">Mollit anim laborum duis au dolor in voluptate velit ess cillum dolore eu lore dsu quality mollit anim laborumuis au dolor in voluptate velit cillum.</p>
                        <p>Mollit anim laborum.Duis aute irufg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur signjnt occa cupidatat non inulpadeserunt mollit aboru. temnthp incididbnt ut labore mollit anim laborum suis aute.</p>
                        <a href="/tentang" class="btn post-btn">Post a job</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="support-location-img">
                    <img src="{{ asset('TEMPLATE/assets/img/service/support-img.jpg')}}" alt="">
                    <div class="support-img-cap text-center">
                        <p>Since</p>
                        <span>2024</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('blog')
<div class="home-blog-area blog-h-padding">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <span>Our latest blog</span>
                    <h2>Our recent news</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="home-blog-single mb-30">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="{{ asset('TEMPLATE/assets/img/blog/home-blog1.jpg')}}" alt="">
                            <!-- Blog date -->
                            <div class="blog-date text-center">
                                <span>24</span>
                                <p>Now</p>
                            </div>
                        </div>
                        <div class="blog-cap">
                            <p>|   Properties</p>
                            <h3><a href="#">Footprints in Time is perfect House in Kurashiki</a></h3>
                            <a href="#" class="more-btn">Read more »</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="home-blog-single mb-30">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="{{ asset('TEMPLATE/assets/img/blog/home-blog2.jpg')}}" alt="">
                            <!-- Blog date -->
                            <div class="blog-date text-center">
                                <span>24</span>
                                <p>Now</p>
                            </div>
                        </div>
                        <div class="blog-cap">
                            <p>|   Properties</p>
                            <h3><a href="#">Footprints in Time is perfect House in Kurashiki</a></h3>
                            <a href="#" class="more-btn">Read more »</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection