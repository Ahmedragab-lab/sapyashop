@extends('Admin.layouts.master')
@section('content')
@include('partial.error')
<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">{{ __('site.orderdetails') }}</h4>
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('site.tracking_no') }}</th>
                                <th>{{ __('site.userfname') }}</th>
                                <th>{{ __('site.userlname') }}</th>
                                <th>{{ __('site.useremail') }}</th>
                                <th>{{ __('site.address1') }}</th>
                                <th>{{ __('site.address2') }}</th>
                                <th>{{ __('site.city') }}</th>
                                <th>{{ __('site.country') }}</th>
                                <th>{{ __('site.productname') }}</th>
                                <th>{{ __('site.productprice') }}</th>
                                <th>{{ __('site.sumprice') }}</th>
                                <th>{{ __('site.sumtax') }}</th>
                                <th>{{ __('site.total') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $orderdetails as $index=>$order )
                                <tr>
                                    <th scope="row">{{ $index +1 }}</th>
                                    <td>{{ $order->order->tracking_no }}</td>
                                    <td>{{ $order->order->fname }}</td>
                                    <td>{{ $order->order->lname }}</td>
                                    <td>{{ $order->order->email }}</td>
                                    <td>{{ $order->order->address1 }}</td>
                                    <td>{{ $order->order->address2 }}</td>
                                    <td>{{ $order->order->city }}</td>
                                    <td>{{ $order->order->country }}</td>
                                    <td>{{ $order->product->product_name }}</td>
                                    <td>{{ $order->price }}</td>
                                    <td>{{ $order->priceqty }}</td>
                                    <td>{{ $order->priceqtytax }}</td>
                                    <td>{{ $order->total }}</td>
                                    <td></td>

                                    </td>
                                </tr>
                                {{-- <td>
                                    <form action="{{ route('orders.destroy', $order->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-info">{{ __('site.edit') }}</a>
                                        <button type="button" class="btn btn-danger"
                                        onclick="confirm('{{ __('site.Warning') }}') ? this.parentElement.submit() : ''">
                                            {{ __('site.delete') }}
                                        </button>
                                    </form>
                                </td> --}}
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



