@extends('Admin.layouts.master')
@section('content')
@include('partial.error')
<div class="row">
    <div class="col-lg-9">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">{{ __('site.edit-feedback') }}</h4>
                <a class="btn btn-primary btn-sm" style="margin: 10px;" href="{{ route('feedbacks.index') }}">رجوع</a>
                <form class="" action="{{route('feedbacks.update',$feedback->id)}}" method="post" >
                    {{csrf_field()}}
                    @method('PUT')
                    <div class="form-group">
                        <label>{{ __('site.selectclient') }}</label>
                        <select name="client_id" id="" class="form-control" >
                            <option value="{{ $feedback->users->id }}" readonly>{{ $feedback->users->name }}</option>
                            @foreach ($clients as $client)
                              <option value="{{ $client->id }}">{{ $client->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>{{ __('site.Service_name') }}</label>
                        <select name="serv_id" id="" class="form-control" >
                            <option value="{{ $feedback->services->id}}" readonly>{{ $feedback->services->serve_name}}</option>
                            @foreach ($servs as $serv)
                              <option value="{{ $serv->id }}">{{ $serv->serve_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>{{ __('site.Your-Feedback') }}</label>
                        <div>
                            <textarea required class="form-control" rows="5" name="feedback">{{ $feedback->feedback}}</textarea>
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

