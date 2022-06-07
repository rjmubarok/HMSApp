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
                    <div class="table-responsive">
                        <table class="table thead-secondary">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Date of Birth</th>
                                    <th scope="col">Floor</th>
                                    <th scope="col">Condition</th>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Room</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $item)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{ $item->customer_name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->customer_phone }}</td>
                                    <td>{{ $item->dob }}</td>
                                    <td>{{ $item->floor->floor_name ??'N\A'}}</td>
                                    <td>{{ $item->condition }}</td>
                                    <td><img src="{{ $item->customer_photo}}" alt="{{ $item->customer_name }}" height="50"></td>
                                    <td>{{$item->room->room_number ??'N\A'}}</td>
                                    <td class="d-flex text-center">
                                        <a data-toggle="tooltip" title="View"  data-placement="bottom" href="{{ route('order.show',$item->id) }}" class=" ms-btn-icon btn-info btn-sm btn-outline-info"><i class="fas fa-eye ml-2"></i></a>
                                        <form action="{{route('order.destroy',$item->id)}}" method="POST"
                                            class="float-left ">
                                            @method('DELETE')
                                            @csrf
                                            <a href="" data-id=" {{$item->id}} " data-toggle="tooltip" title="Delete"
                                                data-placement="bottom"
                                                class=" dltbtn ms-btn-icon btn-danger btn-sm btn-outline-danger"> <i
                                                    class="fas fa-trash-alt ml-2"></i> </a>
                                        </form>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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
