<aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">

    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
      <a class="pl-0 ml-0 text-center" href="{{ route('admin') }}"> <img src="{{ \App\Models\Setting::value('logo') }}" alt="logo"> </a>
    </div>

    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
      <!-- Dashboard -->
      <li class="menu-item">
        <a href="{{ route('admin') }}" class="has-chevron">
          <span><i class="material-icons fs-16">dashboard</i>Dashboard </span>
        </a>
      </li>
      <!-- /Dashboard -->
      <!-- Order Page Elements -->
      <li class="menu-item">
        <a href="{{ route('setting') }}" class="has-chevron">
            <i class="fas fa-clipboard-list fs-16"></i> <span>Setting</span>
        </a>
      </li>
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Noice" aria-expanded="false" aria-controls="Noice">
          <span><i class="fas fa-clipboard-list"></i>Slider </span>
        </a>
        <ul id="Noice" class="collapse" aria-labelledby="Noice" >
          <li> <a href="{{ route('slide.create') }}">Add Slide </a> </li>
          <li> <a href="{{ route('slide.index') }}">All Slide </a> </li>
        </ul>
      </li>
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Noicebord" aria-expanded="false" aria-controls="Noicebord">
          <span><i class="fas fa-clipboard-list"></i>Notice Board</span>
        </a>
        <ul id="Noicebord" class="collapse" aria-labelledby="Noicebord" >
          <li> <a href="{{ route('notice.create') }}">Add Noice</a> </li>
          <li> <a href="{{ route('notice.index') }}">All Noice</a> </li>
        </ul>
      </li>
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#fool" aria-expanded="false" aria-controls="fool">
          <span><i class="fas fa-clipboard-list"></i>Floor</span>
        </a>
        <ul id="fool" class="collapse" aria-labelledby="fool" >
          <li> <a href="{{ route('floor.create') }}">Add Floor</a> </li>
          <li> <a href="{{ route('floor.index') }}">All Floor </a> </li>
        </ul>
      </li>
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#room" aria-expanded="false" aria-controls="room">
          <span><i class="fas fa-clipboard-list"></i>Room</span>
        </a>
        <ul id="room" class="collapse" aria-labelledby="room" >
          <li> <a href="{{ route('room.create') }}">Add Room</a> </li>
          <li> <a href="{{ route('room.index') }}">All Room </a> </li>
        </ul>
      </li>
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#order" aria-expanded="false" aria-controls="order">
          <span><i class="fas fa-clipboard-list"></i>Order Manegment</span>
        </a>
        <ul id="order" class="collapse" aria-labelledby="order" >
          <li> <a href="{{ route('order.index') }}">Apply Student  </a> </li>
        </ul>
      </li>
      <li class="menu-item">
        <a href="{{ route('user.index') }}" class="has-chevron" >
          <span><i class="fas fa-clipboard-list"></i>User Managment</span>
        </a>
      </li>
      <!-- /order page -->

    </ul>


  </aside>
