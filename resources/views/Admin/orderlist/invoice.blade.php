@extends('Admin.layouts.master')
@section('css')

@endsection
@section('content')
    {{-- invoice --}}
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">

                    <div class="row">
                        <div class="col-12">
                            <div class="invoice-title">
                                <h4 class="float-right font-16"><strong>{{ $order->order->order_no }}</strong></h4>
                                <h3 class="m-t-0">
                                    <img src="{{ asset('uploads/user-img/'.$order->order->user->image) }}" alt="logo" height="150"/>
                                </h3>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-6">
                                    <address>
                                        <strong>Billed To:</strong><br>
                                        {{-- تفاصيل الشركة --}}
                                        {{ $order->order->user->fname }} {{ $order->order->user->lname }}<br>
                                        {{ $order->order->user->address1 }}<br>
                                        {{ $order->order->user->address2 }}<br>
                                        {{ $order->created_at }}
                                        {{-- تعديل تفاصيل الشركه هنااااااااا --}}
                                    </address>
                                </div>
                                <div class="col-6 text-right">
                                    <address>
                                        <strong>Shipped To:</strong><br>
                                        {{ $order->order->user->fname }} {{ $order->order->user->lname }}<br>
                                        {{ $order->order->user->address1 }}<br>
                                        {{ $order->order->user->address2 }}<br>
                                        {{ $order->created_at }}
                                    </address>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 m-t-30">
                                    <address>
                                        <strong>Payment Method:</strong><br>
                                        Visa ending **** 4242<br>
                                        {{ $order->order->user->email }}
                                    </address>
                                </div>
                                <div class="col-6 m-t-30 text-right">
                                    <address>
                                        <strong>Order Date:</strong><br>
                                        {{ $order->created_at }}<br><br>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="panel panel-default">
                                <div class="p-2">
                                    <h3 class="panel-title font-20"><strong>Order summary</strong></h3>
                                </div>
                                <div class="">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <td><strong>Service Name</strong></td>
                                                <td class="text-center"><strong>Price</strong></td>
                                                <td class="text-center"><strong>From</strong></td>
                                                <td class="text-center"><strong>To</strong></td>
                                                <td class="text-center"><strong>Shipping</strong></td>
                                                <td class="text-center"><strong>Totals</strong></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                            <tr>
                                                <td>{{ $order->order->service->serve_name }}</td>
                                                <td class="text-center">{{ $order->order->price }}</td>
                                                <td class="text-center">{{ $order->order->from->Name }}</td>
                                                <td class="text-center">{{ $order->order->to->Name }}</td>
                                                <td class="text-center">{{ $order->tax }}</td>
                                                <td class="text-center">{{ $order->total }}</td>
                                            </tr>

                                            <tr>
                                                <td class="thick-line"></td>
                                                <td class="thick-line"></td>
                                                <td class="thick-line"></td>
                                                <td class="thick-line"></td>
                                                <td class="thick-line text-center">
                                                    <strong>Subtotal</strong></td>
                                                <td class="thick-line text-right">{{ $order->order->price }}LE</td>
                                            </tr>
                                            <tr>
                                                <td class="no-line"></td>
                                                <td class="no-line"></td>
                                                <td class="no-line"></td>
                                                <td class="no-line"></td>
                                                <td class="no-line text-center">
                                                    <strong>Shipping</strong></td>
                                                <td class="no-line text-right">{{ $order->tax }}LE</td>
                                            </tr>
                                            <tr>
                                                <td class="no-line"></td>
                                                <td class="no-line"></td>
                                                <td class="no-line"></td>
                                                <td class="no-line"></td>
                                                <td class="no-line text-center">
                                                    <strong>Total</strong></td>
                                                <td class="no-line text-right"><h4 class="m-0">{{ $order->total }}LE</h4></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="d-print-none mo-mt-2">
                                        <div class="float-right">
                                            <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light"><i class="fa fa-print"></i></a>
                                            <a href="#" class="btn btn-primary waves-effect waves-light">Send</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> <!-- end row -->

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
@section('js')

@endsection
