@extends('site.layouts.master')


@section('content')
<div id="content-main-wrap" class="is-clearfix">
    <div id="content-area" class="site-content-area">
      <div id="content-area-inner" class="site-content-area-inner">
        <!-- works section -->
        <section class="section hero has-background-primary-light  works-list is-clearfix">
          <div class="container">
            <br>
            <div class="works works-shop isotope style-1 image-hover effect-10">
                <p class="heading-title-top has-text-centered">welcome logistics</p>
                <h1 class="heading-title style-3"> Our Trending
                  <span class="has-text-primary">Products</span>
                </h1>
              <div class="columns is-variable is-4 is-multiline">
               @foreach ( $sectionitems->products as $product )
                    <div class="column is-4" data-aos="fade">
                        <div class="work-item">
                        <figure>
                            <a href="">
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('uploads/product/'. $product->image) }}"> </a>
                            <figcaption>
                            <ul class="social">
                                <li>
                                <a href="{{ route('front.show',$product->id) }}">
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
                            <a href="">{{ $product->product_name }}</a>
                            </h3>
                            <h5>
                            <a href="#">{{ $product->selling_price }} LE</a>
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
               @endforeach

              </div>
              <!-- .columns -->
            </div>
            <!-- .works -->
            <nav class="pagination is-centered">
              <a href="#" class="pagination-previous">Prev</a>
              <a href="#" class="pagination-next">Next</a>
              <ul class="pagination-list">
                <li>
                  <a href="#" class="pagination-link ">1</a>
                </li>
                <li>
                  <a href="#" class="pagination-link is-current">2</a>
                </li>
                <li>
                  <a href="#" class="pagination-link ">3</a>
                </li>
                <li>
                  <a href="#" class="pagination-ellipsis ">...</a>
                </li>
                <li>
                  <a href="#" class="pagination-link ">11</a>
                </li>
                <li>
                  <a href="#" class="pagination-link ">12</a>
                </li>
              </ul>
            </nav>
            <!-- .pagination -->
            <br> </div>
        </section>
    </div>
    <!-- #content-area-inner -->
  </div>
  <!-- #content-area -->
</div>
@endsection
