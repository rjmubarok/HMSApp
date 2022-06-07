@extends('backend.layouts.master')
@section('admin-content')
<div class="col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header d-flex justify-content-between">
            <h6>Floor</h6>
            <a href="{{ route('floor.index') }}" class="btn btn-primary">All Floor</a>
        </div>
        @include('backend.layouts.notification')
        <div class="ms-panel-body">
            <form id="basic-form" method="post" action="{{ route('floor.store') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group">

                    <label for="floor_name">Floor Name </label>
                    <input   class="form-control  @error('floor_name') is-invalid @enderror" name="floor_name" {{ old('floor_name') }} placeholder="Floor Name">
                    @error('floor_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">
                    <label for="total_room">Total Room </label>
                    <input   class="form-control  @error('total_room') is-invalid @enderror" name="total_room" {{ old('total_room') }} placeholder="Total Room In Per Floor">
                    @error('total_room')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">
                    <label for="floor_no">Floor No:</label>
                    <input   class="form-control  @error('floor_no') is-invalid @enderror" name="floor_no" {{ old('floor_no') }} placeholder="Floor No:">
                    @error('floor_no')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <label> Floor Photo <small class="text-warning">Rendered size:	348 × 348 px</small></label>
                <div class="input-group">
                    <span class="input-group-btn">
                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-success">
                            <i class="fa fa-picture-o"></i> Choose Photo for Floor
                        </a>
                    </span>
                    <input id="thumbnail" class="form-control" type="text" name="floor_photo" hidden value="">
                    @error('floor_photo')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div id="holder" style="margin-top:15px;max-height:100px;"> </div>
                <div class="form-group">
                    <label for="floor_description">Description</label>
                    <textarea id="summernote" rows="" cols="2" class="form-control  @error('floor_description') is-invalid @enderror" name="floor_description">{{ old('floor_description') }}</textarea>
                    @error('floor_description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
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
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $('#lfm,#lfm1,#lfm2').filemanager('image');
</script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
@endsection
