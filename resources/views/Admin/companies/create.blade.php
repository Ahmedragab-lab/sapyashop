@extends('admin\layouts.master')
@section('css')
@toastr_css
  @section('title')
  {{ __('site.comp') }}
  @stop
@endsection
{{-- start content  --}}
@section('content')
@include('partial.error')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> {{ __('site.CompAdd') }} </h4> <tr>
            </div>
             <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    {{-- <li class="breadcrumb-item"><a href="{{ route('comps.index') }}" class="default-color">Add categories</a></li>
                    {{-- <li class="breadcrumb-item active">{{ __('table') }}</li> --}}
                </ol>
                </div>
            </div>
        </div>
   <div class="card">


       <div class="card-body">
         <form action="{{ route('companies.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
            {{-- @csrf --}}
            {{csrf_field()}}
            <h6 style="font-family: 'Cairo', sans-serif;color: blue">  {{ __('site.CompDetail') }}</h6><br>


            <div class="row">
                <div class="col-md-6">
                    <label> {{ __('site.CompNameAR') }} <span class="text-danger">*</span></label>

                    <input  type="text" name="name_ar"  class="form-control">
                </div>

                <div class="col-md-6">
                    <label> {{ __('site.CompNameEN') }} <span class="text-danger">*</span></label>
                   <input  type="text" name="name_en"  class="form-control">
                </div>

            </div>

        </div>

                 <div class="col-md-12 mb-3">
                    <label for="desc">{{ __('site.CompDescription') }}</label>
                     <textarea  name="desc" class="form-control" style="height: 100px"></textarea>
                 </div>


                  <div class="col-md-6 mb-3">
                     <label for="email">{{ __('site.CompEmail') }}</label>
                     <input type="email"  name="email" class="form-control">
                 </div>


                 <div class="col-md-6 mb-3">
                    <label for="Phone">{{ __('site.CompPhone') }}</label>
                    <input type="text"  name="phone" class="form-control">
                 </div>
                 <div class="col-md-6 mb-3">
                    <label for="Address">{{ __('site.CompAddress') }}</label>
                    <<input type="text"  name="address" class="form-control">
                </div>



                <div class="col-md-12 mb-3">
                   <button type="submit" class="btn btn-primary">{{ __('site.Save') }}</button>
                </div>
             </div>
         </form>
       </div>
   </div>


@endsection

@section('js')

@endsection
