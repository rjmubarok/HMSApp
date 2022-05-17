<aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">

    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
      <a class="pl-0 ml-0 text-center" href="index-2.html"> <img src="{{ \App\Models\Setting::value('logo') }}" alt="logo"> </a>
    </div>

    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
      <!-- Dashboard -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
          <span><i class="material-icons fs-16">dashboard</i>Dashboard </span>
        </a>
        <ul id="dashboard" class="collapse" aria-labelledby="dashboard" data-parent="#side-nav-accordion">
          <li> <a href="index-2.html">Weedo</a> </li>
          <li> <a href="pages/dashboard/web-analytics.html"> Web Analytics </a> </li>
          <li> <a href="pages/dashboard/social-media.html">Social Media</a> </li>
          <li> <a href="pages/dashboard/project-management.html">Project Management</a> </li>
          <li> <a href="pages/dashboard/client-management.html">Client Management</a> </li>
        </ul>
      </li>
      <!-- /Dashboard -->
      <!-- Order Page Elements -->
      <li class="menu-item">
        <a href="{{ route('setting') }}" >
            <i class="material-icons fs-16">dashboard</i> <span>Setting</span>
        </a>

      </li>
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#order-page" aria-expanded="false" aria-controls="order-page">
          <span><i class="fas fa-clipboard-list"></i>Order</span>
        </a>
        <ul id="order-page" class="collapse" aria-labelledby="order-page" data-parent="#side-nav-accordion">
          <li> <a href="pages/order/order-status.html">Order Status</a> </li>

        </ul>
      </li>
      <!-- /order page -->

    </ul>


  </aside>
