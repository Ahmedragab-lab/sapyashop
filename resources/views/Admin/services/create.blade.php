@extends('Admin.layouts.master')
@section('content')
@include('partial.error')
<div class="row">
    <div class="col-lg-9">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">{{ __('site.Add_Service') }}</h4>
                <a class="btn btn-primary btn-sm" style="margin: 10px;" href="{{ route('services.index') }}">{{ __('site.back') }}</a>
                <form class="" action="{{route('services.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>{{ __('site.service_name_ar') }}</label>
                        <input type="text" class="form-control" required placeholder="{{ __('site.Enter_Service_name_ar') }}" name="serve_name" />
                    </div>
                    <div class="form-group">
                        <label>{{ __('site.service_name_en') }}</label>
                        <input type="text" class="form-control" required placeholder="{{ __('site.Enter_Service_name_en') }} " name="serve_name_en" />
                    </div>
                    <div class="form-group">
                        <label>{{ __('site.description') }}</label>
                        <div>
                            <textarea required class="form-control" rows="5" name="desc"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>{{ __('site.status') }}</label>
                        <input type="checkbox"  name="status" >
                    </div>
                    <div class="form-group">
                        <label>{{ __('site.add-image') }} :</label>
                        <div>
                            <input class="form-control img" name="image"  type="file" accept="image/*">
                            <img src="{{ asset('uploads/serv/default.jpg') }}" class="img-thumbnail img-preview" width="100" alt="no photo">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                {{ __('site.Save') }}
                            </button>
                            <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                {{ __('site.Close') }}
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div> <!-- end col -->
@endsection
