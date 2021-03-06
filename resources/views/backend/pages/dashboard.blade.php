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
        




    </div>
  </div>
@endsection
