@extends('backend.layouts.master')
@section('admin-content')
<div class="col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header d-flex justify-content-between">
            <h6>Sliders</h6>
            <a href="{{ route('slide.index') }}" class="btn btn-primary">All Slider </a>
        </div>
        @include('backend.layouts.notification')
        <div class="ms-panel-body">
            <form id="basic-form" method="post" action="{{ route('slide.store') }}" enctype="multipart/form-data">
                @csrf


                <div class="form-group col-6">
                    <label> Slider Photo <small class="text-warning"> Rendered size:800 × 500 px </small></label>
                    <br>
                        <input  class="form-control" type="file" name="slide_photo">
                    @error('slide_photo')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-6">
                    <label for="notice">Status</label>
                    <br>
                    <label class="ms-checkbox-wrap ms-checkbox-success">
                        <input type="radio" value="1" name="status">
                        <i class="ms-checkbox-check"></i>
                    </label>
                    <span> Active </span>
                    <label class="ms-checkbox-wrap ms-checkbox-danger">
                        <input type="radio" value="0" name="status">
                        <i class="ms-checkbox-check"></i>
                    </label>
                    <span> Inactive </span>
                    @error('status')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success btn-pill">Add Slide</button>
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@endsection
