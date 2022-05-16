
  @if (Session::has('success'))
  <div class="alert alert-success alert-dismissible fade show" id="alert" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
      <i class="flaticon-tick-inside-circle"></i><span>{!! \Session::get('success') !!}</span>
  </div>

  @elseif (session('error'))
  <div class="alert alert-danger alert-dismissible fade show" id="alert" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
      {{-- <span>{!! \Session::get('error') !!}</span> --}}
      <ul>
        <i class="flaticon-alert-1"></i> <li>{!! \Session::get('error') !!}</li>
      </ul>
  </div>
@endif

