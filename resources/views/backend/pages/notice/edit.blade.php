@extends('backend.layouts.master')
@section('admin-content')
<div class="col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header d-flex justify-content-between">
            <h6>Notice </h6>
            <a href="{{ route('slide.index') }}" class="btn btn-primary">All Notice</a>
        </div>
        @include('backend.layouts.notification')
        <div class="ms-panel-body">
            <form id="basic-form" method="post" action="{{ route('notice.update', $notice->id) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label> Notice text </label>
                <div class="input-group">
                    <textarea name="notice" id="summernote" cols="30" rows="10" >{{ $notice->notice }}</textarea>
                    @error('notice')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">
                    <label for="notice">Status</label>
                    <br>
                    <label class="ms-checkbox-wrap ms-checkbox-success">
                        <input type="radio" value="1" name="status" {{ $notice->status == '1' ? 'checked' :
                        '' }}>
                        <i class="ms-checkbox-check"></i>
                    </label>
                    <span> Active </span>
                    <label class="ms-checkbox-wrap ms-checkbox-danger">
                        <input type="radio" value="0" name="status" {{ $notice->status == '0' ? 'checked' :
                        '' }}>
                        <i class="ms-checkbox-check"></i>
                    </label>
                    <span> Inactive </span>
                    @error('status')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>

                <button type="submit" class="btn btn-success btn-pill">Update Notice</button>
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
