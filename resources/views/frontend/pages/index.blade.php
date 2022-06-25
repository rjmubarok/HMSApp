@extends('frontend.layouts.master')
@section('content')
<section class="print-media">
    <div class="container pt-4">
        <h3 class="main-title content-border">Notice Board</h3>
        <div class="item">
            <div class="print-media-carousel owl-carousel owl-theme ">
                @foreach ($notices as $notice )
                <p>{!! $notice->notice !!}</p>
                @endforeach
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
                    @foreach ($sliders as $sphoto )
                    <div class="swiper-slide"><img class="img-fluid" src="{{ asset($sphoto->slide_photo) }}" alt="image" />
                    </div>
                    @endforeach

                </div>
                <div class="swiper-nav">
                    <div class="swiper-button-prev"><span class="fas fa-chevron-left"></span></div>
                    <div class="swiper-button-next"><span class="fas fa-chevron-right"> </span></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-lg-3 col-md-3 shadow">
            <div class="card h-100"><img class="card-img-top" src="{{ \App\Models\Setting::value('side_photo') }}"
                    alt="Reenal Scott" />
                <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="overflow-hidden">
                        <h5 data-zanim-xs='{"delay":0}'>{{ \App\Models\Setting::value('side_title') }}</h5>
                    </div>
                    <div class="overflow-hidden">
                        <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>{{
                            \App\Models\Setting::value('side_description') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<section class="bg-100">
    <div class="container">
        <div class="application-process">
            <div class="text-center mb-5">
                <h3 class="main-title">Applay for Seat!</h3>
                <!-- <h1 class="sub-title">Get Started.</h1> -->
                <h6 class="text-muted font-weight-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptatem magni consequatur repudiandae nobis vitae repellat doloremque ipsum necessitatibus,
                    expedita

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
                            <a class="btn-outline-dark btn btn-success" href="{{ route('apply.for.seat') }}">Click To
                                Registration For
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
                @foreach ($floors as $floor)
                <div class="col-sm-6 col-lg-4    ">
                    <div class="card h-100 shadow"><img class="card-img-top" src="{{ $floor->floor_photo }}"
                            alt="Reenal Scott" />
                        <div class="card-body" data-zanim-trigger="scroll">
                            <div class="overflow-hidden">
                                <h5><a href="{{ route('floormember', ['slug' => $floor->slug]) }}">{{ $floor->floor_name
                                        }}</a></h5>
                            </div>

                            <div class="overflow-hidden">
                                <p class="py-3 mb-0">{!! $floor->floor_description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div><!-- end of .container-->
</section>
{{-- <section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xl-12">
                <div class="ms-panel ms-panel-fh">
                    <div class="ms-panel-header ms-panel-custom align-items-center">
                        <h6>Stay On Hostel </h6>
                        <ul class="nav nav-tabs d-flex nav-justified mb-0" role="tablist">
                            <li><a href="#tab13" aria-controls="tab13" class=" pb-0" role="tab" data-toggle="tab"
                                    aria-selected="false"><i class="fas fa-chart-bar fa-2x "></i></a></li>
                            <li><a href="#tab14" aria-controls="tab14" role="tab" data-toggle="tab"
                                    class="active pb-0 show" aria-selected="true"><i
                                        class="fas fa-chart-line fa-2x "></i> </a></li>
                        </ul>
                    </div>
                    <div class="ms-panel-body clearfix">

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in" id="tab13">
                                <div class="ms-panel-body">
                                    <canvas id="bar-chart"></canvas>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade active show" id="tab14">
                                <div class="ms-panel-body">
                                    <canvas id="line-chart"></canvas>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab15">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section> --}}
<section class="counting">
    <div class="container p-0">
        <div class="counting-section shadow bg-04432e text-white">
            <div class="row">
                <div class="col-12 col-sm-4">
                    <div class="counting-content text-white">
                        <img src="{{ asset('frontend/assets/img/group.png') }}" alt="" />
                        <div class="tab-count">
                            <h3 class="text-white"><span class="count "> {{ \App\Models\Order::where(['status'=>'1'])->count() }} </span> +</h3>
                            <p class="text-white">Happy Student</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="counting-content">
                        <img src="{{ asset('frontend/assets/img/graduated.png') }}" alt="" />
                        <div class="tab-count">
                            <h3 class="text-white"><span class="count text-white">{{ \App\Models\Order::where(['condition'=>'accept'])->count() }} </span> +</h3>
                            <p class="text-white">Stay On Hostel Now</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="counting-content">
                        <img src="{{ asset('frontend/assets/img/social-network.png') }}" alt="" />
                        <div class="tab-count">
                            <h3 class="text-white"><span class="count"> {{ \App\Models\Order::where(['condition'=>'pending'])->count() }} </span> +</h3>
                            <p class="text-white">Pending Apply</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xl-12 col-12">
                <div id="chartContainer" style="height: 300px; width: 100%;"></div>

            </div>
        </div>
    </div>

</section>
@endsection
@section('scripts')
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
<script>
    $(".count").counterUp({
        //time:1000,
       // delay:10

    });
</script>
@endsection
