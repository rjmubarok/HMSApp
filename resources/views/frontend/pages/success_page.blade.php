@extends('frontend.layouts.master')
@section('content')
<section class="text-center py-0 pt-6" >
    <div class="bg-holder overlay overlay-2" style="background-image:url(../assets/img/header-5.jpg);"></div>
    <!--/.bg-holder-->
    <div class="container">
      <div class="row min-vh-100 align-items-center">
        <div class="col-md-8 col-lg-5 mx-auto" data-zanim-timeline="{}" data-zanim-trigger="scroll">
          <div class="card" data-zanim-xs='{"delay":0.1,"duration":1}'>
              <div class="card-body p-md-5">
                <h4 class="text-uppercase fs-0 fs-md-1">Applay Successfully Done </h4>
                {{-- <form class="text-start mt-4">
                  <div class="row align-items-center g-4">
                    <div class="col-12"> <input class="form-control" type="text" name="name" placeholder="First name" aria-label="First Name" value="{{ Auth::user()->name }}" /></div>
                    <div class="col-12"><input class="form-control" type="email" name="email" placeholder="Email Address" aria-label="Email Address" value="{{ Auth::user()->email }}"/></div>

                    <div class="col-12"><input class="form-control" type="text" placeholder="Roll No:" aria-label="Last Name" /></div>
                    <div class="col-12">
                        <label for="">Date Of Birth</label><input class="form-control" type="date" placeholder="Date Of Birth" name="dob"  /></div>
                    <div class="col-12"><input class="form-control" type="text" placeholder="Address" name="address" aria-label="Last Name" /></div>
                  </div>
                  <div class="row align-items-center mt-3">
                    <div class="col-6 mt-3">
                      <div class="form-check"><input class="form-check-input" id="rememberMe" type="checkbox" value="" /><label class="form-check-label text-500 lh-sm fw-semi-bold" for="rememberMe">I agree with the terms &amp; conditions</label></div>
                    </div>
                    <div class="col-12 mt-3">
                      <div class=""><p class="fs--1">If you need to seat than you have to pay 500 Taka</p> </div>
                    </div>
                    <div class="col-12 mt-2 mt-sm-3"><button class="btn text-white bg-04432e btn-sm w-100" type="submit">Apply To Next</button></div>
                  </div>
                </form> --}}
              </div>
            </div>
        </div>
      </div>
    </div><!-- end of .container-->
  </section>
@endsection
