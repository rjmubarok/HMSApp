@extends('backend.layouts.master')
@section('admin-content')
<div class="col-md-12 ">
    <div class="ms-panel">
        <div class="ms-panel-header d-flex justify-content-between">
            <h6>Floor</h6>
            <a href="{{ route('room.create') }}" class="btn btn-primary">Add Room</a>
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
                                    <th scope="col">Photo</th>
                                    <th scope="col">Room Number</th>
                                    <th scope="col">Floor Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Total Bed</th>
                                    <th scope="col">Availeable Bed</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rooms as $item)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{ $item->room_name }}</td>
                                    <td><img src="{{ $item->room_photo }}" alt=""></td>
                                    <td>{{ $item->room_number }}</td>
                                    <td>{{ \App\Models\Floor::where('id',
                                        $item->floor_id)->value('floor_name') }}</td>
                                        <td>
                                            {{ $item->price }}
                                        </td>
                                    <td>
                                        <span class="badge badge-pill btn-gradient-light">{{ $item->total_bed }}</span>
                                    </td>
                                    <td>
                                        <span class="badge badge-pill btn-gradient-primary">{{ $item->abailable_bed }}</span>
                                    </td>
                                    <td>{!! $item->description !!}</td>

                                    <td>
                                        @if ( $item->status==1 )
                                        <span class="badge badge-pill btn-gradient-success">Active</span>

                                        @else
                                        <span class="badge badge-pill btn-gradient-danger">Inactive</span>
                                        @endif
                                    </td>

                                    <td class="d-flex text-center">
                                        <a href="{{route('room.edit',$item->id)}}" data-toggle="tooltip" title="Edit"
                                            data-placement="bottom" class=" ms-btn-icon btn-info">
                                            <i class="fas fa-edit ml-2"></i>
                                        </a>
                                        <form action="{{route('room.destroy',$item->id)}}" method="POST"
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
