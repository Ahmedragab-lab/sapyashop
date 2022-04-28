@extends('Admin.layouts.master')
@section('content')
@include('partial.error')
<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">{{ __('site.admins') }}</h4>
                <div class="col-md-6 mb-3">
                    <a href="{{ route('admins.create') }}"  class="btn btn-primary btn-block"><i class="fa fa-user-circle"></i> {{ __('site.add-admin') }}</a>
                </div>
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('site.name') }}</th>
                                <th>{{ __('site.email') }}</th>
                                <th>{{ __('site.status') }}</th>
                                <th>{{ __('site.action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; ?>
                                        @foreach ($Admins as $Admin)
                                            <tr>
                                            <?php $i++; ?>

                                            <td>{{ $i }}</td>
                                <td>{{ $Admin->name }}</td>
                                <td>{{ $Admin->email }}</td>
                                {{-- <td>{{ $Admin->admin }}</td> --}}
                                <td>
                                    {{ $Admin->admin ==1 ?  __('site.active'): __('site.unactive') }}

                                </td>




                                <td>
                                    <form action="{{ route('admins.destroy', $Admin->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('admins.edit', $Admin->id) }}" class="btn btn-info">{{ __('site.edit') }}</a>
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
