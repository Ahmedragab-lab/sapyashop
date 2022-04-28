@extends('site.layouts.master')
@section('title')
   mycart
@endsection
@section('css')
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="{{ asset('ecommerce') }}/css/animate.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('ecommerce') }}/css/font-awesome.min.css">
	{{-- <link rel="stylesheet" type="text/css" href="{{ asset('ecommerce') }}/css/bootstrap.min.css"> --}}
	<link rel="stylesheet" type="text/css" href="{{ asset('ecommerce') }}/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('ecommerce') }}/css/chosen.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('ecommerce') }}/css/style.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('ecommerce') }}/css/color-01.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
<!--main area-->
<br><br><br><br>
<main id="main" class="main-site">
    <div class="container">
        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{ route('front.index') }}" class="link">home</a></li>
                <li class="item-link"> <a href="{{ route('allproducts.index')}}" class="link">All Product</a></li>
            </ul>
        </div>
        <div class=" main-content-area">
            @if($cartitems->count() > 0)
                <div class="wrap-iten-in-cart">
                    <h3 class="box-title">Products Name</h3>
                    <ul class="products-cart">
                    {{-- ajax for  ==========================================  count total & ajax increment decrement counter ==--}}
                        @php $total = 0; $tax = 14/100; @endphp
                        @foreach ( $cartitems as $item)
                            <li class="pr-cart-item product_data">
                                <input type="hidden" value="{{ $item->product_id }}" name="prod_id" class="prod_id_delete prod_id">
                                <input type="hidden" value="{{ $item->product->selling_price }}" name="prod_price" class="prod_price">
                                <div class="product-image">
                                    <figure><img src="{{ asset('uploads/product/'.$item->product->image) }}" alt=""></figure>
                                </div>
                                <div class="product-name">
                                    <a class="link-to-product " href="#">{{ $item->product->product_name }}</a>
                                </div>
                                <div class="price-field "><p class="price product-price "  >{{ $item->product->selling_price }} LE</p></div>
                                <div class="quantity">
                                    <div class="quantity-input">
                                        <input type="number" onkeydown="return false"  min="1" max={{ $item->product->qty }} name="prod_qty" value="{{ $item->product_qty }}"  class="qty-input">
                                        {{-- <a class="btn btn-increase changeqty increment" href="#"></a>
                                        <a class="btn btn-reduce changeqty decrement"   href="#"></a> --}}
                                    </div>
                                </div>
                                <div class="price-field sub-total"><p class="price subprice">{{ $item->product->selling_price * $item->product_qty }} LE</p></div>
                                {{-- ajax for  ==========================================  count total & ajax increment decrement counter ==--}}
                                {{-- ajax for delete ========================================== ajax============================================================--}}
                                <div class="delete">
                                    <button href="#" class="btn btn-danger delete-item" title="delete" >
                                        <i class="fa fa-trash" ></i> Remove
                                    </button>
                                </div>
                            </li>
                        @php $total += $item->product->selling_price * $item->product_qty ; @endphp
                        @endforeach
                    {{-- ajax for delete ==========================================ajax ============================================================--}}
                    </ul>
                </div>
                <div class="summary">
                    <div class="order-summary">
                        <h4 class="title-box">Order Summary</h4>
                    <p class="summary-info" name="cart_tax"><span class="title">Subtotal Shipping 14%</span><b class="index  cart_tax" id="cart_tax">
                    {{ $total * $tax}} LE
                    </b></p>
                        <!-- <p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p>  -->
                        <p class="summary-info total-info "><span class="title">Total</span><b class="index total-price cart_total">{{ $total + ( $total * $tax) }} LE</b></p>
                    </div>
                <div class="checkout-info">
                        <label class="checkbox-field">
                            {{-- <input class="frm-input " name="have-code" id="have-code" value="" type="checkbox"><span>I have promo code</span> --}}
                        </label>
                        <a class="btn btn-update float end checkoutbtn" href='#' id="checkoutbtn">Update Shopping Cart</a>
                        <a class="btn btn-primary float end " href='{{ route('checkout.index') }}' id="checkoutbtn">Go to order now</a>
            @else
                        <h2>Your Cart is empty</h2>
                        <a class="btn btn-warning link-to-shop float end" href="{{ route('allproducts.index')}}">Continue Shopping<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                    </div>
                    {{-- <div class="update-clear">
                        <a class="btn btn-clear" href="#">Clear Shopping Cart</a>
                        <a class="btn btn-update" href="#">Update Shopping Cart</a>
                    </div> --}}
                </div>
            @endif
            <div class="wrap-show-advance-info-box style-1 box-in-site shadow">
                <h3 class="title-box">Most Viewed Products</h3>
                <div class="wrap-products">
                    <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >
                       @foreach ( $products as $product)
                           <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{ asset('uploads/product/' . $product->image) }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item new-label">{{ $product->trending?'New':'' }}</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="{{ route('front.show',$product->id) }}" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>{{ $product->product_name }}</span></a>
                                <div class="wrap-price"><span class="product-price"><s>{{ $product->original_price }} LE </s></span></div>
                                <div class="wrap-price"><span class="product-price">{{ $product->selling_price }} LE </span></div>
                            </div>
                           </div>
                        @endforeach
                    </div>
                </div><!--End wrap-products-->
            </div>

        </div><!--end main content area-->
    </div><!--end container-->

</main>
<!--main area-->

@endsection
@section('js')
    {{-- <script src="{{ asset('ecommerce') }}/js/jquery-1.12.4.minb8ff.js?ver=1.12.4"></script> --}}
	{{-- <script src="{{ asset('ecommerce') }}/js/bootstrap.min.js"></script> --}}
	{{-- <script src="{{ asset('ecommerce') }}/js/chosen.jquery.min.js"></script> --}}
	<script src="{{ asset('ecommerce') }}/js/owl.carousel.min.js"></script>
	{{-- <script src="{{ asset('ecommerce') }}/js/jquery.sticky.js"></script> --}}
	<script src="{{ asset('ecommerce') }}/js/functions.js"></script>


    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function(){

            // $('.increment').click(function(e){
            //     e.preventDefault();
            //     // var inc = $('.qty-input').val();
            //     var inc = $(this).closest('.product_data').find('.qty-input').val();
            //     var value = parseInt(inc,10);
            //     value = isNaN(value) ? 0 : value;
            //     if(value < 10){
            //         value++ ;
            //         // $('.qty-input').val(value);
            //         var inc = $(this).closest('.product_data').find('.qty-input').val(value);
            //     }
            // });
            // $('.decrement').click(function(e){
            //     e.preventDefault();
            //     var dec = $(this).closest('.product_data').find('.qty-input').val();
            //     var value = parseInt(dec,10);
            //     value = isNaN(value) ? 0 : value;
            //     if(value > 1){
            //         value-- ;
            //         var inc = $(this).closest('.product_data').find('.qty-input').val(value);
            //     }
            // });
            $('.delete-item').click(function(e){
                e.preventDefault();
                var prod_id  = $('input[name="prod_id"]').val();
                console.log(prod_id);
                $.ajax({
                    method:"POST",
                    url: "/delete_item",
                    data: {
                        'prod_id': prod_id,
                    },
                    success: function(response) {
                        window.location.reload();
                    swal("",response.status,"success");
                    }
                });
            });
            $('#checkoutbtn').click(function(e){
                e.preventDefault();
                var prod_id  = $('input[name="prod_id"]').val();
                var prod_qty  = $('input[name="prod_qty"]').val();
                var prod_price  = $('input[name="prod_price"]').val();
                // var prod_id  =  $(this).closest('.product_data').find('.prod_id').val();
                // var prod_qty  =  $(this).closest('.product_data').find('.qty-input').val();
                // var prod_price =  $(this).closest('.product_data').find('.prod_price').val();
                // var cart_tax  =  prod_qty * prod_price;
                // var cart_total  =  $('input[name="cart_total"]').val();
                // var prod_qty = $('input[name="prod_qty"]').val();
                console.log(prod_id);
                console.log(prod_qty);
                console.log(prod_price);
                // console.log(cart_tax);
                // console.log(cart_total);
                $.ajax({
                    method:"POST",
                    url: "/update_qty",
                    data: {
                        'prod_id': prod_id,
                        'prod_qty': prod_qty,
                        'prod_price': prod_price,
                        // 'cart_tax': cart_tax,
                        // 'cart_total': cart_total,
                    },
                    // success: function(response) {
                    //     window.location.reload();
                    // }
                    success: function(response) {
                    swal(response.status);
                    window.location.reload();
                    },
                    error: function(response) {
                    swal(response.status);
                    }
                    });
            });
        });
  </script>
  {{-- <script>
        $(document).ready(function(){
            $('.qty-input').click(function(e){
                e.preventDefault();
                var price = $(this).closest('.product_data').find('.product-price').val();
                console.log(price);
                calc_total();
            });
        });
       function calc_total(){
            var price = 0;
            $('.product-price').each(function(){
            price += parseInt($(this).html());
            });
            $('.total-price').html(price);
            // console.log(price);
         }
  </script> --}}

@endsection

