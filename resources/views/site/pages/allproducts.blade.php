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
               @foreach (  \App\Models\Product::where('status','1')->orderBy('id','DESC')->get() as $product )
                    <div class="column is-3" data-aos="fade">
                        <div class="work-item">
                        <figure>
                            <a href="#">
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('uploads/product/'. $product->image) }}"> </a>
                            <figcaption>
                            <ul class="social">
                                {{-- <li>
                                <a href="../pages/shop-product.html" target="_blank">
                                    <span class="icon">
                                    <i class="icon-basket"></i>
                                    </span>
                                </a>
                                </li> --}}
                                <li>
                                <a href="{{route('front.show',$product->id)}}">
                                    <span class="icon">
                                    <i class="icon-link"></i>
                                    </span>
                                </a>
                                </li>
                            </ul>
                            </figcaption>
                        </figure>
                        <div class="work-item-meta">
                            <h3><a href="#">{{ $product->product_name }}</a></h3>
                            <h4><a href="#"><s>{{ $product->original_price }} LE</s></a></h4>
                            <h4><a href="#">{{ $product->selling_price }} LE</a></h4>
                            <h5><a href="#">{{ $product->trending==1?'Trending':'' }} </a></h5>
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

<section id="welcome" class="section welcome-section has-background-primary-light is-clearfix">
    <div class="container">
        <p class="heading-title-top has-text-centered">welcome logistics</p>
        <h1 class="heading-title style-3"> Our Popular
        <span class="has-text-primary">Sections</span>
        </h1>
        <br>
        <br>
        <div class="blog-list style-2 columns is-variable is-4 is-multiline">
        <div class="owl-carousel owl-theme">
            @foreach ( \App\Models\Section::where('status','1')->where('popular','1')->orderBy('id','DESC')->get() as $section)
                <div class=" item" >
                    <article class="blog-post">
                    <figure class="post-image">
                        <a href="{{ route('allsections.show',$section->id) }}">
                        <img alt="no photo" src="{{ asset('uploads/section/'. $section->image) }}"> </a>
                    </figure>
                    <div class="entry-header">
                        <h2 class="entry-title"><a href="#">{{ $section->section_name}}</a></h2>
                        <h5><a href="#">{{ $section->popular==1?'Popular':'' }} </a></h5>
                    </div>
                    <!-- .entry-header -->
                    <div class="entry-content">
                        <p>{{ Str::limit($section->desc,25) }}</p>


                    </div>
                    <!-- .entry-content -->
                    <div class="entry-footer">
                        <a href="{{ route('allsections.show',$section->id) }}" class="button">Go to Section products</a>
                    </div>
                    </article>
                    <!-- .blog-post -->
                </div>
            @endforeach
        </div>
        </div>
        <br> </div>
    </section>
        <!-- . -->
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
