@extends('site.layouts.master')
@section('title') {{ __('site.services') }} @endsection

@section('content')
    {{-- <section id="tracking-steps" class="section tracking-steps-section is-clearfix">
        <div class="container">
        <p class="heading-title-top has-text-centered">tracking</p>
        <h1 class="heading-title style-3">how we work</h1>
        <br>
        <br>
        <div class="steps" data-aos="fade-right">
            <div class="step-item" data-step-id="0">
            <div class="step-marker"> 1 </div>
            <div class="step-details">
                <p class="step-title">lorem ipsum dolor</p>
                <p>Lorem ipsum dolor sit amet nulla varius lectus.</p>
            </div>
            </div>
            <div class="step-item active" data-step-id="1">
            <div class="step-marker">2</div>
            <div class="step-details">
                <p class="step-title">lorem ipsum dolor</p>
                <p>Lorem ipsum dolor sit amet nulla varius lectus.</p>
            </div>
            </div>
            <div class="step-item" data-step-id="2">
            <div class="step-marker">3</div>
            <div class="step-details">
                <p class="step-title">lorem ipsum dolor</p>
                <p>Lorem ipsum dolor sit amet nulla varius lectus.</p>
            </div>
            </div>
            <div class="step-item" data-step-id="3">
            <div class="step-marker"> 4 </div>
            <div class="step-details">
                <p class="step-title">lorem ipsum dolor</p>
                <p>Lorem ipsum dolor sit amet nulla varius lectus.</p>
            </div>
            </div>
        </div>
        </div>
    </section> --}}

<div id="content-main-wrap" class="is-clearfix">
    <div id="content-area" class="site-content-area">
      <div id="content-area-inner" class="site-content-area-inner">
        <!-- works section -->
        <section class="section hero has-background-primary-light  works-list is-clearfix">
          <div class="container">
            <br>
            <div class="works works-shop isotope style-1 image-hover effect-10">
                <p class="heading-title-top has-text-centered">welcome to mora soft</p>
                <h1 class="heading-title style-3"> Our
                  <span class="has-text-primary">services</span>
                </h1>
                <div class="columns is-variable is-4 is-multiline boxes-style-2">
                    @foreach ($services as $service)
                        <div class="column is-4" >
                            <div class="box-item">

                                <li>
                                    <a href="{{ route('allservices.show',$service->id) }}">
                                 <span class="icon">
                                    <i class="icon-link"></i>
                                    </span>
                                    </a>
                                </li>
                                <div class="work-item-meta">

                                <figure>
                                    <a href="#">
                                        <img alt="no photo" src="{{ asset('uploads/serv/'. $service->image) }}">
                                    </a>

                                </figure>

                                </div>
                                <br>

                                <div class="work-item-meta">
                                    <h3>{{ $service->serve_name }}</h3>

                                    <p><a href="#">{{ $service->desc}}</a></p>

                                    <h3>   {{ $service->status ==1 ?  __('site.Avilable'): __('site.Unavilable') }}</h3>
                                    <h5>
                                        {{-- <a href="#">{{ $service->selling_price }} LE</a> --}}
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
            <!-- .works -->
            <nav class="pagination is-centered">
              <a href="#" class="pagination-previous">Prev</a>
              <a href="#" class="pagination-next">Next</a>
              <ul class="pagination-list">
                <li>
                  <a href="#" class="pagination-link is-current">1</a>
                </li>
                <li>
                  <a href="#" class="pagination-link ">2</a>
                </li>
                <li>
                  <a href="#" class="pagination-link ">3</a>
                </li>
                <li>
                  <a href="#" class="pagination-ellipsis ">...</a>
                </li>
                <li>
                  <a href="#" class="pagination-link ">10</a>
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
