@extends('site.layouts.master')
@section('title') {{ $product->product_name }} @endsection
@section('css')
   <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
<div id="content-main-wrap" class="is-clearfix">
    <div id="content-area" class="site-content-area">
      <div id="content-area-inner" class="site-content-area-inner">
        <section class="section works-list portfolio-single product-single is-clearfix">
          <div class="container">
            <br>
            <div class="columns is-multiline is-variable is-6 product_data">
              <div class="column is-6">
                <div class="flexslider thumbnails">
                  <ul class="slides">
                    <li data-thumb="{{ asset('uploads/product/' . $product->image) }}">
                      <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('uploads/product/' . $product->image) }}" style="min-width: 770px;"> </li>
                    <li data-thumb="{{ asset('uploads/product/' . $product->image) }}">
                      <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('uploads/product/' . $product->image) }}" style="min-width: 770px;"> </li>
                    <li data-thumb="{{ asset('uploads/product/' . $product->image) }}">
                      <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('uploads/product/' . $product->image) }}" style="min-width: 770px;"> </li>
                    <li data-thumb="{{ asset('uploads/product/' . $product->image) }}">
                      <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('uploads/product/' . $product->image) }}" style="min-width: 770px;"> </li>
                  </ul>
                </div>
              </div>
              <div class="column is-6">
                <h1 class="heading-title style-1 has-text-left">{{ $product->product_name }}</h1>
                <div class="shop-rating">
                  <span class="icon">
                    <i class="ion-md-star"></i>
                  </span>
                  <span class="icon">
                    <i class="ion-md-star"></i>
                  </span>
                  <span class="icon">
                    <i class="ion-md-star"></i>
                  </span>
                  <span class="icon">
                    <i class="ion-md-star"></i>
                  </span>
                  <span class="icon">
                    <i class="ion-md-star"></i>
                  </span>
                  <span>
                    <a href="#" class="has-text-tertiary">(2 customer review)</a>
                  </span>
                </div>
                <br>
                <p class="has-text-primary is-size-3">Original price : <s>{{ $product->original_price }} LE</s></p>
                <p class="has-text-primary is-size-1">Selling price : {{ $product->selling_price }} LE</p>
                <br>
                <p class="has-text-primary"> Description :{{ $product->small_desc }}</p>
                <p> {!! $product->desc !!}</p>
                <br>
                <div class="columns is-multiline is-variable is-2">
                    {{-- ==========/////////////////////////////////============================= --}}
                    {{-- ==========////////////////////////ajaxxxxxxxxx/////////============================= --}}
                    @if($product->qty >0)
                    <div class="column is-2">
                        <div class="field">
                            <div class="control quantity-input">
                                <input type="hidden" value="{{ $product->id }}" class="prod_id" name="prod_id">
                                <input class="input has-text-centered qty_input " type="number"  onkeydown="return false" min="1" max="{{ $product->qty }}" value="1" name="prod_qty" >
                            </div>
                        </div>
                    </div>
                    <div class="column is-10">
                        <button  class="button addtocartbtn" ><i class="icon-basket mr-2"></i>&nbsp; add to cart</button>
                    </div>
                    @else
                    <div class="column is-10">
                        <button  class="button addtocartbtn" disabled ><i class="icon-basket mr-2"></i>&nbsp; add to cart</button>
                    </div>
                    @endif
                  {{-- ==========/////////////////////////////////============================= --}}
                  {{-- ==========////////////////////ajaxxxxxxxxxxxxx/////////////============================= --}}
                  <div class="column is-10">
                      @if($product->qty >0)
                        <label class="badge bg-success">In Stock</label>
                      @else
                        <label class="badge bg-danger">Out Of Stock</label>
                      @endif
                  </div>
                </div>
                <br>
                <div class="widget widget-links">
                  <ul>
                    <li>
                      <span class="icon"><i class="icon-folder"></i></span>
                      <a href="#">{{ $product->product_name }}</a>,
                      <a href="#">Design</a>
                    </li>
                    <li>
                      <span class="icon"><i class="icon-tag"></i></span>
                      <a href="#">Typography</a>,
                      <a href="#">Coding</a>
                    </li>
                    <li>
                      <span class="icon"><i class="icon-clock"></i></span> April 5, 2018
                    </li>
                  </ul>
                </div>
                <br>
                <div class="widget widget-social">
                  <ul>
                    <li>
                      <a href="#" target="_blank">
                        <span class="icon">
                          <i class="fab fa-facebook-f"></i>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="#" target="_blank">
                        <span class="icon">
                          <i class="fab fa-twitter"></i>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="#" target="_blank">
                        <span class="icon">
                          <i class="fab fa-pinterest-p"></i>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="#" target="_blank">
                        <span class="icon">
                          <i class="fab fa-google"></i>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="#" target="_blank">
                        <span class="icon">
                          <i class="fab fa-instagram"></i>
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="tabs-list ">
              <div class="tabs is-boxed">
                <ul>
                  <li class="is-active"><a>Description</a></li>
                  <li><a>More Info</a></li>
                  <li><a>REVIEWS (2)</a></li>
                </ul>
              </div>
              <!-- .tabs -->
              <div class="tabs-content">
                <div class="tab-block content">
                  <br>
                  <p>{{ $product->desc }}</p>
                  <ul>{{ $product->desc }}</ul>
                </div>
                <!-- .tab-block -->
                <div class="tab-block">
                  <br>
                  <table class="table is-fullwidth is-bordered">
                    <thead>
                      <tr>
                        <th>Section</th>
                        <th>product name</th>
                        <th>price</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>{{ $product->section->section_name }}</td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->selling_price }}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- .feed back -->
                <div class="tab-block">
                  <br>
                  <ul class="comment-list comments comments-box ">
                    <li class="media comment comment-box">
                      <figure class="media-left avatar">
                        <p class="image">
                          <img alt="Joo - Niche Multi-Purpose HTML Template" src="../assets/images/comments/1.png"> </p>
                      </figure>
                      <!-- .avatar -->
                      <div class="media-content comment-body">
                        <div class="level">
                          <div class="level-left">
                            <span class="comment-author">
                              <a href="#">OLIVIA ALLISON</a>
                            </span>
                            <span class="comment-date">
                              <a href="#">APRIL 5, 2018</a>
                            </span>
                          </div>
                          <div class="level-right">
                            <div class="shop-rating">
                              <span class="icon">
                                <i class="ion-md-star"></i>
                              </span>
                              <span class="icon">
                                <i class="ion-md-star"></i>
                              </span>
                              <span class="icon">
                                <i class="ion-md-star"></i>
                              </span>
                              <span class="icon">
                                <i class="ion-md-star"></i>
                              </span>
                              <span class="icon">
                                <i class="ion-md-star"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="content">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis porta eros lacus, nec ultricies elit bland non. Suspendisse pellentesque mauris sit amet dolor blandit rutrum. Nunc in tempus turpis. Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Duis porta eros lacus, nec ultricies elit bland non.</p>
                        </div>
                        <!-- .children -->
                      </div>
                      <!-- .comment-body -->
                    </li>
                    <!-- .comment-box -->
                    <li class="media comment comment-box">
                      <figure class="media-left avatar">
                        <p class="image">
                          <img alt="Joo - Niche Multi-Purpose HTML Template" src="../assets/images/comments/2.png"> </p>
                      </figure>
                      <!-- .avatar -->
                      <div class="media-content comment-body">
                        <div class="level">
                          <div class="level-left">
                            <span class="comment-author">
                              <a href="#">OLIVIA ALLISON</a>
                            </span>
                            <span class="comment-date">
                              <a href="#">APRIL 5, 2018</a>
                            </span>
                          </div>
                          <div class="level-right">
                            <div class="shop-rating">
                              <span class="icon">
                                <i class="ion-md-star"></i>
                              </span>
                              <span class="icon">
                                <i class="ion-md-star"></i>
                              </span>
                              <span class="icon">
                                <i class="ion-md-star"></i>
                              </span>
                              <span class="icon">
                                <i class="ion-md-star"></i>
                              </span>
                              <span class="icon">
                                <i class="ion-md-star"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="content">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis porta eros lacus, nec ultricies elit bland non. Suspendisse pellentesque mauris sit amet dolor blandit rutrum. Nunc in tempus turpis. Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Duis porta eros lacus, nec ultricies elit bland non.</p>
                        </div>
                      </div>
                      <!-- .comment-body -->
                    </li>
                    <!-- .comment-box -->
                  </ul>
                  <h1 class="heading-title style-2">Leave a review</h1>
                  <div class="barrating stars-css">
                    <select id="barrating-css" name="rating" autocomplete="off">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                  </div>
                  <br>
                  <p class="comment-notes">
                    <span id="email-notes">Your email address will not be published.</span> Required fields are marked
                    <span class="required">*</span>
                  </p>
                  <form action="#">
                    <div class="field ">
                      <div class="control is-expanded">
                        <textarea class="textarea" name="textarea" placeholder="Your Review"></textarea>
                      </div>
                    </div>
                    <!-- .field -->
                    <div class="field is-horizontal">
                      <div class="field-body">
                        <div class="field">
                          <div class="control is-expanded">
                            <input class="input" type="text" name="name" placeholder="Your Name *"> </div>
                        </div>
                        <!-- .field -->
                        <div class="field">
                          <div class="control is-expanded">
                            <input class="input" type="email" name="email" placeholder="Your Email *"> </div>
                        </div>
                        <!-- .field -->
                      </div>
                      <!-- .field-body -->
                    </div>
                    <!-- .field -->
                    <div class="field ">
                      <div class="control ">
                        <button class="button">post review</button>
                      </div>
                    </div>
                    <!-- .field -->
                  </form>
                </div>
                <!-- .tab-block -->
              </div>
              <!-- .tabs-content -->
            </div>
          </div>
        </section>
        <!-- works section -->
        {{-- <section class="section hero has-background-primary-light is-clearfix">
          <div class="container">
            <h1 class="heading-title style-1">Related Products</h1>
            <br>
            <div class="works works-shop isotope style-1 image-hover effect-10">
              <div class="columns is-variable is-4 is-multiline">
                <div class="column is-4 aos-init aos-animate">
                  <div class="work-item">
                    <figure>
                      <a href="../pages/shop-product.html">
                        <img alt="Joo - Niche Multi-Purpose HTML Template" src="../assets/images/portfolio/4.png"> </a>
                      <figcaption>
                        <ul class="social">
                          <li>
                            <a href="../pages/shop-product.html" target="_blank">
                              <span class="icon">
                                <i class="icon-basket"></i>
                              </span>
                            </a>
                          </li>
                          <li>
                            <a href="../pages/shop-product.html">
                              <span class="icon">
                                <i class="icon-link"></i>
                              </span>
                            </a>
                          </li>
                        </ul>
                      </figcaption>
                    </figure>
                    <div class="work-item-meta">
                      <h3>
                        <a href="../pages/shop-product.html">Pocket square</a>
                      </h3>
                      <h5>
                        <a href="../pages/shop-product.html">$11.40</a>
                      </h5>
                      <div class="shop-rating">
                        <span class="icon">
                          <i class="ion-md-star"></i>
                        </span>
                        <span class="icon">
                          <i class="ion-md-star"></i>
                        </span>
                        <span class="icon">
                          <i class="ion-md-star"></i>
                        </span>
                        <span class="icon">
                          <i class="ion-md-star"></i>
                        </span>
                        <span class="icon">
                          <i class="ion-md-star-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- .work-item -->
                </div>
                <div class="column is-4 aos-init aos-animate">
                  <div class="work-item">
                    <figure>
                      <a href="../pages/shop-product.html">
                        <img alt="Joo - Niche Multi-Purpose HTML Template" src="../assets/images/portfolio/5.png"> </a>
                      <figcaption>
                        <ul class="social">
                          <li>
                            <a href="../pages/shop-product.html" target="_blank">
                              <span class="icon">
                                <i class="icon-basket"></i>
                              </span>
                            </a>
                          </li>
                          <li>
                            <a href="../pages/shop-product.html">
                              <span class="icon">
                                <i class="icon-link"></i>
                              </span>
                            </a>
                          </li>
                        </ul>
                      </figcaption>
                    </figure>
                    <div class="work-item-meta">
                      <h3>
                        <a href="../pages/shop-product.html">Shoes &amp; Socks</a>
                      </h3>
                      <h5>
                        <a href="../pages/shop-product.html">$40.49</a>
                      </h5>
                      <div class="shop-rating">
                        <span class="icon">
                          <i class="ion-md-star"></i>
                        </span>
                        <span class="icon">
                          <i class="ion-md-star"></i>
                        </span>
                        <span class="icon">
                          <i class="ion-md-star"></i>
                        </span>
                        <span class="icon">
                          <i class="ion-md-star"></i>
                        </span>
                        <span class="icon">
                          <i class="ion-md-star"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- .work-item -->
                </div>
                <div class="column is-4 aos-init aos-animate">
                  <div class="work-item">
                    <figure>
                      <a href="../pages/shop-product.html">
                        <img alt="Joo - Niche Multi-Purpose HTML Template" src="../assets/images/portfolio/6.png"> </a>
                      <figcaption>
                        <ul class="social">
                          <li>
                            <a href="../pages/shop-product.html" target="_blank">
                              <span class="icon">
                                <i class="icon-basket"></i>
                              </span>
                            </a>
                          </li>
                          <li>
                            <a href="../pages/shop-product.html">
                              <span class="icon">
                                <i class="icon-link"></i>
                              </span>
                            </a>
                          </li>
                        </ul>
                      </figcaption>
                    </figure>
                    <div class="work-item-meta">
                      <h3>
                        <a href="../pages/shop-product.html">Cuff links</a>
                      </h3>
                      <h5>
                        <a href="../pages/shop-product.html">$88.99</a>
                      </h5>
                      <div class="shop-rating">
                        <span class="icon">
                          <i class="ion-md-star"></i>
                        </span>
                        <span class="icon">
                          <i class="ion-md-star"></i>
                        </span>
                        <span class="icon">
                          <i class="ion-md-star"></i>
                        </span>
                        <span class="icon">
                          <i class="ion-md-star"></i>
                        </span>
                        <span class="icon">
                          <i class="ion-md-star-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- .work-item -->
                </div>
              </div>
              <!-- .columns -->
            </div>
            <!-- .works -->
          </div>
        </section> --}}
        {{-- <section class="section  is-clearfix">
          <div class="container">
            <nav class="level counterup ">
              <div class="level-item has-text-centered">
                <div>
                  <p class="title counter">70</p>
                  <p class="heading">awards won</p>
                </div>
              </div>
              <div class="level-item has-text-centered">
                <div>
                  <p class="title counter">48</p>
                  <p class="heading">satisfied clients</p>
                </div>
              </div>
              <div class="level-item has-text-centered">
                <div>
                  <p class="title counter">56</p>
                  <p class="heading">startup growth</p>
                </div>
              </div>
              <div class="level-item has-text-centered">
                <div>
                  <p class="title counter">28</p>
                  <p class="heading">average prices</p>
                </div>
              </div>
            </nav>
            <!-- .counterup -->
          </div>
        </section> --}}
      </div>
      <!-- #content-area-inner -->
    </div>
    <!-- #content-area -->
  </div>
@endsection
@section('js')

<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    $(document).ready(function(){
        $('.addtocartbtn').click(function(e){
            e.preventDefault();
            var prod_id  = $('input[name="prod_id"]').val();
            var prod_qty = $('input[name="prod_qty"]').val();
            console.log(prod_id);
            console.log(prod_qty);
            $.ajax({
                method:"POST",
                url: "/addtocart",
                data: {
                    'prod_id': prod_id,
                    'prod_qty': prod_qty,
                },
                success: function(response) {
                swal(response.status);
                },
                error: function(response) {
                swal(response.status);
                }
            });
        });
    });
</script>
@endsection
