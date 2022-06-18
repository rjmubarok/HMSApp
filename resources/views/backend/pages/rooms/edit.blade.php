@extends('backend.layouts.master')
@section('admin-content')
<div class="col-md-8 offset-2">
    <div class="ms-panel">
        <div class="ms-panel-header d-flex justify-content-between">
            <h6>Room</h6>
            <a href="{{ route('room.index') }}" class="btn btn-primary">All Room</a>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        @include('backend.layouts.notification')
        <div class="ms-panel-body">
            <form id="basic-form" method="post" action="{{ route('room.update', $room->id) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="room_name">Room Name</label>
                    <input  type="text" class="form-control  @error('room_name') is-invalid @enderror" name="room_name" {{ old('room_name') }} placeholder="room Name" value="{{ $room->room_name }}">
                    @error('room_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">
                    <label for="room_number">Room Number:</label>
                    <input   class="form-control  @error('room_number') is-invalid @enderror" name="room_number" {{ old('room_number') }} placeholder="Floor No:"  value="{{ $room->room_number }}">
                    @error('room_number')
                    <div class="alert alert-danger" >{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group ">
                    <div class="form-group ">
                        <label> <span class=""> Select Floor</span></label>
                        <select name="floor_id" id="" class="form-control">
                            <option value="" style="display: none;" selected> -- Floor --</option>
                            @foreach ($floors as $floor)
                                <option value=" {{ $floor->id }} " {{old('floor_id')==$floor->id ? 'selected':''}}  @if ($room->floor_id == $room->floor_id) Selected @endif> {{ $floor->floor_name }} </option>
                            @endforeach
                            @error('floor_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </select>
                    </div>
                    <div class="form-group ">
                        <label> <span class=""> Total Bed</span></label>
                        <select name="total_bed" id="" class="form-control">
                            <option value="" style="display: none;" selected> -- Total Bed --</option>
                            <option value="one" @if ($room->total_bed == 'one') Selected @endif> -- One --</option>
                            <option value="tow" @if ($room->total_bed == 'tow') Selected @endif> -- Tow --</option>
                            <option value="three" @if ($room->total_bed == 'three') Selected @endif> -- Three --</option>
                            <option value="four" @if ($room->total_bed == 'four') Selected @endif> -- Four --</option>
                            @error('total_bed')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </select>
                    </div>
                    <div class="form-group ">
                        <label> <span class=""> Available  Bed</span></label>
                        <select name="abailable_bed" id="" class="form-control">
                            <option value="" style="display: none;" selected> -- Available Bed --</option>
                            <option value="one" @if ($room->abailable_bed == 'one') Selected @endif> -- One --</option>
                            <option value="tow" @if ($room->abailable_bed == 'tow') Selected @endif> -- Tow --</option>
                            <option value="three"@if ($room->abailable_bed == 'three') Selected @endif> -- Three --</option>
                            <option value="four" @if ($room->abailable_bed == 'four') Selected @endif> -- Four --</option>
                            @error('abailable_bed')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="number"  class="form-control  @error('price') is-invalid @enderror" name="price" {{ old('price') }} placeholder="Price:" value="{{ $room->price }}">
                        @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                <label> Room Photo </label>
                <div class="input-group">
                    <span class="input-group-btn">
                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-success">
                            <i class="fa fa-picture-o"></i> Choose Photo for Room
                        </a>
                    </span>
                    <input id="thumbnail" class="form-control" type="text" name="room_photo" hidden  value="{{ $room->room_photo }}">
                    <img src="{{ $room->room_photo }}" alt="" style="max-width: 100px;">
                    @error('room_photo')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div id="holder" style="margin-top:15px;max-height:100px;"> </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="" rows="10" cols="5" class="form-control  @error('description') is-invalid @enderror" name="description" value="{{ $room->description }}">{{ $room->description }}</textarea>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">
                    <label for="notice">Status</label>
                    <br>
                    <label class="ms-checkbox-wrap ms-checkbox-success">
                        <input type="radio" value="1" name="status" {{ $room->status == '1' ? 'checked' :
                        '' }}>
                        <i class="ms-checkbox-check"></i>
                    </label>
                    <span> Active </span>
                    <label class="ms-checkbox-wrap ms-checkbox-danger">
                        <input type="radio" value="0" name="status" {{ $room->status == '0' ? 'checked' :
                        '' }}>
                        <i class="ms-checkbox-check"></i>
                    </label>
                    <span> Inactive </span>
                    @error('status')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>

                <button type="submit" class="btn btn-success btn-pill">Update Room</button>
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
