@extends('layouts.member')
@section('content')
<section id="hero" class="hero d-flex align-items-center">

  <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p text-align="center">Selamat Datang Di Sistem Informasi Lowongan Kerja </p>
        </header>

        <div class="row">
          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="images/foto1.jpeg" class="img-fluid" alt=""></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="images/foto2.jpeg" class="img-fluid" alt=""></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="images/foto3.jpeg" class="img-fluid" alt=""></div>
            </div>
          </div>
        </div>
      </div>
  </section><!-- End Hero -->
  <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Informasi Game</p>
        </header>

        <div class="row">
          @foreach ($informasi as $itam)
                        <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{$itam->image()}}" class="img-fluid" alt=""></div>
              <h3 class="post-title">{{$itam->nama_game}}</h3>
              <a href="artikel" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          @endforeach
        </div>
      </div>

    </section><!-- End Recent Blog Posts Section -->
  <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Lowongan Kerja</p>
        </header>

        <div class="row">
          @foreach ($loker as $item)
                        <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{$item->image()}}" class="img-fluid" alt=""></div>
              <h3 class="post-title">{{$item->nama_game}}</h3>
              <p class="post-text">{{$item->keterangan}}</p>
              <a href="detail/{{ $item->id }}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          @endforeach
        </div>
      </div>

    </section><!-- End Recent Blog Posts Section -->
@endsection