@extends('backend.layouts.master')
@section('admin-content')
<div class="col-md-8 offset-2">
    <div class="ms-panel">
        <div class="ms-panel-header d-flex justify-content-between">
            <h6>Floor</h6>
            <a href="{{ route('floor.index') }}" class="btn btn-primary">All Floor</a>
        </div>
        @include('backend.layouts.notification')
        <div class="ms-panel-body">
            <form id="basic-form" method="post" action="{{ route('floor.update', $floor->id) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="floor_name">Floor Name</label>
                    <input   class="form-control  @error('floor_name') is-invalid @enderror" name="floor_name" {{ old('floor_name') }} placeholder="Floor Name" value="{{ $floor->floor_name }}">
                    @error('floor_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">
                    <label for="total_room">Total Room </label>
                    <input   class="form-control  @error('total_room') is-invalid @enderror" name="total_room" {{ old('total_room') }} placeholder="Total Room In Per Floor"  value="{{ $floor->total_room }}">
                    @error('total_room')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">
                    <label for="floor_no">Floor No:</label>
                    <input   class="form-control  @error('floor_no') is-invalid @enderror" name="floor_no" {{ old('floor_no') }} placeholder="Floor No:"  value="{{ $floor->floor_no }}">
                    @error('floor_no')
                    <div class="alert alert-danger" >{{ $message }}</div>
                @enderror
                </div>
                <label> Floor Photo <small class="text-warning">Rendered size:	348 ?? 348 px</small></label>

                    <div class="input-group">
                        <input  class="form-control" type="file" name="floor_photo"  value="{{ $floor->floor_photo}}">
                        <img src="{{asset($floor->floor_photo)}}" alt="" style="max-height:70px;">
                        @error('floor_photo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>

                <div id="holder" style="margin-top:15px;max-height:100px;"> </div>
                <div class="form-group">
                    <label for="floor_description">Description</label>
                    <textarea id="" rows="10" cols="5" class="form-control  @error('floor_description') is-invalid @enderror" name="floor_description" value="{{ $floor->floor_description }}">{{ $floor->floor_description }}</textarea>
                    @error('floor_description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">
                    <label for="notice">Status</label>
                    <br>
                    <label class="ms-checkbox-wrap ms-checkbox-success">
                        <input type="radio" value="1" name="status" {{ $floor->status == '1' ? 'checked' :
                        '' }}>
                        <i class="ms-checkbox-check"></i>
                    </label>
                    <span> Active </span>
                    <label class="ms-checkbox-wrap ms-checkbox-danger">
                        <input type="radio" value="0" name="status" {{ $floor->status == '0' ? 'checked' :
                        '' }}>
                        <i class="ms-checkbox-check"></i>
                    </label>
                    <span> Inactive </span>
                    @error('status')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>

                <button type="submit" class="btn btn-success btn-pill">Update Floor</button>
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
