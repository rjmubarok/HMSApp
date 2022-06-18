@extends('frontend.layouts.master')
@section('content')
<section class="text-center py-0 pt-6">
    <div class="bg-holder overlay overlay-2" style="background-image:url(../assets/img/header-5.jpg);"></div>
    <!--/.bg-holder-->
    <div class="container">
        <div class="row min-vh-100 align-items-center">
            <div class="col-md-10 col-lg-10 mx-auto">
                <div class="card">
                    @include('backend.layouts.notification')
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li style=" list-style:none;">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="card-body p-md-5">
                        <h4 class="text-uppercase fs-0 fs-md-1">Applay For Seat</h4>
                        <form class="text-start mt-4" action="{{ route('payment') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row align-items-center g-4">
                                <div class="col-12 col-md-6">
                                    <input class="form-control @error('customer_name') is-invalid @enderror" type="text"
                                        name="customer_name" placeholder="name" aria-label="First Name" value="" required />
                                    @error('customer_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-6">
                                    <input class="form-control @error('studentID') is-invalid @enderror" type="text"
                                        name="studentID" placeholder="Student ID" aria-label="First Name" value="" required />
                                    @error('studentID')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-6">
                                    <input class="form-control @error('email') is-invalid @enderror"
                                        type="email" name="email" placeholder="Email Address" aria-label="Email Address"
                                        value="" required />
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-6">
                                    <input class="form-control @error('customer_phone') is-invalid @enderror"
                                        type="text" name="customer_phone" placeholder="Phone" aria-label="Phone"
                                        value="" required />
                                    @error('customer_phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12 col-md-6">
                                    <input class="form-control @error('customer_city') is-invalid @enderror" type="text"
                                        name="customer_city" placeholder="City" aria-label="City" required />
                                    @error('customer_city')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="">Date Of Birth</label><input
                                        class="form-control @error('dob') is-invalid @enderror" type="date"
                                        placeholder="Date Of Birth" name="dob" required />
                                    @error('dob')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12 col-md-6">
                                    <label for="">Address</label><input
                                        class="form-control @error('customer_address') is-invalid @enderror" type="text"
                                        placeholder="Address" name="customer_address" aria-label="Last Name"  required/>
                                    @error('customer_address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group ">
                                        <label> <span class=""> Select floor</span></label>
                                        <select name="floor_id" id=""
                                            class="form-control @error('floor_id') is-invalid @enderror" required>
                                            <option value="" style="display: none;" selected> -- floor --</option>
                                            @foreach ($floors as $floor)
                                            <option value=" {{ $floor->id }} " {{old('floor_id')==$floor->id ?
                                                'selected':''}}> {{ $floor->floor_name }} </option>
                                            @endforeach
                                            @error('room_id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </select>
                                        @error('floor_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group ">
                                        <label> <span class=""> Select Room Number</span></label>
                                        <select name="room_id" id=""
                                            class="form-control @error('room_id') is-invalid @enderror" required>
                                            <option value="" style="display: none;" selected> -- Room Number--</option>
                                            @foreach ($rooms as $room)
                                            <option value=" {{ $room->id }} " {{old('room_id')==$room->id ?
                                                'selected':''}}> {{ $room->room_number }} </option>
                                            @endforeach
                                            @error('room_id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </select>
                                        @error('room_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <input class="form-control" name="amount" value="500" aria-label="Last Name" hidden />
                                <div class="col-12 col-md-6"><input
                                        class="form-control @error('customer_postcode') is-invalid @enderror"
                                        type="text" placeholder="Zipecode" name="customer_postcode"
                                        aria-label="Last Name" />
                                    @error('customer_postcode')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <label>  Photo </label>
                                <div class="input-group">

                                    <input type="file" class="form-control @error('customer_photo') validation-required @enderror"
                                id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required
                                name="customer_photo">
                                    
                                    @error('customer_photo')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                </div>
                            </div>
                            <div class="row align-items-center mt-3">
                                <div class="col-6  col-md-6 mt-3">
                                    <div class="form-check"><input class="form-check-input" id="rememberMe"
                                            type="checkbox" value="" /><label
                                            class="form-check-label text-500 lh-sm fw-semi-bold" for="rememberMe">I
                                            agree with the terms &amp; conditions</label></div>
                                </div>
                                <div class="col-12 col-md-6 mt-3">
                                    <div class="">
                                        <p class="fs--1">If you need to seat than you have to pay 500 Taka</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mt-2 mt-sm-3"><button
                                        class="btn text-white bg-04432e btn-sm w-100" type="submit">Apply To
                                        Next</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end of .container-->
</section>
@endsection
@section('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
        $('#lfm ,#lfm1').filemanager('image');
    </script>
@endsection
