@extends('backend.layouts.master')
@section('admin-content')
<div class="col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header d-flex justify-content-between">
            <h6>Room</h6>
            <a href="{{ route('room.index') }}" class="btn btn-primary">All room</a>
        </div>
        @include('backend.layouts.notification')
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div class="ms-panel-body">
            <form id="basic-form" method="post" action="{{ route('room.store') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="room_name">Room Name</label>
                    <input  type="text" class="form-control  @error('room_name') is-invalid @enderror" name="room_name" {{ old('room_name') }} placeholder="room Name">
                    @error('room_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="form-group">
                    <label for="room_number">Room Number:</label>
                    <input type="number"  class="form-control  @error('room_number') is-invalid @enderror" name="room_number" {{ old('room_number') }} placeholder="room No:">
                    @error('room_number')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group ">
                    <label> <span class=""> Select Floor</span></label>
                    <select name="floor_id" id="" class="form-control">
                        <option value="" style="display: none;" selected> -- Floor --</option>
                        @foreach ($floors as $floor)
                            <option value=" {{ $floor->id }} " {{old('floor_id')==$floor->id ? 'selected':''}}> {{ $floor->floor_name }} </option>
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
                        <option value="one" > -- One --</option>
                        <option value="tow" > -- Tow --</option>
                        <option value="three" > -- Three --</option>
                        <option value="four" > -- Four --</option>
                        @error('total_bed')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </select>
                </div>
                <div class="form-group ">
                    <label> <span class=""> Available  Bed</span></label>
                    <select name="abailable_bed" id="" class="form-control">
                        <option value="" style="display: none;" selected> -- Available Bed --</option>
                        <option value="one" > -- One --</option>
                        <option value="tow" > -- Tow --</option>
                        <option value="three" > -- Three --</option>
                        <option value="four" > -- Four --</option>
                        @error('abailable_bed')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </select>
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="number"  class="form-control  @error('price') is-invalid @enderror" name="price" {{ old('price') }} placeholder="Price">
                    @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>

                <label> Room Photo </label>
                <div class="input-group">

                    <input  class="form-control" type="file" name="room_photo"  value="{{ old('room_photo') }}">
                    @error('room_photo')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div id="holder" style="margin-top:15px;max-height:100px;"> </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="" rows="10" cols="5" class="form-control  @error('description') is-invalid @enderror" name="description">{{ old('description') }}</textarea>
                    @error('description')
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

                <button type="submit" class="btn btn-success btn-pill">Add Room</button>
            </form>
        </div>
    </div>
</div>
@endsection


