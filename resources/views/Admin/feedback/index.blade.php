@extends('Admin.layouts.master')
@section('content')
@include('partial.error')
<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">{{ __('site.feedback-user') }}</h4>
                <div class="col-md-6 mb-3">
                    <a href="{{ route('feedbacks.create') }}"  class="btn btn-primary btn-block"><i class="fa fa-user-circle"></i>{{ __('site.add-feedback') }}</a>
                </div>
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('site.name') }}</th>
                                <th>{{ __('site.services') }}</th>
                                <th>{{ __('site.feedback') }}</th>
                                <th>{{ __('site.action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $feedbacks as $index=>$feedback )
                            <tr>
                                <th scope="row">{{ $index +1 }}</th>
                                <td>{{ $feedback->users->fname . ' ' .$feedback->users->lname }}</td>
                                <td>{{ $feedback->services->serve_name}}</td>
                                <td>{{ $feedback->feedback }}</td>
                                <td>
                                    <form action="{{ route('feedbacks.destroy', $feedback->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('feedbacks.edit', $feedback->id) }}" class="btn btn-info">{{ __('site.edit') }}</a>
                                        <button type="button" class="btn btn-danger"
                                        onclick="confirm('{{ __('site.Warning') }}') ? this.parentElement.submit() : ''">
                                        {{ __('site.delete') }}
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
@endsection
