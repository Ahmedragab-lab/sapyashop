@extends('site.layouts.master')
@section('title') order details @endsection
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
<br><br><br>
<div id="content-main-wrap" class="is-clearfix">
    <div id="content-area" class="site-content-area">
      <div id="content-area-inner" class="site-content-area-inner">
        <section class="section  is-clearfix hero has-background-primary-light">
            <div class="container">
                <form accept-charset="UTF-8" class="ajax-contact-form" action="#"
                      method="POST" autocomplete="off">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="columns is-variable is-multiline is-centered">
                                <div class="column is-10">
                                    <h1 class="heading-title style-1">Service Order Details</h1>
                                    <br>
                                    @php
                                      $total_price = 0;
                                      $total = 0;
                                    @endphp
                                    <table class="table is-fullwidth is-hoverable shadow">
                                        <thead>
                                        <tr>
                                            <th>order_no</th>
                                            <th>Name</th>
                                            <th>service name</th>
                                            <th>from</th>
                                            <th>to</th>
                                            <th>price</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tbody class="shadow">
                                            <tr class="shadow">
                                                <td >{{ $order_details->order_no }}</td>
                                                <td>{{ $order_details->name }}</td>
                                                <td>{{ $order_details->service->serve_name }}</td>
                                                <td>{{ $order_details->from->Name}}</td>
                                                <td>{{ $order_details->to->Name}}</td>
                                                <td>{{ number_format($order_details->price) }} LE</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table is-fullwidth is-hoverable shadow">
                                        <thead>
                                        <tr>
                                            <th>total price</th>
                                            <th>total tax 14%</th>
                                            <th>total </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $total_tax= $order_details->price * 14/100;
                                            @endphp
                                            <tr>
                                               <td>{{ number_format($order_details->price) }} LE</td>
                                               <td>{{ $total_tax }} LE</td>
                                               <td>{{ number_format($order_details->price+$total_tax) }} LE</td>
                                            </tr>
                                            <input type="hidden" value="{{ $order_details->id }} " name="orderid">
                                            <input type="hidden" value="{{ $total_tax }} " name="tax">
                                            <input type="hidden" value="{{ $order_details->price+$total_tax }}" name="total">
                                        </tbody>
                                    </table>

                                    {{-- <button type="submit" class="btn btn-warning float-end save-data">Order Now</button> --}}

                                    <div class="has-text-centered">
                                        <button type="submit" class="btn button contact rounded-pill shadow  save-data ">Order Now</button>

                                    </div>
                                    {{-- <a href="#" class="btn btn-info float-end " style="display:none;"> --}}
                                    <a href="{{ route('step',$order_details->id) }}" class="btn btn-info float-end step" style="display:none;">
                                         متابعه عمليه الشحن
                                    </a>
                                    <br>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
               </form>
            </div>
        </section>
      </div>
    </div>
</div>

 {{-- start client feedback --}}
 <section id="testimonials" class="section testimonials-section has-background-primary-light is-clearfix">
    <div class="container">
        <p class="heading-title-top has-text-centered">آراء العملاء</p>
        <h1 class="heading-title style-3">قالوا عنا</h1>
        <div class="testimonials  owl-carousel dots carousel-items-3 columns-style-1 ">
            @foreach (\App\Models\Feedback::orderBy('id','DESC')->limit(3)->get() as $feedback)
                <div class="testimonials-item">
                    <p>{{ $feedback->feedback }}</p>
                    <img alt="no photo" src="{{ asset('uploads/user-img/' . $feedback->users->image) }}">
                    <h3>{{ $feedback->users->name }}
                        <br>
                        <span>{{ $feedback->services->serve_name }} Services</span>
                    </h3>
                </div>
            @endforeach
        </div>
    </div>
</section>
{{-- end client feedback --}}
@endsection
@section('js')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(session('status'))
    <script>
          swal("{{ session('status') }}");
    </script>
@endif
{{-- <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script> --}}


<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function(){
        $(".save-data").click(function(e){
            e.preventDefault();
            let orderid = $("input[name=orderid]").val();
            let tax = $("input[name=tax]").val();
            let total = $("input[name=total]").val();
            console.log(orderid);
            console.log(tax);
            console.log(total);
            $.ajax({
                method:"POST",
                url: "/order_details",
                data:{
                    orderid:orderid,
                    tax:tax,
                    total:total,
                },
                success: function(response)
                {
                    if(response) {
                        swal(response.status);
                    }
                    $('.save-data').removeClass('btn-warning ').addClass('btn-success disabled').html('done thank you for your choice');
                    $('.step').show();
                }
            });
        });
    });
</script>

@endsection
