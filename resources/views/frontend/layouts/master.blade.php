@include('frontend.layouts.head')

<body>
  @include('frontend.layouts.nav')
  <section class="print-media">
    <div class="container pt-4">
      <h3 class="main-title content-border">Notice Board</h3>
        <div class="item">
          <div class="print-media-carousel owl-carousel owl-theme ">
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, dicta.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, dicta.</p>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, dicta.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, dicta.</p>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, dicta.</p>

          </div>
        </div>

    </div>
  </section>
  <!-- ============================================-->
  <!-- <section> begin ============================-->
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-12 col-sm-12 col-lg-9 col-xl-9">
        <div class="swiper theme-slider"
          data-swiper='{"autoplay":true,"spaceBetween":2,"loop":true,"loopedSlides":5,"slideToClickedSlide":true}'>
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img class="img-fluid" src="{{ asset('frontend') }}/assets/images/blog-details/post1.png" alt="image" />
            </div>
            <div class="swiper-slide"> <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/gallery/07-f.jpg" alt="image" /></div>
            <div class="swiper-slide"> <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/gallery/09-f.jpg" alt="image" /></div>
            <div class="swiper-slide"> <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/gallery/10-f.jpg" alt="image" /></div>
          </div>
          <div class="swiper-nav">
            <div class="swiper-button-prev"><span class="fas fa-chevron-left"></span></div>
            <div class="swiper-button-next"><span class="fas fa-chevron-right"> </span></div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-lg-3 col-md-3 shadow">
        <div class="card h-100"><img class="card-img-top" src="{{ \App\Models\Setting::value('side_photo') }}" alt="Reenal Scott" />
          <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
            <div class="overflow-hidden">
              <h5 data-zanim-xs='{"delay":0}'>{{ \App\Models\Setting::value('side_title') }}</h5>
            </div>
            <div class="overflow-hidden">
              <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>{{ \App\Models\Setting::value('side_description') }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- ===============================================-->
  <main class="main" id="top">
    @yield('content')
  </main>

 @include('frontend.layouts.footer')

@include('frontend.layouts.script')
