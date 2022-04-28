@extends('Admin.layouts.master')
@section('content')
<div class="wrapper">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="page-title m-0">{{ __('site.dashboard') }}</h4>
                        </div>
                        <div class="col-md-4">
                            <div class="float-right d-none d-md-block">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ti-settings mr-1"></i> Settings
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-info mini-stat text-white">
                    <div class="p-3 mini-stat-desc">
                        <div class="clearfix">
                            <h6 class="text-uppercase mt-0 float-left text-white-50">{{ __('site.users') }}</h6>
                            <h4 class="mb-3 mt-0 float-right">{{ \App\Models\User::count() }}</h4>
                        </div>
                        <div>
                            {{-- <span class="badge badge-light text-danger"> -29% </span> <span class="ml-2">From previous period</span> --}}
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="float-right">
                            <a href="#" class="text-white-50"><i class="mdi mdi-buffer h5"></i></a>
                        </div>
                        <p class="font-14 m-0">{{ \App\Models\User::count() }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary mini-stat text-white">
                    <div class="p-3 mini-stat-desc">
                        <div class="clearfix">
                            <h6 class="text-uppercase mt-0 float-left text-white-50">{{ __('site.services') }}</h6>
                            <h4 class="mb-3 mt-0 float-right">{{ \App\Models\Service::count() }}</h4>
                        </div>
                        <div>
                            {{-- <span class="badge badge-light text-info"> +11% </span> <span class="ml-2">From previous period</span> --}}
                        </div>

                    </div>
                    <div class="p-3">
                        <div class="float-right">
                            <a href="#" class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a>
                        </div>
                        <p class="font-14 m-0">{{ \App\Models\Service::count() }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-pink mini-stat text-white">
                    <div class="p-3 mini-stat-desc">
                        <div class="clearfix">
                            <h6 class="text-uppercase mt-0 float-left text-white-50">{{ __('site.sections') }}</h6>
                            <h4 class="mb-3 mt-0 float-right">{{ \App\Models\Section::count() }}</h4>
                        </div>
                        <div>
                            {{-- <span class="badge badge-light text-info"> +11% </span> <span class="ml-2">From previous period</span> --}}
                        </div>

                    </div>
                    <div class="p-3">
                        <div class="float-right">
                            <a href="#" class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a>
                        </div>
                        <p class="font-14 m-0">{{ \App\Models\Section::count() }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success mini-stat text-white">
                    <div class="p-3 mini-stat-desc">
                        <div class="clearfix">
                            <h6 class="text-uppercase mt-0 float-left text-white-50">{{ __('site.products') }}</h6>
                            <h4 class="mb-3 mt-0 float-right">{{ \App\Models\Product::count() }}</h4>
                        </div>
                        <div>
                            {{-- <span class="badge badge-light text-info"> +11% </span> <span class="ml-2">From previous period</span> --}}
                        </div>

                    </div>
                    <div class="p-3">
                        <div class="float-right">
                            <a href="#" class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a>
                        </div>
                        <p class="font-14 m-0">{{ \App\Models\Product::count() }}</p>
                    </div>
                </div>
            </div>





            <div class="col-xl-3 col-md-6">
                <div class="card bg-pink mini-stat text-white">
                    <div class="p-3 mini-stat-desc">
                        <div class="clearfix">
                            <h6 class="text-uppercase mt-0 float-left text-white-50">{{ __('site.feedback') }}</h6>
                            <h4 class="mb-3 mt-0 float-right">{{ \App\Models\Feedback::count() }}</h4>
                        </div>
                        <div>
                            {{-- <span class="badge badge-light text-primary"> 0% </span> <span class="ml-2">From previous period</span> --}}
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="float-right">
                            <a href="#" class="text-white-50"><i class="mdi mdi-tag-text-outline h5"></i></a>
                        </div>
                        <p class="font-14 m-0">{{ \App\Models\Feedback::count() }}</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-success mini-stat text-white">
                    <div class="p-3 mini-stat-desc">
                        <div class="clearfix">
                            <h6 class="text-uppercase mt-0 float-left text-white-50">{{ __('site.events') }}</h6>
                            <h4 class="mb-3 mt-0 float-right">{{ \App\Models\Event::count() }}</h4>
                        </div>
                        <div>
                            {{-- <span class="badge badge-light text-info"> +89% </span> <span class="ml-2">From previous period</span> --}}
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="float-right">
                            <a href="#" class="text-white-50"><i class="mdi mdi-briefcase-check h5"></i></a>
                        </div>
                        <p class="font-14 m-0">{{ \App\Models\Event::count() }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary mini-stat text-white">
                    <div class="p-3 mini-stat-desc">
                        <div class="clearfix">
                            <h6 class="text-uppercase mt-0 float-left text-white-50">{{ __('site.agreement') }}</h6>
                            <h4 class="mb-3 mt-0 float-right">{{ \App\Models\Agreement::count() }}</h4>
                        </div>
                        <div>
                            {{-- <span class="badge badge-light text-info"> +89% </span> <span class="ml-2">From previous period</span> --}}
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="float-right">
                            <a href="#" class="text-white-50"><i class="mdi mdi-briefcase-check h5"></i></a>
                        </div>
                        <p class="font-14 m-0">{{ \App\Models\Agreement::count() }}</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-pink mini-stat text-white">
                    <div class="p-3 mini-stat-desc">
                        <div class="clearfix">
                            <h6 class="text-uppercase mt-0 float-left text-white-50">{{ __('site.orders') }}</h6>
                            <h4 class="mb-3 mt-0 float-right">{{ \App\Models\UserReqest::count() }}</h4>
                        </div>
                        <div>
                            {{-- <span class="badge badge-light text-info"> +89% </span> <span class="ml-2">From previous period</span> --}}
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="float-right">
                            <a href="#" class="text-white-50"><i class="mdi mdi-briefcase-check h5"></i></a>
                        </div>
                        <p class="font-14 m-0">{{ \App\Models\Agreement::count() }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="card bg-pink mini-stat text-white">
                    <div class="p-3 mini-stat-desc">
                        <div class="clearfix">
                            <h6 class="text-uppercase mt-0 float-left text-white-50">{{ __('اوردارات الخدمات') }}</h6>
                            <h4 class="mb-3 mt-0 float-right">{{ \App\Models\OrderDetail::count() }}</h4>
                        </div>
                        <div>
                            {{-- <span class="badge badge-light text-info"> +89% </span> <span class="ml-2">From previous period</span> --}}
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="float-right">
                            <a href="#" class="text-white-50"><i class="mdi mdi-briefcase-check h5"></i></a>
                        </div>
                        <p class="font-14 m-0">{{ \App\Models\OrderDetail::count() }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="card bg-primary mini-stat text-white">
                    <div class="p-3 mini-stat-desc">
                        <div class="clearfix">
                            <h6 class="text-uppercase mt-0 float-left text-white-50">{{ __('اوردارات تم تسليمها للعميل') }}</h6>
                            <h4 class="mb-3 mt-0 float-right">{{ \App\Models\OrderDetail::where('step','4')->count() }}</h4>
                        </div>
                        <div>
                            {{-- <span class="badge badge-light text-info"> +89% </span> <span class="ml-2">From previous period</span> --}}
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="float-right">
                            <a href="#" class="text-white-50"><i class="mdi mdi-briefcase-check h5"></i></a>
                        </div>
                        <p class="font-14 m-0">{{ \App\Models\OrderDetail::where('step','4')->count() }}</p>
                    </div>
                </div>
            </div>
       </div>
    </div>
        <!-- end row -->
        <!-- end row -->
    </div> <!-- end container-fluid -->
</div>
<!-- end wrapper -->
@endsection
