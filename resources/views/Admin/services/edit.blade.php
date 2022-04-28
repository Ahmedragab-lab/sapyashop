@extends('Admin.layouts.master')
@section('content')
@include('partial.error')
<div class="row">
    <div class="col-lg-9">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">{{ __('site.Edit_services') }}</h4>
                <a class="btn btn-primary btn-sm" style="margin: 10px;" href="{{ route('services.index') }}">رجوع</a>
                <form class="" action="{{ route('services.update',$serv->id) }}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @method('PUT')
                    <div class="form-group">
                        <label>{{ __('site.service_name_ar') }}</label>
                        <input type="text" class="form-control" required placeholder="ادخل اسم الخدمه" name="serve_name"
                        value="{{ $serv->getTranslation('serve_name','ar') }}" />
                    </div>
                    <div class="form-group">
                        <label>{{ __('site.service_name_en') }}</label>
                        <input type="text" class="form-control" required placeholder="Enter service name " name="serve_name_en"
                        value="{{ $serv->getTranslation('serve_name','en') }}" />
                    </div>
                    <div class="form-group">
                        <label>{{ __('site.description') }}</label>
                        <div>
                            <textarea required class="form-control" rows="5" name="desc">{{ $serv->desc }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>{{ __('site.status') }}</label>
                        <input type="checkbox"  name="status" {{ $serv->status == 1?'checked':'' }}>
                    </div>
                    <div class="form-group">
                        <label>{{ __('site.add-image') }} :</label>
                        <div>
                            <input class="form-control img" name="image"  type="file" accept="image/*">
                            <img src="{{ asset('uploads/serv/'. $serv->image) }}" class="img-thumbnail img-preview" width="100" alt="no photo">
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

