@extends('Admin.layouts.master')
@section('content')
@include('partial.error')
<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">{{ __('site.services') }}</h4>
                <div class="col-md-6 mb-3">
                    <a href="{{ route('services.create') }}"  class="btn btn-primary btn-block"><i class="fa fa-user-circle"></i> {{ __('site.Add_Service') }} </a>
                </div>
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('site.Service_name') }}</th>
                                <th>{{ __('site.image') }}</th>
                                <th>{{ __('site.status') }}</th>
                                <th>{{ __('site.description') }}</th>
                                <th>{{ __('site.action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $services as $index=>$service )
                            <tr>
                                <th scope="row">{{ $index +1 }}</th>
                                <td>{{ $service->serve_name }}</td>
                                <td>
                                    <img src="{{ asset('uploads/serv/'.$service->image) }}" class="img-thumbnail" width="70" alt="">
                                </td>
                                <td>
                                    {{ $service->status ==1 ?  __('site.Avilable'): __('site.Unavilable') }}
                                </td>
                                <td>{{ $service->desc }}</td>
                                <td>
                                    <form action="{{ route('services.destroy', $service->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('services.edit', $service->id) }}" class="btn btn-info">{{ __('site.edit') }}</a>
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
