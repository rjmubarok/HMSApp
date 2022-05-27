@extends('frontend.layouts.master')
@section('content')
   <!-- <section> begin ============================-->
    <section class="text-center">
        <div class="container">
          <div class="text-center">
            <h5 class="fs-2 fs-md-3">{{ $floor->floor_name }}/{{ $floor->floor_no }}</h5>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
          </div>
          <div class="row">
              @foreach ($members as $member)
              <div class="col-md-4 col-lg-3 mt-4">
                <div class="px-3 py-4 px-lg-4">
                  <div class="overflow-hidden"><img src="{{ $member->customer_photo }}" alt="{{ $member->customer_name }}" height="300" /></div>
                  <div class="overflow-hidden">
                    <h5 class="mt-3">{{ $member->customer_name }}</h5>
                  </div>
                  <div class="overflow-hidden">
                    <p class="mb-0">{{ $member->customer_phone }}</p>
                  </div>
                </div>
              </div>
              @endforeach
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

@endsection
