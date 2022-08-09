@extends('layouts.member')
@section('content')
    <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">
             <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
              <img src="{{$loker->image()}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h1>{{ $loker->nama_game }}</h1>
              <h2>{{$loker->nama_team}}</h2>
              <p>
                {{$loker->lowongan}}
              </p>
               <p>
                {{$loker->keterangan}}
              </p>
              <div class="form-group">
                <label>Umur</label>
                <h3>{{ $loker->umur }}</h3>
              </div>
              <div class="form-group">
                <label>Rank</label>
                <h3>{{ $loker->rank }}</h3>
              </div>
              <div class="form-group">
                <label>Role</label>
                <h3>{{ $loker->role }}</h3>
              </div>
              <div class="text-center text-lg-start">
                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center mt-3">
                  <span>Daftar</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

         

        </div>
      </div>

    </section><!-- End About Section -->

  </main><
@endsection