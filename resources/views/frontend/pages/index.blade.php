@extends('frontend.layouts.master')
@section('content')
<section class="bg-100">
    <div class="container">
      <div class="application-process">
        <div class="text-center mb-5">
          <h3 class="main-title">Applay for Seat!</h3>
          <!-- <h1 class="sub-title">Get Started.</h1> -->
          <h6 class="text-muted font-weight-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Voluptatem magni consequatur repudiandae nobis vitae repellat doloremque ipsum necessitatibus, expedita

          </h6>

          <!-- application process card -->

          <div class="row no-gutters">
            <div class="col-6 col-lg-3">
              <div class="application-process-card hover-bg-200 shadow">
                <img src="{{ asset('frontend') }}/assets/images/process/register.svg" alt="">
                <h5>Register</h5>
                <!-- <span class="line"></span> -->
                <p>
                  Sign up with your<br>
                  device
                </p>
              </div>
            </div>
            <div class="col-6 col-lg-3">
              <div class="application-process-card hover-bg-200 shadow">
                <img src="{{ asset('frontend') }}/assets/images/process/apply.svg" alt="">

                <h5>Apply</h5>
                <!-- <span class="line"></span> -->
                <p>
                  No paper-work. just <br>
                  fill some details
                </p>
              </div>
            </div>
            <div class="col-6 col-lg-3">
              <div class="application-process-card hover-bg-200 shadow">
                <img src="{{ asset('frontend') }}/assets/images/process/approval.svg" alt="">


                <h5>Approval</h5>
                <!-- <span class="line"></span> -->
                <p>
                  Know your <br>
                  approve limit
                </p>
              </div>
            </div>
            <div class="col-6 col-lg-3">
              <div class="application-process-card hover-bg-200 shadow">
                <img src="{{ asset('frontend') }}/assets/images/process/getCash.svg" alt="">

                <h5>Get Your Cash</h5>
                <!-- <span class="line"></span> -->
                <p>
                  Your cash is<br>
                  on the go
                </p>
              </div>
            </div>
            <div class="col-12 col-lg-12">
              <div class=" p-5 ">
                <a class="btn-outline-dark btn btn-success" href="registration.html">Click To Registration For
                  Seat</a>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="text-center mb-5">
        <h3 class="fs-2 fs-md-3">Floor Of University</h3>
        <hr class="short"
          data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"12.20873rem"},"duration":0.8}'
          data-zanim-trigger="scroll" />
      </div>
      <div class="text-center">
        <div class="row">
          <div class="col-sm-6 col-lg-4    ">
            <div class="card h-100 shadow"><img class="card-img-top" src="{{ asset('frontend') }}/assets/images/blog-post/post1.png"
                alt="Reenal Scott" />
              <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h5 data-zanim-xs='{"delay":0}'>Frist Floor</h5>
                </div>
                <div class="overflow-hidden">
                  <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Advertising Consultant</h6>
                </div>
                <div class="overflow-hidden">
                  <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>Reenal Scott is the Founder and CEO of Elixir,
                    which he started from his dorm room in 2013 with 3 people only.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mt-4 mt-sm-0  ">
            <div class="card h-100 shadow"><img class="card-img-top" src="{{ asset('frontend') }}/assets/images/blog-post/post2.png"
                alt="Lily Anderson" />
              <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h5 data-zanim-xs='{"delay":0}'>Lily Anderson</h5>
                </div>
                <div class="overflow-hidden">
                  <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Activation Consultant</h6>
                </div>
                <div class="overflow-hidden">
                  <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>Lily leads Elixir UK and oversees the company’s
                    Customer Operations teams supporting millions ofr users.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mt-4  mt-lg-0 ">
            <div class="card h-100 shadow"><img class="card-img-top" src="{{ asset('frontend') }}/assets/images/blog-post/post3.png"
                alt="Thomas Anderson" />
              <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h5 data-zanim-xs='{"delay":0}'>Thomas Anderson</h5>
                </div>
                <div class="overflow-hidden">
                  <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Change Management Consultant</h6>
                </div>
                <div class="overflow-hidden">
                  <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>As the VP of People, Thomas’s focus lies in the
                    development and optimization of talent retention.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mt-4   ">
            <div class="card h-100 shadow"><img class="card-img-top" src="{{ asset('frontend') }}/assets/images/blog-post/post4.png"
                alt="Legartha Mantana" />
              <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h5 data-zanim-xs='{"delay":0}'>Legartha Mantana</h5>
                </div>
                <div class="overflow-hidden">
                  <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Brand Management Consultant</h6>
                </div>
                <div class="overflow-hidden">
                  <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>As General Counsel of Elixir, Tony oversees
                    global
                    legal activities and policies across all aspects.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mt-4   ">
            <div class="card h-100 shadow"><img class="card-img-top" src="{{ asset('frontend') }}/assets/images/blog-post/post5.png"
                alt="John Snow" />
              <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h5 data-zanim-xs='{"delay":0}'>John Snow</h5>
                </div>
                <div class="overflow-hidden">
                  <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Business Analyst</h6>
                </div>
                <div class="overflow-hidden">
                  <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>John has overseen the meteoric growth while
                    protecting scaling its uniquely creative and culture.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mt-4   ">
            <div class="card h-100  shadow"><img class="card-img-top" src="{{ asset('frontend') }}/assets/images/blog-post/post6.png"
                alt="Ragner Lothbrok" />
              <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h5 data-zanim-xs='{"delay":0}'>Ragner Lothbrok</h5>
                </div>
                <div class="overflow-hidden">
                  <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Business Consultant</h6>
                </div>
                <div class="overflow-hidden">
                  <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>Ragner, SVP of Engineering, oversees Elixir’s
                    vast
                    engineering organization which drives the core programming.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- end of .container-->
  </section>
@endsection
