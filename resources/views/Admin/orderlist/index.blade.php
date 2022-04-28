@extends('Admin.layouts.master')
@section('css')

@endsection
@section('content')
@include('partial.error')
<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">{{ __('site.orders') }}</h4>
                <div class="col-md-6 mb-3">
                    {{-- <a href="{{ route('users.create') }}"  class="btn btn-primary btn-block"><i class="fa fa-user-circle"></i> {{ __('site.add-user') }}</a> --}}
                </div>
                <div class="table-responsive">
                    <table  id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('site.order_no') }}</th>
                                <th>{{ __('site.fname') }}</th>
                                <th>{{ __('site.email') }}</th>
                                <th>{{ __('site.services') }}</th>
                                <th>{{ __('site.from') }}</th>
                                <th>{{ __('site.to') }}</th>
                                <th>{{ __('site.price') }}</th>
                                <th>{{ __('site.bill_detail') }}</th>
                                <th>{{ __('site.action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $orderlists as $index=>$order )
                                <tr>
                                    <th scope="row">{{ $index +1 }}</th>
                                    <td>{{ $order->order->order_no }}</td>
                                    <td>{{ $order->order->name}}</td>
                                    <td>{{ $order->order->email }}</td>
                                    <td>{{ $order->order->service->serve_name }}</td>
                                    <td>{{ $order->order->from->Name }}</td>
                                    <td>{{ $order->order->to->Name }}</td>
                                    <td>{{ $order->order->price}}</td>
                                    <td><a href="{{ route('orderlist.show',$order->id) }}" class="btn btn-success">{{ __('site.Invoice_details') }}</a></td>
                                    <td>
                                        <form action="{{ route('orderlist.destroy', $order->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#editsteps{{ $order->id }}">
                                                {{ __('site.editstep') }}
                                            </button>
                                            <button type="button" class="btn btn-danger"
                                            onclick="confirm('{{ __('site.Warning'.$order->id.'?') }}') ? this.parentElement.submit() : ''">
                                            {{ __('site.delete') }}
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @include('Admin.orderlist.editsteps')
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
@endsection
@section('js')

@endsection



