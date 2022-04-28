@extends('Admin.layouts.master')
@section('content')
@include('partial.error')
<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">{{ __('site.comp') }}</h4>
                <div class="col-md-6 mb-3">
                    <a href="{{ route('companies.create') }}"  class="btn btn-primary btn-block"><i class="fa fa-user-circle"></i> {{ __('site.CompAdd') }}</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                                    <tr class="alert-success">
                                        <th>#</th>
                                        <th>{{ __('site.CompName') }}</th>
                                        <th>{{ __('site.CompDescription') }}</th>
                                        <th>{{ __('site.CompEmail') }}</th>
                                        <th>{{ __('site.CompPhone') }}</th>
                                        <th>{{ __('site.CompAddress') }}</th>
                                        <th>{{ __('site.action') }}</th>
                                   </tr>
                                    </thead>
                                    <tbody>

                                      <?php $i = 0; ?>
                                        @foreach ($companies as $company)
                                            <tr>
                                            <?php $i++; ?>

                                            <td>{{ $i }}</td>
                                            <td>{{ $company->name }}</td>

                                            <td>{{ $company->desc }}</td>
                                            <td>{{ $company->email }}</td>
                                            <td>{{ $company->phone }}</td>
                                            <td>{{ $company->address }}</td>




                                            <td>
                                                <a href="{{ route('companies.edit',$company->id) }}" class="btn btn-info btn-sm" role="button" aria-pressed="true" title="{{ __('site.edit') }}">
                                                    <i class="fa fa-edit"></i>
                                                </a>



                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_comp{{ $company->id }}" title="{{ __('site.delete') }}">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>


                                        </tr>
                                    @include('admin.companies.delete')
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        @endsection
