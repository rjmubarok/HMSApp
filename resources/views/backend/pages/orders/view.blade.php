@extends('backend.layouts.master')
@section('admin-content')
<div class="col-md-12 ">
    <div class="ms-panel">
        <div class="ms-panel-header d-flex justify-content-between">
            <h6>Order</h6>
        </div>
        @include('backend.layouts.notification')
        <div class="col-xl-12 col-md-12">
            <div class="ms-panel ms-panel-fh">

                <div class="ms-panel-body">
                    <div class="row">
                        <strong class="col-3 col-md-3">Name</strong>
                        <strong class="col-9 col-md-9">{{ $order->customer_name }}</strong>
                    </div>
                    <div class="row">
                        <strong class="col-3 col-md-3">Email</strong>
                        <strong class="col-9 col-md-9">{{ $order->email }}</strong>
                    </div>
                    <div class="row">
                        <strong class="col-3 col-md-3">Phone</strong>
                        <strong class="col-9 col-md-9">{{ $order->customer_phone }}</strong>
                    </div>
                    <div class="row">
                        <strong class="col-3 col-md-3">City</strong>
                        <strong class="col-9 col-md-9">{{ $order->customer_city }}</strong>
                    </div>
                    <div class="row">
                        <strong class="col-3 col-md-3">Addrss</strong>
                        <strong class="col-9 col-md-9">{{ $order->customer_address }}</strong>
                    </div>
                    <div class="row">
                        <strong class="col-3 col-md-3">Post Code</strong>
                        <strong class="col-9 col-md-9">{{ $order->customer_postcode }}</strong>
                    </div>
                    <div class="row">
                        <strong class="col-3 col-md-3">Ammount</strong>
                        <strong class="col-9 col-md-9">{{ $order->amount }}</strong>
                    </div>
                    <div class="row">
                        <strong class="col-3 col-md-3">Date of Birstrong</strong>
                        <strong class="col-9 col-md-9">{{ $order->dob }}</strong>
                    </div>
                    <div class="row">
                        <strong class="col-3 col-md-3">Floor</strong>
                        <strong class="col-9 col-md-9">{{ $order->floor->floor_name }}</strong>
                    </div>
                    <div class="row">
                        <strong class="col-3 col-md-3">Room No:</strong>
                        <strong class="col-9 col-md-9">{{$order->room->room_number }}</strong>
                    </div>
                    <div class="row">
                        <strong class="col-3 col-md-3">Photo</strong>
                        <strong class="col-9 col-md-9"><img src="{{ $order->customer_photo}}" alt="{{ $order->customer_name}}" style="max-height: 100px;"></strong>
                    </div>
                    <div class="row">
                        <strong class="col-3 col-md-3">Condition</strong>
                        <strong class="col-9 col-md-9"><form action="{{ route('order.status') }}" class="mt-3 mb-4" method="POST">
                            @csrf
                            <input type="hidden" name="order_id" value="{{ $order->id }}">
                            <strong>Status :</strong>
                            <select name="condition" id="" class="form-control">
                                <option value="pending" {{ $order->condition=='accept'||
                                    $order->condition=='cancelled' ? 'disabled' :'' }} {{
                                    $order->condition=='pending'? 'selected' :'' }}>Pending</option>

                                <option value="processing" {{ $order->condition=='accept'||
                                    $order->condition=='cancelled' ? 'disabled' :'' }} {{
                                    $order->condition=='processing'? 'selected' :'' }}>Proceccing</option>

                                <option value="accept" {{ $order->condition=='cancelled' ? 'disabled' :'' }} {{
                                    $order->condition=='accept'? 'selected' :'' }}>Accept</option>

                                <option value="cancelled" {{ $order->condition=='accept' ? 'disabled' :'' }} {{
                                    $order->condition=='cancelled' ? 'selected' :'' }}>Cancelled</option>
                            </select>
                            <button type="submit" class="btn btn-sm btn-info flot-end">Update</button>
                        </form>
                    </strong>
                    </div>
                    <div class="row">
                        <strong class="col-3 col-md-3">Action:</strong>
                        <strong class="d-flex text-center">
                            <form action="{{route('order.destroy',$order->id)}}" method="POST" class="float-left ">
                                @method('DELETE')
                                @csrf
                                <a href="" data-id=" {{$order->id}} " data-toggle="tooltip" title="Delete"
                                    data-placement="bottom"
                                    class=" dltbtn ms-btn-icon btn-danger btn-sm btn-outline-danger"> <i
                                        class="fas fa-trash-alt ml-2"></i> </a>
                            </form>
                        </strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$('.dltbtn').click(function(e){
var form = $(this).closest('form');
var dataId = $(this).data('id');
e.preventDefault();
swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
      form.submit();
    swal("Poof! Your imaginary file has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your imaginary file is safe!");
  }
});

});
</script>
<script>
    $('#lfm,#lfm1,#lfm2').filemanager('image');
</script>
@endsection
