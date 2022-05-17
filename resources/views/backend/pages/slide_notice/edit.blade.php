@extends('backend.layouts.master')
@section('admin-content')
<div class="col-md-8 offset-2">
    <div class="ms-panel">
        <div class="ms-panel-header d-flex justify-content-between">
            <h6>Slider And Notice Board</h6>
            <a href="" class="btn btn-primary">All Slider And Notice</a>
        </div>
        @include('backend.layouts.notification')
        <div class="ms-panel-body">
            <form id="basic-form" method="post" action="{{ route('slide-notice.update', $slider->id) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label> Slider Photo </label>
                <div class="input-group">
                    <span class="input-group-btn">
                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-success">
                            <i class="fa fa-picture-o"></i> Choose Photo for Slide
                        </a>
                    </span>
                    <input id="thumbnail" class="form-control" type="text" name="slide_photo" hidden value="{{ $slider->slide_photo }}">
                    <img src="{{ $slider->slide_photo }}" alt="" style="max-width: 100px;">
                    @error('slide_photo')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div id="holder" style="margin-top:15px;max-height:100px;"> </div>
                <div class="form-group">
                    <label for="notice">notice Board</label>
                    <input type="notice" class="form-control @error('notice') is-invalid @enderror" id="notice" name="notice" value="{{ $slider->notice }}"
                        placeholder=" Write Notic Board">
                        @error('notice')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="notice">Status</label>
                    <br>
                    <label class="ms-checkbox-wrap ms-checkbox-success">
                        <input type="radio" value="1" name="status" {{ $slider->status == '1' ? 'checked' :
                        '' }}>
                        <i class="ms-checkbox-check"></i>
                    </label>
                    <span> Active </span>
                    <label class="ms-checkbox-wrap ms-checkbox-danger">
                        <input type="radio" value="0" name="status" {{ $slider->status == '0' ? 'checked' :
                        '' }}>
                        <i class="ms-checkbox-check"></i>
                    </label>
                    <span> Inactive </span>
                    @error('status')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>

                <button type="submit" class="btn btn-success btn-pill">Update Slide</button>
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $('#lfm,#lfm1,#lfm2').filemanager('image');
</script>
@endsection
