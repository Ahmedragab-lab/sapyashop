<!-- Top Bar Start -->
<div class="topbar">

    <div class="topbar-left	d-none d-lg-block">
        <div class="text-center">
            <a href="index.html" class="logo"><img src="{{ URL::asset('admin/en/assets/images/logo.png')}}" height="22" alt="logo"></a>
        </div>
    </div>

    <nav class="navbar-custom">

         <!-- Search input -->

        <div class="search-wrap" id="search-wrap">
            <div class="search-bar">
                <input class="search-input" type="search" placeholder="Search" />
                <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                    <i class="mdi mdi-close-circle"></i>
                </a>
            </div>
        </div>

        <ul class="list-inline float-right mb-0">

            <li class="list-inline-item dropdown notification-list">
                <div class="btn-group mb-1">
                    <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      @if (App::getLocale() == 'ar')
                      {{ LaravelLocalization::getCurrentLocaleName() }}
                     <img src="{{ URL::asset('assets/images/flags/EG.png') }}" alt="">
                      @else
                      {{ LaravelLocalization::getCurrentLocaleName() }}
                      <img src="{{ URL::asset('assets/images/flags/US.png') }}" alt="">
                      @endif
                      </button>
                    <div class="dropdown-menu">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                        @endforeach
                    </div>
                </div>
            </li>



            <li class="list-inline-item dropdown notification-list">
                <a class="nav-link waves-effect toggle-search" href="#"  data-target="#search-wrap">
                    <i class="mdi mdi-magnify noti-icon"></i>
                </a>
            </li>



            <li class="list-inline-item dropdown notification-list dropdown-notifications">
                <a class="nav-link dropdown-toggle arrow-none waves-effect"
                        data-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <i class="mdi mdi-bell-outline noti-icon"></i>
                    <span class="badge badge-danger badge-pill noti-icon-badge notif-count"
                        data-count="{{ \App\Models\Contact::count() }}">{{ \App\Models\Contact::count() }}</span>
                </a>
                <div class="dropdown-menu  dropdown-menu-right dropdown-arrow dropdown-menu-lg dropdown-menu-animated">
                    <div class="dropdown-item noti-title">
                        <h5>Notification(<span class="notif-count">{{ \App\Models\Contact::count() }}</span>)</h5>
                    </div>
                    <div  class="slimscroll-noti scrollable-container">
                        @foreach (\App\Models\Contact::orderByDesc('id')->take(5)->get() as $Contact)
                        <a href="" class="dropdown-item notify-item active">
                            <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                            <p class="notify-details">
                                <b>{{ $Contact->user->fname }}{{ $Contact->user->lname }}</b>
                                <span class="text-muted">{{ $Contact->sms }}</span>
                            </p>
                        </a>
                    @endforeach
                    </div>
                    <a href="javascript:void(0);" class="dropdown-item notify-all">
                        View All
                    </a>
                </div>
            </li>
            {{-- <li class="dropdown dropdown-notification nav-item  dropdown-notifications">
                <a class="nav-link nav-link-label" href="#"
            data-toggle="dropdown">
                    <i class="fa fa-bell"> </i>
                    <span
                        class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow   notif-count"
            data-count="9">9</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                    <li class="dropdown-menu-header">
                        <h6 class="dropdown-header m-0 text-center">
                            <span class="grey darken-2 text-center"> الرسائل</span>
                        </h6>
                    </li>
                    <li class="scrollable-container ps-container ps-active-y media-list w-100">
                        <a href="">
                            <div class="media">
                                <div class="media-body">
                                    <h6 class="media-heading text-right ">عنوان الاشعار </h6>
                                    <p class="notification-text font-small-3 text-muted text-right"> نص الاشعار</p>
                                    <small style="direction: ltr;">
                                        <p class=" text-muted text-right"
                                              style="direction: ltr;"> 20-05-2020 - 06:00 pm
                                        </p>
                                        <br>

                                    </small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center"
                        href=""> جميع الاشعارات </a>
                    </li>
                </ul>
            </li> --}}

            <li class="list-inline-item dropdown notification-list nav-user">
                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                aria-haspopup="false" aria-expanded="false">
                    <img src="{{ URL::asset('assets/images/users/avatar-6.jpg')}}" alt="user" class="rounded-circle">
                    <span class="d-none d-md-inline-block ml-1">{{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i> </span>
                    <span>{{ Auth::user()->email }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                    {{-- <a class="dropdown-item" href="{{ route('front.index') }}"><i class="dripicons-user text-muted"></i> go to site front</a> --}}
                    {{-- <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a> --}}
                    {{-- <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> My Wallet</a> --}}
                    {{-- <a class="dropdown-item" href="#"><span class="badge badge-success float-right m-t-5">5</span><i class="dripicons-gear text-muted"></i> Settings</a> --}}
                    {{-- <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> Lock screen</a> --}}
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logoutadmin') }}"
                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                       <i class="dripicons-exit text-muted"></i> log out
                    </a>
                    <form id="logout-form" action="{{ route('logoutadmin') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>

        </ul>

        <ul class="list-inline menu-left mb-0">
            <li class="list-inline-item">
                <button type="button" class="button-menu-mobile open-left waves-effect">
                    <i class="mdi mdi-menu"></i>
                </button>
            </li>
            <li class="list-inline-item dropdown notification-list d-none d-sm-inline-block">
                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                aria-haspopup="false" aria-expanded="false">
                    Create New <i class="mdi mdi-plus"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-animated">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </li>
            <li class="list-inline-item notification-list d-none d-sm-inline-block">
                <a href="#" class="nav-link waves-effect">
                    Activity
                </a>
            </li>

        </ul>

    </nav>

</div>
<!-- Top Bar End -->
