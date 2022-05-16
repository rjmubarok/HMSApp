@extends('backend.layouts.master')
@section('admin-content')
<div class="col-md-8 offset-2">
    <div class="ms-panel">
        <div class="ms-panel-header">
            <h6>Setting</h6>
        </div>
        @include('backend.layouts.notification')
        <div class="ms-panel-body">
            <form id="basic-form" method="post" action="{{ route('seting.update') }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="Title">Title</label>
                    <input type="text" class="form-control" id="Title" name="title" value="{{ $setting->title }}">
                </div>
                <div class="form-group">
                    <label for="meta_keywords">Meta Keyword</label>
                    <input type="text" class="form-control" id="meta_keywords" name="meta_keywords"
                        value="{{ $setting->meta_keywords }}">
                </div>
                <div class="form-group">
                    <label for="meta_description">Meta Description</label>
                    <input type="text" class="form-control" id="meta_description" name="meta_description"
                        value="{{ $setting->meta_description }}">
                </div>
                <label> Logo </label>
                <div class="input-group">
                    <span class="input-group-btn">
                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-success">
                            <i class="fa fa-picture-o"></i> Choose Photo for Logo
                        </a>
                    </span>
                    <input id="thumbnail" class="form-control" type="text" name="logo" hidden
                        value="{{ $setting->logo }}">
                    <img src="{{ $setting->logo }}" alt="" height="60">
                </div>
                <div id="holder" style="margin-top:15px;max-height:100px;"> </div>
                <label> Favicon </label>
                <div class="input-group">
                    <span class="input-group-btn">
                        <a id="lfm1" data-input="thumbnail1" data-preview="holder" class="btn btn-primary">
                            <i class="fa fa-picture-o"></i> Choose for Favicon
                        </a>
                    </span>
                    <input id="thumbnail1" class="form-control" type="text" name="favicon" hidden value="
                                    {{ $setting->favicon }}">
                    <img src="{{ $setting->favicon }}" alt="" style="max-height: 30px; margin-top:10px;">
                </div>
                <div id="holder1" style="margin-top:15px;max-height:100px;"> </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $setting->email }}">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ $setting->address }}">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $setting->phone }}">
                </div>
                <div class="form-group">
                    <label for="footer">Footer</label>
                    <input type="text" class="form-control" id="footer" name="footer" value="{{ $setting->footer }}">
                </div>
                <div class="form-group">
                    <label for="side_title">Title For Side</label>
                    <input type="text" class="form-control" id="side_title" name="side_title" value="{{ $setting->side_title }}">
                </div>
                <div class="form-group">
                    <label for="side_description">Description For Side</label>
                    <input type="text" class="form-control" id="side_description" name="side_description" value="{{ $setting->side_description }}">
                </div>
                <label> Side Photo </label>
                <div class="input-group">
                    <span class="input-group-btn">
                        <a id="lfm2" data-input="thumbnail2" data-preview="holder2" class="btn btn-info">
                            <i class="fa fa-picture-o"></i> Select for Side Photo
                        </a>
                    </span>
                    <input id="thumbnail2" class="form-control" type="text" name="side_photo" hidden value="
                                    {{ $setting->side_photo }}">
                    <img src="{{ $setting->side_photo }}" alt=""style="margin-top:10px;max-height:100px;">
                </div>
                <div id="holder2" style="margin-top:15px;max-height:100px;"> </div>
                <button type="submit" class="btn btn-primary">Update Setting</button>
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
