@extends('Admin.layouts.master')
@section('content')
@include('partial.error')
<div class="row">
    <div class="col-lg-9">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">{{ __('site.Edit_events') }}</h4>
                <a class="btn btn-primary btn-sm" style="margin: 10px;" href="{{ route('events.index') }}">رجوع</a>
                <form class="" action="{{ route('events.update',$events->id) }}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @method('PUT')
                    <div class="form-group">
                        <label>{{ __('site.event_title_ar') }}</label>
                        <input type="text" class="form-control" required placeholder="ادخل عنوان الخبره" name="event_title"
                        value="{{ $events->getTranslation('event_title','ar') }}" />
                    </div>
                    <div class="form-group">
                        <label>{{ __('site.event_title_en') }}</label>
                        <input type="text" class="form-control" required placeholder="Enter service name " name="event_title_en"
                        value="{{ $events->getTranslation('event_title','en') }}" />
                    </div>
                    <div class="form-group">
                        <label>{{ __('site.description') }}</label>
                        <div>
                            <textarea required class="form-control" rows="5" name="desc">{{ $events->desc }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>{{ __('site.status') }}</label>
                        <input type="checkbox"  name="status" {{ $events->status == 1?'checked':'' }}>
                    </div>
                    <div class="form-group">
                        <label>{{ __('site.add-image') }} :</label>
                        <div>
                            <input class="form-control img" name="image"  type="file">
                            <img src="{{ asset('uploads/event/'. $events->image) }}" class="img-thumbnail img-preview" width="100" alt="no photo">
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

