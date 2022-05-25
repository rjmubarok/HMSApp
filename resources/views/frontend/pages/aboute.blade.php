@extends('frontend.layouts.master')
@section('content')
      <!-- <section> begin ============================-->
        <section class="bg-primary bg-04432e">
            <div class="container">
              <div class="row align-items-center text-white">
                <div class="col-lg-4">
                  <div class="border border-2 border-warning p-4 py-lg-5 text-center rounded-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="overflow-hidden">
                      <h4 class="text-white" data-zanim-xs='{"delay":0}'>Request a call back</h4>
                    </div>
                    <div class="overflow-hidden">
                      <p class="px-lg-1 text-100 mb-0" data-zanim-xs='{"delay":0.1}'>Would you like to speak to one of our financial advisers over the phone? Just submit your details and we’ll be in touch shortly. You can also email us if you would prefer.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8 ps-lg-5 mt-6 mt-lg-0">
                  <h5 class="text-white">I would like to discuss:</h5>
                  <form class="mt-4" method="post">
                    <div class="row">
                      <div class="col-6"><input class="form-control" type="hidden" name="to" value="username@domain.extension" /><input class="form-control" type="text" placeholder="Your Name" aria-label="Your Name" /></div>
                      <div class="col-6"><input class="form-control" type="text" placeholder="Phone Number" aria-label="Phone Number" /></div>
                      <div class="col-6 mt-4"><input class="form-control" type="text" placeholder="Subject" aria-label="Subject" /></div>
                      <div class="col-6 mt-4"><button class="btn btn-warning w-100" type="submit">Submit</button></div>
                    </div>
                  </form>
                </div>
              </div>
            </div><!-- end of .container-->
          </section><!-- <section> close ============================-->
          <!-- ============================================-->
    <!-- <section> begin ============================-->
        <section style="background-color: #04432e">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-6">
                  <div class="bg-primary text-white p-5 p-lg-6 rounded-3">
                    <h4 class="text-white fs-1 fs-lg-2 mb-1">Sign up for email alerts</h4>
                    <p class="text-white">Stay current with our latest insights</p>
                    <form class="mt-4">
                      <div class="row align-items-center">
                        <div class="col-md-7 pe-md-0">
                          <div class="input-group"><input class="form-control" type="email" placeholder="Enter Email Here" /></div>
                        </div>
                        <div class="col-md-5 mt-3 mt-md-0">
                          <div class="d-grid"><button class="btn btn-warning" type="submit"><span class="text-primary fw-semi-bold">Submit</span></button></div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                  <div class="row">
                    <div class="col-6 col-lg-4 text-white ms-lg-auto">
                      <ul class="list-unstyled">
                        <li class="mb-3"><a class="text-white" href="../contact.html">Contact Us</a></li>
                        <li class="mb-3"><a class="text-white" href="../index.html#!">FAQ</a></li>
                        <li class="mb-3"><a class="text-white" href="../index.html#!">Privacy Policy</a></li>
                        <li class="mb-3"><a class="text-white" href="../index.html#!">Terms of Use</a></li>
                        <li class="mb-3"><a class="text-white" href="../index.html#!">Global Office</a></li>
                        <li class="mb-3"><a class="text-white" href="../index.html#!">Local Office</a></li>
                      </ul>
                    </div>
                    <div class="col-6 col-sm-5 ms-sm-auto">
                      <ul class="list-unstyled">
                        <li class="mb-3"><a class="text-decoration-none d-flex align-items-center" href="#!"> <span class="brand-icon me-3"><span class="fab fa-linkedin-in"></span></span>
                            <h5 class="fs-0 text-white mb-0 d-inline-block">Linkedin</h5>
                          </a></li>
                        <li class="mb-3"><a class="text-decoration-none d-flex align-items-center" href="#!"> <span class="brand-icon me-3"><span class="fab fa-twitter"></span></span>
                            <h5 class="fs-0 text-white mb-0 d-inline-block">Twitter</h5>
                          </a></li>
                        <li class="mb-3"><a class="text-decoration-none d-flex align-items-center" href="#!"> <span class="brand-icon me-3"><span class="fab fa-facebook-f"></span></span>
                            <h5 class="fs-0 text-white mb-0 d-inline-block">Facebook</h5>
                          </a></li>
                        <li class="mb-3"><a class="text-decoration-none d-flex align-items-center" href="#!"> <span class="brand-icon me-3"><span class="fab fa-google-plus-g"></span></span>
                            <h5 class="fs-0 text-white mb-0 d-inline-block">Google+</h5>
                          </a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- end of .container-->
          </section><!-- <section> close ============================-->
          <!-- ============================================-->

@endsection
