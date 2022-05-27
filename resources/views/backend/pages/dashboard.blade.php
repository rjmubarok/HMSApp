@extends('backend.layouts.master')
@section('admin-content')
<div class="ms-content-wrapper">
    <div class="row">

      <div class="col-xl-3 col-md-6">
        <div class="ms-card card-gradient-success ms-widget ms-infographics-widget">
          <div class="ms-card-body media">
            <div class="media-body">
              <h6>Total Floor</h6>
              <p class="ms-card-change"> <i class="material-icons">arrow_upward</i> {{ \App\Models\Floor::count() }}</p>
            </div>
          </div>
          <i class="flaticon-archive"></i>
        </div>
      </div>

      <div class="col-xl-3 col-md-6">
        <div class="ms-card card-gradient-secondary ms-widget ms-infographics-widget">
          <div class="ms-card-body media">
            <div class="media-body">
              <h6>Total Room</h6>
              <p class="ms-card-change">{{ \App\Models\room::count() }}</p>
            </div>
          </div>
          <i class="flaticon-supermarket"></i>
        </div>
      </div>

      <div class="col-xl-3 col-md-6">
        <div class="ms-card card-gradient-warning ms-widget ms-infographics-widget">
          <div class="ms-card-body media">
            <div class="media-body">
              <h6>Total Apply</h6>
              <p class="ms-card-change"> <i class="material-icons">arrow_upward</i> {{ \App\Models\Order::count() }}</p>
            </div>
          </div>
          <i class="flaticon-reuse"></i>
        </div>
      </div>

      <div class="col-xl-3 col-md-6">
        <div class="ms-card card-gradient-info ms-widget ms-infographics-widget">
          <div class="ms-card-body pos media">
            <div class="media-body">
              <h6>Total Accept Apply</h6>
              <p class="ms-card-change "> {{ \App\Models\Order::where(['condition'=>'accept'])->count() }}</p>
            </div>
          </div>
          <i class="fas fa-cannabis "></i>
        </div>
      </div>
      <div class="col-md-12 col-xl-12">
        <div class="ms-panel ms-panel-fh">
          <div class="ms-panel-header ms-panel-custom align-items-center">
            <h6>Orders Graph</h6>
            <ul class="nav nav-tabs d-flex nav-justified mb-0" role="tablist">
              <li><a href="#tab13" aria-controls="tab13" class=" pb-0" role="tab" data-toggle="tab" aria-selected="false"><i class="fas fa-chart-bar fa-2x "></i></a></li>
              <li><a href="#tab14" aria-controls="tab14" role="tab" data-toggle="tab" class="active pb-0 show" aria-selected="true"><i class="fas fa-chart-line fa-2x "></i> </a></li>
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
@endsection
