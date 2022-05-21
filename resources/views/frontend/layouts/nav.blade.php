<div class="bg-04432e py-3 d-none d-sm-block text-white fw-bold">
    <div class="container">
        <div class="row align-items-center gx-4">
            <div class="col-auto d-none d-lg-block fs--1"><span class="fas fa-map-marker-alt text-warning me-2"
                    data-fa-transform="grow-3"></span>{{ \App\Models\Setting::value('address') }} </div>
            <div class="col-auto ms-md-auto order-md-2 d-none d-sm-flex fs--1 align-items-center"><span
                    class="fas fa-clock text-warning me-2" data-fa-transform="grow-3"></span>Visit us: 9am to 10 pm (
                Mon - Fri)
            </div>
            <div class="col-auto"><span class="fas fa-phone-alt text-warning" data-fa-transform="shrink-3"></span><a
                    class="ms-2 fs--1 d-inline text-white fw-bold" href="tel:01781991183">{{
                    \App\Models\Setting::value('phone') }}</a></div>
        </div>
    </div>
</div>
<div class="sticky-top navbar-elixir">
    <div class="container">
        <nav class="navbar navbar-expand-lg"> <a class="navbar-brand" href="index-2.html"><img
                    src="{{ asset('frontend') }}/assets/images/b-6.png" alt="logo" /></a><button
                class="navbar-toggler p-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#primaryNavbarCollapse" aria-controls="primaryNavbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation"><span class="hamburger hamburger--emphatic"><span
                        class="hamburger-box"><span class="hamburger-inner"></span></span></span></button>
            <div class="collapse navbar-collapse" id="primaryNavbarCollapse">
                <ul class="navbar-nav py-3 py-lg-0 mt-1 mb-2 my-lg-0 ms-lg-n1">
                    <li class="nav-item "><a class="nav-link " href="JavaScript:void(0)">Home</a>
                    </li>
                    <li class="nav-item "><a class="nav-link " href="JavaScript:void(0)">About</a>
                    </li>
                    <li class="nav-item "><a class="nav-link " href="JavaScript:void(0)">Our Program</a>
                    </li>
                    <li class="nav-item "><a class="nav-link " href="JavaScript:void(0)">Pages</a>
                    </li>

                    <li class="nav-item dropdown"><a class="nav-link" href="contact.html">Contact us</a></li>
                </ul>
                @auth
                {{-- <a class="btn btn-outline-primary rounded-pill btn-sm border-2 d-block d-lg-inline-block ms-auto my-3 my-lg-0"
                    href="{{ route('login') }}">{{ Auth::user()->name }}</a> --}}
                    <a href="" class=" d-block d-lg-inline-block ms-auto  my-lg-0">
                        <li class="nav-item dropdown " style="list-style: none;"><a class="nav-link dropdown-toggle dropdown-indicator"
                            href="JavaScript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="pages/service.html">Profile</a></li>

                            <li >
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                          <i class="icon-power"></i>
                             {{ __('Logout') }}
                         </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                             @csrf
                         </form>
                        </li>
                          </ul>
                        </li>
                    </a>

                @else
                <a class="btn btn-outline-primary rounded-pill btn-sm border-2 d-block d-lg-inline-block ms-auto my-3 my-lg-0"
                    href="{{ route('login') }}">Login/Registration</a>
                @endauth


            </div>
        </nav>
    </div>
</div>
