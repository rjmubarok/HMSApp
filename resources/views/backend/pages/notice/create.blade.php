@extends('backend.layouts.master')
@section('admin-content')
<div class="col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header d-flex justify-content-between">
            <h6>Notice</h6>
            <a href="{{ route('notice.index') }}" class="btn btn-primary">All Notice </a>
        </div>
        @include('backend.layouts.notification')
        <div class="ms-panel-body">
            <form id="basic-form" method="post" action="{{ route('notice.store') }}"
                enctype="multipart/form-data">
                @csrf
                <label> Notice Text </label>
                <div class="input-group">
                    <textarea name="notice" id="summernote" cols="30" rows="10"> Notice </textarea>
                    @error('notice')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div id="holder" style="margin-top:15px;max-height:100px;"> </div>

                <div class="form-group">
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

                <button type="submit" class="btn btn-success btn-pill">Add Notice</button>
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
@endsection
