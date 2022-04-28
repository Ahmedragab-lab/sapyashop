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
                                <th>{{ __('site.phone') }}</th>
                                <th>{{ __('site.address1') }}</th>
                                <th>{{ __('site.image') }}</th>
                                <th>{{ __('site.services') }}</th>
                                <th>{{ __('site.from') }}</th>
                                <th>{{ __('site.to') }}</th>
                                <th>{{ __('site.sms') }}</th>
                                <th>{{ __('site.price') }}</th>
                                <th>{{ __('site.action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $orders as $index=>$order )
                                <tr>
                                    <th scope="row">{{ $index +1 }}</th>
                                    <td>{{ $order->order_no }}</td>
                                    <td>{{ $order->name }}</td>
                                    <td>{{ $order->email }}</td>
                                    <td>{{ $order->user->phone }}</td>
                                    <td>{{ $order->user->address1 }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/user-img/'.$order->user->image) }}" class="img-thumbnail" width="70" alt="">
                                    </td>
                                    <td>{{ $order->service->serve_name }}</td>
                                    <td>{{ $order->from->Name }}</td>
                                    <td>{{ $order->to->Name }}</td>
                                    <td>{{ Str::limit($order->sms,20)}}</td>
                                    <td>{{ $order->price}}</td>
                                    <td>
                                        <form action="{{ route('orders.destroy', $order->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            {{-- <a href="{{ route('orders.update', $order->id) }}" class="btn btn-info">{{ __('site.edit') }}</a> --}}
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#addprice{{ $order->id }}">
                                                {{ __('site.add_price') }}
                                            </button>
                                            <button type="button" class="btn btn-danger"
                                            onclick="confirm('{{ __('site.Warning'.$order->id.'?') }}') ? this.parentElement.submit() : ''">
                                            {{ __('site.delete') }}
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @include('Admin.orders.create-price')
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



