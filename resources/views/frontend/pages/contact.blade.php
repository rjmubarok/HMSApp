@extends('frontend.layouts.master')
@section('content')
<section class="bg-100">
    <div class="container">
      <div class="row g-0">
        <div class="col-lg-4 py-3 py-lg-0 position-relative" style="min-height:400px; background-position: top">
          <div class="bg-holder rounded-ts-lg rounded-lg-bs-lg rounded-te-lg rounded-lg-te-0" style="background-image:url(../assets/img/ceo.jpg);"></div>
          <!--/.bg-holder-->
        </div>
        <div class="col-lg-8 px-5 py-6 my-lg-0 bg-white rounded-lg-te-lg rounded-be-lg rounded-bs-lg rounded-lg-bs-0 d-flex align-items-center">
          <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
            <h5 data-zanim-xs='{"delay":0}'>Message From CEO</h5>
            <p class="my-4" data-zanim-xs='{"delay":0.1}'>Elixir co-operates with clients in solving the hardest problems they face in their businesses—and the world. We do this by channeling the diversity of our people and their thinking. </p><img data-zanim-xs='{"delay":0.2}' src="../assets/img/signature.png" alt="CEO" />
            <h5 class="text-uppercase mt-3 fw-medium mb-1" data-zanim-xs='{"delay":0.3}'>renal scott</h5>
            <h6 class="text-500 fw-semi-bold" data-zanim-xs='{"delay":0.4}'>UK office</h6>
          </div>
        </div>
      </div>
      <div class="row mt-6">
        <div class="col">
          <h3 class="text-center fs-2 fs-md-3">Company Overview</h3>
          <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
        </div>
        <div class="col-12">
          <div class="bg-white px-3 mt-6 px-0 py-5 px-lg-5 rounded-3">
            <h5>Earning the right</h5>
            <p class="mt-3">As a first order business consulting firm, we help companies, foundations and individuals make a difference. Our work gets to the heart of the matter. We break silos because it takes more than any one check or policy or letter to tackle big issues like economic security, human rights or climate sustainability. We prescribe a custom formula of advocacy, collaboration, investment, philanthropy, policy and new ways of doing business in order to help you make progress.</p>
            <blockquote class="blockquote my-5 ms-lg-6" style="max-width: 700px;">
              <h5 class="fw-medium ms-3 mb-0">But how do we do it? We like to call it earning the right, walking the talk and playing the game &hellip;</h5>
            </blockquote>
            <p class="column-lg-2 dropcap">Elixir serves to help people with creative ideas succeed. Our platform empowers millions of people — from individuals and local artists to entrepreneurs shaping the world’s most iconic businesses — to share their stories and create an impactful, stylish, and easy-to-manage online presence. The Cambridge office is the home of the Risk management practice. We work to assure the safe performance of complex critical systems; develop safety leadership and culture; manage safety and risk in high-hazard industries; understand complex project risks, measure and report risk performance. We work across a wide range of industries and public sector organizations that include upstream and downstream oil and gas; rail and road transportation; construction; and gas utilities and distribution. We work worldwide in Europe, Middle East and Asia, Africa and South America based out of our offices in Cambridge, UK and Milan, Italy.</p>
          </div>
        </div>
      </div>
    </div><!-- end of .container-->
  </section>
@endsection
